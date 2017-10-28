<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/4
 * Time: 23:30
 */

namespace app\admin\validate;

use think\Validate;

class User extends Validate{
    //验证规则
    protected $rule = [
        'username'  =>  'require|max:25|unique:admin_users',
        'phone' =>  'require|number|length:11|unique:admin_users|checkMobile',
        'email' =>  'require|email',
        'password' =>  'require',
    ];
    //验证信息
    protected $message = [
        'username.require'  =>  '用户名必须填写',
        'username.unique' => '用户名已存在',
        'username.max'     => '名称最多不能超过25个字符',
        'phone.require' =>  '手机号必须填写',
        'phone.number' =>  '手机号必须是数字',
        'phone.unique' =>  '手机号已存在',
        'phone.length' =>  '手机号格式不正确',
        'password.require' =>  '密码不能为空',
        'email.require' =>  '邮箱必须填写',
        'email.email' =>  '邮箱格式不正确',
        'username.token' => '不要重复提交表单'
    ];
    //验证场景
    protected $scene = [
        'add'   =>  ['username','phone','password','email'],
        'edit'  =>  [
            'mobile' =>  'require|number|length:11',
            'username'  =>  'require|max:25',
            'phone'  =>  'require|number|length:11|checkMobile',
        ],  //更新验证
        'login' => [
            'username' => 'require',
            'password' => 'require',
        ],//登陆验证
    ];

    //检测手机号格式是否正确
    protected function checkMobile($value){
        if(check_mobile($value) === false){
            return '手机号格式错误';
        }else{
            return true;
        }
    }
}