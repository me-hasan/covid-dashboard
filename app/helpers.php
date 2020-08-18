<?php

use Illuminate\Support\Facades\DB;

if (! function_exists('en2bnTranslation')) {
    /**
     * English to bangla translation
     */
    function en2bnTranslation($en_text)
    {
        $uppercas_text = strtoupper($en_text);
        $translation = DB::table('translate')->where('word_en', $uppercas_text)->first();
        if(!is_null($translation)){
            return $translation->word_bn;
        } else {
            return $en_text;
        }
    }
}
