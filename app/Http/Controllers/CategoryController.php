<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('back.category.index')->with('categories', $categories);
    }

    public function create()
    {
        return view('back.category.create');
    }

    public function store(Request $request)
    {
        $imageName = time() . '.' . request()->img_path->getClientOriginalExtension();

        request()->img_path->move(public_path('images'), $imageName);

        $data = $request->all();
        $data['img_path'] = "/images/" . $imageName;


        $category = Category::create($data);
        return $this->index();
    }

    public function edit($id)
    {
        $cat = Category::find($id);

        return view('back.category.edit')->with('category', $cat);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();

        if ($request->img_path) {
            $imageName = time() . '.' . request()->img_path->getClientOriginalExtension();
            request()->img_path->move(public_path('images'), $imageName);
            $data['img_path'] = "/images/" . $imageName;
        }

        $category = Category::find($id)->update($data);
        return redirect()->route('categories.index');
    }

    public function delete($id)
    {
        $cat = Category::find($id);
        $cat->delete();
        return redirect()->route('categories.index');
    }
}
