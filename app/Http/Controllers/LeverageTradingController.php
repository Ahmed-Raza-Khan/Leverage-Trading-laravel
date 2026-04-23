<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeverageTradingController extends Controller
{
    public function dashboard() {
        return view('frontend.dashboard');
    }

    public function retail() {
        return view('frontend.retail-charts-asessts');
    }
}
