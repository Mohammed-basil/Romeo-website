<?php

namespace App\Http\Controllers;
use App\OfficeLog;
use Illuminate\Http\Request;
use App\Currency;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Fee;
use App\User;

class BuySellController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $currencies = Currency::all();
        $number = 1 ;
        $notify_offices = User::all()->where('active',0)->where('verified',1)->where('category_id',2);
         $notify_users = User::all()->where('active',0)->where('verified',1)->where('category_id',1);
         $notify_offices_review = OfficeLog::all()->where('officeAccount', Auth::user()->account_number)->where('status_id', 1);
        return view('admin.coin')->with('currencies',$currencies)
                                          ->with('number',$number)
                                          ->with('notify_user',count($notify_users))
                           ->with('notify_office',count($notify_offices))
                           ->with('notify_offices_review',count($notify_offices_review));
    }

  
    public function update(Request $request,$id)
    {
        $this->validate($request,[
            'sale'=>'required|max:20',
            'buy'=>'required|max:20'

        ]);

      if(is_numeric( $request->buy) and is_numeric( $request->sale)) {
        $currency = Currency::find($id);
        $currency->buy = $request->buy;
        $currency->sale = $request->sale;
        
        $currency->save();
        Session::flash('success','تمت عملية التعديل بنجاح ');
      }
        return redirect()->back();

    }
}
