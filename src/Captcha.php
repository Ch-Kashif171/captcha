<?php

namespace Kashif\Captcha;

use Kashif\Captcha\CaptchaBuilder;
use Illuminate\Support\Facades\Session;
use Kashif\Captcha\CaptchaRender;

class Captcha
{
    use CaptchaRender;

    /**
     * @return string
     */
    public static function render(): string
    {
        return CaptchaRender::getCaptcha();
    }

    /**
     * @param $captcha
     * @return bool
     */
    public static function verify($captcha): bool
    {
       return CaptchaRender::verifyCaptcha($captcha);
    }
}
