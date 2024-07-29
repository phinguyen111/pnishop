<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller {
    public function index() {
        $latestProducts = Product::latestProducts();
        $mostViewedProducts = Product::mostViewed();
        $oldestProducts = Product::oldestProducts();

        return view('home', compact('latestProducts', 'mostViewedProducts', 'oldestProducts'));
    }
    public function __construct()
    {
        $this->middleware('auth')->only('dashboard');
    }
  
}
