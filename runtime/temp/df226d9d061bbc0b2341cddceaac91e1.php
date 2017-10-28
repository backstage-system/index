<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:80:"C:\Users\asus\Desktop\shouye\public/../application/admin\view\rule\add_rule.html";i:1507771261;s:42:"../application/admin/view/public/head.html";i:1507803847;s:44:"../application/admin/view/public/header.html";i:1507788118;s:42:"../application/admin/view/public/menu.html";i:1507783288;s:41:"../application/admin/view/public/nva.html";i:1507712749;s:44:"../application/admin/view/public/footer.html";i:1507782375;}*/ ?>
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
                    <span class="am-icon-code"></span>
                </div>

            </div>
            <div class="tpl-block">

                <div class="am-g">
                    <div class="tpl-form-body tpl-form-line">
                        <form class="am-form tpl-form-line-form" action="" id="formid" enctype="multipart/form-data">

                            <div class="am-form-group">
                                <label for="name" class="am-u-sm-3 am-form-label">权限名 <span class="tpl-form-line-small-title">authName</span></label>
                                <div class="am-u-sm-9">
                                    <input type="text" id="title" name="title" class="am-form-field tpl-form-no-bg" placeholder="权限名" />
                                </div>
                            </div>

                            <div class="am-form-group">
                                <label class="am-u-sm-3 am-form-label">权限 <span class="tpl-form-line-small-title">auth</span></label>
                                <div class="am-u-sm-9">
                                    <input type="text" id="name" name="name" placeholder="权限url">
                                    <small>输入模块/控制器/方法即可 例如 Admin/Rule/index</small>
                                </div>
                            </div>
                            <div class="am-form-group">
                                <div class="am-u-sm-9 am-u-sm-push-3">
                                    <input type="hidden" name="pid" value="<?php echo $id; ?>">
                                    <button onclick="submits()" type="button" class="am-btn am-btn-primary tpl-btn-bg-color-success ">提交</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>


        </div>

    </div>
</div>
</div>
</body>
<!--引入资源文件-->
<script src="__ADMIN_PUBLIC__js/amazeui.min.js"></script>
<script src="__ADMIN_PUBLIC__js/iscroll.js"></script>
<script src="__ADMIN_PUBLIC__js/app.js"></script>
<script>



    function submits() {
        if($('#title').val()== ''){
            layer.msg('权限名不能为空');
        }else if($('#name').val()== ''){
            layer.msg('权限URL不能为空');
        }else{
            $.ajax({
                url:"<?php echo url('admin/Rule/add_rule'); ?>",
                type: 'post',
                data:$('#formid').serialize(),
                dataType: 'json',
                success:function(json){
                    if(json.status == -1){
                        layer.msg(json.msg);
                    }else{
                        layer.msg(json.msg);
                        setTimeout('location.reload()',1000);
                    }
                }
            });
        }
    }
</script>
</html>