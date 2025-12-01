<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $post  = (object)[
            'id' => 123,
            'title' => 'Lorem, ipsum dolor.',
            'content' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab, doloremque!',
        ];

        $posts = array_fill(0, 10, $post);
        
        return view('blog.index', compact('posts'));
    }


    public function show($post)
    {
        return view('blog.show');
    }

    public function like($post)
    {
        return 'put like please';
    }
}
