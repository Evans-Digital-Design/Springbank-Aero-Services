<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __invoke()
    {
        return view('product');
    }

    // public function insert(Request $request)
    // {
    //     $products = new Product();
    //     if($request->hasFile('image'))
    //     {
    //         $file = $request->file('image');
    //         $ext = $file->getClientOriginalExtension();
    //         $filename = time().'.'.$ext;
    //         $file->move('assets/products',$filename);
    //         $products->image = $filename;
    //     }
    //     $products->name = $requests->input('name');
    //     $products->description = $requests->input('description');
    //     $products->original_price = $requests->input('original_price');
    //     $products->selling_price = $requests->input('selling_price');
    //     $products->tax = $requests->input('tax');
    //     $products->quantity = $requests->input('quantity');
    //     $products->save();
    //     return redirect('admin-products.php');
    // }
}

