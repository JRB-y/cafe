<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    // return list of products of certain cat
    public function category_list($id)
    {
        $categories = Category::find($id)->with('products')->get();

        $products = Product::where('category_id', $id)->get();

        return view('front.category.index')->with('categories', $categories)->with('products', $products);
    }

    public function product_details($id)
    {
        $product = Product::find($id);
        $categories = Category::all();

        // similar products
        $similar = Product::limit(3)->get();

        return view('front.product.details')
            ->with('categories', $categories)
            ->with('similar', $similar)
            ->with('product', $product);
    }
}
