<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Log;
use App\Point;
use App\Exchangelog;
use App\OfficeLog;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\User;
use App\Country;


class ProfileController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  
    public function index()
    {
        $user = Auth::user();
        $withdrawals = Log::orderBy('id', 'desc')->where('senderAccount',$user->account_number)->paginate(5);
        $deposit = Log::orderBy('id', 'desc')->where('receiverAccount',$user->account_number)->paginate(5);
        $exchangelogs = Auth::user()->logs()->orderBy('id', 'desc')->paginate(5);
        if(Auth::user()->category_id==1){
          $office =OfficeLog::orderBy('id', 'desc')->where('senderAccount',$user->account_number)->paginate(5);
        }
        elseif(Auth::user()->category_id==2){
          $office =OfficeLog::orderBy('id', 'desc')->where('officeAccount',$user->account_number)->orWhere('senderAccount',$user->account_number)->paginate(5);
        }
        $balance = $user->point;
        $country=Country::all();
$notify_offices = User::all()->where('active',0)->where('verified',1)->where('category_id',2);
         $notify_users = User::all()->where('active',0)->where('verified',1)->where('category_id',1);
         $notify_offices_review = OfficeLog::all()->where('officeAccount', Auth::user()->account_number)->where('status_id', 1);
        return view('user.profile')->with('user',$user)
                              ->with('withdrawals',$withdrawals)
                              ->with('deposit',$deposit)
                              ->with('balance',$balance)
                              ->with('number',$number=0)
                              ->with('logs',$exchangelogs)
                              ->with('countries', $country)
                              ->with('office', $office)
                              ->with('notify_offices_review',count($notify_offices_review))
                              ->with('notify_user',count($notify_users))
                           ->with('notify_office',count($notify_offices));
    }


    public function update(Request $request,$id)
    {
      
   //   dd($request->all());
   if (Auth::user()->category_id == 1) {

    $this->validate($request,[
      
      'phonenum'=>'required|min:7|max:12', 
      'country'=>'required|integer'    

   ]);

   }elseif (Auth::user()->category_id == 2) {

    $this->validate($request,[
      'office_name'=>'required|string|max:255',
      'office_phonenum'=>'required|min:7|max:12',
      'phonenum'=>'required|min:7|max:12',
       'fee'=>'required|max:10',
       'country'=>'required|integer|max:8',
       'address'=>'required|string|max:255',  
   ]);

   }
        

      
        $user = User::find($id);
        if (Auth::user()->id == $request->id) {
          if (Auth::user()->category_id == 1) {
            $user->phonenum = $request->phonenum;
            $user->country_id = $request->country;
            $user->save();
            Session::flash('success','تمت عملية التعديل بنجاح ');
           
          }elseif (Auth::user()->category_id == 2) {
            $user->office->office_name = $request->office_name;
            $user->office->office_phonenum = $request->office_phonenum;
            $user->office->fee = $request->fee;
            $user->office->office_phonenum = $request->office_phonenum;
            $user->phonenum = $request->phonenum;
            $user->country_id = $request->country;
            $user->save();
            $user->office->save();
           
            Session::flash('success','تمت عملية التعديل بنجاح ');
            
          }else {
            Session::flash('info','يوجد خطأ  ');
            
           
          }
         
        }else {
            Session::flash('info', 'يوجد خطأ حاول مرة اخرى ');
            
        }
        return redirect()->back();

    }

    public function change_password_validator(array $data)
{
  $messages = [
    'current-password.required' => 'Please enter current password',
    'password.required' => 'Please enter password',
    
  ];

  $validator = Validator::make($data, [
    'current-password' => 'required',
    'password' => 'required|string|min:8|confirmed|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',
    'password_confirmation' => 'required|same:password',     
  ], $messages);

  return $validator;
}  

    public function change_pass(Request $request)
    {
        //dd($request->all());
      //https://stackoverflow.com/questions/39586104/change-password-user-laravel-5-3

            if(Auth::Check())
            {
              $request_data = $request->All();
              $validator = $this->change_password_validator($request_data);
              if($validator->fails())
              {
               // return response()->json(array('error' => $validator->getMessageBag()->toArray()), 400);
              // Session::flash('info',$validator->getMessageBag()->toArray());
              Session::flash('info','كلمة المرور الجديدة و التأكيد يجب ان تكون متطابقة');
               return redirect()->to('/profile');
             
              }
              else
              {  
                $current_password = Auth::User()->password;           
                if(Hash::check($request_data['current-password'], $current_password))
                {           
                  $user_id = Auth::User()->id;                       
                  $obj_user = User::find($user_id);
                  $obj_user->password = Hash::make($request_data['password']);;
                  $obj_user->save(); 
                  Session::flash('success',' تم التعديل بنجاح');
                  //return "ok";
                  return redirect()->to('/profile');
                }
                else
                {           
                  $error = array('current-password' => 'كلمة السر الحالية غير صحيحة');
                 // return response()->json(array('error' => $error), 400);  
                  Session::flash('info',' كلمة السر الحالية غير صحيحة'); 
                }
              }        
            }
            else
            {
                Session::flash('info',' لم يتم تنفيذ العملية');
              return redirect()->to('/profile');
            } 


            return redirect()->to('/profile');
    }



    public function depositlogs()
    {
        $user = Auth::user();
        $deposit = Log::where('receiverAccount',$user->account_number)->orderBy('id', 'desc')->paginate(5);
        $notify_offices = User::all()->where('active',0)->where('verified',1)->where('category_id',2);
         $notify_users = User::all()->where('active',0)->where('verified',1)->where('category_id',1);
         $notify_offices_review = OfficeLog::all()->where('officeAccount', Auth::user()->account_number)->where('status_id', 1);
        return view('user.depositlogs')->with('user',$user)
                                          ->with('deposit',$deposit)
                                          ->with('notify_user',count($notify_users))
                           ->with('notify_office',count($notify_offices))
                           ->with('notify_offices_review',count($notify_offices_review));
    }


    public function withdrawlogs()
    {
        $user = Auth::user();
        $withdrawals = Log::where('senderAccount',$user->account_number)->orderBy('id', 'desc')->paginate(5);
        $notify_offices = User::all()->where('active',0)->where('verified',1)->where('category_id',2);
         $notify_users = User::all()->where('active',0)->where('verified',1)->where('category_id',1);
         $notify_offices_review = OfficeLog::all()->where('officeAccount', Auth::user()->account_number)->where('status_id', 1);
        return view('user.withdrawlogs')->with('user',$user)
                                           ->with('withdrawals',$withdrawals)
                                           ->with('notify_user',count($notify_users))
                           ->with('notify_office',count($notify_offices))
                           ->with('notify_offices_review',count($notify_offices_review));
    }

    public function exchangelogs()
    {
        $user = Auth::user();
       $exchangelogs = Auth::user()->logs()->orderBy('id', 'desc')->paginate(5);
       $notify_offices = User::all()->where('active',0)->where('verified',1)->where('category_id',2);
         $notify_users = User::all()->where('active',0)->where('verified',1)->where('category_id',1);
         $notify_offices_review = OfficeLog::all()->where('officeAccount', Auth::user()->account_number)->where('status_id', 1);
       return view('user.exchangelogs')->with('user',$user)
                                          ->with('logs',$exchangelogs)
                                          ->with('notify_user',count($notify_users))
                           ->with('notify_office',count($notify_offices))
                           ->with('notify_offices_review',count($notify_offices_review));
    }

    public function officelogs()
    {
      $user = Auth::user();
        if(Auth::user()->category_id==1){
          $office =OfficeLog::where('senderAccount',$user->account_number)->orderBy('id', 'desc')->paginate(5);
        }
        elseif(Auth::user()->category_id==2){
          $office =OfficeLog::where('officeAccount',$user->account_number)->orWhere('senderAccount',$user->account_number)->orderBy('id', 'desc')->paginate(5);
        }
        $notify_offices = User::all()->where('active',0)->where('verified',1)->where('category_id',2);
         $notify_users = User::all()->where('active',0)->where('verified',1)->where('category_id',1);
         $notify_offices_review = OfficeLog::all()->where('officeAccount', Auth::user()->account_number)->where('status_id', 1);
        return view('user.officelogs')->with('user',$user)
                                         ->with('office', $office)
                                         ->with('notify_user',count($notify_users))
                           ->with('notify_office',count($notify_offices))
                           ->with('notify_offices_review',count($notify_offices_review));
    }
}
