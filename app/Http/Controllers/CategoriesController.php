<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class CategoriesController extends Controller
{
    public function categoryView(Request $request) {

        $name = User::select("name")->where("id",session()->get("userid"))->value("name");

        if($request->path() == 'category/coding') {
            $posts = Post::where("user_id",session()->get("userid"))->where("categories","coding")->latest()->paginate(14);
            return view("index",compact('posts','name'));
        }
        if($request->path() == 'category/movies') {
            $posts = Post::where("user_id",session()->get("userid"))->where("categories","movies")->latest()->paginate(14);
            return view("index",compact('posts','name'));
        }
        if($request->path() == 'category/remainder') {
            $posts = Post::where("user_id",session()->get("userid"))->where("categories","remainder")->latest()->paginate(14);
            return view("index",compact('posts','name'));
        }
        if($request->path() == 'category/random') {
            $posts = Post::where("user_id",session()->get("userid"))->where("categories","random")->latest()->paginate(14);
            return view("index",compact('posts','name'));
        }
        if($request->path() == 'category/fitness') {
            $posts = Post::where("user_id",session()->get("userid"))->where("categories","fitness")->latest()->paginate(14);
            return view("index",compact('posts','name'));
        }
        if($request->path() == 'category/food') {
            $posts = Post::where("user_id",session()->get("userid"))->where("categories","food")->latest()->paginate(14);
            return view("index",compact('posts','name'));
        }
        if($request->path() == 'category/fun') {
            $posts = Post::where("user_id",session()->get("userid"))->where("categories","fun")->latest()->paginate(14);
            return view("index",compact('posts','name'));
        }
        if($request->path() == 'category/gaming') {
            $posts = Post::where("user_id",session()->get("userid"))->where("categories","gaming")->latest()->paginate(14);
            return view("index",compact('posts','name'));
        }
        if($request->path() == 'category/sports') {
            $posts = Post::where("user_id",session()->get("userid"))->where("categories","sports")->latest()->paginate(14);
            return view("index",compact('posts','name'));
        }
        if($request->path() == 'category/news') {
            $posts = Post::where("user_id",session()->get("userid"))->where("categories","news")->latest()->paginate(14);
            return view("index",compact('posts','name'));
        }
        if($request->path() == 'category/tech') {
            $posts = Post::where("user_id",session()->get("userid"))->where("categories","tech")->latest()->paginate(14);
            return view("index",compact('posts','name'));
        }
    }
}
