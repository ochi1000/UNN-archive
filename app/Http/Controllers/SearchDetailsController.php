<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as Controller;

class SearchDetailsController extends Controller
{
    //Return view for details page
    public function show(){
        return view('details');
    }
}
