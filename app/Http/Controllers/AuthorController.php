<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Blog;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function show($slug)
    {
        $author = Author::where('slug', $slug)->firstOrFail(); // Fetch the author
        $blogs = Blog::where('author_id', $author->id)->latest()->paginate(10); // Fetch blogs by this author
        return view('author.show', compact('author', 'blogs'));
    }
}

