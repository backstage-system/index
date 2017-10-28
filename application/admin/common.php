<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/12 0012
 * Time: 9:37
 */
use think\Db;

/**
 * 缩略图
 * @param $id
 * @param $width
 * @param $height
 * @return bool|string
 * @author by king
 */
function admin_thumb_img($id,$width,$height,$dir,$filename){
    if(empty($id)) return false;
    //判断缩略图是否存在
    $path = "uploads/{$dir}/thumb/$id/";
    $admin_thumb_name = "$filename{$id}_{$width}_{$height}";
    if(is_file($path.$admin_thumb_name.'.jpg')) return '/'.$path.$admin_thumb_name.'.jpg';
    if(is_file($path.$admin_thumb_name.'.png')) return '/'.$path.$admin_thumb_name.'.png';
    if(is_file($path.$admin_thumb_name.'.gif')) return '/'.$path.$admin_thumb_name.'.gif';
    $img = \think\Db::name('AdminUsers')->where(['id'=>$id])->value('avatar');
    if(empty($img)){    //没有上传图片就返回默认图片
        return '/static/img/default.png';
    }
    //数据库有这个文件路径检查是否有这个文件，如果没有就返回默认图片
    if(!is_file($img)){
        return '/static/img/default.png';
    }
    //如果没有就生成缩略图
    $image = \think\Image::open($img);      //获取图片
    $admin_thumb_name = $admin_thumb_name.'.'.$image->type();  //获取图片类型
    !is_dir($path) && mkdir($path,0777,true); //生成缩略图
    $image->thumb($width,$height,2)->save($path.$admin_thumb_name,NULL,100);
    $img_url = '/'.$path.$admin_thumb_name;
    return $img_url;
}

