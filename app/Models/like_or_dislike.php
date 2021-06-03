<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class like_or_dislike extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'admin_id','Ma_Tin_Tuc','Like'
    ];
    protected $primaryKey = 'Ma';
    protected $table = 'like_or_dislike';
    public function tin_tuc(){
        return $this->belongsTo('App\Models\tin_tuc','Ma_Tin_tuc');
    }
    public function admin(){
        return $this->belongsTo('App\Models\admin','admin_id');
    }}
