<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    function index(){
        // Fetch all posts from the database
        $data = Post::all();
        // Return the view with posts and page title
        return view('post.index', ['posts' => $data, "pageTitle" => "Blog"]);
    }
    function show($id){
        // Find the post by ID or fail if not found
        $post = Post::findOrFail($id);
        // Return the view with the post and its title
        return view('post.show', ['post' => $post, 'pageTitle' => $post->title]);
    }
    function create(){
        // Create a new post with predefined data
        $post = Post::create([
            'title' => 'My Find Unique Post',
            'body' => 'This is to test find',
            'author' => 'Abdelrahman',
            'published' => true
        ]);
        // Redirect to the blog index after creating the post
        return redirect('blog');
    }
}
