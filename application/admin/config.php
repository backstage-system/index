<?php
/**
 * Created by domino.
 * User: king
 * Date: 2017/9/11 0011
 * Time: 21:10
 */
return [
    //后台模板路径
    'view_replace_str'  =>  [
        '__ADMIN_PUBLIC__'=>'/static/assets/',
    ],
    //默认错误跳转对应的模板文件
    'dispatch_error_tmpl' => ROOT_PATH.'/public/jump/dispatch_jump2.tpl',
    //默认成功跳转对应的模板文件
    'dispatch_success_tmpl' => ROOT_PATH.'/public/jump/dispatch_jump2.tpl',
    //网站默认
    'VERSION' => [
        'TITLE' => '任务帮CMS',
        'KEYWORDS' => '任务帮CMS',
        'DESCRITPTION' => '任务帮CMS',
        'VAR' => '1.0',
    ],
];