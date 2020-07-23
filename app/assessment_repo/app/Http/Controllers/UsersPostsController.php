<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersPostsController extends Controller
{
    public function index(Request $request)
    {
        return "Handling the {$request->method()} HTTP Request - Index UsersPostsController Method with no parameter set";
    }

    public function show(Request $request, int $users_pk, int $posts_pk)
    {
        return "Handling the {$request->method()} HTTP Request - Show UsersPostsController Method with the users_pk parameter set to {$users_pk} and the posts_pk parameter set to {$posts_pk}"; 
    }
    
    public function store(Request $request, int $posts_pk)
    {
        return "Handling the {$request->method()} HTTP Request - Store UsersPostsController Method with the users_pk parameter set to {$users_pk} and posts_pk parameter set to {$posts_pk}"; 
    }

    public function update(Request $request, int $posts_pk)
    {
        return "Handling the {$request->method()} HTTP Request - Update UsersPostsController Method with the users_pk parameter set to {$users_pk} and posts_pk parameter set to {$posts_pk}"; 
    }

    public function delete(Request $request, int $posts_pk)
    {
        return "Handling the {$request->method()} HTTP Request - Delete UsersPostsController Method with the users_pk parameter set to {$users_pk} and posts_pk parameter set to {$posts_pk}"; 
    }
}
