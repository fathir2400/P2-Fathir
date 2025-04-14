<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function Laravel\Prompts\password;

class LoginController extends Controller
{
    function index(){
        return view('login');
    }
    function login(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ],[
            'email.required'=>'Email Wajib Di isi',
            'password.required'=>'Password Wajib Di isi',
        ]);

        $infologin = [
            'email'=>$request->email,
            'password'=>$request->password,
        ];

        if(Auth::attempt($infologin)){
            if(Auth::user()->role == 'admin'){
                return redirect('admin');
            }elseif(Auth::user()->role == 'supervisor'){
                return redirect('supervisor');
            } elseif(Auth::user()->role == 'petugas'){
                return redirect('petugas');
            }elseif(Auth::user()->role == 'teknisi'){
                return redirect('teknisi');
            }elseif(Auth::user()->role == 'pengguna'){
                return redirect('pengguna');
            }
            
        }else{
            return redirect('')->withErrors('username dan password yang di masukan tidak sesuail')->withInput();
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('login');
    }
}
