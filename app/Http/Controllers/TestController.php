<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\NewVisit;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class TestController extends Controller
{
    public function test() {
        return view("test");
    }
}
