<?php

Route::group(['namespace' => 'Kashif\Kcaptcha\Http\Controllers', 'middleware' => ['web']], function(){
    Route::get('k-captcha/reload', 'CaptchaController@reloadCaptcha');
});