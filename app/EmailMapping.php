<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmailMapping extends Model
{
    
    function ccEmail(){
        return $this->hasMany('App\CcEmail', 'to_addr_id', 'id');
    }
}
