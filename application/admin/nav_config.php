<?php
/**
 * 系统菜单
 */
return [
    'admin' => [
        'Auth' => [
            'name' => '权限管理',
            'icons'=>'am-icon-lock',
            'extra' => [
                'admin/Rule/rule_list',
                'admin/Rule/rule_group',
                'admin/User/index'
            ],
            'child' => [
                [
                    'name' => '权限列表',
                    'icon' => 'am-icon-align-right',
                    'url' => 'admin/Rule/rule_list',

                ],
                [
                    'name' => '角色管理',
                    'icon' => 'am-icon-group',
                    'url' => 'admin/Rule/rule_group',

                ],
                [
                    'name' => '管理员',
                    'icon' => 'sublist-icon glyphicon glyphicon-user',
                    'url' => 'admin/User/index',
                ]
            ]
        ],
        'setting' => [
            'name' => '系统设置',
            'icons'=>'am-icon-cogs',
            'extra' => [
                'admin/Index/system',
                'admin/Index/smstemplate',
                'admin/Logs/index'
            ],
            'child' => [
                [
                    'name' => '系统设置',
                    'icon' => 'am-icon-file-text',
                    'url' => 'admin/Index/system',
                ],
                [
                    'name' => '短信模板',
                    'icon' => 'sublist-icon glyphicon glyphicon-envelope',
                    'url' => 'admin/Index/smstemplate',
                ],
                [
                    'name' => '操作日志',
                    'icon' => 'sublist-icon glyphicon glyphicon-align-justify',
                    'url' => 'admin/Logs/index',
                ]
            ]
        ]
    ]
];