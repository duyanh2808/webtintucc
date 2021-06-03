<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class videos extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'ten_video', 'link_video','desc_video','img_video'
    ];
    protected $primaryKey = 'id_videos';
    protected $table = 'videos';
    use HasFactory;
}
