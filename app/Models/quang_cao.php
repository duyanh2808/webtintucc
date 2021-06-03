<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class quang_cao extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'ten_quangcao','link_quangcao','anh_quangcao'
    ];
    protected $primaryKey = 'id_quangcao';
    protected $table = 'quang_cao';
    
}
