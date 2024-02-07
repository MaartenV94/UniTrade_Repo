<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function product_page()
    {
        $product = product::all();

        return view('product.product_page', compact('product'));
    }
}
