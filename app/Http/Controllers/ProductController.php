<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index()
    {
        $prodotti = Product::all();
        $data = [

            'all_product' => $prodotti

        ];
        return view('product')->with($data);
    }
}
