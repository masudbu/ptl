<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Production_order extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'mkt_reff',
        'purchase_order',
        'purchase_order_qty',
        'dispo_no',
        'dispo_finish_qty',
        'dispo_grey_qty',
        'buyer',
        'garments_name',
        'dispo_date',
        'color',
        'process_type',
        'construction',
        'order_type'
    ];
}
