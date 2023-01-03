<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $post = (object) [
            'id' => 1,
            'title' => 'Lorem ipsum dolor sit amet.',
            'content' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maiores, quia.'
        ];

        $posts = array_fill(0,10, $post);
        dump($posts);
        return view('blog.index', [
            'posts' => $posts,
        ]);
    }

    public function show($post = null)
    {
        return view('blog.show', [
            'post' => $post,
        ]);
    }

    public function like($post)
    {
        # code...
    }
}
