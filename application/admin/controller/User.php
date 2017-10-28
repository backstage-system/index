<?php
/**
 * Created by PhpStorm.
 * User: king
 * Date: 2017/9/11
 * Time: 22:54
 */

namespace app\admin\controller;
use app\admin\model;
use think\Controller;
use think\Db;
use think\paginator;

class User extends Adminbase
{

    private $department = [
        1 => '企划部',
        2 => '市场部',
        3 => '编辑部',
        4 => '广告部',
    ];
    /**
     * 管理员列表
     * @author by king
     */
    public function index(){
        $userModel = new model\Users();
        $list = $userModel->user_list(10,$this->department);
        $this->assign('list',$list['list']);
        $this->assign('page',$list['page']);
        $this->assign('department',$this->department);
        $this->assign('media',['home'=>'首页','index'=>'管理员','child'=>'管理员列表']);
        return $this->fetch('index');
    }

    /**
     * 添加管理员
     * @author by king
     */
    public function add_user(){
        if($this->request->isPost()){
            $data = input('post.');
            if(!empty($data)){
                $validate = $this->validate($data,'User.add');  //验证字段信息  在validate/Users类
                if(true !== $validate){
                    exit(json_encode(['status'=>-1,'msg'=>$validate]));
                }
                $userModel = new model\Users();
                $res = $userModel->saveUsers($data);
                if($res === true){
                    $logModel = new model\AdminLog();
                    $logModel->log("Admin_users", "添加管理员", "", 1);
                    exit(json_encode(['status'=>1,'msg'=>'添加管理员成功']));
                }else{
                    exit(json_encode(['status'=>-1,'msg'=>'添加管理员失败']));
                }
            }
        }

        $rule = Db::name('AuthGroup')->select();
        $this->assign('rule',$rule);
        $this->assign('department',$this->department);
        $this->assign('media',['home'=>'首页','index'=>'管理员','child'=>'添加管理员']);
        return $this->fetch();
    }

    /**
     * 修改管理员
     * @author by king
     */
    public function editUser(){
        $id = input('id');
        if($this->request->isPost()){
            $data = input('post.');
            if(!empty($data)){
                $validate = $this->validate($data,'User.edit');  //验证字段信息  在validate/Users类
                if(true !== $validate){
                    exit(json_encode(['status'=>-1,'msg'=>$validate]));
                }
                $userModel = new model\Users();
                $res = $userModel->saveUsers($data,'edit');
                if($res === true){
                    $logModel = new model\AdminLog();
                    $logModel->log("Admin_users", "更新管理员", "", 2);
                    exit(json_encode(['status'=>1,'msg'=>'更新管理员成功']));
                }else{
                    exit(json_encode(['status'=>-1,'msg'=>'更新管理员失败']));
                }
            }
        }
        //用户列表
        $userModel = new model\Users();
        $userList = $userModel->getUserListOne(['u.id'=>$id]);
        if(empty($userList)){
            $this->error('参数有误',url('admin/User/index'));
        }
        //获取用户角色
        $rule = Db::name('AuthGroup')->select();
        $this->assign('rule',$rule);
        $this->assign('userList',$userList);
        $this->assign('department',$this->department);
        $this->assign('media',['home'=>'首页','index'=>'管理员','child'=>'修改管理员']);
        return $this->fetch();
    }

    /**
     * 删除管理员
     * @author by king
     */
    public function delUser(){
        if($this->request->isAjax()){
            $id = input('post.id')+0;
            $userModel = new model\Users();
            empty($id) ? exit(json_encode(['status'=>-1,'msg'=>'参数有误'])): $result = $userModel->deleleUser($id);
            if($result){
                $logModel = new model\AdminLog();
                $logModel->log("Admin_users", "删除管理员", "", 3);
                exit(json_encode(['status'=>1,'msg'=>'删除成功']));
            }
        }
    }
}




















