<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class danh_gia extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'Ma_Tin_Tuc','Sao'
    ];
    protected $primaryKey = 'Ma';
    protected $table = "danh_gia";
    
   
    use HasFactory;
}
