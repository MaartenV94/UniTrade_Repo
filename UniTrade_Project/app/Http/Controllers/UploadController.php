<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catagory;
use App\Models\Product;
use App\Models\Order;

class UploadController extends Controller
{
    public function upload_page()
    {
        $cat = catagory::all();

        return view('upload.upload_page', compact('cat'));
    }

    public function new_upload(Request $request)
    {
        $product = new product;

        $product -> title = $request -> title;
        $product -> description = $request -> description;
        $product -> price = $request -> price;
        $product -> quantity = $request -> quantity;
        $product -> discount_price = $request -> discount_price;
        $product -> category = $request -> category;

        $image = $request-> image;
        $imagename = time() .'.'. $image -> getClientOriginalExtension();
        $request -> image -> move('product', $imagename);

        $product -> image = $imagename;

        $product -> save();

        return redirect()->back() -> with('message', 'Product Added Successfully!');
    }
}
