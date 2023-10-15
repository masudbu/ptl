<?php

namespace App\Http\Controllers;
use App\Imports\YarndyeingImport;
use App\Exports\YarndyeingExport;
use App\Models\Yarndyeing;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class YarndyeingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $yarndyeings = Yarndyeing::paginate(10);
        return view('dashboard.yarndyeing',compact('yarndyeings'));
    }

    public function yarndyeing_import(){
        Excel::import(new YarndyeingImport, request()->file('excel_file'));
        return redirect()->back();
    }

     public function yarndyeing_export(){
        return Excel::download(new YarndyeingExport,'yd.xlsx');
    }
}
