<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function login(){
        $this->show();
    }
    public function verify(){
        $config= array(
            'fontSize'    =>   19,    // 验证码字体大小   
            'length'      =>   4,     // 验证码位数    
            'useNoise'    =>   false, // 关闭验证码杂点
            'imageW'      =>   130 ,      //验证码宽度 设置为0为自动计算 
            'imageH'      =>    40 ,    //验证码高度 设置为0为自动计算 
        );
        ob_clean();
        $Verify = new\Think\Verify($config);
        $Verify->codeSet = '0123456789'; 
        $Verify->entry();
     }
}