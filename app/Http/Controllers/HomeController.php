<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::where('status', Product::OPEN)->get();

        return view('index', ['products' => $products]);
    }
}
