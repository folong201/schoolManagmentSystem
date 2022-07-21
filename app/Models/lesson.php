<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class lesson extends Model
{
    use HasFactory;
    public function teacher(){
        return $this->belongsTo('App/Models/User');
    }
    public function participant(){
        return $this->hasMany('App\Models\participant');
    }
}
