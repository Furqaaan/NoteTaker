<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class BlogController extends Controller
{
    public function index(Request $request) {

        if($request->input("search")) {
            $validated = $request->validate([
                "search" => "required|string|min:3"
            ]);
            $searchTerm = $request->input("search");
            $searchItems = Post::select("*")->where("post","LIKE","%".$searchTerm."%")->get();


            if(count($searchItems)!=0) {
                return view("search",compact('searchItems'));
            }
            else {
                return redirect("/");
            }
        }

        $posts = Post::latest()->paginate(14);
        return view("index",compact('posts'));
    }

    public function searchPost(Request $request) {
        $searchItems = "";
        return view("search",compact('searchItems'));
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

        if($request->input("editpost")) {
            $validated = $request->validate([
                "editpost" => "required|string|min:5|max:500"
            ]);

            Post::where("post_id",$id)
                ->where("user_id",1)
                ->update([
                    "post" => $request->input("editpost")
                ]);

            return redirect()->route("index");
        }
    }


    public function deletePost($id) {
        Post::where("post_id",$id)->delete();
        return redirect()->route("index");
    }
}
