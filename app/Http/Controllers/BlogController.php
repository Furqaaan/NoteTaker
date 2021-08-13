<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function index(Request $request) {
        
        if(Auth::check()) {

            //search bar
            if($request->input("search")) {
                $validated = $request->validate([
                    "search" => "required|string|min:3"
                ]);
                $searchTerm = $request->input("search");
                $searchItems = Post::select("*")->where("post","LIKE","%".$searchTerm."%")->where("user_id",session()->get("userid"))->get();


                if(count($searchItems)!=0) {
                    return view("search",compact('searchItems'));
                }
                else {
                    return redirect("/");
                }
            }

            //display posts
            $posts = Post::where("user_id",session()->get("userid"))->latest()->paginate(14);
            $name = User::select("name")->where("id",session()->get("userid"))->value("name");
            return view("index",compact('posts','name'));
        }
        else {
            return redirect("index");
        }

    }

    public function searchPost(Request $request) {
        $searchItems = "";
        return view("search",compact('searchItems'));
    }

    public function addPost(Request $request) {
        $validated = $request->validate([
            "newpost" => "required|string|min:5|max:500",
            "image-note" => "image|mimes:jpg"
        ]);

        $newpost = new Post();
        $newpost->user_id = session()->get("userid");
        $newpost->post = $request->input("newpost");
        $newpost->categories = $request->input("categories");
        if($request->file("image-note")) {
            $image = $request->file("image-note")->store("public");
            $newpost->img = $image;
        }

        $newpost->save();
    
        return redirect()->route("index");
    }

    public function editView($id) {
        $posts = Post::where("post_id",$id)->where("user_id",session()->get("userid"))->get();
        return view("edit",compact('posts'));
    }

    public function editPost(Request $request,$id) {

        if($request->input("editpost")) {
            $validated = $request->validate([
                "editpost" => "required|string|min:5|max:500"
            ]);

            Post::where("post_id",$id)
                ->where("user_id",session()->get("userid"))
                ->update([
                    "post" => $request->input("editpost")
                ]);

            return redirect()->route("index");
        }
    }

    public function deletePost($id) {
        Post::where("post_id",$id)->where("user_id",session()->get("userid"))->delete();
        return redirect()->route("index");
    }

}
