<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\User;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    function Cart()
    {
        $cartItems = $this->getCartItems();
        $totals = $this->getCartTotals();
        return view('cart', compact('cartItems', 'totals'));
    }

    public function addToCart(Request $request)
    {
        $productId = $request->input('product_id');
        $quantity = $request->input('quantity', 1); // Số lượng yêu cầu

        $product = Product::find($productId);

        // Kiểm tra nếu sản phẩm không tồn tại hoặc số lượng trong kho ít hơn số lượng yêu cầu
        if (!$product || $product->quantity < $quantity) {
            return redirect()->back()->with('error', 'Không đủ số lượng sản phẩm trong kho để thêm vào giỏ hàng!');
        }

        // Lấy giỏ hàng từ session hoặc tạo mới nếu chưa có
        $cart = Session::get('cart', []);

        // Kiểm tra xem sản phẩm đã có trong giỏ hàng chưa
        if (isset($cart[$productId])) {
            // Nếu đã có thì tăng số lượng
            $newQuantity = $cart[$productId] + $quantity;

            // Kiểm tra nếu số lượng mới vượt quá số lượng trong kho
            if ($newQuantity > $product->quantity) {
                return redirect()->back()->with('error', 'Không đủ số lượng sản phẩm trong kho để thêm vào giỏ hàng!');
            }

            $cart[$productId] = $newQuantity;
        } else {
            // Nếu chưa có thì thêm mới sản phẩm vào giỏ hàng
            $cart[$productId] = $quantity;
        }

        // Lưu giỏ hàng vào session
        Session::put('cart', $cart);

        return redirect()->back()->with('status', 'Sản phẩm đã được thêm vào giỏ hàng!');
    }



    public function getCartItems()
    {
        $cart = Session::get('cart', []);
        $cartItems = []; // Để lưu thông tin sản phẩm và số lượng

        // Lấy thông tin sản phẩm từ cơ sở dữ liệu dựa trên productId và số lượng từ giỏ hàng
        foreach ($cart as $productId => $quantity) {
            $product = Product::find($productId); // Thay đổi cách lấy sản phẩm từ cơ sở dữ liệu của bạn
            if ($product) {
                $cartItems[] = [
                    'product' => $product,
                    'quantity' => $quantity
                ];
            }
        }

        return $cartItems;
    }

    public function getCartTotals()
    {
        $cart = Session::get('cart', []);
        $totalItems = 0;
        $subtotal = 0.0;

        foreach ($cart as $productId => $quantity) {
            $product = Product::find($productId);
            if ($product) {
                $totalItems += $quantity;
                $subtotal += $product->price * $quantity;
            }
        }

        $tax = $subtotal * 0.10; // Thuế 10%
        $total = $subtotal + $tax;

        return [
            'totalItems' => $totalItems,
            'subtotal' => $subtotal,
            'tax' => $tax,
            'total' => $total,
        ];
    }

    public function showBill()
    {
        $cartItems = $this->getCartItems();
        $totals = $this->getCartTotals();
        return view('bill', compact('cartItems', 'totals'));
    }

    public function submitBill(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'address' => 'required|string|max:255',
        ]);

        // Tìm hoặc tạo người dùng mới nếu không tồn tại
        $user = User::firstOrCreate(
            ['email' => $validated['email']],
            [
                'name' => $validated['name'],
                'address' => $validated['address'],
                'password' => bcrypt('password') // Bạn có thể tạo mật khẩu ngẫu nhiên hoặc yêu cầu người dùng tự đặt
            ]
        );


        // Nếu người dùng mới được tạo, đăng nhập họ
        if (Auth::guest()) {
            Auth::login($user);
        }
        return redirect('bill');
    }
    public function buy(Request $request)
{
    $cart = Session::get('cart', []);
    if (empty($cart)) {
        return redirect('/')->with('error', 'Giỏ hàng rỗng!');
    }

    $order = new Order();
    $order->user_id = Auth::id(); // Giả sử bạn đang sử dụng Auth để quản lý người dùng
    $order->total_price = 0;
    $order->save();

    $totalPrice = 0;
    foreach ($cart as $productId => $quantity) {
        $product = Product::find($productId);
        if ($product) {
            // Kiểm tra nếu số lượng trong kho đủ
            if ($product->quantity < $quantity) {
                // Xóa giỏ hàng nếu số lượng không đủ
                Session::forget('cart');
                return redirect('/')->with('error', 'Không đủ số lượng sản phẩm trong kho!');
            }

            $orderItem = new OrderItem();
            $orderItem->order_id = $order->id;
            $orderItem->product_id = $productId;
            $orderItem->quantity = $quantity;
            $orderItem->price = $product->price * $quantity;
            $orderItem->save();

            // Cập nhật tổng giá trị đơn hàng
            $totalPrice += $orderItem->price;

            // Giảm số lượng sản phẩm hiện có và tăng số lượng đã bán
            $product->quantity -= $quantity;
            $product->sold += $quantity;
            $product->save();
        }
    }

    $order->total_price = $totalPrice;
    $order->save();

    // Xóa giỏ hàng sau khi thanh toán thành công
    Session::forget('cart');

    return redirect('/')->with('status', 'Mua sản phẩm thành công!');
}


    public function getCartCount()
    {
        $cart = Session::get('cart', []);
        $count = array_sum($cart);
        return $count;
    }
    public function destroy($productId)
{
    // Lấy giỏ hàng từ session
    $cart = Session::get('cart', []);

    // Kiểm tra nếu sản phẩm tồn tại trong giỏ hàng thì xóa nó
    if (isset($cart[$productId])) {
        unset($cart[$productId]);
    }

    // Lưu lại giỏ hàng vào session sau khi đã xóa sản phẩm
    Session::put('cart', $cart);

    return redirect()->back()->with('status', 'Sản phẩm đã được xóa khỏi giỏ hàng!');
}

}
