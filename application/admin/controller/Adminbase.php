<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/4
 * Time: 22:39
 */

namespace app\admin\controller;

use think\Db;
use think\Config;
use think\Auth;

class Adminbase extends Base {

    protected $admin_rule; //管理员角色
    //忽略登录的列表 需要在每个模块的控制器里填写,小写
    protected $_iauth = [];
    public function _initialize(){
        parent::_initialize();
        //不需要验证权限
        if(check_login() == true && !in_array(strtolower($this->action),$this->_iauth)){
            $auth = new Auth();
            $res = $auth->check($this->action,session('user')['id']);
            if(!$res && session('user')['username'] == 'admin'){
                $this->error('您没有权限访问',url('admin/index/index'));
            }
        }
        $this->admin_rule =  Db::name('auth_group_access')
            ->alias('a')
            ->join('auth_group c','c.id = a.group_id')
            ->where(['a.uid'=>session('user')['id']])->find();
        $this->assign('icon',ROOT_PATH.'public'.kingCache('shop_info')['icon']);
        $this->assign('shop_info',kingCache('shop_info'));
        $this->assign('config',$this->admin_rule);
        $this->getMenu();

    }

    /**
     * 获取菜单
     */
    protected function getMenu(){
        $config =  Config::load(APP_PATH.'/admin/nav_config.php'); //获取配置文件详情
        $menu = $config['admin'];  //获取后台菜单列表
        $menus = [];
        foreach($menu as $key => $v){
            $menus[] = $v;
        }
        $m=$this->request->module();
        $c=$this->request->controller();
        $a=$this->request->action();
        $action = $m.'/'.$c.'/'.$a;
        $this->assign('action',$action);
        $this->assign('menu',$menus);
    }
}