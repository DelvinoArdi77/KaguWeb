<?php

namespace App\Http\Controllers;

use App\Models\Tokoh;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Category $category)
    {
        return view('category',[
            'title' => 'Categories',
            'category' => Category::all(),
            'tokohs' => Tokoh::all(),
            'catebuton' => 'Category'
        ]);
    }

    public function view(Category $category) 
    {
        return view('category', [
            'title' => $category->name,
            'tokohs' => $category->tokohs,
            'category' => Category::all(),
            'catebuton' => $category->name
        ]);
    }
}
