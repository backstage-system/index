<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/4
 * Time: 23:30
 */

namespace app\admin\validate;

use think\Validate;

class Sms extends Validate{
    //验证规则
    protected $rule = [
        'sms_sign'  => 'require|unique:sms_template',
        'sms_tpl_code' => 'require|unique:sms_template',
        'send_scene' => 'require',
        'tpl_content' => 'require|unique:sms_template',
    ];
    //验证信息
    protected $message = [
        'sms_sign.require'  =>  '短信签名必须填写',
        'sms_sign.unique'  =>  '短信签名已经存在',
        'sms_tpl_code.require'  =>  '模板ID必须填写',
        'sms_tpl_code.unique'  =>  '模板ID已经存在',
        'send_scene.require'  =>  '请选择应用场景',
        'tpl_content.require'  =>  '短信内容不能为空',
        'tpl_content.unique'  =>  '短信内容已经存在',
    ];
    //验证场景
    protected $scene = [
        'add'   =>  ['sms_sign','sms_tpl_code','send_scene','send_content']
    ];
}