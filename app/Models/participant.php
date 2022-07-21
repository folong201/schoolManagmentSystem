<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class participant extends Model
{
    use HasFactory;
    function student(){
        return $this->belongsTo('App\Model\User');
    }
    function lesson(){
        return $this->hasMany('App\Model\lesson');
    }
}
