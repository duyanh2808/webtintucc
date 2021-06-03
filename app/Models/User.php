<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Model
{
    protected $table = "user";
    public function binhluan(){
        return $this->hasMany('App\Models\binh_luan','Ma_User','Ma_User');
    }
    public function danhgia(){
        return $this->hasMany('App\Models\danh_gia','Ma_User','Ma_User');
    }
    
    public function like(){
        return $this->hasMany('App\Models\like_or_dislike','Ma_User','Ma_User');
    }
    public function startup(){
        return $this->hasMany('App\Models\startup','Ma_User','Ma_User');
    }

    public function tindadoc(){
        return $this->hasMany('App\Models\tin_da_doc','Ma_User','Ma_User');
    }
    public function tindaluu(){
        return $this->hasMany('App\Models\tin_da_luu','Ma_User','Ma_User');
    }
}
