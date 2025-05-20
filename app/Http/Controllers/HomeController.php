<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function dashboard(){

            $today = now()->format('Y-m-d');
            $today_income = Order::whereDate('created_at', $today)->where('status', 'paid')->sum('total');
            $today_order_count = Order::whereDate('created_at', $today)->count();
            $pending_order_count = Order::whereDate('created_at', $today)->where('status', 'pending')->count();
            $canceled_order_count = Order::whereDate('created_at', $today)->where('status', 'canceled')->count();
            // $income_percent, $order_percent = ... // logika tambahan

            return view('dashboard', compact(
                'today_income',
                'today_order_count',
                'pending_order_count',
                'canceled_order_count'
            ));



    }
    public function logout(){
        return redirect()->url('/');
    }
}
