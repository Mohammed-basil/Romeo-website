<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function markAllAsRead()
    {
        $user = Auth::user();

        $user->unreadNotifications->markAsRead();

        return redirect()->back();
    }

    public function markAsRead(Request $request,$id)
    {
        $user = Auth::user();
        $unreadNotifications=$user->unreadNotifications->where('id',$id);
        
        $unreadNotifications->markAsRead();

        return redirect()->route('user.depositlogs');
    }
}
