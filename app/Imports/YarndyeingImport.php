<?php

namespace App\Imports;

use App\Models\Yarndyeing;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class YarndyeingImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Yarndyeing([
            'user_id'=>auth()->user()->id,
            'machine_no'=>$row['machine_no'],
            'unload_date'=>$row['unload_date'],
            'buyer_name'=>$row['buyer_name'],
            'order_no'=>$row['order_no'],
            'yp'=>$row['yp'],
            'batch_no'=>$row['batch_no'],
            'yarn_type'=>$row['yarn_type'],
            'color'=>$row['color'],
            'batch_qty'=>$row['batch_qty'],
            'machine_capacity '=>$row['machine_capacity'],
            'buffer_production'=>$row['buffer_production'],
            'remarks'=>$row['remarks'],
        ]);
    }
}
