<?php

namespace App\Http\Controllers;
use App\OfficeLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Exchangelog;
use App\User;
use Illuminate\Support\Facades\Session;
use App\Currency;

class CurrenciesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

   public function index()
   {
     
       $balance = Auth::user()->point;
       $coin= \App\Coin::all();
       $currency = \App\Currency::all();
       $notify_offices = User::all()->where('active',0)->where('verified',1)->where('category_id',2);
         $notify_users = User::all()->where('active',0)->where('verified',1)->where('category_id',1);
         $notify_offices_review = OfficeLog::all()->where('officeAccount', Auth::user()->account_number)->where('status_id', 1);
       return view('user.exchange.index')->with('balance',$balance)
                                   ->with('coins',$coin)
                                   ->with('currencies',$currency)
                                   ->with('number',$number=1)
                                   ->with('notify_user',count($notify_users))
                           ->with('notify_office',count($notify_offices))
                           ->with('notify_offices_review',count($notify_offices_review));
   }

   public function index2()
   {
    $currencies= Currency::all();
$notify_offices = User::all()->where('active',0)->where('verified',1)->where('category_id',2);
         $notify_users = User::all()->where('active',0)->where('verified',1)->where('category_id',1);
         $notify_offices_review = OfficeLog::all()->where('officeAccount', Auth::user()->account_number)->where('status_id', 1);
    return view('user.coins_price')->with('currencies',$currencies)
                              ->with('number',$number=1)
                              ->with('notify_user',count($notify_users))
                           ->with('notify_office',count($notify_offices))
                           ->with('notify_offices_review',count($notify_offices_review));
   }

   public function exchange(Request $request)
   {
   //dd($request->all());
   $this->validate($request,[
    'c1'=>'required|string|max:255',
    'c2'=>'required|string|max:255',
    'balance'=>'required|max:20',
    
 ]);
  
    $user_balance = Auth::user()->point;

   $c1 = $request->c1;
   $c2 = $request->c2;    
   $balance = $request->balance;
   $c1_en = \App\Coin::all()->where('ar',$c1)->first();
   $c2_en = \App\Coin::all()->where('ar',$c2)->first();
   $c1 = $c1_en->en;
   $c2 = $c2_en->en;

   $currency= \App\Currency::all()->where('c1',$request->c1 )->where('c2',$request->c2)->first();
   $xcurrency= \App\Currency::all()->where('c1',$request->c2 )->where('c2',$request->c1)->first();

   if ($balance <= $user_balance->$c1  &&  $balance > 0  && is_numeric($balance)) {
      
   

       if (count($currency)>0) {
           # code...
      
           $sale = $currency->sale;
           $exchange = $sale * $balance;

           $user_balance->$c2 =  $user_balance->$c2 +  $exchange;
           $user_balance->$c1 =  $user_balance->$c1 -  $balance;
           $logs = Exchangelog::create([

            'user_id'=> Auth::user()->id,
            'account_number'=>Auth::user()->account_number,
            'from' => $request->c1,
            'to' =>$request->c2,
            'sale' => $currency->sale,
            'buy' =>  $currency->buy,
            'amount_from' =>  $request->balance,
            'amount_to' =>   $exchange,
            'operation' => 'بيع'
             
         ]);

           $user_balance->save();
           $logs->save();
           Session::flash('success','تمت العملية بنجاح ');
       } elseif (count($xcurrency)>0) {
           # code...
           $buy = $xcurrency->buy;
           $exchange =  $balance/$buy;

           $user_balance->$c2 =  $user_balance->$c2 +  $exchange;
           $user_balance->$c1 =  $user_balance->$c1 -  $balance;
           $logs = Exchangelog::create([

            'user_id'=> Auth::user()->id,
            'account_number'=>Auth::user()->account_number,
            'from' => $request->c1,
            'to' =>$request->c2,
            'sale' => $xcurrency->sale,
             'buy' =>  $xcurrency->buy,
             'amount_from' =>  $request->balance,
             'amount_to' =>   $exchange,
             'operation' => 'شراء'
             
         ]);
           $user_balance->save();
           $logs->save();
           Session::flash('success','تمت العملية بنجاح ');
       } else {
        Session::flash('info','يوجد خطأ  ');
       }
   } elseif($balance > $user_balance->$c1  &&  $balance > 0)
   {
    Session::flash('info',' الرصيد غير متوفر ,الرصيد المدخل اكبر من الرصيد المتوفر ');
   }else{
    Session::flash('info',' ادخل مبلغ  اكبر من صفر'); 
   }
    
    return redirect()->back();
   }
   

   function fetch(Request $request)
   {
     $balance = $request->get('value');
    $user_balance = Auth::user()->point;
   $c1 = $request->get('c1');
   $c2 = $request->get('c2');    
  
    $c1_en = \App\Coin::all()->where('ar',$c1)->first();
    $c2_en = \App\Coin::all()->where('ar',$c2)->first();
    $c1 = $c1_en->en;
    $c2 = $c2_en->en;
 
    $currency= \App\Currency::all()->where('c1',$request->get('c1') )->where('c2',$request->get('c2'))->first();
    $xcurrency= \App\Currency::all()->where('c1',$request->get('c2') )->where('c2',$request->get('c1'))->first();
 
    if ($balance <= $user_balance->$c1  &&  $balance > 0  ) {
        if (count($currency)>0  ) {
            # code...
            $sale = $currency->sale;
            $exchange = $sale * $balance;
            $output ='<span name="balance_after" class="input-group-addon">المبلغ بعد تبديل العملة</span> <input  type="text" class="form-control" placeholder="" aria-describedby="sizing-addon1" id="balance_after2" value="'.$exchange.'"disabled >'  ;
            echo $output;  
            
        } elseif (count($xcurrency)>0) {
            # code...
            $buy = $xcurrency->buy;
            $exchange =  $balance/$buy;
            $output ='<span name="balance_after" class="input-group-addon" >المبلغ بعد تبديل العملة</span> <input  type="text" class="form-control" placeholder="" aria-describedby="sizing-addon1" id="balance_after2" value="'.$exchange.'"disabled >'  ;
            echo $output; 
    }
  }
  
   }

}
