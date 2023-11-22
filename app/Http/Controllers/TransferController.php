<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
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
        $machines = DB::table('machines')->get();
        $finish_to_final = DB::table('finish_to_final')->orderBy('id','DESC')->get();
       return view('transfer.finishToFinal',compact('processes','machines','finish_to_final'));
    }
    function csvToArray($filename = '', $delimiter = ',')
    {
        if (!file_exists($filename) || !is_readable($filename))
            return false;

        $header = null;
        $data = array();
        if (($handle = fopen($filename, 'r')) !== false)
        {
            while (($row = fgetcsv($handle, 1000, $delimiter)) !== false)
            {
                if (!$header)
                    $header = $row;
                else
                    $data[] = array_combine($header, $row);
            }
            fclose($handle);
        }

        return $data;
    }
    public function search(Request $request){
		$dispo_no = $request->get('search');
		//$products=DB::table('production_orders')->where('dispo_no','LIKE','%'.$dispo_no."%")->get()->last();
		//$production_order = DB::table('production_orders')->select('*')->where('dispo_no', $dispo_no)->get();
        //dd($products);
		//$products->buyer;

       /* $allData =file_get_contents(storage_patch('mydata/orders.csv'));
        $data = collect($allData)->firstWhere('dispo_no',$dispo_no);

        dd($data);*/


        $allData =storage_path('data/orders.csv');

        $data = $this->csvToArray($allData);
        $mydata = collect($data)->where('Dispo_No',$dispo_no)->last();
 		return response()->json($mydata);
    }

    public function finishToFinalTransfer(Request $request){

        $transferData = array();

        $transferData['user_id']=auth()->user()->id;
        $transferData['buyer_name']=$request->get('buyer_name');
        $transferData['order_qty']=$request->get('order_qty');
        $transferData['construction_name']=$request->get('construction_name');
        $transferData['order_type']=$request->get('order_type');
        $transferData['transfer_type']=$request->get('transfer_type');
        $transferData['transfer_date']=$request->get('transfer_date');
        $transferData['order_no']=$request->get('order_no');
        $transferData['batch_no']=strtoupper($request->get('batch_no'));
        $transferData['transfer_qty']=$request->get('transfer_qty');
        $transferData['book_no']=$request->get('book_no');
        $transferData['batcher_no']=$request->get('batcher_no');
        $transferData['last_process']=$request->get('last_process');
        $transferData['last_machine']=$request->get('last_machine');
        $transferData['remarks']=$request->get('remarks');
        $transferData['created_at']=now();
        $transferData['updated_at']=now();
        
        DB::table('finish_to_final')->insert($transferData);
        return redirect()->back();
    }
}
