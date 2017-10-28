<?php
/**
 * Created by domino.
 * User: king
 * Date: 2017/9/11 0011
 * Time: 21:07
 */

namespace app\admin\controller;

use app\admin\model\Sms;
use think\Controller;
use think\Db;

class Index extends Adminbase {

    protected $_iauth = [   //小写 免权限,模块名/控制器/方法
        'admin/index/send_email',
    ];
    /**
     * 后台首页
     * @author by king
     */
    public function index(){

       return $this->fetch('index');
    }

    /**
     * 退出登陆
     * @author by king
     */
    public function logout(){
        session('user',null);
        cookie('id',null);
        $this->redirect('Admin/Login/index');
    }

    /**
     * 系统设置
     */
    public function system()
    {
        /*配置列表*/
        $group_list = [
            'shop_info' => '网站信息',
            'sms' => '短信设置',
            'smtp' => '邮件设置',
            'water' => '水印设置',
        ];
        //取出数据
        if ($this->request->isPost()) {
            $inc_type = $this->request->post('type');
            if (!empty($inc_type)) {
                $res = kingCache($inc_type);
                exit(json_encode(['status' => 1, 'data' => $res, 'type' => $inc_type]));
            }
        }
        $this->assign('config', kingCache('shop_info'));//默认
        $this->assign('group_list', $group_list);
        $this->assign('media', ['home' => '首页', 'index' => '系统', 'child' => '系统设置']);
        return $this->fetch();
    }

    /*
	 * 新增修改配置
     * @author king
	 */
    public function handle()
    {
        if ($this->request->isPost()) {
            $param = input('post.');
            //log图片处理
            if (!empty($param['data']['log'])) {
                if (kingCache('shop_info')['log'] == $param['data']['log']) {
                    unset($param['data']['log']);
                } else {
                    $img = $this->img($param['data']['log']);
                    $param['data']['log'] = $img;
                }
            }
            //icon图标处理
            if(!empty($param['data']['icon'])){
                if (kingCache('shop_info')['icon'] == $param['data']['icon']) {
                    unset($param['data']['icon']);
                } else {
                    $img = $this->img($param['data']['icon'],'icon');
                    $param['data']['icon'] = $img;
                }
            }
            //水印处理
            if(!empty($param['data']['mark_img'])){
                if (isset(kingCache('water')['mark_img']) && kingCache('water')['mark_img'] == $param['data']['mark_img']) {
                    unset($param['data']['mark_img']);
                } else {
                    $img = $this->img($param['data']['mark_img'],'water','water');
                    $param['data']['mark_img'] = $img;
                }
            }
            $inc_type = $param['data']['inc_type'];
            unset($param['data']['inc_type']);
            kingCache($inc_type, $param['data']);
            exit(json_encode(['status' => 1, 'msg' => '操作成功', 'inc_type' => $inc_type]));
        }
    }

    /**
     * 处理图片流
     * @author king
     */
    private function img($image,$type='log',$info='shop_info')
    {
        if($type == 'log'){
            $path =  ROOT_PATH . "public/uploads/log/";
        }else if($type == 'icon'){
            $path = ROOT_PATH . "public/uploads/icon/";
        }else if($type == 'water'){
            $path = ROOT_PATH."public/uploads/water/";
        }
        //找出这个log,如果有就删除了先
        if (isset(kingCache('water')["{$info}"]) && is_file(ROOT_PATH."public/uploads/".kingCache("{$info}")["{$type}"])) {
            delFile($path);
        }
        if (preg_match('/^(data:\s*image\/(\w+);base64,)/', $image, $result)) {
            $ext = $result[2];
            $filename = $type.'.'.$ext;
            !is_dir($path) && mkdir($path,0777,true); //生成缩略图
            if (file_put_contents($path.$filename, base64_decode(str_replace($result[1], '', $image)))) {
                return "/uploads/{$type}/".$filename;
            }
        }
    }

    //发送测试邮件
    public function send_email(){
        $param = input('post.');
        $res = send_email('后台测试','测试发送验证码:'.mt_rand(1000,9999),$param['test_eamil']);
        if($res === true){
            exit(json_encode(['status'=>1,'msg'=>'发送成功']));
        }
        exit(json_encode(['status'=>-1,'msg'=>$res]));
    }

    /**
     *短信模板设置
     * @author king
     */
    public function smsTemplate()
    {
        $model = new Sms();
        $list = $model->getSmsTemplate();
        $this->assign('list', $list);
        $this->assign('media', ['home' => '首页', 'index' => '短信管理', 'child' => '短信模板列表']);
        return $this->fetch('smstemplates');
    }

    /**
     * 添加短信模板
     * @author king
     */
    public function addSmsTemplate()
    {
        if ($this->request->isPost()) {
            $data = input('post.');
            if (!empty($data)) {
                $validate = $this->validate($data, 'Sms.add');
                if (true !== $validate) {
                    exit(json_encode(['status'=>-1,'msg'=>$validate]));
                }
                $model = new Sms();
                $res = $model->addSmsTemplate($data);
                if ($res === 1) {
                    exit(json_encode(['status'=>1,'msg'=>'添加短信模板成功']));
                } else {
                    exit(json_encode(['status'=>-1,'msg'=>'添加短信模板失败']));
                }
            }
        }
        //查找出数据有没有用了短信模板
        $reskey = array_keys(config('SEND_SCENE'));
        $res = [];
        foreach ($reskey as $key => $value) {
            $res[] = Db::name('sms_template')->where(['send_scene' => $value])->value('send_scene');
        }
        $reshtml = [];
        $value = array_values(array_diff($reskey, $res));
        foreach (config('SEND_SCENE') as $k => $v) {
            if (in_array($k, $value)) {
                $reshtml[$k]['send_scene'] = $k;
                $reshtml[$k]['sms'] = $v[0];
            }
        }
        $this->assign('send', $reshtml);
        $this->assign('media', ['home' => '首页', 'index' => '短信管理', 'child' => '添加短信模板']);
        return $this->fetch('addsms');
    }

    /**
     * 获取配置option
     * @author king
     */
    public function getOption()
    {
        if ($this->request->isPost()) {
            $id = input('post.id');
            foreach (config('SEND_SCENE') as $k => $v) {
                if ($id == $k) {
                    exit(json_encode(['status' => 1, 'data' => $v[1]]));
                }
            }
        }
    }

    /**
     * 删除短信模板
     * @author king
     */
    public function delSms()
    {
        if ($this->request->isPost()) {
            $id = input('post.id');
            if (!empty($id)) {
                $res = Db::name('sms_template')->where(['tpl_id' => $id])->delete();
                if ($res > 0) {
                    exit(json_encode(['status' => 1, 'msg' => '删除成功']));
                } else {
                    exit(json_encode(['status' => -1, 'msg' => '删除失败']));
                }
            }
        }
    }

    /**
     * 更新短信模板
     * @author king
     */
    public function editSms()
    {
        if($this->request->isPost()){
            $data = input('post.');
            $smsModel = new Sms();
            $info = $smsModel->smsEdit($data);
            if($info){
                exit(json_encode(['status' => 1, 'msg' => '更新成功']));
            }else{
                exit(json_encode(['status' => -1, 'msg' => '更新失败']));
            }
        }
        //获取短信模板信息
        $id = input('id');
        $smsModel = new Sms();
        $smsOneList = $smsModel->getOneSme(['tpl_id' => $id]);
        if(empty($smsOneList)){
            $this->error('参数错误',url('Admin/Index/index'));
        }
        $smsres = [];
        foreach (config('SEND_SCENE') as $k => $v) {
                $smsres[$k]['send_scene'] = $k;
                $smsres[$k]['sms'] = $v[0];
        }
        $this->assign('media', ['home' => '首页', 'index' => '短信管理', 'child' => '更新短信模板']);
        $this->assign('smsres', $smsres);
        $this->assign('smsOneList', $smsOneList);
        return $this->fetch('editsms');
    }
}