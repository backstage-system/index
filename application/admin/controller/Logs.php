<?php
/**
 * Created by PhpStorm.
 * User: A
 * Date: 2017/7/20
 * Time: 12:45
 */
namespace app\admin\controller;

use think\Db;
use app\admin\model;

class Logs extends Adminbase
{
    /**
     * 日志列表
     */
    public function index(){
        $logModel = new model\AdminLog();
        $data = $logModel->get_log(10);
        $this->assign('list',$data['list']);
        $this->assign('page',$data['page']);
        $this->assign('media',['home'=>'首页','index'=>'操作日志','child'=>'日志列表']);
        return $this->fetch('log');
    }
}