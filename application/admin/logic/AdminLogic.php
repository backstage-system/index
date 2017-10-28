<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/13 0013
 * Time: 9:13
 */

namespace app\admin\logic;
use app\admin\controller\Adminbase;
use think\Db;
class AdminLogic extends Adminbase {
    protected $_iauth = [   //小写 免权限,模块名/控制器/方法
        'admin/logic/send_validate_code',
    ];
    /**
     * 前端发送短信方法: WAP/PC 共用发送方法
     * @author king
     */
    public function send_validate_code(){
        if($this->request->isPost()){
            $this->send_scene = config('SEND_SCENE');
            $type = input('type');        //发送类型 一般为字符串mobile
            $scene = input('scene');    //发送短信验证码使用场景
            $mobile = input('mobile');  //手机号
//            $sender = input('send');   //发送的手机号还是邮箱
            //$verify_code = input('verify_code');          //图像验证码
//            $mobile = !empty($mobile) ? $mobile : $sender;
            $session_id = input('unique_id',session_id());
            session("scene", $scene);
            //注册
            //        if($scene == 1 && !empty($verify_code)){
            //            $verify = new Captcha();
            //            if (!$verify->check($verify_code, 'user_reg')) {
            //                exit(json_encode(array('status'=>-1,'msg'=>'图像验证码错误')));
            //            }
            //        }
            if ($type == 'email') {
                //            //发送邮件验证码
                //            $logic = new UsersLogic();
                //            $res = $logic->send_email_code($sender);
                //            exit(json_encode($res));
            } else {
                //发送短信验证码
                $res = checkEnableSendSms($scene);      //查看是否可以发送短信
                if ($res['status'] != 100) {
                    exit(json_encode($res));
                }
                //判断是否存在验证码
                $data = Db::name('sms_log')->where(array('mobile' => $mobile, 'status' => 1))->order('id DESC')->find();
                //获取时间配置
                $sms_time_out = 60;
                //120秒以内不可重复发送
                if ($data && (time() - $data['add_time']) < $sms_time_out) {
                    exit(json_encode(array('status' => -1, 'msg' =>$sms_time_out. '秒内不允许重复发送')));
                }
                //随机一个验证码
                $code = rand(1000, 9999);

                $user = session('user');
                if ($scene == 6) {
                    if (!$user['user_id']) {
                        //登录超时
                        exit(json_encode(array('status' => -1, 'msg' => '登录超时')));
                    }
                    $params = array('code' => $code);
                    if ($user['nickname']) {
                        $params['user_name'] = $user['nickname'];
                    }
                }
                $params['code'] = $code;
                //发送短信
                $resp = sendSms($scene, $mobile, $params, $session_id);
                if ($resp['status'] == 1) {
                    //发送成功, 修改发送状态位成功
                    Db::name('sms_log')->where(array('mobile' => $mobile, 'code' => $code, 'session_id' => $session_id, 'status' => 0))->update(array('status' => 1));
                    $return_arr = array('status' => 1, 'msg' => '发送成功,请注意查收');
                } else {
                    $return_arr = array('status' => -1, 'msg' => '发送失败' . $resp['msg']);
                }
                exit(json_encode($return_arr));
            }
        }
    }
}