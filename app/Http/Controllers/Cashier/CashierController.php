<?php

namespace App\Http\Controllers\Cashier;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CashierController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();
        return view('cashier.dashboard', compact('user'));
    }
}