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
      public function getFirst(){
        return view('service_first');
      }

      // Serviceを表示
      public function getSemi(){
        return view('service_semi');
      }

      // Serviceを表示
      public function getFull(){
        return view('service_full');
      }
  
      // Contactを表示
      public function getContact(){
        return view('contact');
      }
}
