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

    function convertEnglishDateToBangla($getDate)
    {
        $castDate = date("j F", strtotime($getDate));
        $engDATE = array('1','2','3','4','5','6','7','8','9','0','January','February','March','April',
        'May','June','July','August','September','October','November','December','Saturday','Sunday',
        'Monday','Tuesday','Wednesday','Thursday','Friday');
        $bangDATE = array('১','২','৩','৪','৫','৬','৭','৮','৯','০','জানুয়ারী','ফেব্রুয়ারী','মার্চ','এপ্রিল','মে',
        'জুন','জুলাই','আগস্ট','সেপ্টেম্বর','অক্টোবর','নভেম্বর','ডিসেম্বর','শনিবার','রবিবার','সোমবার','মঙ্গলবার','
        বুধবার','বৃহস্পতিবার','শুক্রবার' 
        );
        $convertedDATE = str_replace($engDATE, $bangDATE, $castDate);
        return $convertedDATE;
    }
}
