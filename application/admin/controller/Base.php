<?php
namespace app\admin\controller;
use think\Controller;
use think\Auth;
/**
 * Base基类控制器
 */
class Base extends Controller{

    protected $action; //当前的控制器

    /**
     * 初始化方法
     * @author by king
     */
    public function _initialize(){
        parent::_initialize();
        $m=$this->request->module();
        $c=$this->request->controller();
        $a=$this->request->action();
        $this->action = $m.'/'.$c.'/'.$a;
        // 添加不需要验证是否登录的连接 全部小写
        $not_need_login=[
            'admin/login/index'
        ];
        $action=strtolower(trim($this->action));
        if(!in_array($action,$not_need_login)){
            if(check_login() == false){
                    $this->redirect('admin/Login/index');
            }
        }
    }

}
