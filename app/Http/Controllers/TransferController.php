<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Fabric;
use DB;

class TransferController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
    	$processes = DB::table('process')->get();
       return view('transfer.finishToFinal',compact('processes'));
    }

    public function search(Request $request){
		$dispo_no = (int) $request->get('search');
		//$products=DB::table('production_order')->where('dispo_no','LIKE','%'.$dispo."%")->get()->last();
		$production_order = DB::table('production_order')->select('*')->where('dispo_no', $dispo_no)->get()->first();
		//$products->buyer;
 		return response()->json($production_order);
    }
}
