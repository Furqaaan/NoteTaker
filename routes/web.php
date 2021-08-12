<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[BlogController::class,"index"])->name("index")->middleware("auth");

Route::post('/',[BlogController::class,"addPost"])->name("index.post")->middleware("auth");

Route::get('edit/{id}',[BlogController::class,"editView"])->name("index.edit.view")->middleware("auth");
Route::post('edit/{id}',[BlogController::class,"editPost"])->name("index.edit.post")->middleware("auth");

Route::get('delete/{id}',[BlogController::class,"deletePost"])->name("index.delete")->middleware("auth");

Route::get('login',[LoginController::class,"loginIndex"])->name("login");
Route::post('login',[LoginController::class,"loginCheck"])->name("login.check");

Route::get('logout',[LoginController::class,"logout"])->name("logout");

Route::fallback(function() {
    return redirect("/");
});
