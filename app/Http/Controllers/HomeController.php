<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $products1 = Product::where('status', Product::OPEN)
            ->where('category_id', '1')
            ->orderBy('sort', 'asc')->get();

        $products2 = Product::where('status', Product::OPEN)
            ->where('category_id', '2')
            ->orderBy('sort', 'asc')->get();

        $products3 = Product::where('status', Product::OPEN)
            ->where('category_id', '3')
            ->orderBy('sort', 'asc')->get();

        return view('index', [
            'products1' => $products1,
            'products2' => $products2,
            'products3' => $products3
        ]);
    }
}
