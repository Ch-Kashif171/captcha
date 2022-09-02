<?php
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Kashif\Captcha\Http\Controllers', 'middleware' => ['web']], function() {
    Route::get('k-captcha/reload', 'CaptchaController@reloadCaptcha');
});
