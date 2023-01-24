<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
     // Homeを表示
     public function getHome(){
        return view('home');
      }
  
      // Serviceを表示
      public function getService(){
        return view('service');
      }
  
      // Contactを表示
      public function getContact(){
        return view('contact');
      }
}
