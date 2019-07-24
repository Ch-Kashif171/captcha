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

        Blade::directive('captcha', function ($expression) {
            return Captcha::render();
        });
        $this->registerHelpers();
    }
    public function register()
    {
    }

    private function registerHelpers()
    {
        if (file_exists($file = __DIR__ .'/helpers.php'))
        {
            require $file;
        }
    }

}