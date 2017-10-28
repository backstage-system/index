<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:78:"C:\Users\asus\Desktop\shouye\public/../application/admin\view\index\login.html";i:1507778934;s:42:"../application/admin/view/public/head.html";i:1507803847;}*/ ?>
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

<body data-type="login">

  <div class="am-g myapp-login">
	<div class="myapp-login-logo-block  tpl-login-max">
		<div class="myapp-login-logo-text">
			<div class="myapp-login-logo-text">
				<?php echo \think\Config::get('VERSION.TITLE'); ?><span> </span> <i class="am-icon-skyatlas"></i>
				
			</div>
		</div>

		<div class="login-font">
			<i>Log In </i> or <span> Sign Up</span>
		</div>
		<div class="am-u-sm-10 login-am-center">
			<form class="am-form" action="<?php echo url("","",true,false);?>"  method="post">
				<fieldset>
					<div class="am-form-group">
						<input type="text" name="username" class="" id="doc-ipt-email-1" placeholder="用户名">
					</div>
					<div class="am-form-group">
						<input type="password" class="" name="password" id="doc-ipt-pwd-1" placeholder="密码">
					</div>
					<p><button type="submit" class="am-btn am-btn-default">登录</button></p>
				</fieldset>
			</form>
		</div>
	</div>
</div>

  <script src="__ADMIN_PUBLIC__js/amazeui.min.js"></script>
  <script src="__ADMIN_PUBLIC__js/app.js"></script>
</body>

</html>