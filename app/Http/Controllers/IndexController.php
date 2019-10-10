<?php

namespace App\Http\Controllers;
use App\Whatsapp;
use App\Contact;
use App\Coin;
use Illuminate\Http\Request;

class IndexController extends Controller
{
   public function index()
    {
        return view('Home')->with('whatsapp',Whatsapp::all())
                                   ->with('contact',$contact= Contact::all()->first())
                                   ->with('Coins',Coin::all());
    }
}
