<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartProductController extends Controller
{
    public function store(Request $request)
    {
        $product = Product::findOrFail($request->product_id);

        $cart = Cart::firstOrCreate([
            'user_id' => auth()->id(),
            'session_id' => session()->getId()
        ]);

        $cart->products()->attach($product);

        return back();
    }

    public function destroy(Product $product)
    {
            
            $users = DB::table('cart_product')->where('product_id', '=', $product->id)->limit(1)->delete();
        
            return back();


    }
}
