<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VisitorTrace extends Model
{
    protected $fillable = [
        'login_at', 'logout_at', 'user_id'
    ];
}
