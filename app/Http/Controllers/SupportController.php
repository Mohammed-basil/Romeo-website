<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Whatsapp;
use App\Contact;
use App\OfficeLog;
use App\User;
use Session;

class SupportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $notify_offices = User::all()->where('active',0)->where('verified',1)->where('category_id',2);
         $notify_users = User::all()->where('active',0)->where('verified',1)->where('category_id',1);
         $notify_offices_review = OfficeLog::all()->where('officeAccount', Auth::user()->account_number)->where('status_id', 1);
       return view('admin.support')->with('whatsapp',Whatsapp::all())
                                   ->with('contact',$contact= Contact::all()->first())
                                   ->with('notify_user',count($notify_users))
                           ->with('notify_office',count($notify_offices))
                           ->with('notify_offices_review',count($notify_offices_review));
    }
    
    
     public function update(Request $request)
    {
        $this->validate($request,[

            
            'email'=>'required|email',
            'facebook'=>'required|url',
            'twitter'=>'required|url',
            'instagram'=>'required|url',
            'linkedin'=>'required|url',
            'youtube'=>'required|url'
        ]);

       $contact= Contact::all()->first();
       
         
         $contact->mail=$request->email;
         $contact->facebook=$request->facebook;
         $contact->twitter=$request->twitter;
         $contact->instagram=$request->instagram;
         $contact->linkedin=$request->linkedin;
         $contact->youtube=$request->youtube;
         $contact->save();
        
 

        Session::flash('success','تم التعديل بنجاح');

        return redirect()->back();

    }
    
    
    public function store(Request $request)
    {
       //dd($request->all());
       $this->validate($request,[

        'phonenum'=>'required'
       ]);

        $whatsapp = new Whatsapp();
        $whatsapp->phonenum=$request->phonenum;
        $whatsapp->save();
        Session::flash('success','تم الاضافة بنجاح');
       return redirect()->back();
    }
    
    public function update2(Request $request,$id)
    {
       // dd($request->all());
        $this->validate($request,[
            
          'phonenum' => 'required'
        ]);

       $whatsapp= Whatsapp::find($id);
       
         
         $whatsapp->phonenum=$request->phonenum;
     
         $whatsapp->save();
        
 

        Session::flash('success','تم التعديل بنجاح');

        return redirect()->back();

    }
    
    
     public function destroy($id)
    {
      // dd($id);
      $whatsapp=Whatsapp::find($id);
     
      $whatsapp->delete();

      Session::flash('success','تم الحذف بنجاح');
      return redirect()->back();
    }

}
