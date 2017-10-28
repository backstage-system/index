<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:79:"C:\Users\asus\Desktop\shouye\public/../application/admin\view\index\system.html";i:1507880645;s:42:"../application/admin/view/public/head.html";i:1507803847;s:44:"../application/admin/view/public/header.html";i:1507788118;s:42:"../application/admin/view/public/menu.html";i:1507783288;s:41:"../application/admin/view/public/nva.html";i:1507712749;s:44:"../application/admin/view/public/footer.html";i:1507782375;}*/ ?>
<!--引入资源文件-->
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $shop_info['hostname']; ?></title>
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="icon" type="image/png" href="<?php echo $icon; ?>">
    <link rel="apple-touch-icon-precomposed" href="__ADMIN_PUBLIC__/i/app-icon72x72@2x.png">
    <meta name="apple-mobile-web-app-title" content="<?php echo $shop_info['hostname']; ?>" />
    <link rel="stylesheet" href="__ADMIN_PUBLIC__css/amazeui.min.css" />
    <link rel="stylesheet" href="/static/bootstrap-3.3.5/css/bootstrap.css" />
    <link rel="stylesheet" href="__ADMIN_PUBLIC__css/admin.css">
    <link rel="stylesheet" href="__ADMIN_PUBLIC__css/app.css">
    <script src="__ADMIN_PUBLIC__js/echarts.min.js"></script>
    <script src="/static/jquery-2.2.4.min.js"></script>
    <script src="/static/layer/layer.js"></script>
    <script src="__ADMIN_PUBLIC__js/vue.js"></script>
    <script src="__ADMIN_PUBLIC__js/axios.js"></script>
</head>
<link href="/static/dengxiang/css/lightbox.css" rel="stylesheet">
<body data-type="generalComponents">
<!--引入资源文件-->

<header class="am-topbar am-topbar-inverse admin-header">
    <div class="am-topbar-brand">
        <a href="javascript:;" class="tpl-logo">
            <img src="__ADMIN_PUBLIC__img/logo.png" alt="">
        </a>
    </div>
    <div class="am-icon-list tpl-header-nav-hover-ico am-fl am-margin-right">

    </div>

    <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

    <div class="am-collapse am-topbar-collapse" id="topbar-collapse">

        <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list tpl-header-list">
            <li class="am-dropdown" data-am-dropdown data-am-dropdown-toggle>
                <a class="am-dropdown-toggle tpl-header-list-link" href="javascript:;">
                    <span class="am-icon-bell-o"></span> 提醒 <span class="am-badge tpl-badge-success am-round">5</span></span>
                </a>
                <ul class="am-dropdown-content tpl-dropdown-content">
                    <li class="tpl-dropdown-content-external">
                        <h3>你有 <span class="tpl-color-success">5</span> 条提醒</h3><a href="###">全部</a></li>
                    <li class="tpl-dropdown-list-bdbc"><a href="#" class="tpl-dropdown-list-fl"><span class="am-icon-btn am-icon-plus tpl-dropdown-ico-btn-size tpl-badge-success"></span> 【预览模块】移动端 查看时 手机、电脑框隐藏。</a>
                        <span class="tpl-dropdown-list-fr">3小时前</span>
                    </li>
                    <li class="tpl-dropdown-list-bdbc"><a href="#" class="tpl-dropdown-list-fl"><span class="am-icon-btn am-icon-check tpl-dropdown-ico-btn-size tpl-badge-danger"></span> 移动端，导航条下边距处理</a>
                        <span class="tpl-dropdown-list-fr">15分钟前</span>
                    </li>
                    <li class="tpl-dropdown-list-bdbc"><a href="#" class="tpl-dropdown-list-fl"><span class="am-icon-btn am-icon-bell-o tpl-dropdown-ico-btn-size tpl-badge-warning"></span> 追加统计代码</a>
                        <span class="tpl-dropdown-list-fr">2天前</span>
                    </li>
                </ul>
            </li>
            <li class="am-dropdown" data-am-dropdown data-am-dropdown-toggle>
                <a class="am-dropdown-toggle tpl-header-list-link" href="javascript:;">
                    <span class="am-icon-comment-o"></span> 消息 <span class="am-badge tpl-badge-danger am-round">9</span></span>
                </a>
                <ul class="am-dropdown-content tpl-dropdown-content">
                    <li class="tpl-dropdown-content-external">
                        <h3>你有 <span class="tpl-color-danger">9</span> 条新消息</h3><a href="###">全部</a></li>
                    <li>
                        <a href="#" class="tpl-dropdown-content-message">
                                <span class="tpl-dropdown-content-photo">
                      <img src="__ADMIN_PUBLIC__img/user02.png" alt=""> </span>
                            <span class="tpl-dropdown-content-subject">
                      <span class="tpl-dropdown-content-from"> 禁言小张 </span>
                                <span class="tpl-dropdown-content-time">10分钟前 </span>
                                </span>
                            <span class="tpl-dropdown-content-font"> Amaze UI 的诞生，依托于 GitHub 及其他技术社区上一些优秀的资源；Amaze UI 的成长，则离不开用户的支持。 </span>
                        </a>
                        <a href="#" class="tpl-dropdown-content-message">
                                <span class="tpl-dropdown-content-photo">
                      <img src="__ADMIN_PUBLIC__img/user03.png" alt=""> </span>
                            <span class="tpl-dropdown-content-subject">
                      <span class="tpl-dropdown-content-from"> Steam </span>
                                <span class="tpl-dropdown-content-time">18分钟前</span>
                                </span>
                            <span class="tpl-dropdown-content-font"> 为了能最准确的传达所描述的问题， 建议你在反馈时附上演示，方便我们理解。 </span>
                        </a>
                    </li>

                </ul>
            </li>
            <li class="am-dropdown" data-am-dropdown data-am-dropdown-toggle>
                <a class="am-dropdown-toggle tpl-header-list-link" href="javascript:;">
                    <span class="am-icon-calendar"></span> 进度 <span class="am-badge tpl-badge-primary am-round">4</span></span>
                </a>
                <ul class="am-dropdown-content tpl-dropdown-content">
                    <li class="tpl-dropdown-content-external">
                        <h3>你有 <span class="tpl-color-primary">4</span> 个任务进度</h3><a href="###">全部</a></li>
                    <li>
                        <a href="javascript:;" class="tpl-dropdown-content-progress">
                                <span class="task">
                        <span class="desc">Amaze UI 用户中心 v1.2 </span>
                                <span class="percent">45%</span>
                                </span>
                            <span class="progress">
                        <div class="am-progress tpl-progress am-progress-striped"><div class="am-progress-bar am-progress-bar-success" style="width:45%"></div></div>
                    </span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="tpl-dropdown-content-progress">
                                <span class="task">
                        <span class="desc">新闻内容页 </span>
                                <span class="percent">30%</span>
                                </span>
                            <span class="progress">
                       <div class="am-progress tpl-progress am-progress-striped"><div class="am-progress-bar am-progress-bar-secondary" style="width:30%"></div></div>
                    </span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="tpl-dropdown-content-progress">
                                <span class="task">
                        <span class="desc">管理中心 </span>
                                <span class="percent">60%</span>
                                </span>
                            <span class="progress">
                        <div class="am-progress tpl-progress am-progress-striped"><div class="am-progress-bar am-progress-bar-warning" style="width:60%"></div></div>
                    </span>
                        </a>
                    </li>

                </ul>
            </li>
            <li class="am-hide-sm-only"><a href="javascript:;" id="admin-fullscreen" class="tpl-header-list-link"><span class="am-icon-arrows-alt"></span> <span class="admin-fullText">开启全屏</span></a></li>

            <li class="am-dropdown" data-am-dropdown data-am-dropdown-toggle>
                <a class="am-dropdown-toggle tpl-header-list-link" href="javascript:;">
                    <span class="tpl-header-list-user-nick"><?php echo \think\Session::get('user.username'); ?></span><span class="tpl-header-list-user-ico"> <img src="/<?php echo \think\Session::get('user.avatar'); ?>"></span>
                </a>
                <ul class="am-dropdown-content">
                    <!--<li><a href="#"><span class="am-icon-bell-o"></span> 资料</a></li>-->
                    <li><a href="<?php echo url('admin/User/editUser',['id'=>\think\Session::get('user.id')]); ?>"><span class="am-icon-cog"></span> 设置</a></li>
                    <li><a href="<?php echo url('admin/Index/logout'); ?>"><span class="am-icon-power-off"></span> 退出</a></li>
                </ul>
            </li>
            <li><a href="###" class="tpl-header-list-link"><span class="am-icon-sign-out tpl-header-list-ico-out-size"></span></a></li>
        </ul>
    </div>
</header>

<div class="tpl-page-container tpl-page-header-fixed">
    <!--引入资源文件-->
    <div class="tpl-left-nav tpl-left-nav-hover">
    <div class="tpl-left-nav-title">
        <?php echo \think\Config::get('VERSION.TITLE'); ?>
    </div>
    <div class="tpl-left-nav-list">
        <li class="tpl-left-nav-item">
            <a href="<?php echo url('Admin/Index/index'); ?>" class="nav-link">
                <i class="am-icon-home"></i>
                <span>首页</span>
            </a>
        </li>
        <?php foreach($menu as $vo): ?>
        <ul class="tpl-left-nav-menu">
            <li class="tpl-left-nav-item">
                <a href="javascript:;" class="nav-link tpl-left-nav-link-list">
                    <i class="<?php echo $vo['icons']; ?>"></i>
                    <span><?php echo $vo['name']; ?></span>
                    <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right"></i>
                </a>
                <ul class="tpl-left-nav-sub-menu" <?php if(in_array($action, $vo['extra'])): ?> style="display: block;"<?php endif; ?>>
                    <li>
                        <?php foreach($vo['child'] as $vv): ?>
                        <a href="<?php echo url($vv['url']); ?>" <?php if($action == $vv['url']): ?>class='active' <?php endif; ?>>
                            <i class="<?php echo $vv['icon']; ?>"></i>
                            <span><?php echo $vv['name']; ?></span>
                        </a>
                        <?php endforeach; ?>
                    </li>
                </ul>
            </li>
        </ul>
        <?php endforeach; ?>
    </div>
</div>

    <div class="tpl-content-wrapper">
        <!--引入资源文件-->
        <div class="tpl-content-page-title">
    <?php echo $media['index']; ?>
</div>
<ol class="am-breadcrumb">
    <li><a href="<?php echo url('admin/Index/index'); ?>" class="am-icon-home"><?php echo $media['home']; ?></a></li>
    <li class="am-active"><?php echo $media['index']; ?></li>
    <li class="am-active"><?php echo $media['child']; ?></li>
</ol>
        <div class="tpl-portlet-components">
            <div class="portlet-title">
                <div class="caption font-green bold">
                    <span class="am-icon-code"></span>系统基本设置
                </div>
            </div>
            <div class="tpl-alert" id="box">
                <div class="am-tabs" data-am-tabs>
                    <ul class="am-tabs-nav am-nav am-nav-tabs">
                        <li class="am-active"><a href="#tab1"><?php echo $group_list['shop_info']; ?></a></li>
                        <li><a href="#tab2"><?php echo $group_list['sms']; ?></a></li>
                        <li><a href="#tab3"><?php echo $group_list['smtp']; ?></a></li>
                        <li><a href="#tab4"><?php echo $group_list['water']; ?></a></li>
                    </ul>

                    <div class="am-tabs-bd">
                        <div class="am-tab-panel am-fade am-in am-active" id="tab1">
                            <my-host></my-host>
                        </div>
                        <div class="am-tab-panel am-fade" id="tab2">
                            <my-sms></my-sms>
                        </div>
                        <div class="am-tab-panel am-fade" id="tab3">
                            <my-smtp></my-smtp>
                        </div>
                        <div class="am-tab-panel am-fade" id="tab4">
                            <my-water></my-water>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--网站信息组件-->
<template id="host">
    <form class="am-form tpl-form-line-form"  id="formid" enctype="multipart/form-data" onsubmit="return false">
        <div class="am-form-group">
            <label for="usenrame" class="am-u-sm-3 am-form-label">网站名称 <span class="tpl-form-line-small-title">hostname</span></label>
            <div class="am-u-sm-9">
                <input type="text" id="usenrame"  class="am-form-field tpl-form-no-bg" placeholder="网站名称"  v-model="hostname" />
            </div>
        </div>
        <div class="am-form-group">
            <label  class="am-u-sm-3 am-form-label">网站log <span class="tpl-form-line-small-title">log</span></label>
            <div class="am-u-sm-9">
                <div class="am-form-group am-form-file">
                    <div class="tpl-form-file-img">
                        <img :src="log" alt="" id="imglogs" >
                        <input v-model="log" type="text" name="avatar" id="photoCover" >
                        <input  id="lefile" @change="onFileChange($event)"  type="file" style="display:none">
                    </div>
                    <button type="button" onclick="$('input[id=lefile]').click();" class="am-btn am-btn-danger am-btn-sm">
                        <i class="am-icon-cloud-upload"></i> 添加网站log</button>
                </div>
                <small class="shezhi" onmouseover="$('.shezhi').css('color','red')" onmouseout="$('.shezhi').css('color','#32c5d5')" style="color:#32c5d5">建议尺寸 180 * 60 (像素)</small>
            </div>
        </div>
        <div class="am-form-group">
            <label  class="am-u-sm-3 am-form-label">地址栏图标<span class="tpl-form-line-small-title">icon</span></label>
            <div class="am-u-sm-9">
                <div class="am-form-group am-form-file">
                    <div class="tpl-form-file-img">
                        <img :src="icon" alt="" id="icon" >
                        <input v-model="icon"  type="text" name="avatar" id="icons" >
                        <input  id="iconss"  @change="onFileChanges($event)"  type="file" style="display:none">
                    </div>
                    <button type="button" onclick="$('input[id=iconss]').click();" class="am-btn am-btn-danger am-btn-sm">
                        <i class="am-icon-cloud-upload"></i> 添加地址栏图标</button>
                </div>
                <small class="shezhis" onmouseover="$('.shezhis').css('color','red')" onmouseout="$('.shezhis').css('color','#32c5d5')" style="color:#32c5d5">建议尺寸 32 * 32 (像素)的.ico文件。<a
                        href="https://www.ico.la/" target="_blank">点击制作ICO</a>
                    如果无法正常显示新上传图标，清空浏览器缓存后访问。</small>
            </div>
        </div>
        <div class="am-form-group">
            <label class="am-u-sm-3 am-form-label">网站网址 <span class="tpl-form-line-small-title">hosts</span></label>
            <div class="am-u-sm-9">
                <input v-model="hosts" type="text" name="hosts" id="hosts" placeholder="请输入网址">
            </div>
        </div>

        <div class="am-form-group">
            <label class="am-u-sm-3 am-form-label">网站关键词
                <span class="tpl-form-line-small-title">keyword</span></label>
            <div class="am-u-sm-9">
                <input  v-model="keyword"  type="text" name="keyword" id="password" placeholder="请输入网站关键字">
                <small class="keyword" onmouseover="$('.keyword').css('color','red')" onmouseout="$('.keyword').css('color','#32c5d5')" style="color:#32c5d5"> 多个关键词请用竖线|隔开，建议3到4个关键词。</small>
            </div>
        </div>
        <div class="am-form-group">
            <label class="am-u-sm-3 am-form-label">网站描述
                <span class="tpl-form-line-small-title">desc</span></label>
            <div class="am-u-sm-9">
                <textarea  v-model="desc" class="" rows="5" id="doc-ta-1">网站描述，一般显示在搜索引擎搜索结果中的描述文字，用于介绍网站，吸引浏览者点击。</textarea>
                <small class="desc" onmouseover="$('.desc').css('color','red')" onmouseout="$('.desc').css('color','#32c5d5')" style="color:#32c5d5"> 100字以内</small>
            </div>
        </div>
        <div class="am-form-group">
            <label class="am-u-sm-3 am-form-label">版权信息
                <span class="tpl-form-line-small-title">desc</span></label>
            <div class="am-u-sm-9">
                <input  v-model="banquan"  type="text" name="banquan" id="banquan" >
            </div>
        </div>
        <div class="am-form-group">
            <label class="am-u-sm-3 am-form-label">地址
                <span class="tpl-form-line-small-title">address</span></label>
            <div class="am-u-sm-9">
                <input  v-model="address"  type="text" name="address" id="address" >
            </div>
        </div>
        <div class="am-form-group">
            <label class="am-u-sm-3 am-form-label">联系方式|邮箱
                <span class="tpl-form-line-small-title">mobileEmail</span></label>
            <div class="am-u-sm-9">
                <input v-model="mobileemail"  type="text" name="mobileemail" id="mobileemail" >
                <small class="mobileemail" onmouseover="$('.mobileemail').css('color','red')" onmouseout="$('.mobileemail').css('color','#32c5d5')" style="color:#32c5d5"> 例如：18888888888|text@163.com 中间用 | 隔开</small>
            </div>
        </div>
        <div class="am-form-group">
            <div class="am-u-sm-9 am-u-sm-push-3">
                <button @click="submits" type="button" class="am-btn am-btn-primary tpl-btn-bg-color-success ">提交</button>
            </div>
        </div>
    </form>
</template>
<!--短信设置组件-->
<template id="smss">
    <form class="am-form tpl-form-line-form"   enctype="multipart/form-data" onsubmit="return false">
        <div class="am-form-group">
            <label for="usenrame" class="am-u-sm-3 am-form-label">短信超时时间:<span class="tpl-form-line-small-title"></span></label>
            <select data-am-selected="{btnSize: 'sm'}" v-model="smstimeval">
                <option  v-for="val in smstime" :value="val.v">{{val.times}}</option>
            </select>
        </div>
        <div class="am-form-group">
            <label for="usenrame" class="am-u-sm-3 am-form-label">短信平台[appkey]: <span class="tpl-form-line-small-title"></span></label>
            <div class="am-u-sm-9">
                <input type="text" v-model="appkey"  class="am-form-field tpl-form-no-bg" placeholder="appkey"   />
                <small class="appkey" onmouseover="$('.appkey').css('color','red')" onmouseout="$('.appkey').css('color','#32c5d5')" style="color:#32c5d5">请使用阿里云通信短信服务</small>
            </div>
        </div>
        <div class="am-form-group">
            <label for="usenrame" class="am-u-sm-3 am-form-label">短信平台[secretKey]:<span class="tpl-form-line-small-title"></span></label>
            <div class="am-u-sm-9">
                <input type="text"  v-model="secretKey"  class="am-form-field tpl-form-no-bg" placeholder="secretKey"  />
            </div>
        </div>
        <div class="am-form-group">
            <label for="usenrame" class="am-u-sm-3 am-form-label">用户注册时:<span class="tpl-form-line-small-title"></span></label>
            <div class="am-u-sm-9">
                <input  v-model="regis_sms_enable"  type="radio" name="statuss"  value="true" checked="checked">是
                <input  v-model="regis_sms_enable" name="statuss" type="radio" value="false"> 否
            </div>
        </div>
        <div class="am-form-group">
            <label for="usenrame" class="am-u-sm-3 am-form-label">用户找回密码时:<span class="tpl-form-line-small-title"></span></label>
            <div class="am-u-sm-9">
                <input  v-model="forget_pwd_sms_enable"  type="radio" name="status"  value="true" checked="checked">是
                <input  v-model="forget_pwd_sms_enable" name="status" type="radio"   value="false"> 否
            </div>
        </div>

        <div class="am-form-group">
            <div class="am-u-sm-9 am-u-sm-push-3">
                <button @click="submits" type="button" class="am-btn am-btn-primary tpl-btn-bg-color-success ">提交</button>
            </div>
        </div>
    </form>
</template>
<template id="smtp">
    <form class="am-form tpl-form-line-form"   enctype="multipart/form-data" onsubmit="return false">
        <div class="am-form-group">
            <label for="smtp_server" class="am-u-sm-3 am-form-label">邮件发送服务器(SMTP): <span class="tpl-form-line-small-title"></span></label>
            <div class="am-u-sm-9">
                <input type="text" v-model="smtp_server"  class="am-form-field tpl-form-no-bg" id="smtp_server" placeholder="邮件发送服务器"   />
                <small class="smtp_server" onmouseover="$('.smtp_server').css('color','red')" onmouseout="$('.smtp_server').css('color','#32c5d5')" style="color:#32c5d5">发送邮箱的smtp地址。如: smtp.gmail.com或smtp.qq.com</small>
            </div>
        </div>
        <div class="am-form-group">
            <label for="smtp_port" class="am-u-sm-3 am-form-label">服务器(SMTP)端口<span class="tpl-form-line-small-title"></span></label>
            <div class="am-u-sm-9">
                <input type="text"  v-model="smtp_port"  class="am-form-field tpl-form-no-bg" id="smtp_port" placeholder="服务器(SMTP)端口"  />
                <small class="smtp_port" onmouseover="$('.smtp_port').css('color','red')" onmouseout="$('.smtp_port').css('color','#32c5d5')" style="color:#32c5d5">smtp的端口。默认为25。具体请参看各STMP服务商的设置说明 （如果使用Gmail，请将端口设为465）</small>
            </div>
        </div>
        <div class="am-form-group">
            <label for="smtp_user" class="am-u-sm-3 am-form-label">邮箱账号<span class="tpl-form-line-small-title"></span></label>
            <div class="am-u-sm-9">
                <input type="text"  v-model="smtp_user"  class="am-form-field tpl-form-no-bg" id="smtp_user" placeholder="邮箱账号"  />
                <small class="smtp_user" onmouseover="$('.smtp_user').css('color','red')" onmouseout="$('.smtp_user').css('color','#32c5d5')" style="color:#32c5d5">使用发送邮件的邮箱账号</small>
            </div>
        </div>
        <div class="am-form-group">
            <label for="smtp_pwd" class="am-u-sm-3 am-form-label">邮箱密码/授权码<span class="tpl-form-line-small-title"></span></label>
            <div class="am-u-sm-9">
                <input type="password"  v-model="smtp_pwd"  class="am-form-field tpl-form-no-bg" id="smtp_pwd" placeholder="邮箱密码/授权码"  />
                <small class="smtp_pwd" onmouseover="$('.smtp_pwd').css('color','red')" onmouseout="$('.smtp_pwd').css('color','#32c5d5')" style="color:#32c5d5">使用发送邮件的邮箱密码,或者授权码。具体请参看各STMP服务商的设置说明</small>
            </div>
        </div>
        <div class="am-form-group">
            <label for="usenrame" class="am-u-sm-3 am-form-label">是否开启邮箱注册:<span class="tpl-form-line-small-title"></span></label>
            <div class="am-u-sm-9">
                <input  v-model="regis_smtp_enable"  type="radio" name="regis_smtp_enable"  value="true" checked="checked" >是
                <input  v-model="regis_smtp_enable"  name="regis_smtp_enable" type="radio" value="false"> 否
            </div>
        </div>
        <div class="am-form-group">
            <label  class="am-u-sm-3 am-form-label">测试接收的邮件地址<span class="tpl-form-line-small-title"></span></label>
            <div class="am-input-group">
                <input v-model="test_eamil" id="test_eamil" type="text" class="am-form-field">
                <span class="am-input-group-btn" onclick="sendEmail()"><button class="am-btn am-btn-default" type="button">测试</button></span>
            </div>
        </div>
        <div class="am-form-group">
            <div class="am-u-sm-9 am-u-sm-push-3">
                <button @click="submits" type="button" class="am-btn am-btn-primary tpl-btn-bg-color-success ">提交</button>
            </div>
        </div>
    </form>
</template>
    <template id="watering">
        <div id="water" class="tab-pane in">
            <form class="am-form tpl-form-line-form" >
                <div class="am-form-group">
                    <label for="usenrame" class="am-u-sm-3 am-form-label">是否开启水印图片:<span class="tpl-form-line-small-title"></span></label>
                    <div class="am-u-sm-9">
                        <input  v-model="is_mark"  type="radio" name="is_mark"  value="true" checked="checked">是
                        <input  v-model="is_mark" name="is_mark" type="radio"   value="false"> 否
                    </div>
                </div>
                <div class="am-form-group">
                    <label for="usenrame" class="am-u-sm-3 am-form-label">水印类型:<span class="tpl-form-line-small-title"></span></label>
                    <div class="col-xs-3">
                        <label>
                            <button @click="changeimg" type="button" class="am-btn am-btn-primary am-btn-xs">
                                文字
                            </button>
                            <span class="lbl"></span>
                        </label>
                        <label>
                            <button @click="changewenzi" type="button" class="am-btn am-btn-primary am-btn-xs">
                                图片
                            </button>
                            <span class="lbl"></span>
                        </label>
                    </div>
                </div>
                <div v-show="wenzi">
                    <div class="am-form-group">
                        <label for="usenrame" class="am-u-sm-3 am-form-label">水印文字: <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" v-model="mark_txt"  class="am-form-field tpl-form-no-bg" placeholder="水印文字"   />
                        </div>
                    </div>
                    <div class="am-form-group">
                        <label for="usenrame" class="am-u-sm-3 am-form-label">文字字号: <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" v-model="mark_txt_size"  class="am-form-field tpl-form-no-bg" placeholder="文字字号"   />
                        </div>
                    </div>
                    <div class="am-form-group">
                        <label for="usenrame" class="am-u-sm-3 am-form-label">文字颜色: <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" v-model="mark_txt_color"  class="am-form-field tpl-form-no-bg" placeholder="文字颜色"   />
                            <small class="mark_txt_color" onmouseover="$('.mark_txt_color').css('color','red')" onmouseout="$('.mark_txt_color').css('color','#32c5d5')" style="color:#32c5d5">如‘#000000’代表黑色</small>
                        </div>
                    </div>
                </div>
                <div v-show="!wenzi">

                    <div class="am-form-group">
                        <label  class="am-u-sm-3 am-form-label">水印图片 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <div class="am-form-group am-form-file">
                                <div class="tpl-form-file-img">
                                    <img :src="mark_img" alt="" id="imglogsss" >
                                    <input v-model="mark_img" type="text" name="avatar" id="waters" >
                                    <input  id="lefiless" @change="onFileChangeWater($event)"  type="file" style="display:none">
                                </div>
                                <button type="button" onclick="$('input[id=lefiless]').click();" class="am-btn am-btn-danger am-btn-sm">
                                    <i class="am-icon-cloud-upload"></i> 上传水印图片</button>
                            </div>
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label  class="am-u-sm-3 am-form-label">水印添加条件 <span class="tpl-form-line-small-title"></span></label>
                        <div class="col-sm-4">
                            <input onKeyUp="this.value=this.value.replace(/[^\d]/g,'')" onpaste="this.value=this.value.replace(/[^\d]/g,'')" pattern="^\d{1,}$" v-model="mark_width"  type="text"  class="form-control" >
                            <small class="mark_width" onmouseover="$('.mark_width').css('color','red')" onmouseout="$('.mark_width').css('color','#32c5d5')" style="color:#32c5d5">图片宽度 单位像素(px)</small>
                            <br>
                            <input onKeyUp="this.value=this.value.replace(/[^\d]/g,'')" onpaste="this.value=this.value.replace(/[^\d]/g,'')" pattern="^\d{1,}$" v-model="mark_height"  type="text"  class="form-control" >
                            <small class="mark_height" onmouseover="$('.mark_height').css('color','red')" onmouseout="$('.mark_height').css('color','#32c5d5')" style="color:#32c5d5">图片高度 单位像素(px)</small>
                        </div>
                    </div>
                    <div class="am-form-group">
                        <label  class="am-u-sm-3 am-form-label">JPEG 水印质量: <span class="tpl-form-line-small-title"></span></label>
                        <div class="col-sm-4">
                            <input v-model="mark_quality" pattern="^\d{1,}$" onChange="$('#mark_quality2').empty().html(this.value);" name="mark_quality" id="mark_quality" value="" class="input-txt" type="range" min="0" step="2" max="100">
                            <span class="err" id="mark_quality2" v-text="mark_quality"></span>
                            <br>
                            <small class="mark_quality" onmouseover="$('.mark_quality').css('color','red')" onmouseout="$('.mark_quality').css('color','#32c5d5')" style="color:#32c5d5">水印质量请设置为0-100之间的数字,决定 jpg 格式图片的质量</small>
                        </div>
                    </div>
                </div>

                <div class="am-form-group">
                    <label  class="am-u-sm-3 am-form-label">水印透明度: <span class="tpl-form-line-small-title"></span></label>
                    <div class="col-sm-4">
                        <input v-model="mark_degree" pattern="^\d{1,}$" onChange="$('#mark_degree2').empty().html(this.value);" name="mark_degree" id="mark_degree" value="" class="input-txt" type="range" min="0" step="2" max="100">
                        <span class="err" id="mark_degree2" v-text="mark_degree"></span>
                        <br>
                        <small class="mark_degree" onmouseover="$('.mark_degree').css('color','red')" onmouseout="$('.mark_degree').css('color','#32c5d5')" style="color:#32c5d5">0代表完全透明，100代表不透明</small>
                    </div>
                </div>
                <div class="am-form-group">
                    <label for="usenrame" class="am-u-sm-3 am-form-label">水印位置: <span class="tpl-form-line-small-title"></span></label>
                    <div class="col-sm-4">
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <td><input v-model="sel" type="radio" name="sel" value="1">&nbsp;顶部居左</td>
                                <td><input v-model="sel" type="radio" name="sel" value="4">&nbsp;中部居左</td>
                                <td><input v-model="sel" type="radio" name="sel" value="7" >&nbsp;底部居左</td>
                            </tr>
                            <tr>
                                <td><input v-model="sel" type="radio" name="sel" value="2">&nbsp;顶部居中</td>
                                <td><input v-model="sel" type="radio" name="sel" value="5">&nbsp;中部居中</td>
                                <td><input v-model="sel" type="radio" name="sel" value="8">&nbsp;底部居中</td>
                            </tr>
                            <tr>
                                <td><input v-model="sel" type="radio" name="sel" value="3">&nbsp;顶部居右</td>
                                <td><input v-model="sel" type="radio" name="sel" value="6">&nbsp;中部居右</td>
                                <td><input v-model="sel" type="radio" name="sel" value="9">&nbsp;底部居右</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="am-form-group">
                    <div class="am-u-sm-9 am-u-sm-push-3">
                        <button @click="submit(mark_type)" type="button" class="am-btn am-btn-primary tpl-btn-bg-color-success ">提交</button>
                    </div>
                </div>
            </form>
        </div>
    </template>
</div>
<!--引入资源文件-->
<script src="__ADMIN_PUBLIC__js/amazeui.min.js"></script>
<script src="__ADMIN_PUBLIC__js/iscroll.js"></script>
<script src="__ADMIN_PUBLIC__js/app.js"></script>
<script src="/static/dengxiang/js/lightbox.js"></script>
</body>
<script>
    //网站信息组件
    var hostsetting = {
        data(){
            return {
                hostname:'<?php echo $config['hostname']; ?>',  //网站名称
                log:'<?php echo $config['log']; ?>',  //网站log
                icon:'<?php echo $config['icon']; ?>', //网站标题icon
                hosts:'<?php echo $_SERVER['SERVER_NAME']; ?>',  //网站域名
                keyword:'<?php echo $config['keyword']; ?>',  //网站关键字
                desc:'<?php echo $config['desc']; ?>', //网站描述
                banquan:'<?php echo $config['banquan']; ?>',  //网站版权
                address:'<?php echo $config['address']; ?>',  //公司地址
                mobileemail:'<?php echo $config['mobileemail']; ?>'  //联系方式
            }
        },
        methods:{
            onFileChange(e){
                var _this = this;
                var files = e.target.files;
                for(var i =0;i<files.length;i++){
                    if(!files[i].type.match('image.*')){
                        layer.msg('请选择图片格式的文件');
                        return;
                    }
                    var reader = new FileReader();
                    reader.onload = (function (){
                        return function (e) {
                            $('#imglogs').show();
                            $('#imglogs').attr('src',e.target.result);
                            _this.log = e.target.result;  //图片流
                            $('#photoCover').attr("disabled",true);
                        }
                    })(files[i]);
                    reader.readAsDataURL(files[i]);
                }
            },
            onFileChanges(e){
                var _this = this;
                var files = e.target.files;
                for(var i =0;i<files.length;i++){
                    if(!files[i].type.match('image.*')){
                        layer.msg('请选择图片格式的文件');
                        return;
                    }
                    var reader = new FileReader();
                    reader.onload = (function (){
                        return function (e) {
                            $('#icon').show();
                            $('#icon').attr('src',e.target.result);
                            _this.icon = e.target.result;  //图片流
                            $('#icons').attr("disabled",true);
                        }
                    })(files[i]);
                    reader.readAsDataURL(files[i]);
                }
            },
            submits(){
                var settingData = [];
                settingData['staProjQueryGrid'] = ({
                    hostname:this.hostname,
                    log:this.log,
                    icon:this.icon,
                    hosts:this.hosts,
                    keyword:this.keyword,
                    desc:this.desc,
                    address:this.address,
                    banquan:this.banquan,
                    mobileemail:this.mobileemail,
                    inc_type:'shop_info',  //类别
                });
                submit(settingData);
            }
        },
        template:'#host'
    };
    //短信组件设置
    var sms = {
        data(){
            return {
                smstime:[    //短信时间限制
                    { times: '1分钟', v: '60' },
                    { times: '2分钟', v: '120' },
                    { times: '5分钟', v: '300' },
                    { times: '10分钟', v: '600' },
                    { times: '20分钟', v: '1200' },
                    { times: '30分钟', v: '1800' }
                ],
                smstimeval:'120',
                appkey:'',
                secretKey:'',
                regis_sms_enable:true,
                forget_pwd_sms_enable:true,
                inc_type:'sms'
            }
        },
        methods:{
            getSms(){
                var _this = this;
                axios.post("<?php echo url('admin/Index/system'); ?>",{
                    type:_this.inc_type,
                }).then(function(res){
                    if(res.data.status == 1){
                        var _res = res.data.data;
                        _this.appkey = _res.appkey;
                        _this.secretKey = _res.secretKey;
                        _this.regis_sms_enable = eval(_res.regis_sms_enable);
                        _this.forget_pwd_sms_enable = eval(_res.forget_pwd_sms_enable);
                        _this.smstimeval = _res.smstimeval;
                    }
                })
            },
            submits(){
                var settingData = [];
                settingData['staProjQueryGrid'] = ({
                    appkey:this.appkey,
                    secretKey:this.secretKey,
                    regis_sms_enable:this.regis_sms_enable,
                    smstimeval:this.smstimeval,
                    forget_pwd_sms_enable:this.forget_pwd_sms_enable,
                    inc_type:'sms',  //类别
                });
                submit(settingData);
            }
        },
        mounted(){
            this.getSms();
        },
        template:'#smss'
    };
    //邮箱发送设置
    var smtp = {
        data(){
            return {
                smtp_server:'',
                smtp_port:'',
                smtp_user:'',
                smtp_pwd:'',
                regis_smtp_enable:true,
                test_eamil:'',
                inc_type:'smtp',  //类别
            }
        },
        methods:{
            getSmtp(){
                var _this = this;
                axios.post("<?php echo url('admin/Index/system'); ?>",{
                    type:_this.inc_type,
                }).then(function(res){
                    if(res.data.status == 1){
                        var _res = res.data.data;
                        _this.smtp_server = _res.smtp_server;
                        _this.smtp_port = _res.smtp_port;
                        _this.regis_smtp_enable = eval(_res.regis_smtp_enable);
                        _this.smtp_user = _res.smtp_user;
                        _this.smtp_pwd = _res.smtp_pwd;
                        _this.test_eamil = _res.test_eamil;
                    }
                })
            },
            submits(){
                var settingData = [];
                settingData['staProjQueryGrid'] = ({
                    smtp_server:this.smtp_server,
                    smtp_port:this.smtp_port,
                    smtp_user:this.smtp_user,
                    smtp_pwd:this.smtp_pwd,
                    regis_smtp_enable:this.regis_smtp_enable,
                    test_eamil:this.test_eamil,
                    inc_type:'smtp',  //类别
                });
                submit(settingData);
            }
        },
        mounted(){
            this.getSmtp();
        },
        template:"#smtp"
    };
    //水印设置
    let watering = {
        data(){
            return{
                wenzi:true,  //tab开关
                sel:'9',   //水印位置
                mark_txt:'', //水印文字
                mark_txt_size:'',  //文字字号
                mark_txt_color:'',  //文字颜色
                mark_degree:'50', //文字透明度
                mark_quality:'50', //JPEG 水印质量 默认50
                is_mark:true,  //是否开启图片水印
                mark_type:'',  //水印类型  1是文字，0是图片
                inc_type:'water',
                mark_img:'', //水印图片
                mark_width:'',  //水印图片宽度
                mark_height:'',  //水印图片高度
            }
        },
        methods:{
            getWater(type){
                var _this = this;
                axios.post("<?php echo url('admin/Index/system'); ?>",{
                    type:_this.inc_type,
                }).then(function(res){
                    if(res.data.status == 1){
                        var _res = res.data.data;
                        _this.sel = _res.sel;
                        _this.mark_txt = _res.mark_txt;
                        _this.mark_txt_size =_res.mark_txt_size;
                        _this.mark_txt_color = _res.mark_txt_color;
                        _this.mark_degree = _res.mark_degree;
                        _this.is_mark = _res.is_mark;
                        _this.mark_height = _res.mark_height;
                        _this.mark_width =_res.mark_width;
                        _this.mark_img = _res.mark_img;
                        _this.mark_type = _res.mark_type;
                        _this.mark_quality = _res.mark_quality;
                    }
                });
            },
            changewenzi(){
                this.mark_type = '0';
                this.wenzi = false;
            },
            changeimg(){
                this.mark_type = '1';
                this.wenzi = true;
            },
            submit(type){
                var settingData = [];
                if(type == '1'){
                    settingData['staProjQueryGrid'] = ({
                        sel:this.sel,
                        mark_txt:this.mark_txt,
                        mark_txt_size:this.mark_txt_size,
                        mark_txt_color:this.mark_txt_color,
                        is_mark:this.is_mark,
                        mark_type:this.mark_type,
                        inc_type:this.inc_type,
                        mark_degree:this.mark_degree
                    });
                }else{
                    settingData['staProjQueryGrid'] = ({
                        sel:this.sel,
                        inc_type:this.inc_type,
                        mark_degree:this.mark_degree,
                        mark_img:this.mark_img,
                        mark_width:this.mark_width,
                        mark_quality:this.mark_quality,
                        mark_height:this.mark_height,
                        mark_type:this.mark_type
                    });
                }
                submit(settingData);
            },
            //获取图片上传事件
            onFileChangeWater(e){
                var _this = this;
                var files = e.target.files;
                for(var i =0;i<files.length;i++){
                    if(!files[i].type.match('image.*')){
                        layer.msg('请选择图片格式的文件');
                        return;
                    }
                    var reader = new FileReader();
                    reader.onload = (function (){
                        return function (e) {
                            $('#imglogsss').show();
                            $('#imglogsss').attr('src',e.target.result);
                            _this.mark_img = e.target.result;  //图片流
                            $('#waters').attr("disabled",true);
                        }
                    })(files[i]);
                    reader.readAsDataURL(files[i]);
                }
            },
        },
        mounted(){
            this.getWater();
        },
        template:'#watering'
    };
    var vm = new Vue({
        components:{
            'my-host':hostsetting,
            'my-sms':sms,
            'my-smtp':smtp,
            'my-water':watering
        }
    }).$mount('#box');

    /**
     * @param type 设置类型
     * @param data 数据
     * 添加缓存
     * @author king
     */
    function submit(data) {
        $.ajax({
            url: "<?php echo url('admin/Index/handle'); ?>",
            type: 'post',
            data:{
                data:data.staProjQueryGrid
            },
            dataType: 'json',
            success:function(json){
                if(json.status == 1){
                    layer.msg(json.msg);
                    setTimeout("location.reload()",500);
                }
            }
        });
    }

    /**
     * 测试邮箱
     * @author king
     */
    function sendEmail() {
        var email = $('#test_eamil').val();
        if (email == '') {
            layer.msg("邮箱账号不能为空！");
            return;
        }else{
            $.ajax({
                type: "post",
                data: {
                    test_eamil:email
                },
                dataType: 'json',
                url: "<?php echo url('admin/Index/send_email'); ?>",
                success: function (res) {
                    if (res.status == 1) {
                        layer.msg(res.msg);
                    } else {
                        layer.msg(res.msg);
                    }
                }
            })
        }
    }
</script>
</html>