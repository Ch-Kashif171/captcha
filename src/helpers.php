<?php
use Kashif\Captcha\Captcha;
if (!function_exists('captcha')) {
    /**
     * @return string
     */
    function captcha(): string
    {
        return Captcha::render();
    }
}
if (!function_exists('captcha_verify')) {
    /**
     * @param $text
     * @return bool
     */
    function captcha_verify($text): bool
    {
        if (isset($text)){
            return Captcha::verify($text);
        }
        return false;
    }
}
