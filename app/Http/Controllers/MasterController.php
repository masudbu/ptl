<?php

namespace App\Http\Controllers;
use App\imports\DispoImport;

use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use App\Models\User;
use DB;

class MasterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
    	$departments = DB::table('departments')->get();
    	$processes = DB::table('process')->get();
        return view('basic_setup.process',compact('departments','processes'));
    }
    public function department_create(){
    	$departments = DB::table('departments')->get();
    	//dd($departments);
    	return view('basic_setup.department', compact("departments"));
    }
    public function department_add(Request $request){
    	$request->validate([
            'dept_name'=>['required','string','max:50'],
            'dept_code'=>['required','string','max:50'],
        ]);
    	$departmentInfo = array();
 		$departmentInfo['user_id']=auth()->user()->id;
        $departmentInfo['dept_name']=$request->get('dept_name');
        $departmentInfo['dept_code']=$request->get('dept_code');
        $departmentInfo['status']=1;
        $departmentInfo['remarks']=$request->get('remarks');
        //dd($departmentInfo);
    	DB::table('departments')->insert($departmentInfo);
    	return redirect()->back();
    }

    public function process_add(Request $request){
    	$request->validate([
            'department_id'=>['required','string','max:50'],
            'process_name'=>['required','string','max:50'],
            'process_code'=>['required','string','max:50'],
        ]);
    	$departmentInfo = array();
 		$departmentInfo['user_id']=auth()->user()->id;
        $departmentInfo['department_id']=$request->get('department_id');
        $departmentInfo['process_name']=$request->get('process_name');
        $departmentInfo['process_code']=$request->get('process_code');
        $departmentInfo['status']=1;
        $departmentInfo['remarks']=$request->get('remarks');
        //dd($departmentInfo);
    	DB::table('process')->insert($departmentInfo);
    	return redirect()->back();
    }

    //Daily Dispo Upload
    public function dailyDispoForm(){

        return view('basic_setup.dispo_upload');
    }

    public function daily_dispo_import(){
        //dd(request()->file('dispo_upload'));
        Excel::import(new DispoImport, request()->file('dispo_upload'));
        return redirect()->back();
    }

    public function machineAddForm(){
        $machines = DB::table('machines')->get();
        return view('basic_setup.machine',compact('machines'));    
    }

    public function machine_add(Request $request){

        $machineInfo = array();
        $machineInfo['user_id']=auth()->user()->id;
        $machineInfo['machine_name']=$request->get('machine_name');
        $machineInfo['machine_code']=$request->get('machine_code');
        $machineInfo['status']=1;
        $machineInfo['remarks']=$request->get('remarks');

        DB::table('machines')->insert($machineInfo);
        return redirect()->back();
    }
}
