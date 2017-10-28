<?php
namespace app\admin\model;
use think\Db;
use think\Model;

/**
 * Class Auth
 * @package app\admin\model
 * 短信模型
 */
class Sms extends Model
{
    // 设置当前模型对应的完整数据表名称
    protected $table = 'my_sms_template';
    protected $autoWriteTimestamp = true;
    protected $createTime = 'add_time';
    protected $updateTime = false;


    /**
     * 获取列表信息
     * @param  $where 筛选条件
     * @param  $limt 条数
     * @author king
     */
    public function getSmsTemplate($where=[],$limit=0){

        return Db::name('sms_template')->where($where)->limit($limit)->select();
    }

    /**
     * 添加模板信息
     * @param $data 添加数据
     * @author king
     */
    public function addSmsTemplate($data){
        if(empty($data)) return false;
        return $this->save($data);
    }

    /**
     * 获取单条信息
     * @param  $limt 条数
     * @param  $where 条件
     * @author king
     */
    public function getOneSme($where=[]){
        return Db::name('sms_template')->where($where)->find();
    }

    /**
     * 更新模板
     * @author king
     */
    public function smsEdit($data){
        if(empty($data)) return false;
        return $this->allowField(true)->save($data,['tpl_id' => $data['tpl_id']]);
    }
}




















