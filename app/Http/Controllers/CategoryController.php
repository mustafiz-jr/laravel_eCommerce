<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.categories.index');
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
            'title'=>$request->title,
            'slug'=>Str::slug($request->title),
        ]);
        return back();
    }
}
