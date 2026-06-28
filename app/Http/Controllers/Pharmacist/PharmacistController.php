<?php

namespace App\Http\Controllers\Pharmacist;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PharmacistController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();
        return view('pharmacist.dashboard', compact('user'));
    }
}