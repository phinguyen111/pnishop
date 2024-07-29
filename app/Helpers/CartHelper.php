<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Session;

class CartHelper
{
    public static function getCartCount()
    {
        $cart = Session::get('cart', []);
        $count = array_sum($cart);
        return $count;
    }
}
