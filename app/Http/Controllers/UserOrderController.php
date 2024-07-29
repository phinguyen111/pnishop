<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Auth;

class UserOrderController extends Controller
{
    // Hiển thị đơn hàng của người dùng
    public function index()
    {
        $orders = Order::where('user_id', Auth::id())->with('orderItems.product')->get();
        return view('account', compact('orders'));
    }

    // Hiển thị chi tiết một đơn hàng của người dùng
    public function show($id)
    {
        $order = Order::where('user_id', Auth::id())->with('orderItems.product')->find($id);
        return view('history', compact('order'));
    }
}
