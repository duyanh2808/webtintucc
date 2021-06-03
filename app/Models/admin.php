<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
class admin extends Authenticatable
{
    public $timestamps = false;
    protected $fillable = [
        'admin_email','admin_password','admin_name','admin_phone','admin_gioitinh' 
    ];
    protected $primaryKey = 'admin_id';
    protected $table = 'admin';
    public function roles(){
        return $this->belongsToMany('App\Models\roles');
    }
    public function getAuthPassword()
    {
        return $this->admin_password;  
    }
    public function hasAnyRoles($roles){
        return null !== $this->roles()->whereIn('name',$roles)->first();

    }
    public function hasRoles($roles){
        return null !== $this->roles()->where('name',$roles)->first();
    }
    public function binh_luan(){
        return $this->hasMany('App\Models\binh_luan');
    }
    public function like_or_dislike(){
        return $this->hasMany('App\Models\like_or_dislike','Ma_Tin_Tuc','Ma_Tin_Tuc');
    }
}
