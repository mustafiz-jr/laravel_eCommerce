<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index(){
        return view('admin.product.index');
    }


    public function create(){
$categories = Category::all();

        return view('admin.product.create',compact('categories'));
    }
}
