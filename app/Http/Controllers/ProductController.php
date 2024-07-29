<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller {
    public function index(Request $request) {
        $products = Product::orderBy('id','desc')->paginate(12);
        $categories = Category::all();
        return view('products.index', compact('products', 'categories'));
    }
   

    public function search(Request $request) {
        $query = $request->input('query');
        $products = Product::where('name', 'LIKE', "%$query%")
                            ->orWhere('description', 'LIKE', "%$query%")
                            ->orderBy('id','desc')
                            ->paginate(12);
        $categories = Category::orderBy('id','desc')->get();
        return view('products.index', compact('products', 'categories'));
    }

    public function show($id) {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }
    
    public function indexAd() {
        $categories = Category::all();
        $allproduct = Product::orderBy('id','desc')->paginate(4);
        return view('admin.products.index', compact('categories', 'allproduct'));
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'product_image' => 'required|image',
        ]);

        $imagePath = $request->file('product_image')->store('products', 'public');

        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'img' => $imagePath,
            'description' => $request->description,
            'quantity' => 0,
            'category_id' => 1,
        ]);

        return redirect()->route('Admin.products.indexAd')->with('success', 'thêm sản phẩm thành công!');
    }
    public function edit($id) {
        $categories = Category::all();
        $product = Product::findOrFail($id);

        return view('Admin.products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, Product $product) {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'product_image' => 'image',
        ]);

        $data = $request->only(['name', 'price', 'description', 'quantity', 'category_id']);

        if ($request->hasFile('product_image')) {
            $imagePath = $request->file('product_image')->store('products', 'public');
            $data['img'] = $imagePath;
        }

        $product->update($data);

        return redirect()->route('Admin.products.indexAd')->with('success', 'cập nhật sản phẩm thành công !');
    }
    public function destroy(Product $product) {
        $product->delete();
        return redirect()->route('Admin.products.indexAd')->with('success', 'xóa sản phẩm thành công!');
    }
}
