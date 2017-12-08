<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::orderBy('created_at', 'desc')->get();

        return response($blogs);
    }

    public function store(Request $request)
    {
        Blog::create([
            'title' => $request->title,
            'body' => $request->body
        ]);

        return response(['message' => 'created'], 200);
    }
}
