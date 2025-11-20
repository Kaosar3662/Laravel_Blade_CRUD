<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', ['products' => $products]);
    }
    public function create()
    {
        return view('products.create');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            "name"  => "required",
            "qty"   => "required|numeric",
            "price"     => 'required|numeric|between:0.001,999.99',
            "description"   => "required",
            "image"   => "nullable|image|mimes:png,jpg,gif|max:4096",

        ]);
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('uploads', 'public');
            $data['image'] = $imagePath;
        }
        $newProduct = Product::create($data);

        return redirect(route("product.index"))->with("success", "Added successfully ✅");
    }
    public function edit(Product $product)
    {
        return view('products.edit', ['product' => $product]);
    }
    public function update(Product $product, Request $request)
    {
        $data = $request->validate([
            "name" => "required",
            "qty" => "required|numeric",
            "price" => 'required|numeric|between:0.001,999.99',
            "description" => "required",

        ]);
        if ($request->hasFile('image')) {
            if ($product->image && file_exists(storage_path('app/public/' . $product->image))) {
                unlink(storage_path('app/public/' . $product->image));
            }
            $imagePath = $request->file('image')->store('uploads', 'public');
            $data['image'] = $imagePath;
        }
        $product->update($data);
        return redirect(route("product.index"))->with("success", "Updated successfully ✅");
    }
    public function destroy(Product $product){
        $product->delete();
        return redirect(route("product.index"))->with("success", "Deleted successfully ✅");
    }
}
