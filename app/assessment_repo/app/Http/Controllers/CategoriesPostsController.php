<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesPostsController extends Controller
{
    public function index(Request $request)
    {
        return "Handling the {$request->method()} HTTP Request - Index CategoriesPostsController Method with no parameter set";
    }

    public function show(Request $request, $categories_pk, $posts_pk)
    {
        return "Handling the {$request->method()} HTTP Request - Show CategoriesPostsController Method with the categories_pk parameter set to {$categories_pk} and the posts_pk parameter set to {$posts_pk}"; 
    }
    
    public function store(Request $request, $categories_pk)
    {
        return "Handling the {$request->method()} HTTP Request - Store CategoriesPostsController Method with the categories_pk parameter set to {$categories_pk}"; 
    }

    public function update(Request $request, $categories_pk, $posts_pk)
    {
        return "Handling the {$request->method()} HTTP Request - Update CategoriesPostsController Method with the categories_pk parameter set to {$categories_pk} and posts_pk parameter set to {$posts_pk}"; 
    }

    public function delete(Request $request, $categories_pk, $posts_pk)
    {
        return "Handling the {$request->method()} HTTP Request - Delete CategoriesPostsController Method with the categories_pk parameter set to {$categories_pk} and posts_pk parameter set to {$posts_pk}"; 
    }
}
