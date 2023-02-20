<?php

namespace App\Http\Controllers;

use App\Models\TempOrder;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function checkout(Request $request)
    {
        $tempOrder = TempOrder::query()
                ->with('product')
                ->where('session_id',  Session::getId())
                ->get();

        $cartCount = count($tempOrder) ?? '';

        return view('cart', [
            'tempOrder' => $tempOrder,
            'cartCount' => $cartCount,
        ]);
    }

    public function add(Request $request)
    {
        if (empty($request->input('item')) || empty($request->input('nums'))) {
            return false;
        }
        $session_id = Session::getId();
        $query = TempOrder::query()
            ->where('session_id', $session_id)
            ->where('product_id', $request->input('item'))
            ->first();
        if (!empty($query)) {
            $query->quantity = $query->quantity + $request->input('nums');
            $query->save();
        } else {
            $query = new TempOrder();
            $query->session_id = $session_id;
            $query->product_id = $request->input('item');
            $query->quantity   = $request->input('nums');
            $query->save();
        }

        $count = TempOrder::query()
                ->where('session_id', $session_id)
                ->count();
        return Response::json(['success' => true, 'count' => $count]);
    }
}
