<?php

namespace App\Exports;

use App\Models\Yarndyeing;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class YarndyeingExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Yarndyeing::select('id','machine_no','buyer_name')->get();
    }

    public function headings() : array {
        return ['id', 'machine_no', 'buyer_name'];
    }
}
