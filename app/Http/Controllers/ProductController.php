<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('back.products.index')->with('products', $products);
    }

    public function create()
    {
        return view('back.products.create');
    }

    public function store(Request $request)
    {
        $imageName = time() . '.' . request()->img_path->getClientOriginalExtension();

        request()->img_path->move(public_path('images/products'), $imageName);

        $data = $request->all();
        $data['img_path'] = "/images/products/" . $imageName;



        $product = Product::create($data);

        return redirect()->route('products.index');
    }

    public function edit($id)
    {
        $product = Product::find($id);

        return view('back.products.edit')->with('product', $product);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();

        if ($request->img_path) {
            $imageName = time() . '.' . request()->img_path->getClientOriginalExtension();
            request()->img_path->move(public_path('images'), $imageName);
            $data['img_path'] = "/images/" . $imageName;
        }
        $product = Product::find($id);
        $product->update($data);

        return redirect()->route('products.index');
    }

    public function delete($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('products.index');
    }
}
