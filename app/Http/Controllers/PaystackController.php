<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaystackController extends Controller
{
     public function pay()
     {
        return view('user.paystack');
     }
}
