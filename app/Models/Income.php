<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    use HasFactory;
    public function person(){
        return $this->belongsTo(Person::class,'provider_id','id');
    }

    use HasFactory;
    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}
