<?php
/**
 * Created by PhpStorm.
 * User: king
 * Date: 2017/7/4
 * Time: 23:08
 */

namespace app\admin\model;
use think\Db;
use think\Model;

class Users extends Model{
    // 设置当前模型对应的完整数据表名称
    protected $table = 'my_admin_users';
    // 开启自动写入时间戳字段
    protected $autoWriteTimestamp = true;
    protected $createTime = 'register_time';

    /**
     * 钩子
     */
    protected static function init(){
        self::event('before_update', function ($user) {
            if(empty($user->data['password']) && empty($user->data['avatar'])){
                unset($user->data['password']);
                unset($user->data['avatar']);

                return true;
            }
            if(empty($user->data['password'])){
                unset($user->data['password']);
                return true;
            }
            if(empty($user->data['avatar'])){
                unset($user->data['avatar']);
                return true;
            }
        });
    }
    /**
     * 添加更新管理员,默认添加
     * @param $data array 数据
     * @param $type sting add代表添加 edit代表更新
     */
    function saveUsers($data,$type='add'){
        if(empty($data) || is_array($data) == false) return false;
        $user = new Users();
        // 获取表单上传文件
//        $file = request()->file('avatar');
//        $fileName = '';
//        if(!empty($file)){
//            //更新之前将旧的头像删除
//            if($type == 'edit'){
//                $avatar = $this->where(['id'=>$data['id']])->value('avatar');
//                $path = ROOT_PATH.ADMIN_THUMB_IMG.$data['id'];  //缩略图路径
//                if(is_file(ADMIN_UPLOADS.'/'.$avatar)){    //原图
//                    unlink(ADMIN_UPLOADS.'/'.$avatar);
//                    delFile($path,true);
//                }
//            }
//            // /public/uploads/admin目录下
//            $info = $file->validate(['size'=>2*1024*1024,'ext'=>'jpg,png,gif'])->move(ADMIN_UPLOADS);
//            if($info){
//                $fileName = $info->getSaveName();
//            }else{
//                // 上传失败获取错误信息
//                return $file->getError();
//            }
//        }
        if($type == 'edit'){
            //更新之前将旧的头像删除
            if(!empty($data['avatar'])){
                $avatar = $this->where(['id'=>$data['id']])->value('avatar');
                if($data['avatar'] !== $avatar){
                    $dirfile = ROOT_PATH."public/".$avatar; //原图
                    $thumbfile = ROOT_PATH."public/uploads/admin/user/thumb/".$data['id'];  //小兔
                    if(is_file($dirfile)){
                        unlink($dirfile);
                        delFile($thumbfile,true);
                        //删除之后将新的图片上传
                        $resimg = img($data['avatar'],'admin/user');
                    }
                }else{
                    $resimg = $data['avatar'];
                }
            }
        }else{
            //处理图片
            $resimg = img($data['avatar'],'admin/user');
        }
        $userdata=[
            'username'=>$data['username'],
            'phone'=>$data['phone'],
            'password'=>empty($data['password'])? '' : encrypt($data['password']),
            'email'=>$data['email'],
            'avatar' => empty($resimg)? '':$resimg,
            'department' => $data['department'],
        ];
        $type == 'edit' ?  $result= $user->allowField(true)->save($userdata,['id' => $data['id']]): $result= $user->allowField(true)->save($userdata);
        if($result == 1){
            //添加或更新成功后添加到角色组里面去
            if($type == 'add'){
                Db::name('AuthGroupAccess')->insert(['uid'=>$user->id,'group_id'=>$data['rule_id']]);
            }elseif($type == 'edit'){
            	  $group =  Db::name('AuthGroupAccess')->where(['uid'=>$data['id']])->find();
                if(empty($group)){
                    Db::name('AuthGroupAccess')->insert(['uid'=>$data['id'],'group_id'=>$data['rule_id']]);
                }else if($group['group_id'] != $data['rule_id']){
                    Db::name('AuthGroupAccess')->where(['uid'=>$data['id']])->update(['group_id'=>$data['rule_id']]);
                }
                //empty($group) ?   Db::name('AuthGroupAccess')->insert(['uid'=>$data['id'],'group_id'=>$data['rule_id']]) : $res = Db::name('AuthGroupAccess')->update(['group_id'=>$data['rule_id'],'uid'=>$data['id']]);
            }
            return true;
        }else{
            return '管理员添加失败';
        }
    }

    /**
     * 管理员登陆
     */
    public function login($data){
        if(empty($data) || is_array($data) == false) return false;
        $userInfo = Db::name('admin_users')->where(['username'=>$data['username']])->find();
        $password = encrypt($data['password']);
        if(!empty($userInfo)){
            if($password === $userInfo['password']){
                session('user',$userInfo);
                $logModel = new AdminLog();
                $logModel->log("Admin_users", "登录", "",4);
                //检查是否记住了登陆信息设置cookie
                $remember = empty($data['remember']) ? 0 : $data['remember'];
                if($remember == 1){
                    $time = time()+24*60*60*7;
                    setcookie('id', $userInfo['id'], $time,'/');
                }
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }

    }

    /**
     * 管理员列表
     */
    public function user_list($page,$array){
        $data=Db::name('auth_group_access')
            ->alias('aga')
            ->field('u.phone,u.email,u.avatar,u.id,u.username,u.email,aga.group_id,ag.title,u.department,u.register_time')
            ->join('admin_users u' , 'aga.uid=u.id','RIGHT')
            ->join('auth_group ag' , 'aga.group_id=ag.id','LEFT')
            ->order('u.id asc')
            ->paginate($page);
        $page = $data->render();
        $first=$data[0];
        $first['title']=array();
        $user_data[$first['id']]=$first;
        // 组合数组
        foreach ($data as $k => $v) {
            foreach ($user_data as $m => $n) {
                $uids=array_map(function($a){return $a['id'];}, $user_data);
                if (!in_array($v['id'], $uids)) {
                    $v['title']=array();
                    $user_data[$v['id']]=$v;
                }
            }
        }
        // 组合管理员title数组
        foreach ($user_data as $k => $v) {
            foreach ($data as $m => $n) {
                if ($n['id']==$k) {
                    $user_data[$k]['title'][]=$n['title'];
                }
            }
            $user_data[$k]['title']=implode('、', $user_data[$k]['title']);
            $user_data[$k]['depart']= $array[$v['department']];
        }
        return ['list'=>$user_data,'page'=>$page];
    }


    /**
     * 获取某个管理员信息列表
     * @param $where array  筛选条件
     */
    public function getUserListOne($where=[]){
        return Db::name('admin_users')
            ->alias('u')
            ->field('u.*,aga.group_id,ag.title')
            ->join('auth_group_access aga' , 'aga.uid=u.id','LEFT')
            ->join('auth_group ag' , 'aga.group_id=ag.id','LEFT')
            ->where($where)
            ->find();
    }

    /**
     * 删除管理员
     */
    public function deleleUser($id){
        if(empty($id)) return false;
        $res = $this->where(['id'=>$id])->delete();
        return $res;
    }
}














