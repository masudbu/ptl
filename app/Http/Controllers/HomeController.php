<?php
namespace App\Http\Controllers;
use App\Imports\UserImport;
use App\Exports\UsersExport;
use App\Models\User;
use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::get();
        return view('home',compact('users'));
    }

    public function import(){
        Excel::import(new UserImport, request()->file('excel_file'));
        return redirect()->back();
    }

    public function export(){
        return Excel::download(new UsersExport,'users.xlsx');
    }
}
