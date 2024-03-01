<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WeeklyDate extends Model
{
    function notGenerated(){
        return $this->hasOne('App\NewsBulletinLog', 'date_id', 'date_id');
    }
}
