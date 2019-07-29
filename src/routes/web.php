<?php

Route::group(['namespace' => 'Kashif\Captcha\Http\Controllers', 'middleware' => ['web']], function(){
    Route::get('k-captcha/reload', 'CaptchaController@reloadCaptcha');
});