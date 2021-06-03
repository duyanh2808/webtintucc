<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mentor extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'Ten_mentor','Chuc_vu','anh_mentor','gioi_thieu' 
    ];
    protected $primaryKey = 'Ma_mentor';
    protected $table = 'mentor';
    use HasFactory;
}
