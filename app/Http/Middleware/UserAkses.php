<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;


class UserAkses
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        if(auth()->user()->role == $role){
            return $next($request);
        }
        if(Auth::user()->role == 'admin'){
            return redirect('admin');
        } elseif(Auth::user()->role == 'supervisor'){
            return redirect('supervisor');
        }elseif(Auth::user()->role == 'petugas'){
            return redirect('petugas');
        }elseif(Auth::user()->role == 'teknisi'){
            return redirect('teknisi');
        }elseif(Auth::user()->role == 'pengguna'){
            return redirect('pengguna');
        }
    }
}
