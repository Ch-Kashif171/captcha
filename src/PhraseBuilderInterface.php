<?php

namespace Kashif\Captcha;

interface PhraseBuilderInterface
{
    /**
     * Generates  random phrase of given length with given charset
     */
    public function build();

    /**
     * "Niceize" a code
     */
    public function niceize($str);
}
