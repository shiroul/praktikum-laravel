<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Blog;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail(); // Fetch the category
        $blogs = Blog::where('category_id', $category->id)->latest()->paginate(10); // Fetch blogs under this category
        return view('category.show', compact('category', 'blogs'));
    }
}

