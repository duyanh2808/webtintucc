<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Carbon\Carbon;

class binh_luan extends Model
{
   // public $timestamps = false;
    protected $fillable = [
        'Ten_binhluan','Ma_Tin_Tuc','Noi_Dung','Ma_traloi','updated_at','created_at'
    ];
    protected $primaryKey = 'Ma_binhluan';
    protected $table = 'binh_luan';
    public function tin_tuc(){
        return $this->belongsTo('App\Models\tin_tuc','Ma_Tin_tuc');
    }
 
}
