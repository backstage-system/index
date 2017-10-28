<?php
namespace app\admin\model;
use think\Db;
use think\Model;

/**
 * Class Auth
 * @package app\admin\model
 * 权限模型
 */
class Auth extends Model
{
    // 设置当前模型对应的完整数据表名称
    protected $table = 'my_auth_rule';

    /**
     * 获取该权限下的子级权限
     */
    public function getChild($authId){
        $data = $this->select();
        return $this->_getChild($data,$authId);
    }

    private function _getChild($data,$authId){
        static $list = [];
        foreach($data as $rows){
            if($rows['pid'] == $authId){
                $list[] = $rows['id'];
                $this->_getChild($data,$rows['id']);
            }
        }
        return $list;
    }
}