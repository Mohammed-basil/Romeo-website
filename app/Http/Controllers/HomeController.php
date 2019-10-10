<?php

namespace App\Http\Controllers;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       /* $notify_offices = User::where('active',0)->where('verified',1)->where('category_id',2);
         $notify_users = User::where('active',0)->where('verified',1)->where('category_id',1);
         $notify_offices_review = OfficeLog::all()->where('officeAccount', Auth::user()->account_number)->where('status_id', 1);*/
        return view('home');
        
        /*->with('notify',count($notify_users))
                           ->with('notify',count($notify_offices))*/
    }
}
