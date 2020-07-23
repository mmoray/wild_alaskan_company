<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(Request $request)
    {
        return "Handling the {$request->method()} HTTP Request - Index PostsController Method with no parameter set";
    }

    public function show(Request $request, $posts_pk)
    {
        return "Handling the {$request->method()} HTTP Request - Show PostsController Method with the posts_pk parameter set to {$posts_pk}"; 
    }
    
    public function store(Request $request)
    {
        return "Handling the {$request->method()} HTTP Request - Store PostsController Method with no parameter set"; 
    }

    public function update(Request $request, $posts_pk)
    {
        return "Handling the {$request->method()} HTTP Request - Update PostsController Method with the posts_pk parameter set to {$posts_pk}"; 
    }

    public function delete(Request $request, $posts_pk)
    {
        return "Handling the {$request->method()} HTTP Request - Delete PostsController Method with the posts_pk parameter set to {$posts_pk}"; 
    }
}
