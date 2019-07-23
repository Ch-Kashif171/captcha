<?php

namespace Kashif\Kcaptcha\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Kashif\Kcaptcha\CaptchaBuilder;
use Illuminate\Support\Facades\Session;

class CaptchaController extends Controller {

    public function reloadCaptcha()
    {
        Session::forget('k-captcha');

        $builder = new CaptchaBuilder();
        $builder->build();

        Session::put("k-captcha",$builder->getPhrase());

        //return response()->json($builder->inline());
        return response()->json($builder->inline());

    }
}