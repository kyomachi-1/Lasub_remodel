<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\UsersExport;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;

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
        return view('home');
    }
    
    public function export()
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }
    
    public function import(Request $request)
    {
        Excel::import(new UsersImport, $request->file('file'));
        // input name='file'としてフォームを作成するため
        // ファイルメソッドの第一引数 ファイル名は'file'となる
        
        return redirect('/')->with('success', 'All good!');
        
    }
}
