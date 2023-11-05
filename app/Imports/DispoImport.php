<?php

namespace App\Imports;

use App\Models\Production_order;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class DispoImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Production_order([
            'user_id'=>auth()->user()->id,
            'mkt_reff'=>$row['mkt_reff'],
            'purchase_order'=>$row['purchase_order'],
            'purchase_order_qty'=>$row['purchase_order_qty'],
            'dispo_no'=>$row['dispo_no'],
            'dispo_finish_qty'=>$row['dispo_finish_qty'],
            'dispo_grey_qty'=>$row['dispo_grey_qty'],
            'buyer'=>$row['buyer'],
            'garments_name'=>$row['garments_name'],
            'dispo_date'=>$row['dispo_date'],
            'color'=>$row['color'],
            'process_type'=>$row['process_type'],
            'construction'=>$row['construction'],
            'order_type'=>$row['order_type']
        ]);
    }
}
