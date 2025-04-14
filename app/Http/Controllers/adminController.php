<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index(){
        return view('admin.index');
    }
    public function petugas(){
        return view('petugas.petugas');
    }
    public function pengguna(){
        return view('pengguna.index');
    }
    public function dashboard(){
        return view('dashboard');
    }
}
