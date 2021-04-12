<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;

if (! function_exists('en2bnTranslation')) {
    /**
     * English to bangla translation
     */
    function en2bnTranslation($en_text)
    {
        $uppercas_text = strtoupper($en_text);

        // $translation= cache()->rememberForever('translate.'.$uppercas_text,  function () use($uppercas_text) {
        //     return DB::table('translate')->where('word_en', $uppercas_text)->first();
        // });

        $translation= DB::table('translate')->where('word_en', $uppercas_text)->first();


        if(!is_null($translation)){
            return $translation->word_bn;
        } else {
            return $en_text;
        }
    }
}

if (! function_exists('thousandSeparator')) {
    /**
     * thousand Separator
     */
    function thousandSeparator($en_number)
    {
        $bn = ["১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯", "০"];
        $en = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "0"];

        $separate_data = number_format( abs($en_number) , 0 , '.' , ',' );
        $bn_number = str_replace($en, $bn, $separate_data);

        return $bn_number;
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
        'Monday','Tuesday','Wednesday','Thursday','Friday', 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
        $bangDATE = array('১','২','৩','৪','৫','৬','৭','৮','৯','০','জানুয়ারী','ফেব্রুয়ারী','মার্চ','এপ্রিল','মে',
        'জুন','জুলাই','আগস্ট','সেপ্টেম্বর','অক্টোবর','নভেম্বর','ডিসেম্বর','শনিবার','রবিবার','সোমবার','মঙ্গলবার','
        বুধবার','বৃহস্পতিবার','শুক্রবার', 'জানুয়ারী','ফেব্রুয়ারী','মার্চ','এপ্রিল','মে',
        'জুন','জুলাই','আগস্ট','সেপ্টেম্বর','অক্টোবর','নভেম্বর','ডিসেম্বর'
        );
        $convertedDATE = str_replace($engDATE, $bangDATE, $castDate);
        return $convertedDATE;
    }
    if(!function_exists('convertEnglishDigitToBangla')) {
        function convertEnglishDigitToBangla($string)
        {
            $formattedData = str_replace(['1', '2', '3', '4', '5', '6', '7', '8', '9', '0', '-', '.',','], ['১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯', '০', '', '.',','], $string);
            return $formattedData;

        }
    }

    if(!function_exists('convertEnglishMonthDateToBangla')) {
        function convertEnglishMonthDateToBangla($castDate)
        {
            $engDATE = array('1','2','3','4','5','6','7','8','9','0','January','February','March','April',
                'May','June','July','August','September','October','November','December','Saturday','Sunday',
                'Monday','Tuesday','Wednesday','Thursday','Friday', 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
            $bangDATE = array('১','২','৩','৪','৫','৬','৭','৮','৯','০','জানুয়ারী','ফেব্রুয়ারী','মার্চ','এপ্রিল','মে',
                'জুন','জুলাই','আগস্ট','সেপ্টেম্বর','অক্টোবর','নভেম্বর','ডিসেম্বর','শনিবার','রবিবার','সোমবার','মঙ্গলবার','
        বুধবার','বৃহস্পতিবার','শুক্রবার', 'জানুয়ারী','ফেব্রুয়ারী','মার্চ','এপ্রিল','মে',
                'জুন','জুলাই','আগস্ট','সেপ্টেম্বর','অক্টোবর','নভেম্বর','ডিসেম্বর'
            );
            $convertedDATE = str_replace($engDATE, $bangDATE, $castDate);
            return $convertedDATE;
        }
    }

    if(!function_exists('getComponentName'))
    {
        function getComponentName()
        {
            return [
                '101'=> 'সংক্রমণের ক্রমবর্ধমান দৈনিক পরিবর্তন',
                '201'=> 'অঞ্চল তুলনা',
                '202'=> 'সংক্রমণের ক্রমবর্ধমান পরিবর্তন',
                '301'=> 'পরীক্ষা বনাম আক্রান্ত',
                '302'=> 'বিগত ১৪ দিনের সংক্রমণ ও সংক্রমণের হার',
                '303'=> 'পরীক্ষা ভিত্তিক ঝুঁকি',
                '304'=> 'দক্ষিণ এশিয়ার দেশগুলোতে পরীক্ষার তুলনা',
                '401'=> 'গত ৪ সপ্তাহের ঝুঁকি বিবেচনায় দেশের ৬৪টি জেলার তুলনামূলক অবস্থান',
                '402'=> 'গত ২ সপ্তাহের সনাক্তের ভিত্তিতে দেশের ৬৪টি জেলার তুলনামূলক অবস্থান',
                '501'=> 'বয়স-ভিত্তিক আক্রান্ত ও মৃত্যু সংখ্যার তুলনা',
                '601'=> 'কোভিড হাসপাতালসমূহের ধারণ ক্ষমতা ও ব্যবহার',
                '701'=> 'ঢাকার সংক্রমণের হার',
            ];
        }
    }

    function makecomma($input)
        {
            // This function is written by some anonymous person - I got it from Google
            if(strlen($input)<=2)
            { return $input; }
            $length=substr($input,0,strlen($input)-2);
            $formatted_input = makecomma($length).",".substr($input,-2);
            return $formatted_input;
        }

    if(!function_exists('formatInBanglaStyle'))
    {


        function formatInBanglaStyle($num){
            // This is my function
            $pos = strpos((string)$num, ".");
            if ($pos === false) { $decimalpart="00";}
            else { $decimalpart= substr($num, $pos+1, 2); $num = substr($num,0,$pos); }

            if(strlen($num)>3 & strlen($num) <= 12){
                        $last3digits = substr($num, -3 );
                        $numexceptlastdigits = substr($num, 0, -3 );
                        $formatted = makecomma($numexceptlastdigits);
                        $stringtoreturn = $formatted.",".$last3digits ;
            }elseif(strlen($num)<=3){
                        $stringtoreturn = $num;
            }elseif(strlen($num)>12){
                        $stringtoreturn = number_format($num, 2);
            }

            if(substr($stringtoreturn,0,2)=="-,"){$stringtoreturn = "-".substr($stringtoreturn,2 );}

        $bn = ["১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯", "০"];
        $en = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "0"];

   
        $bn_number = str_replace($en, $bn, $stringtoreturn);

        return $bn_number;

            //return $stringtoreturn;
        }


    }


}
