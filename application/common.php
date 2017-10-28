<?php
use think\Db;
use PHPMailer\PHPMailer\PHPMailer;
/**
 * 密码MD5 加密
 * @author by king
 */
function encrypt($str){
    return md5(config("AUTH_CODE").$str);
}

/**
 * 检查是否登陆
 * @author by king
 */
function check_login(){
    if(empty(session('user')['id'])){
        return false;
    }else{
        return true;
    }
}

/**
 * 新浪开放api获取ip地址所在地理位置
 * @return array|false|string
 * @author by king
 */
function GetIpLookup($ip = ''){
    if(empty($ip)){
        $ip = GetIp();
    }
    $res = @file_get_contents('http://int.dpool.sina.com.cn/iplookup/iplookup.php?format=js&ip=' . $ip);
    if(empty($res)){ return false; }
    $jsonMatches = array();
    preg_match('#\{.+?\}#', $res, $jsonMatches);
    if(!isset($jsonMatches[0])){ return false; }
    $json = json_decode($jsonMatches[0], true);
    if(isset($json['ret']) && $json['ret'] == 1){
        $json['ip'] = $ip;
        unset($json['ret']);
    }else{
        return false;
    }
    return $json;
}

function GetIp(){
    $realip = '';
    $unknown = 'unknown';
    if (isset($_SERVER)){
        if(isset($_SERVER['HTTP_X_FORWARDED_FOR']) && !empty($_SERVER['HTTP_X_FORWARDED_FOR']) && strcasecmp($_SERVER['HTTP_X_FORWARDED_FOR'], $unknown)){
            $arr = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
            foreach($arr as $ip){
                $ip = trim($ip);
                if ($ip != 'unknown'){
                    $realip = $ip;
                    break;
                }
            }
        }else if(isset($_SERVER['HTTP_CLIENT_IP']) && !empty($_SERVER['HTTP_CLIENT_IP']) && strcasecmp($_SERVER['HTTP_CLIENT_IP'], $unknown)){
            $realip = $_SERVER['HTTP_CLIENT_IP'];
        }else if(isset($_SERVER['REMOTE_ADDR']) && !empty($_SERVER['REMOTE_ADDR']) && strcasecmp($_SERVER['REMOTE_ADDR'], $unknown)){
            $realip = $_SERVER['REMOTE_ADDR'];
        }else{
            $realip = $unknown;
        }
    }else{
        if(getenv('HTTP_X_FORWARDED_FOR') && strcasecmp(getenv('HTTP_X_FORWARDED_FOR'), $unknown)){
            $realip = getenv("HTTP_X_FORWARDED_FOR");
        }else if(getenv('HTTP_CLIENT_IP') && strcasecmp(getenv('HTTP_CLIENT_IP'), $unknown)){
            $realip = getenv("HTTP_CLIENT_IP");
        }else if(getenv('REMOTE_ADDR') && strcasecmp(getenv('REMOTE_ADDR'), $unknown)){
            $realip = getenv("REMOTE_ADDR");
        }else{
            $realip = $unknown;
        }
    }
    $realip = preg_match("/[\d\.]{7,15}/", $realip, $matches) ? $matches[0] : $unknown;
    return $realip;
}

/**
 * 获得用户的真实IP地址
 * @access  public
 * @return  string
 * @author by king
 */
function real_ip() {
    static $realip = NULL;

    if ($realip !== NULL) {
        return $realip;
    }

    if (isset($_SERVER)) {
        if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $arr = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);

            /* 取X-Forwarded-For中第一个非unknown的有效IP字符串 */
            foreach ($arr AS $ip) {
                $ip = trim($ip);

                if ($ip != 'unknown') {
                    $realip = $ip;

                    break;
                }
            }
        } elseif (isset($_SERVER['HTTP_CLIENT_IP'])) {
            $realip = $_SERVER['HTTP_CLIENT_IP'];
        } else {
            if (isset($_SERVER['REMOTE_ADDR'])) {
                $realip = $_SERVER['REMOTE_ADDR'];
            } else {
                $realip = '0.0.0.0';
            }
        }
    } else {
        if (getenv('HTTP_X_FORWARDED_FOR')) {
            $realip = getenv('HTTP_X_FORWARDED_FOR');
        } elseif (getenv('HTTP_CLIENT_IP')) {
            $realip = getenv('HTTP_CLIENT_IP');
        } else {
            $realip = getenv('REMOTE_ADDR');
        }
    }

    preg_match("/[\d\.]{7,15}/", $realip, $onlineip);
    $realip = !empty($onlineip[0]) ? $onlineip[0] : '0.0.0.0';

    return $realip;
}

/**
 * 递归删除文件夹
 * @param $path 文件夹路径
 * @param $delDir true 为true就删除空目录，为false 不删除空目录 ，反正文件是没了
 * @author by king
 */
function delFile($path,$delDir = false){
    if(!is_dir($path)){
        return false;
    }
    $handle = @opendir($path);  //打开文件资源句柄
    if($handle){
        while(($item = readdir($handle)) !== false){

            if($item != "." && $item != ".."){  //去除 . 和 ..目录
                is_dir($path.'/'.$item) ? delFile($path.'/'.$item,$delDir) :unlink("$path/$item");
            }
        }
        closedir($handle); //关闭资源句柄
        if($delDir) return rmdir($path);  //删除空的目录
    }else{
        if(file_exists($path)){  //检查文件或目录是否存在  没有打开资源句柄就直接删除了
            return unlink($path);
        }else{
            return false;
        }
    }
}


/**
 * 处理图片流
 * @author by king
 */
function img($image,$dir){
    $path = ROOT_PATH."public/uploads/".$dir;
    !is_dir($path) && mkdir($path, 0777, true);
    if (preg_match('/^(data:\s*image\/(\w+);base64,)/', $image, $result)){
        $ext = $result[2];
        $name = md5(uniqid()).".{$ext}";
        $filename = $path.'/'.$name;
        if (file_put_contents($filename, base64_decode(str_replace($result[1], '', $image)))){
            return 'uploads/'.$dir.'/'.$name;
        }
    }
}

/**
 * @param $mobile  检查手机号
 * @return bool
 * @author by king
 */
function check_mobile($mobile){
    if(preg_match('/1[34578]\d{9}$/',$mobile))
        return true;
    return false;
}

/**
 * 获取缓存或者更新缓存
 * @param string $config_key 缓存文件名称
 * @param array $data 缓存数据  array('k1'=>'v1','k2'=>'v3')
 * @return array or string or bool
 * @author by king
 */
function kingCache($config_key,$data = array()){
    $param = explode('.', $config_key);
    if(empty($data)){
        //如$config_key=shop_info则获取网站信息数组
        //如$config_key=shop_info.logo则获取网站logo字符串
        $config = cache($param[0],'',TEMP_PATH);//直接获取缓存文件
        if(empty($config)){
            //缓存文件不存在就读取数据库
            $res = Db::name('config')->where("inc_type",$param[0])->select();
            if($res){
                foreach($res as $k=>$val){
                    $config[$val['name']] = $val['value'];
                }
                cache($param[0],$config,TEMP_PATH);
            }
        }
        if(count($param)>1){
            return $config[$param[1]];
        }else{
            return $config;
        }
    }else{
        //更新缓存
        $result =  Db::name('config')->where("inc_type", $param[0])->select();
        if($result){
            foreach($result as $val){
                $temp[$val['name']] = $val['value'];
            }
            foreach ($data as $k=>$v){
                $newArr = array('name'=>$k,'value'=>trim($v),'inc_type'=>$param[0]);
                if(!isset($temp[$k])){
                    Db::name('config')->insert($newArr);//新key数据插入数据库
                }else{
                    if($v!=$temp[$k])
                        Db::name('config')->where("name", $k)->update($newArr);//缓存key存在且值有变更新此项
                }
            }
            //更新后的数据库记录
            $newRes =  Db::name('config')->where("inc_type", $param[0])->select();
            foreach ($newRes as $rs){
                $newData[$rs['name']] = $rs['value'];
            }
        }else{
            foreach($data as $k=>$v){
                $newArr[] = array('name'=>$k,'value'=>trim($v),'inc_type'=>$param[0]);
            }
            Db::name('config')->insertAll($newArr);
            $newData = $data;
        }
        return cache($param[0],$newData,TEMP_PATH);
    }
}

/**
 * 检测是否能够发送短信
 * @param unknown $scene
 * @return multitype:number string
 * @author king
 */
function checkEnableSendSms($scene)
{
    if(empty($scene)){
        return array("status" => -100, "msg" => "参数有误");
    }
    $scenes = config('SEND_SCENE');
    $sceneItem = $scenes[$scene];
    if (!$sceneItem) {
        return array("status" => -100, "msg" => "场景参数'scene'错误!");
    }
    $key = $sceneItem[2];
    $sceneName = $sceneItem[0];
    $config = dominoCache('sms');
    $smsEnable = $config[$key];
    if ($smsEnable == 'false') {
        return array("status" => -100, "msg" => "['$sceneName']发送短信被关闭'");
    }
    //判断是否添加"注册模板"
    $size = Db::name('sms_template')->where("send_scene", $scene)->count('tpl_id');
    if (!$size) {
        return array("status" => -100, "msg" => "请先添加['$sceneName']短信模板");
    }
    return array("status"=>100,"msg"=>"可以发送短信");
}


/**
 * 发送短信逻辑
 * @param unknown $scene
 * @author king
 */
function sendSms($scene, $sender, $params,$unique_id=0){
    $smsModel = new \SmsLogic();
    return $smsModel->sendSms($scene, $sender, $params, $unique_id);
}
/*
 * 发送邮件
 * @author king
 */
function send_email($title,$content,$sender){
    \think\Loader::import('PHPMailer.PHPMailer.PHPMailer.PHPMailer',EXTEND_PATH);
    \think\Loader::import('PHPMailer.PHPMailer.PHPMailer.Exception',EXTEND_PATH);
    \think\Loader::import('PHPMailer.PHPMailer.PHPMailer.SMTP',EXTEND_PATH);
    //判断openssl是否开启
    $openssl_funcs = get_extension_funcs('openssl');
    if(!$openssl_funcs){
        return '请先开启openssl扩展';
    }
    $mail = new PHPMailer();
    $config = kingCache('smtp');
    try {
        // 服务器设置
        $mail->isSMTP(); // 使用SMTP
        $mail->Host = $config['smtp_server']; // 服务器地址
        $mail->SMTPAuth = true; // 开启SMTP验证
        $mail->Username = $config['smtp_user']; // SMTP 用户名（你要使用的邮件发送账号）
        $mail->Password = $config['smtp_pwd']; // SMTP 密码
        $mail->SMTPSecure = 'ssl'; // 开启TLS可选
        $mail->Port =  $config['smtp_port']; // 端口
        $mail->CharSet = 'utf-8';//设置邮件编码
        // 收件人
        $mail->setFrom($config['smtp_user']); // 来自
        //$mail->addAddress('395696661@qq.com'); // 添加一个收件人
        $mail->addAddress($sender); // 可以只传邮箱地址
        // 附件
        //$mail->addAttachment('1.jpg'); // 添加附件
        //$mail->addAttachment('2.zip'); // 可以设定名字
        // 内容
        $mail->isHTML(true); // 设置邮件格式为HTML
        $mail->Subject = $title; //邮件主题
        $mail->Body = $content; //邮件内容
        if ($mail->send()) {
            return true;
        } else {
            return '发送失败: '.$mail->ErrorInfo;
        }
    } catch (\Exception $e) {
        return 'Mailer Error: ' . $mail->ErrorInfo;
    }
}

/**
 *  商品缩略图 给于标签调用 拿出商品表的 original_img 原始图来裁切出来的
 * @param type $goods_id  商品id
 * @param type $width     生成缩略图的宽度
 * @param type $height    生成缩略图的高度
 */
function goods_thum_images($goods_id, $width, $height)
{
    if (empty($goods_id)) return '';

    //判断缩略图是否存在
    $path = "public/uploads/admin/Goods/thumb/$goods_id/";
    $goods_thumb_name = "goods_thumb_{$goods_id}_{$width}_{$height}";

    // 这个商品 已经生成过这个比例的图片就直接返回了
    if (is_file('../'.$path . $goods_thumb_name . '.jpg')) return  '/'.$path . $goods_thumb_name . '.jpg';
    if (is_file('../'.$path . $goods_thumb_name . '.jpeg')) return  '/'.$path . $goods_thumb_name . '.jpeg';
    if (is_file('../'.$path . $goods_thumb_name . '.gif')) return   '/'.$path . $goods_thumb_name . '.gif';
    if (is_file('../'.$path . $goods_thumb_name . '.png')) return   '/'.$path . $goods_thumb_name . '.png';

    $original_img = Db::name('Goods')->cache(false)->where("goods_id", $goods_id)->value('original_img');
    if (empty($original_img)) {
        return '/public/static/images/not_adv.jpg';
    }
//    $ossClient = new \app\common\logic\OssLogic;
//    if (($ossUrl = $ossClient->getGoodsThumbImageUrl($original_img, $width, $height))) {
//        return $ossUrl;
//    }
    $original_img = '.'.$original_img; // 相对路径
    if (!is_file($original_img)) {
        return '/public/static/images/not_adv.jpg';
    }
    try {
        $image = \think\Image::open($original_img);
        $goods_thumb_name = $goods_thumb_name . '.' . $image->type();
        // 生成缩略图
        $path = '../'.$path;
        !is_dir($path) && mkdir($path, 0777, true);
        $image->thumb($width, $height, 2)->save($path . $goods_thumb_name, NULL, 100); //按照原图的比例生成一个最大为$width*$height的缩略图并保存
        //图片水印处理
        $water = kingCache('water');
        if ($water['is_mark'] === 'true') {
            $imgresource =  $path . $goods_thumb_name;
            if ($width > $water['mark_width'] && $height > $water['mark_height']) {  //水印图片大小不能大于原图大小
                if ($water['mark_type'] == '0') {
                    //检查水印图片是否存在
                    $waterPath = "." . $water['mark_img'];
                    if (is_file($waterPath)) {
                        $quality = $water['mark_quality'] ?: 80;
                        $waterTempPath = dirname($waterPath).'/temp_'.basename($waterPath);
                        $image->open($waterPath)->save($waterTempPath, null, $quality);
                        $image->open($imgresource)->water($waterTempPath, $water['sel'], $water['mark_degree'])->save($imgresource);
                        @unlink($waterTempPath);
                    }
                } else {
                    //检查字体文件是否存在,注意是否有字体文件
                    $ttf = '../hgzb.ttf';
                    if (file_exists($ttf)) {
                        $size = $water['mark_txt_size'] ?: 30;
                        $color = $water['mark_txt_color'] ?: '#000000';
                        if (!preg_match('/^#[0-9a-fA-F]{6}$/', $color)) {
                            $color = '#000000';
                        }
                        $transparency = intval((100 - $water['mark_quality']) * (127/100));
                        $color .= dechex($transparency);  //转为16进制
                        $image->open($imgresource)->text($water['mark_txt'], $ttf, $size, $color, $water['sel'])->save($imgresource);
                    }
                }
            }
        }
        $img_url = $path . $goods_thumb_name;
        return $img_url;
    }catch (think\Exception $e){
        return $original_img;
    }
}