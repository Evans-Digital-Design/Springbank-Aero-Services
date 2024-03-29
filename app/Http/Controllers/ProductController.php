<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __invoke()
    {   
        $products = Product::get();
        return view('product', [
            'products' => $products
        ]);
    }

   
}

