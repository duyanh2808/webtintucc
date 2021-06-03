<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class startup extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'Ten_Startup','Dia_Chi','Website','Lien_He','Avatar','Mo_Ta' 
    ];
    protected $primaryKey = 'Ma_Startup';
    protected $table = 'startup';
    use HasFactory;
}
