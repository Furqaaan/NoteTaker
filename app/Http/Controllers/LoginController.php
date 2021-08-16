<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\VarDumper\VarDumper;

class LoginController extends Controller
{
    public function loginIndex() {
        return view("login");
    }

    public function loginCheck(Request $request) {
        $validated = $request->validate([
            "email" => "required|email",
            "password" => "required|string"
        ]);
        if(Auth::attempt($validated)) {
            session()->regenerate();
            $userid = User::select("id")->where("email",$request->input("email"))->first();
            session()->put("userid",$userid->id);
            return redirect()->route("index");
        }
        else {
            return redirect()->route("login");
        }
    }

    public function registerIndex() {
        return view("register");
    }

    public function registerStore(Request $request) {
        $validated = $request->validate([
            "name" => "required|string|min:3|max:50",
            "email" => "required|email|unique:users,email",
            "password" => "required|string|confirmed"
        ]);

        $user = new User();
        $user->name = $request->input("name");
        $user->email = $request->input("email");
        $user->password = bcrypt($request->input("password"));
        $user->save();
        
        return redirect("index");
    }

    public function logout() {
        Auth::logout();
        session()->flush();
        return redirect("login");
    }
}
