<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('orderItems.product', 'user')->get();
        return view('admin.orders.index', compact('orders'));
    }

    public function getOrderDetails($id)
    {
        $order = Order::with('orderItems.product', 'user')->find($id);

        if (!$order) {
            return response()->json(['message' => 'Đơn hàng không tồn tại'], 404);
        }

        return response()->json($order);
    }
    
}
