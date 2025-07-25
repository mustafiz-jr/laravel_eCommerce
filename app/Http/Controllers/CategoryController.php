<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        $i = 1;
        $categories = Category::all();
        return view('admin.categories.index', compact('categories', 'i'));
    }


    public function create()
    {
        $category = new Category();

        return view('admin.categories.create', compact('category'));
    }
    public function store(Request $request)
    {
        // dd($request->all());
        Category::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
        ]);
        return redirect(route('admin.categories.index'));
    }

    public function edit($id)
    {
        // dd('hello');
        $category = Category::where('id', $id)->first();

        return view('admin.categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $category->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
        ]);
        return redirect(route('admin.categories.index'));
    }


    public function destroy(Category $category)
    {
        $category->delete();

        return redirect(route('admin.categories.index'));
    }
}
