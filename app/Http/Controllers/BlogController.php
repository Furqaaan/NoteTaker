<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class BlogController extends Controller
{
    public function index() {
        $posts = Post::latest()->paginate(14);
        return view("index",compact('posts'));
    }

    public function addPost(Request $request) {
        $validated = $request->validate([
            "newpost" => "required|string|min:5|max:500"
        ]);

        $newpost = new Post();
        $newpost->post = $request->input("newpost");
        $newpost->save();
    
        return redirect()->route("index");
    }

    public function editView($id) {
        $posts = Post::where("post_id",$id)->get();
        return view("edit",compact('posts'));
    }

    public function editPost(Request $request,$id) {

        $validated = $request->validate([
            "editpost" => "required|string|min:5|max:500"
        ]);

        Post::where("post_id",$id)
            ->where("user_id",1)
            ->update([
                "post" => $request->input("editpost")
            ]);

        return redirect("/");
    }


    public function deletePost($id) {
        Post::where("post_id",$id)->delete();
        return redirect()->route("index");
    }
}
