<?php
use Kashif\Kcaptcha\Captcha;
if (!function_exists('kcaptcha')) {
    /**
     * @return string
     */
    function kcaptcha()
    {
        return Captcha::render();
    }
}
if (!function_exists('verify_kcaptcha')) {
    /**
     * @param $text
     * @return bool
     */
    function verify_kcaptcha($text)
    {
        if (isset($text)){
            return Captcha::verify($text);
        }
        return false;
    }
}