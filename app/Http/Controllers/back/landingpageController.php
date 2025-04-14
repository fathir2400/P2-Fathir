<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class landingpageController extends Controller
{
    public function index(){
        return view('frontend.master');
    }
}
