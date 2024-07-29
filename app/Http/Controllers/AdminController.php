<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;

class AdminController extends Controller
{
    function Admin()
    {
        return view('admin.index');
    }
    function User()
    {
        $users = User::all(); // Fetch all users
        return view('admin.user', compact('users')); // Pass the $users variable to the view
    }


    function product()
    {
        $allproduct = Product::allproduct();
        return view('admin.product', compact('allproduct'));
    }
    public function createProduct()
    {
        $categories = Category::all();
        return view('admin.products', compact('categories'));
    }

    public function storeProduct(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'img' => 'required|image',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
            'category_id' => 'required|exists:categories,id',
        ]);

        $imagePath = $request->file('img')->store('products', 'public');

        Product::create([
            'name' => $request->name,
            'img' => $imagePath,
            'description' => $request->description,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'category_id' => $request->category_id,
        ]);

        return redirect()->route('admin.product')->with('success', 'Thêm sản phẩm thành công!');
    }
    public function edit($id)
    {
        $product = Product::find($id);
        return response()->json($product);
    }
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->description = $request->input('description');
        $product->quantity = $request->input('quantity');
        $product->category_id = $request->input('category_id');

        if ($request->hasFile('product_image')) {
            $file = $request->file('product_image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('public', $filename);
            $product->img = $filename;
        }

        $product->save();

        return redirect()->back()->with('success', 'Product updated successfully');
    }
    public function destroy($id)
{
    $product = Product::find($id);
    if ($product) {
        
        $product->delete();
        return response()->json(['success' => 'Product deleted successfully']);
    } else {
        return response()->json(['error' => 'Product not found'], 404);
    }
}


    function updateproduct()
    {
        return view('admin.updateproduct');
    }
}
