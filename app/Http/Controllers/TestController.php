<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\NewVisit;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class TestController extends Controller
{
    public function test() {
        $a = new User();
        $a->name = "Mike Chan";
        $a->email = "a@gmail.com";
        $a->password = Hash::make("123");
        $a->save();
    }
}
