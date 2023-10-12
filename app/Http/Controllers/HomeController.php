<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

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

    // super admin's dashboard
    public function mydashboard()
    {
        $knowledgebases = DB::table('knowledgebases')->count();
        $users = DB::table('users')->count();
        $sites = DB::table('sites')->count();
        $equipments = DB::table('equipments')->count();
        //$users = DB::table('users')->count();
        //$users = DB::table('users')->count();
        //$users = DB::table('users')->count();
        //$users = DB::table('users')->count();


        return view('mydashboard', compact('knowledgebases', 'users', 'sites', 'equipments'));
    }

    // super admin's extension
    public function myextension()
    {
        
        return view('myextension', compact('severitys', 'statuss', 'req_categorys', 'reactions', 'types'));
    }
}
