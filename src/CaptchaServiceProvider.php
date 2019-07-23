<?php

namespace Captcha\Kcaptcha;
use Illuminate\Support\ServiceProvider;

class CaptchaServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
    }
    public function register()
    {
    }

}