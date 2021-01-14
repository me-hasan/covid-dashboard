<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mail extends Model
{
    
   /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['first_name', 'last_name', 'designation', 'location', 'phone', 'mail', 'is_active'];
}
