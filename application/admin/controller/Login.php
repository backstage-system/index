<?php
/**
 * Created by PhpStorm.
 * User: king
 * Date: 2017/7/4
 * Time: 22:29
 */

namespace app\admin\controller;


use app\admin\model;
use think\Db;

class Login extends Adminbase {

    //后台登陆首页
    public function index(){
        if($this->request->isPost()){
            $userModel = new model\Users();
            if($userModel->login(input('post.'))){
                $this->redirect('admin/Index/index');
            }else{
                $this->error('账号或密码错误');
            }
        }
        //cookie登陆
        $id = cookie('id');
        if(!empty($id)){
            $userInfo = \think\Db::name('admin_users')->where(['id'=>cookie('id')])->find();
            if(!empty($userInfo)){
                session('user',$userInfo);
                $this->redirect('admin/Index/index');
            }
        }
        return $this->fetch('index/login');
    }

    //检查登录密码错误次数
    private function checkErrorNum(){
        $ip = $this->request->ip();

    }
}