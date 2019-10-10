<?php

namespace App\Http\Controllers;
use App\OfficeLog;
use Illuminate\Http\Request;
use App\User;
use App\Whatsapp;
use App\Contact;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
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
        return view('user.contact')->with('whatsapp',Whatsapp::all())
                                   ->with('contact',$contact= Contact::all()->first())
                            ->with('notify_user',count($notify_users))
                           ->with('notify_office',count($notify_offices))
                           ->with('notify_offices_review',count($notify_offices_review));
    }
}
