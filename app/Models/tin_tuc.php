<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tin_tuc extends Model
{
    protected $fillable =[
        'Ma_Tin_Tuc','Tieu_De','Tom_Tat','Noi_Dung','Ma_Loai','Tu_Khoa','anh_tintuc','Luot_Xem','ngay_dang','Ma_User','tag' 
    ];
    protected $primaryKey = 'Ma_Tin_Tuc';
    protected $table = "tin_tuc";
    public function loaitin(){
        return $this->belongsTo('App\Models\loai_tin_tuc','Ma_Loai','Ma_Loai');
    }
    public function user(){
        return $this->belongsTo('App\Models\User','Ma_User','Ma_User');
    }

    public function binh_luan(){
        return $this->hasMany('App\Models\binh_luan');
    }

    public function danhgia(){
        return $this->hasMany('App\Models\danh_gia','Ma_Tin_Tuc','Ma_Tin_Tuc');
    }

    // public function like_or_dislike(){
    //     return $this->belongsTo('App\Models\like_or_dislike','Ma_Tin_Tuc','Ma_Tin_Tuc');
    // }
    public function likes(){
        return $this->hasMany('App\Models\like_or_dislike','Ma_Tin_Tuc')->sum('like');
    }
    // Dislikes
    public function dislikes(){
        return $this->hasMany('App\Models\like_or_dislike','Ma_Tin_Tuc')->sum('dislike');
    }
    public function tindaluu(){
        return $this->hasMany('App\Models\tin_da_luu','Ma_Tin_Tuc','Ma_Tin_Tuc');
    }

    public function tindadoc(){
        return $this->hasMany('App\Models\tin_da_doc','Ma_Tin_Tuc','Ma_Tin_Tuc');
    }
    use HasFactory;
}
