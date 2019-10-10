<?php

namespace App\Http\Controllers;
use App\OfficeLog;
use Illuminate\Http\Request;
use App\Fee;
use App\FeeBalance;
use Session;
use App\User;
use Illuminate\Support\Facades\Auth;

class FeesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $notify_offices = User::all()->where('active',0)->where('verified',1)->where('category_id',2);
         $notify_users = User::all()->where('active',0)->where('verified',1)->where('category_id',1);
        $number = 1 ;
        $notify_offices_review = OfficeLog::all()->where('officeAccount', Auth::user()->account_number)->where('status_id', 1);
        return view('admin.website_fee') ->with('number',$number)
                                ->with('fee',Fee::find(1))
                                ->with('notify_user',count($notify_users))
                           ->with('notify_office',count($notify_offices))
                           ->with('notify_offices_review',count($notify_offices_review));
    }

    public function fee_balance()
    {
        $notify_offices = User::all()->where('active',0)->where('verified',1)->where('category_id',2);
         $notify_users = User::all()->where('active',0)->where('verified',1)->where('category_id',1);
        $number = 1 ;
        $notify_offices_review = OfficeLog::all()->where('officeAccount', Auth::user()->account_number)->where('status_id', 1);
        return view('admin.fee_balance') ->with('number',$number)
                                         ->with('fee',FeeBalance::find(1))
                                        ->with('notify_user',count($notify_users))
                           ->with('notify_office',count($notify_offices))
                           ->with('notify_offices_review',count($notify_offices_review));
    }


    public function update(Request $request)
    {
        if(($request->fee != null) and is_numeric( $request->fee)){
            $website_fee = Fee::find(1);
            $website_fee->fee = $request->fee;
            $website_fee->save();
            Session::flash('success', 'تمت العملية بنجاح ');
        }
        

        return redirect()->back();
    }
}
