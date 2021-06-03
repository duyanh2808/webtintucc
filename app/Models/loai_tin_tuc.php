<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loai_tin_tuc extends Model
{
    protected $table = "loai_tin_tuc";
    public function tin_tuc(){
        return $this->hasMany('App\Models\tin_tuc','Ma_Loai','Ma_loai');
    } 
    use HasFactory;
}
