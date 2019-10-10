<?php

namespace App\Http\Controllers;
use App\OfficeLog;
use Illuminate\Http\Request;
use App\Page;
use Illuminate\Support\Facades\Auth;
use App\User;

class PermissionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function getUserPermission(Request $request)
    { 
        if(User::find($request->id)->category_id == 1 ){
       // dd($request->all());
        $pages= Page::all()->sortBy('order_id');
        $user_id = $request->id;
        $user = User::find($request->id);
       
             $user_pages = $user->pages; 
       
      $notify_offices = User::all()->where('active',0)->where('verified',1)->where('category_id',2);
         $notify_users = User::all()->where('active',0)->where('verified',1)->where('category_id',1);
$notify_offices_review = OfficeLog::all()->where('officeAccount', Auth::user()->account_number)->where('status_id', 1);
        return view('admin.UserPermissions')->with('pages',$pages)
                                        ->with('user_pages',$user_pages)
                                        ->with('user_id',$user_id)
                                        ->with('notify_user',count($notify_users))
                           ->with('notify_office',count($notify_offices))
                           ->with('notify_offices_review',count($notify_offices_review));
     }}

    public function getOfficePermission(Request $request)
    {
        if(User::find($request->id)->category_id == 2){
       // dd($request->all());
        $pages= Page::all()->sortBy('order_id');
        $user_id = $request->id;
        $user = User::find($request->id);
        $user_pages = $user->pages;
$notify_offices = User::all()->where('active',0)->where('verified',1)->where('category_id',2);
         $notify_users = User::all()->where('active',0)->where('verified',1)->where('category_id',1);
         $notify_offices_review = OfficeLog::all()->where('officeAccount', Auth::user()->account_number)->where('status_id', 1);
        return view('admin.OfficePermissions')->with('pages',$pages)
                                        ->with('user_pages',$user_pages)
                                        ->with('user_id',$user_id)
                                        ->with('notify_user',count($notify_users))
                           ->with('notify_office',count($notify_offices))
                           ->with('notify_offices_review',count($notify_offices_review));
    }}
    public function UserUpdate (Request $request , $id)
    {
        if(User::find($id)->category_id == 1 && Auth::user()->id != User::find($id)->id   && User::find($id)->id != 1){
       // dd($request->all());
        $user = User::find($id);
        $user->pages()->sync($request->pages);
        $user->save();
        }
        return redirect()->back();
    }
    public function OfficeUpdate (Request $request , $id)
    {
        if(User::find($id)->category_id == 2 && Auth::user()->id != User::find($id)->id  && User::find($id)->id != 1){
       // dd($request->all());
        $user = User::find($id);
        $user->pages()->sync($request->pages);
        $user->save();
        }
        return redirect()->back();
    }
}
