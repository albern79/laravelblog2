<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return 'posts of blog';
    }


    public function show($post)
    {
        return "show blog posts {$post}";
    }

    public function like($post)
    {
        return 'put like please';
    }
}
