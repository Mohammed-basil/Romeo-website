<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Log;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\User;
use App\Office;
use App\OfficeLog;
use App\Exchangelog;

class SearchController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    ////////////////////////////////////////////////search in user //////////////////////////////
    function depositlogs(Request $request)
    {
     if($request->ajax())
     {
        $user = Auth::user();
            $query = $request->get('query');
            $query = str_replace(" ", "%", $query);
      $deposit =Log::orderBy('id', 'desc')->where('receiverAccount',$user->account_number)
      ->where(function ($s) use ($query) {$s->where('id', 'like', '%'.$query.'%')
                    ->orWhere('senderAccount', 'like', '%'.$query.'%')
                    ->orWhere('senderName', 'like', '%'.$query.'%')
                    ->orWhere('coin', 'like', '%'.$query.'%')
                    ->orWhere('balance', 'like', '%'.$query.'%');})
                    ->paginate(5);
      return view('user.search.depositlogs', compact('deposit'))->render();
     }
    }


    function exchangelogs(Request $request)
    {
     if($request->ajax())
     {

        $user = Auth::user();
            $query = $request->get('query');
            $query = str_replace(" ", "%", $query);
      $logs =Auth::user()->logs()
      ->where(function ($s) use ($query) {$s->where('id', 'like', '%'.$query.'%')
                    ->orWhere('from', 'like', '%'.$query.'%')
                    ->orWhere('to', 'like', '%'.$query.'%')
                    ->orWhere('operation', 'like', '%'.$query.'%')
                    ->orWhere('amount_from', 'like', '%'.$query.'%')
                    ->orWhere('amount_to', 'like', '%'.$query.'%')
                    ->orWhere('sale', 'like', '%'.$query.'%')
                    ->orWhere('buy', 'like', '%'.$query.'%');})
                    ->orderBy('id', 'desc')->paginate(5);
      return view('user.search.exchangelogs', compact('logs'))->render();
     }
    }


    function officelogs(Request $request)
    {
     if($request->ajax())
     {
        $user = Auth::user();
        $query = $request->get('query');
        $query = str_replace(" ", "%", $query);
        if(Auth::user()->category_id==1){
          $office =OfficeLog::where('senderAccount',$user->account_number)
          ->where(function ($s) use ($query) {$s->where('id', 'like', '%'.$query.'%')
          ->orWhere('officeAccount', 'like', '%'.$query.'%')
          ->orWhere('officeName', 'like', '%'.$query.'%')
          ->orWhere('reciverName', 'like', '%'.$query.'%')
          ->orWhere('reciverID', 'like', '%'.$query.'%')
          ->orWhere('reciverPhone', 'like', '%'.$query.'%')
          ->orWhere('coin', 'like', '%'.$query.'%')
          ->orWhere('balance_before_fee', 'like', '%'.$query.'%')
          ->orWhere('office_fee', 'like', '%'.$query.'%')
          ->orWhereHas('status', function ($s) use ($query) {
            $s->where('status', 'like',  '%'.$query.'%');
        });})
        ->orderBy('id', 'desc')->paginate(5);
        }
        elseif(Auth::user()->category_id==2){
          $office =OfficeLog::where('officeAccount',$user->account_number)
          ->where(function ($s) use ($query) {$s->where('id', 'like', '%'.$query.'%')
          ->orWhere('senderAccount', 'like', '%'.$query.'%')
          ->orWhere('senderName', 'like', '%'.$query.'%')
          ->orWhere('reciverName', 'like', '%'.$query.'%')
          ->orWhere('reciverID', 'like', '%'.$query.'%')
          ->orWhere('reciverPhone', 'like', '%'.$query.'%')
          ->orWhere('coin', 'like', '%'.$query.'%')
          ->orWhere('balance_before_fee', 'like', '%'.$query.'%')
          ->orWhere('office_fee', 'like', '%'.$query.'%')
          ->orWhereHas('status', function ($s) use ($query) {
            $s->where('status', 'like',  '%'.$query.'%');
        });})->orderBy('id', 'desc')->paginate(5);
        }
      return view('user.search.officelogs', compact('office'))->render();
     }
    }


    function withdrawlogs(Request $request)
    {
     if($request->ajax())
     {
        $user = Auth::user();
            $query = $request->get('query');
            $query = str_replace(" ", "%", $query);
      $withdrawals =Log::where('senderAccount',$user->account_number)
                    ->where(function ($s) use ($query) { $s->where('id', 'like', '%'.$query.'%')
                    ->orWhere('receiverAccount', 'like', '%'.$query.'%')
                    ->orWhere('receiverName', 'like', '%'.$query.'%')
                    ->orWhere('coin', 'like', '%'.$query.'%')
                    ->orWhere('balance', 'like', '%'.$query.'%');})
                    ->orderBy('id', 'desc')->paginate(5);
      return view('user.search.withdrawlogs', compact('withdrawals'))->render();
     }
    }
    function office(Request $request)
    {
     if($request->ajax())
     {
            $query = $request->get('query');
            $query = str_replace(" ", "%", $query);
            
      $offices =User::where('verified',1)->where('active',1)->where('category_id',2)
      ->where(function ($s) use ($query) { $s->WhereHas('office', function ($s) use ($query) {
        $s->where('office_name', 'like', '%'.$query.'%')->orWhere('fee', 'like', '%'.$query.'%')->orWhere('address', 'like', '%'.$query.'%');
    })->orWhereHas('country', function ($s) use ($query) {
        $s->where('name', 'like',  '%'.$query.'%');
    });})
      ->orderBy('id', 'desc')->paginate(5);
      return view('user.search.office', compact('offices'))->render();
     }
    }

    ////////////////////////////////////////////////////////////////////////////////////
    ////////////////////////////////////////// search in admin //////////////////////////
    function admin_logs(Request $request)
    {
     if($request->ajax())
     {
            $query = $request->get('query');
            $query = str_replace(" ", "%", $query);
      $logs =Log::where('id', 'like', '%'.$query.'%')
      ->orWhere('senderAccount', 'like', '%'.$query.'%')
                    ->orWhere('receiverAccount', 'like', '%'.$query.'%')
                    ->orWhere('senderName', 'like', '%'.$query.'%')
                    ->orWhere('receiverName', 'like', '%'.$query.'%')
                    ->orWhere('coin', 'like', '%'.$query.'%')
                    ->orWhere('balance', 'like', '%'.$query.'%')
                    ->orderBy('id', 'desc')->paginate(5);
      return view('admin.search.logs', compact('logs'))->render();
     }
    }

    function admin_exchangelogs(Request $request)
    {
     if($request->ajax())
     {
        $user = Auth::user();
            $query = $request->get('query');
            $query = str_replace(" ", "%", $query);
      $exchangelogs =Exchangelog::where('id', 'like', '%'.$query.'%')
      ->orWhere('account_number', 'like', '%'.$query.'%')
      ->orWhere('from', 'like', '%'.$query.'%')
      ->orWhere('to', 'like', '%'.$query.'%')
      ->orWhere('operation', 'like', '%'.$query.'%')
      ->orWhere('amount_from', 'like', '%'.$query.'%')
      ->orWhere('amount_to', 'like', '%'.$query.'%')
      ->orWhere('sale', 'like', '%'.$query.'%')
      ->orWhere('buy', 'like', '%'.$query.'%')
      ->orderBy('id', 'desc')->paginate(5);
      return view('admin.search.exchangelogs', compact('exchangelogs'))->render();
     }
    }

    function admin_officelogs(Request $request)
    {
     if($request->ajax())
     {
        $user = Auth::user();
            $query = $request->get('query');
            $query = str_replace(" ", "%", $query);
      $office_logs =OfficeLog::where('id', 'like', '%'.$query.'%')
      ->orWhere('senderAccount', 'like', '%'.$query.'%')
      ->orWhere('senderName', 'like', '%'.$query.'%')
      ->orWhere('officeAccount', 'like', '%'.$query.'%')
      ->orWhere('officeName', 'like', '%'.$query.'%')
      ->orWhere('reciverName', 'like', '%'.$query.'%')
      ->orWhere('reciverID', 'like', '%'.$query.'%')
      ->orWhere('reciverPhone', 'like', '%'.$query.'%')
      ->orWhere('coin', 'like', '%'.$query.'%')
      ->orWhere('balance_before_fee', 'like', '%'.$query.'%')
      ->orWhere('office_fee', 'like', '%'.$query.'%')
      ->orWhereHas('status', function ($s) use ($query) {
        $s->where('status', 'like',  '%'.$query.'%');
    })
      ->orderBy('id', 'desc')->paginate(5);
      return view('admin.search.officelogs', compact('office_logs'))->render();
     }
    }


    function admin_users(Request $request)
    {
        if($request->ajax())
        {
           $user = Auth::user();
               $query = $request->get('query');
               $query = str_replace(" ", "%", $query);
         $users =User::whereNotIn('id',[1,Auth::user()->id])
         ->where('verified',1)
         ->where('category_id',1)
         ->where('active',1)
         ->where(function ($s) use ($query) { 
            $s->where('id', 'like', '%'.$query.'%')
         ->orWhere('first_name', 'like', '%'.$query.'%')
         ->orWhere('last_name', 'like', '%'.$query.'%')
         ->orWhere('account_number', 'like', '%'.$query.'%')
         ->orWhere('phonenum', 'like', '%'.$query.'%')
         ->orWhereHas('point', function ($s) use ($query) {
            $s->where('USD', 'like',  '%'.$query.'%')
            ->orWhere('NIS', 'like',  '%'.$query.'%')
            ->orWhere('SAR', 'like',  '%'.$query.'%')
            ->orWhere('JOD', 'like',  '%'.$query.'%');
        })
         ->orWhereHas('country', function ($s) use ($query) {
           $s->where('name', 'like',  '%'.$query.'%');
       });})
         ->orderBy('id', 'desc')->paginate(5);
         return view('admin.search.users', compact('users'))->render();
        }
    }


    function admin_offices(Request $request)
    {
        if($request->ajax())
        {
           $user = Auth::user();
               $query = $request->get('query');
               $query = str_replace(" ", "%", $query);
         $offices =User::whereNotIn('id',[1,Auth::user()->id])
         ->where('verified',1)
         ->where('category_id',2)
         ->where('active',1)
         ->where(function ($s) use ($query) { 
            $s->where('id', 'like', '%'.$query.'%')
         ->orWhere('first_name', 'like', '%'.$query.'%')
         ->orWhere('last_name', 'like', '%'.$query.'%')
         ->orWhere('account_number', 'like', '%'.$query.'%')
         ->orWhere('phonenum', 'like', '%'.$query.'%')
         ->orWhereHas('point', function ($s) use ($query) {
            $s->where('USD', 'like',  '%'.$query.'%')
            ->orWhere('NIS', 'like',  '%'.$query.'%')
            ->orWhere('SAR', 'like',  '%'.$query.'%')
            ->orWhere('JOD', 'like',  '%'.$query.'%');
        })
         ->orWhereHas('country', function ($s) use ($query) {
           $s->where('name', 'like',  '%'.$query.'%');
       })
       ->orWhereHas('office', function ($s) use ($query) {
        $s->where('office_name', 'like',  '%'.$query.'%')
        ->orwhere('address', 'like',  '%'.$query.'%');
    });})
         ->orderBy('id', 'desc')->paginate(5);
         return view('admin.search.offices', compact('offices'))->render();
        }
    }


    function admin_users_active(Request $request)
    {
        if($request->ajax())
        {
           $user = Auth::user();
               $query = $request->get('query');
               $query = str_replace(" ", "%", $query);
         $users =User::whereNotIn('id',[1,Auth::user()->id])
         ->where('verified',1)
         ->where('category_id',1)
         ->where('active',0)
         ->where(function ($s) use ($query) { 
            $s->where('id', 'like', '%'.$query.'%')
         ->orWhere('first_name', 'like', '%'.$query.'%')
         ->orWhere('last_name', 'like', '%'.$query.'%')
         ->orWhere('account_number', 'like', '%'.$query.'%')
         ->orWhereHas('country', function ($s) use ($query) {
           $s->where('name', 'like',  '%'.$query.'%');
       });})
         ->orderBy('id', 'desc')->paginate(5);
         return view('admin.search.users_active', compact('users'))->render();
        }
    }


    function admin_offices_active(Request $request)
    {
        if($request->ajax())
        {
           $user = Auth::user();
               $query = $request->get('query');
               $query = str_replace(" ", "%", $query);
         $offices =User::whereNotIn('id',[1,Auth::user()->id])
         ->where('verified',1)
         ->where('category_id',2)
         ->where('active',0)
         ->where(function ($s) use ($query) { 
            $s->where('id', 'like', '%'.$query.'%')
         ->orWhere('first_name', 'like', '%'.$query.'%')
         ->orWhere('last_name', 'like', '%'.$query.'%')
         ->orWhere('account_number', 'like', '%'.$query.'%')
         ->orWhereHas('country', function ($s) use ($query) {
           $s->where('name', 'like',  '%'.$query.'%');
       })
       ->orWhereHas('office', function ($s) use ($query) {
        $s->where('office_name', 'like',  '%'.$query.'%')
        ->orwhere('address', 'like',  '%'.$query.'%');
    });})
         ->orderBy('id', 'desc')->paginate(5);
         return view('admin.search.offices_active', compact('offices'))->render();
        }
    }

}
