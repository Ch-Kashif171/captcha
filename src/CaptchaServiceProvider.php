<?php

namespace Kashif\Captcha;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class CaptchaServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->publishes([
            __DIR__.'/image/refresh.png' => public_path('kashif/captcha/image/refresh.png'),
        ], 'kashif');

        $this->loadRoutesFrom(__DIR__.'/routes/web.php');

        Blade::directive('captcha', function ($expression) {
            return Captcha::render();
        });

        $this->registerHelpers();
    }

    private function registerHelpers()
    {
        if (file_exists($file = __DIR__ .'/helpers.php')) {
            require $file;
        }
    }

}
