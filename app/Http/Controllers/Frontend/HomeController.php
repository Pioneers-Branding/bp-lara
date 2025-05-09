<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
   public function index(){
      return view('frontend.index') ;
   }

   public function about(){
      return view('frontend.about') ;
   }

   public function contact(){
      return view('frontend.contact') ;
   }

   public function team(){
      return view('frontend.team') ;
   }

}
