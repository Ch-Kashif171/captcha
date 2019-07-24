<?php

namespace Kashif\Kcaptcha;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Kashif\Kcaptcha\Captcha;

class CaptchaServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');

        Blade::directive('kcaptcha', function ($expression) {
            return Captcha::render();
        });
    }
    public function register()
    {
    }

}