<?php

namespace Kashif\Kcaptcha;

use Kashif\Kcaptcha\CaptchaBuilder;
use Illuminate\Support\Facades\Session;
use Kashif\Kcaptcha\CaptchaRender;

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