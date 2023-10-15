<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Production extends Model
{
    //public $table = 'productions';
    use HasFactory;
    protected $fillable = [
        'production_date',
        'yarndyeing',
        'warping',
        'sizing',
        'weaving',
        'pretreatment',
        'thermosol',
    ];
}
