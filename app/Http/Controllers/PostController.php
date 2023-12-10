<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){

//        $posts = [];

        // get here all post with who user created this post with eager loading.
        $posts = Post::with('user')->get();
        // compact the post data to welcome view.

        return view('welcome', compact('posts'));
    }

    public function blogDetails($id){
        $postDetails = Post::find($id);
        return view('blog.blog-details',compact('postDetails'));
    }
}
