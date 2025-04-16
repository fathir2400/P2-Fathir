<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index(){
        return view('admin.index');
    }
    public function supervisor(){
        return view('supervisor.index');
    }
    public function kasir(){
        return view('kasir.index');
    }
    public function kitchen(){
        return view('kitchen.index');
    }
    public function waiters(){
        return view('waiters.index');
    }
    public function pelanggan(){
        return view('pelanggan.index');
    }
    public function dashboard(){
        return view('dashboard');
    }
}
