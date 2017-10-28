<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>跳转提示</title>
  <style>
html,body { margin: 0; padding: 0; background-color: #fff; font-family: Microsoft YaHei,Verdana, Geneva, sans-serif; color:#333; }
.msg { width:600px; padding:20px; margin:auto; position:absolute; left:50%; top:50%; margin-top:-130px; margin-left:-320px; background-color:#eee; font-size:14px;}
.msg h2 { font-size:18px;}
a { color:#333;}
</style>
    </head>
    <body>
    <div class="msg">
        <h2>页面正在跳转中...</h2>
        <p>
        <?php switch ($code) {?>
         <?php case 1:?>
        <present name="message">
        <b style="color:#09c"><?php echo(strip_tags($msg));?></b>
         <?php break;?>
        <?php case 0:?>
        <b style="color:red"><?php echo(strip_tags($msg));?></b>
         <?php break;?>
        <?php }?>
        </present>
         <b id="wait"><?php echo($wait);?></b> 秒后为您<a id="href" href="<?php echo($url);?>">跳转</a>
        </p>
    </div>
    <script type="text/javascript">
    (function(){
    var wait = document.getElementById('wait'),href = document.getElementById('href').href;
    var interval = setInterval(function(){
    var time = --wait.innerHTML;
    if(time <= 0) {
    location.href = href;
    clearInterval(interval);
    };
    }, 1000);
    })();
    </script>
    </body>
    </html>