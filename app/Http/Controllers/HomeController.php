<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\TempOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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

        $cartCount = TempOrder::query()
                ->where('session_id',  Session::getId())
                ->count() ?? '';

        return view('index', [
            'products1' => $products1,
            'products2' => $products2,
            'products3' => $products3,
            'cartCount' => $cartCount,
        ]);
    }
}
