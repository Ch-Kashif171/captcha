<?php

namespace Kashif\Captcha\Http\Controllers;

use App\Http\Controllers\Controller;
use Kashif\Captcha\CaptchaBuilder;
use Illuminate\Support\Facades\Session;

class CaptchaController extends Controller {

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function reloadCaptcha()
    {
        Session::forget('k-captcha');
        $builder = new CaptchaBuilder();
        $builder->build();
        Session::put("k-captcha",$builder->getPhrase());

        return response()->json($builder->inline());

    }
}