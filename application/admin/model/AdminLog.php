<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/19
 * Time: 20:31
 */
namespace app\admin\model;

use think\Model;
use think\Db;
class AdminLog extends Model{

    // 设置当前模型对应的完整数据表名称
    protected $table = 'my_admin_log';
    protected $autoWriteTimestamp = true;
    protected $createTime = 'create_time';
    protected $updateTime = false;

    /**
     * 记录管理员操作信
     * @param array|mixed $tbname 操作的表名
     * @param bool $operation   操作信息
     * @param int $type         操作类别 1-增加 2-修改 3-删除
     * @param string $mark      备注
     * @return bool
     */
    public function log($tbname, $operation, $mark='', $type=1){
        $adminLog = new AdminLog();
        $district = GetIpLookup(real_ip());
        $logData = [
            'adminid'    => session('user')['id'],
            'username'   => session('user')['username'],
            'operation'  => $operation,
            'type'       => $type,
            'tablename'  => $tbname,
            'mark'       => $mark,
            'client_ip'  => real_ip(),//$_SERVER["REMOTE_ADDR"]
            'district'   => $district?$district['country'].'-'.$district['province'].'-'.$district['city']:'未知',
        ];
        $result = $adminLog->save($logData);    //数据入库
        if($result == 1){
            return true;
        }else{
            return false;
        }
    }

    /**
     * 文章列表
     * @param $page
     */
    public function get_log($page){
        $data = Db::name('admin_log')->order("create_time desc")->paginate($page);
        $page = $data->render();
        return ['list'=> $data, 'page'=> $page];
    }
}