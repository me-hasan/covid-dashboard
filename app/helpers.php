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

if (! function_exists('mapDivisionColor')) {
    /**
     * English to bangla translation
     */
    function mapDivisionColor($division_value, $division_name, $filter_division)
    {
        if($filter_division != '' && $division_name != strtolower($filter_division)){
            $color = '#FCAA94';
        }else{
            if($division_value <= 200){
                $color = '#F69475';
            }elseif($division_value > 201 && $division_value <= 500){
                $color = '#F37366';
            }elseif($division_value > 501 && $division_value <= 800){
                $color = '#E5515D';
            }elseif($division_value > 801 && $division_value <= 1000){
                $color = '#CD3E52';
            }elseif($division_value > 1000){
                $color = '#BC2B4C';
            }else{
                $color = '#FCAA94';
            }
        }

        return $color;
    }
}
