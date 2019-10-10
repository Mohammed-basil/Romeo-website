<?php

namespace App\Http\Controllers;
use Session;
use App\OfficeLog;
use Illuminate\Http\Request;
use App\User;
use phpDocumentor\Reflection\Types\Integer;
use Illuminate\Support\Facades\Auth;
use App\Page;
use Illuminate\Support\Facades\Notification;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
      //  $user_id = Auth::user()->id;

        $pages = Page::all();
        $users = User::orderBy('id', 'desc')->whereNotIn('id',[1,Auth::user()->id])->where('verified',1)->where('category_id',1)->where('active',1)->paginate(5);
         $notify_offices = User::all()->where('active',0)->where('verified',1)->where('category_id',2);
         $notify_users = User::all()->where('active',0)->where('verified',1)->where('category_id',1);
         $notify_offices_review = OfficeLog::all()->where('officeAccount', Auth::user()->account_number)->where('status_id', 1);
        return view('admin.users')->with('users',$users)
                                 ->with('pages',$pages)
                                 ->with('notify_user',count($notify_users))
                           ->with('notify_office',count($notify_offices))
                           ->with('notify_offices_review',count($notify_offices_review));
    }



    public function offices()
    {
      //  $user_id = Auth::user()->id;

        $pages = Page::all();
         $offices = User::orderBy('id', 'desc')->whereNotIn('id',[1,Auth::user()->id])->where('verified',1)->where('category_id',2)->where('active',1)->paginate(5);
         $notify_offices = User::all()->where('active',0)->where('verified',1)->where('category_id',2);
         $notify_users = User::all()->where('active',0)->where('verified',1)->where('category_id',1);
         $notify_offices_review = OfficeLog::all()->where('officeAccount', Auth::user()->account_number)->where('status_id', 1);
        return view('admin.offices')
                                  ->with('offices',$offices)
                                 ->with('pages',$pages)
                                ->with('notify_user',count($notify_users))
                           ->with('notify_office',count($notify_offices))
                           ->with('notify_offices_review',count($notify_offices_review));
    }


    public function user_active()
    {
        $users = User::where('active',0)->where('verified',1)->where('category_id',1)->orderBy('id', 'desc')->paginate(5);
      
        $notify_offices = User::all()->where('active',0)->where('verified',1)->where('category_id',2);
         $notify_users = User::all()->where('active',0)->where('verified',1)->where('category_id',1);
         $notify_offices_review = OfficeLog::all()->where('officeAccount', Auth::user()->account_number)->where('status_id', 1);
        return view('admin.user_doc')->with('users',$users)
                                    ->with('number',$number=1)
                                    ->with('notify_user',count($notify_users))
                           ->with('notify_office',count($notify_offices))
                           ->with('notify_offices_review',count($notify_offices_review));
    }

    public function office_active()
    {
        $offices = User::where('active',0)->where('verified',1)->where('category_id',2)->orderBy('id', 'desc')->paginate(5);
      
        $notify_offices = User::all()->where('active',0)->where('verified',1)->where('category_id',2);
         $notify_users = User::all()->where('active',0)->where('verified',1)->where('category_id',1);
         $notify_offices_review = OfficeLog::all()->where('officeAccount', Auth::user()->account_number)->where('status_id', 1);
        return view('admin.office_doc')->with('offices',$offices)
                                    ->with('number',$number=1)
                                    ->with('notify_user',count($notify_users))
                           ->with('notify_office',count($notify_offices))
                           ->with('notify_offices_review',count($notify_offices_review));
    }

    public function active(Request $request,$id)
    {

        $user = User::find($id);
        if($user->category_id ==1){
             $user->active = 1;
        $user->save();
        Session::flash('success','تم قبول المستخدم');
        Notification::send($user , new \App\Notifications\UserAccept());
         
        }
      
        return redirect()->back();
    }

   


    public function notactive($id)
    {
  
       $user= User::find($id);
         if($user->category_id ==1 && $user->active==0){
       $user->point->delete();
       $user->delete();
        Session::flash('success','تم رفض المستخدم');
        Notification::send($user , new \App\Notifications\UserReject());
         }
        return redirect()->back();
    
    }
    
    

    public function ban(Request $request)
    {
        $input = $request->all();
        if(User::find($input['id'])->category_id==1){
       
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
        if(User::find($id)->category_id==1){
        if(!empty($id)){
            $user = User::find($id);
            $user->unban();
        }


        return redirect()->back()
        				->with('success','تم إلغاء حظر المستخدم.');
    }
}


}
