<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use PDF;

class RoutecardController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){

    	return view("routecard/routecard");
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
    public function route_card_print(Request $request){
    	//dd($request->get('id'));
		$dispo_no = $request->get('id');
    	$allData =storage_path('data/orders.csv');

        $data1 = $this->csvToArray($allData);
        $mydata = collect($data1)->where('Dispo_No',$dispo_no)->last();

        $data = [
            'title' => 'Daily Production PDF',
            'date' => date('m/d/Y'),
            'routecardArr' => $mydata
        ];

        //$pdf = PDF::loadView('routecard.pdf.routecardprint', $data);
        $pdf = PDF::loadView('routecard.pdf.routecardprint',$data)->setPaper('legal', 'landscape');
     
        //return $pdf->download('productionSlip.pdf');
        return $pdf->stream('routecard.pdf');
    }
}
