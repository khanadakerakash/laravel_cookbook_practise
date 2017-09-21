<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::Paginate(5);

//        $response = Response::json($posts, 200);
//
//        return $response;
        return view('blog.index', compact('posts'));

    }
}
