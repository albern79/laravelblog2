<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return 'page list posts';
    }

    public function create()
    {
        return 'page of make posts';
    }

    public function store(Request $request)
    {
        return 'request posts';
    }

    public function show($post)
    {
        return "show posts {$post}";
    }

    public function edit(string $post)
    {
        return "page edit post {$post}";
    }

    public function update(Request $request, $post)
    {
        return 'page update';
    }

       public function destroy($id)
    {
        //
    }

    public function like()
    {
        return 'page like';
    }
}
