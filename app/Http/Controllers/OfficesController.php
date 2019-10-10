<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Office;
use App\Coin;
use App\Log;
use Session;
use App\Country;
use App\OfficeLog;
use App\User;
use App\Status;
use App\FeeBalance;
use App\Fee;
use Illuminate\Support\Facades\Notification;


class OfficesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $user_balance=Auth::user()->point;
        $country=Country::all();
        $offices=User::where('verified',1)->where('category_id',2)->where('active',1)->paginate(5);
        $currence= Coin::all();
        $notify_offices = User::all()->where('active',0)->where('verified',1)->where('category_id',2);
         $notify_users = User::all()->where('active',0)->where('verified',1)->where('category_id',1);
         $notify_offices_review = OfficeLog::all()->where('officeAccount', Auth::user()->account_number)->where('status_id', 1);
        return view('user.offices.send')->with('balance', $user_balance)
                                          ->with('currencies', $currence)
                                          ->with('countries', $country)
                                          ->with('offices', $offices)
                                          ->with('notify_user',count($notify_users))
                           ->with('notify_office',count($notify_offices))
                           ->with('notify_offices_review',count($notify_offices_review));
    }
 public function index2()
    {
        $user_balance=Auth::user()->point;
        $country=Country::all();
        $offices=User::where('verified',1)->where('category_id',2)->where('active',1)->paginate(5);
        $currence= Coin::all();
        $notify_offices = User::all()->where('active',0)->where('verified',1)->where('category_id',2);
         $notify_users = User::all()->where('active',0)->where('verified',1)->where('category_id',1);
         $notify_offices_review = OfficeLog::all()->where('officeAccount', Auth::user()->account_number)->where('status_id', 1);
        return view('user.offices') ->with('offices', $offices)
                                          ->with('notify_user',count($notify_users))
                           ->with('notify_office',count($notify_offices))
                           ->with('notify_offices_review',count($notify_offices_review));
    }
    public function send(Request $request)
    {
       // dd($request->all());

        $this->validate($request,[
            'country_office' => 'required|integer|max:8',
            'office' => 'required|integer|max:8',
            'coin' => 'required|string|max:255',
            'balance' => 'required|max:20',
            'name' => 'required|string|max:255',
            'id_number' => 'required|min:9|max:14',
            'phone' => 'required|min:10|max:16',
            
         ]);
        $sender= Auth::user();
        $sender_balance = Auth::user()->point;
        $office=Office::find($request->office);

        if (count($office)==0) {
            Session::flash('info', 'الحساب غير موجود ');
        } else {
           // $receiver = $office->user;
          //  $receiver_balance=$receiver->point;


            $coin = $request->coin;
     
            $balance = $request->balance;
            $coin_en = Coin::all()->where('ar', $coin)->first();
            $coin = $coin_en->en;

            $website_fee = Fee::find(1)->fee;
            $website_fee = $balance * $website_fee/100;
            $office_fee = $office->fee ;
             $office_fee = $balance * $office_fee/100;

            if ($balance <= $sender_balance->$coin  &&  $balance > 0 &&  is_numeric($balance)) {
              //  $receiver_balance->$coin =   $receiver_balance->$coin + $balance;
                $sender_balance->$coin =  $sender_balance->$coin -  $balance;

                

                $officeLog = OfficeLog::create([
       // 'senderName' => $sender->name,
        'senderAccount'=>Auth::user()->account_number,
        'senderName'=> $sender->first_name.' '. $sender->last_name,
        'officeName'=> $office->office_name,
        'officeAccount'=>$office->user->account_number,
        'reciverName'=>$request->name,
        'reciverID'=>$request->id_number,
        'reciverPhone'=>$request->phone,
        'coin'=> $request->coin ,
        'balance_before_fee'=>$request->balance,
        'balance_after_fee'=>$request->balance - $website_fee,
        'website_fee'=>$website_fee,
        'office_fee'=>$office_fee,
        'total_fee'=> $office_fee + $website_fee ,
        'status_id'=>1
    ]);
 
              //  $receiver_balance->save();
                $sender_balance->save();
                $officeLog->save();
                Session::flash('success', 'تمت عملية الارسال بنجاح ');
            } elseif ($balance > $sender_balance->$coin) {
                Session::flash('success', 'الرصيد غير كافي ');
            } else {
                Session::flash('info', 'خطأ في العملية ');
            }
        }

        return redirect()->back();
    }

    public function review()
    {
        $user = Auth::user();
        if ($user->category_id == 2) {
            $logs = OfficeLog::where('officeAccount', $user->account_number)->where('status_id', 1)->orderBy('id', 'desc')->paginate(5);
             $notify_offices = User::all()->where('active',0)->where('verified',1)->where('category_id',2);
         $notify_users = User::all()->where('active',0)->where('verified',1)->where('category_id',1);
         $notify_offices_review = OfficeLog::all()->where('officeAccount', Auth::user()->account_number)->where('status_id', 1);
        return view('user.offices.review')->with('logs', $logs)
                                    ->with('number',$number=1)
                                     ->with('notify_user',count($notify_users))
                           ->with('notify_office',count($notify_offices))
                           ->with('notify_offices_review',count($notify_offices_review));
        }else{
            return redirect()->back();
        }
    }

    
    function fetch(Request $request)
    {
     $value = $request->get('value');
     $data =User::all()->where('verified',1)->where('active',1)->where('category_id',2)->where('country_id',$value);
     $output = '<option value="">اختر المكتب</option>';
     foreach($data as $row)
     {
      $output .= '<option value="'.$row->office->id.'">'.$row->office->office_name.'  -  '.$row->office->fee.'% '.'</option>';
     }
     echo $output;
    }


    public function  accept(Request $request)
    {
        //dd($request->all());
       
       
        $log = OfficeLog::find($request->id);
        $website_fee_balance = FeeBalance::find(1);
        $website_fee = Fee::find(1);
        if ($log->status_id == 1) {
           
        
            $officeAccount = $log->officeAccount;
            $sendBalance = $log->balance_before_fee;
            $coin = $log->coin;
            $coin_en = Coin::all()->where('ar', $coin)->first();
            $coin = $coin_en->en;
       
            $officeBalance = Auth::user()->point;
            $fee = $sendBalance * $website_fee->fee/100;
            $sendBalance =  $sendBalance - $fee;
            $officeBalance->$coin =  $officeBalance->$coin + $sendBalance;
            $website_fee_balance->$coin = $website_fee_balance->$coin + $fee;

            $log->status_id = 2;
            $officeBalance->save();
            $website_fee_balance->save();
            $log->save();
            Session::flash('success', 'تمت العملية بنجاح ');
        }else{
            Session::flash('info', 'تم تنفيذ العملية سابقا ');

        }
        $log2 = OfficeLog::find($request->id);
         return view('user.offices.review_modal')->with('log2', $log2);
    
    }

    public function  reject(Request $request)
    {
        //dd($request->all());

        $log = OfficeLog::find($request->id);
        if ($log->status_id == 1) {
            $senderAccount = $log->senderAccount;
            $sender = User::where('account_number', $senderAccount)->first();
            $senderBalance =  $sender->point;
            $sendBalance = $log->balance_before_fee;
            $coin = $log->coin;
            $coin_en = Coin::all()->where('ar', $coin)->first();
            $coin = $coin_en->en;
        

            $senderBalance->$coin =  $senderBalance->$coin + $sendBalance;
            $log->status_id = 3;
            $senderBalance->save();
            $log->save();
            Session::flash('success', ' تم رفض العملية بنجاح');
        }else{
            Session::flash('info', 'خطأ في التنفيذ ');
        }

        return redirect()->back();
    
    }

    public function active(Request $request,$id)
    {
        $user = User::find($id);
        if($user->category_id ==2){
            $user->active = 1;
       $user->save();
       Session::flash('success','تم قبول المكتب');
               Notification::send($user , new \App\Notifications\UserAccept());

        
       }
        
        return redirect()->back();
    }
    
    public function notactive($id)
    {
  
       $user= User::find($id);
         if($user->category_id ==2 && $user->active==0){
       $user->point->delete();
       $user->office->delete();
       $user->delete();
        Session::flash('success','تم رفض المكتب');
                Notification::send($user , new \App\Notifications\UserReject());

         }
        return redirect()->back();
    
    }



    public function ban(Request $request)
    {
         $input = $request->all();
        if(User::find($input['id'])->category_id==2){
       
        if(!empty($input['id'])){
            $user = User::find($input['id']);
            $user->bans()->create([
			    'expired_at' => '+1 month',
			    'comment'=>$request->baninfo
			]);
        }


        return redirect()->back()->with('success','تم حظرالمستخدم.');
    }
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function revoke($id)
    {
        if(User::find($id)->category_id==2){
        if(!empty($id)){
            $user = User::find($id);
            $user->unban();
        }


        return redirect()->back()
        				->with('success','تم إلغاء حظر المستخدم.');
    }
}

}
