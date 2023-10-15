<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Yarndyeing extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'machine_no',
        'unload_date',
        'buyer_name',
        'order_no',
        'yp',
        'batch_no',
        'yarn_type',
        'color',
        'batch_qty',
        'machine_capacity',
        'buffer_production',
        'remarks',
    ];
}
