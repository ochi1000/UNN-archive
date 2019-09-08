<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;


class IndexController
{

   public function show(){
       return view('home');
       
   }
   public function home(){
       return view('preloader');
   }

}