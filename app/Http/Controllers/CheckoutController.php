<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{   
    public function index(){
        return view('checkout.index');
    }
}    
        
        


