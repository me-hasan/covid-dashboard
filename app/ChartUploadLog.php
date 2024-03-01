<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChartUploadLog extends Model
{
    protected $fillable = ['district_name','date_id', 'status'];

    function allReadyGenerate(){
        return $this->hasOne('App\WeeklyDate', 'date_id', 'date_id');
    }

    function weeklyDate(){
        return $this->hasOne('App\WeeklyDate', 'date_id', 'date_id');
    }

    public function getChangeNameAttribute()
    {
        return $this->cleanDistricName("{$this->district_name}");
    }

    public function cleanDistricName($dist){
        return strtolower(str_replace(' ', '_', str_replace("'", '', $dist)));
    }
}
