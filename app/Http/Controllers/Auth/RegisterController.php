<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Point;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\VerifyUser;
use Illuminate\Support\Facades\Mail;
use App\Mail\VerifyMail;
use App\Office;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/profile';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phonenum' => 'required|min:10|max:16',
            'userID' => 'required|min:9|max:14',
            'country' => 'required|integer|max:30',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',
            'image' => 'required|max:2048',
           
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
       //   dd(request()->all());
       
            $image = $data['image'];
            $image_new_name= time() . $image->getClientOriginalName();
            $image->move('uploads/images', $image_new_name);
            $image='uploads/images/'.$image_new_name;
          
           
        
      
            $user= User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'country' => $data['country'],
            'phonenum' => $data['phonenum'],
            'userID' => $data['userID'],
            'email' => $data['email'],
           'account_number' => random_int(10000000, 99999999),
            'password' => bcrypt($data['password']),
            'image'=> $image,
            'category_id'=>$data['category'],
            'country_id'=>$data['country']
    

        ]);

        if ($data['category']==2) {


            $office = Office::create([
           'user_id'=>  $user->id,
           'office_name' => $data['office_name'],
           'office_phonenum' => $data['office_phonenum'],
           'address'=> $data['address']
       ]);

       }
       
            $balance = Point::create([
            'user_id'=>  $user->id
        ]);

        $verifyUser = VerifyUser::create([
            'user_id' => $user->id,
            'token' => str_random(40)
        ]);

        Mail::to($user->email)->send(new VerifyMail($user));
        
            return $user;
        }

        public function verifyUser($token)
    {
        $verifyUser = VerifyUser::where('token', $token)->first();
        if(isset($verifyUser) ){
            $user = $verifyUser->user;
            if(!$user->verified) {
                $verifyUser->user->verified = 1;
                $verifyUser->user->save();
               // $status = "Your e-mail is verified. You can now login.";
               $status = "تم التحقق من الايميل . بامكانك تسجيل الدخول";
            }else{
               // $status = "Your e-mail is already verified. You can now login.";
               $status = "لقد تم بالفعل التحقق من الايميل مسبقا . بامكانك تسجيل الدخول";
            }
        }else{
            return redirect('/login')->with('warning', "آسف لا يمكن تحديد الايميل.");
        }

        return redirect('/login')->with('status', $status);
    }
    
}
