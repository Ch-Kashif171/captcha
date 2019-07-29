<?php

namespace Kashif\Captcha;

use Kashif\Captcha\CaptchaBuilder;
use Illuminate\Support\Facades\Session;
use Kashif\Captcha\CaptchaRender;

class Captcha
{
    use CaptchaRender;

    public static function render(){
        return CaptchaRender::getCaptcha();
    }

    public static function verify($captcha){
       return CaptchaRender::verifyCaptcha($captcha);
    }
}