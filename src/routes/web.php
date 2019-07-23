<?php

Route::group(['namespace' => 'Captcha\Kcaptcha\Http\Controllers', 'middleware' => ['web']], function(){
    Route::get('k-captcha/{reload}', 'CaptchaController@reloadCaptcha');
});