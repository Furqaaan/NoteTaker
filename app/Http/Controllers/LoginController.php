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

    public function logout() {
        Auth::logout();
        session()->flush();
        return redirect("login");
    }
}
