<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class BlogController extends Controller
{
    public function index() {
        $posts = Post::latest()->paginate(4);
        return view("index",compact('posts'));
    }

    public function addPost(Request $request) {
        $validated = $request->validate([
            "newpost" => "required|string|min:5|max:1000"
        ]);

        $newpost = new Post();
        $newpost->post = $request->input("newpost");
        $newpost->save();
    
        return redirect()->route("index");
    }
}
