<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Point;
use App\User;
use App\Log;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Notification;
use App\OfficeLog;



class BalanceController extends Controller
{
  
    public function __construct()
    {
        $this->middleware('auth');
    }

   public function index ()
   {
    $user_balance=Auth::user()->point;
    $currence= \App\Coin::all();
    $notify_offices = User::all()->where('active',0)->where('verified',1)->where('category_id',2);
         $notify_users = User::all()->where('active',0)->where('verified',1)->where('category_id',1);
         $notify_offices_review = OfficeLog::all()->where('officeAccount', Auth::user()->account_number)->where('status_id', 1);
       return view('user.send')->with('balance',$user_balance)
                                  ->with('currencies',$currence)
                                   ->with('notify_user',count($notify_users))
                           ->with('notify_office',count($notify_offices))
                           ->with('notify_offices_review',count($notify_offices_review));
   }

  

   public function confirm(Request $request)
   {
      // dd($request->all());

       $this->validate($request,[
        'account_number'=>'required|size:8',
        'coin'=>'required|string|max:255',
        'balance'=>'required|max:20',
        
     ]);
$sender= Auth::user();
$sender_balance = Auth::user()->point;
$receiver=User::all()->where('account_number',$request->account_number)->first();
if (count($receiver)==0 || Auth::user()->account_number == $request->account_number ) {
    Session::flash('info','الحساب غير موجود ');
}
else{
    $receiver_balance=$receiver->point;


    $coin = $request->coin;
     
    $balance = $request->balance;
    $coin_en = \App\Coin::all()->where('ar', $coin)->first();
    $coin = $coin_en->en;


  

    if ($balance <= $sender_balance->$coin  &&  $balance > 0 && is_numeric($balance)) {
        $receiver_balance->$coin =   $receiver_balance->$coin + $balance;
        $sender_balance->$coin =  $sender_balance->$coin -  $balance;

        $logs = Log::create([
       'senderAccount' => $sender->account_number,
       'senderName' => $sender->first_name.' '.$sender->last_name,
       'receiverAccount' =>$request->account_number,
       'receiverName' =>$receiver->first_name.' '.$receiver->last_name,
       'balance' => $request->balance,
        'coin' =>  $request->coin
    ]);
 

     Notification::send($receiver , new \App\Notifications\NewDeposit($logs));
   Notification::send($sender , new \App\Notifications\NewWithdrawal());

        $receiver_balance->save();
        $sender_balance->save();
        $logs->save();

       
        
        Session::flash('success', 'تمت عملية الارسال بنجاح ');
    } elseif ($balance > $sender_balance->$coin) {
        Session::flash('info', 'الرصيد غير كافي ');
    } else {
        Session::flash('info', 'خطأ في العملية ');
    }
}

return redirect()->back();
   
   }

   function fetch(Request $request)
   {
    $value = $request->get('value');
    $data =User::all()->where('account_number',$value)->first();
    if($data != null){
      $output ='<span class="input-group-addon" id="sizing-addon1">اسم المستقبل</span> <input  id="recevier_name2" name="recevier_name" type="text" class="form-control" placeholder="" aria-describedby="sizing-addon1" value="'.$data->first_name .' '. $data->last_name.'"disabled >'  ;
    echo $output;  
    }

    
   }

}
