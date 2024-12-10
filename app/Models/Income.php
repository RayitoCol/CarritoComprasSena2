<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    use HasFactory;
    public function person(){
        return $this->belongsTo(person::class,'provider_id','id');
    }

    public function user(){
        return $this->belongsTo(user::class,'user_id','id');
    }
}


