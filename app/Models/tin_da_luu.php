<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tin_da_luu extends Model
{
    protected $table = "tin_da_luu";
    public function user(){
        return $this->belongsTo('App\Models\User','Ma_User','Ma_User');
    }
    public function tintuc(){
        return $this->belongsTo('App\Models\tin_tuc','Ma_Tin_Tuc','Ma_Tin_Tuc');
    }

    use HasFactory;
}
