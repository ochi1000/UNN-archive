<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Routing\Controller as BaseController;

class DashboardController extends BaseController{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show(){
        return view('admin/dashboard');
    }

}