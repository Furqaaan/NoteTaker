<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\CategoriesController;

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

Route::get('test',[TestController::class,"test"])->name("test");

Route::get('logout',[LoginController::class,"logout"])->name("logout");


Route::get('category/coding',[CategoriesController::class,"categoryView"]);
Route::post('category/coding',[BlogController::class,"addPost"]);

Route::get('category/movies',[CategoriesController::class,"categoryView"]);
Route::post('category/movies',[BlogController::class,"addPost"]);

Route::get('category/remainder',[CategoriesController::class,"categoryView"]);
Route::post('category/remainder',[BlogController::class,"addPost"]);

Route::get('category/random',[CategoriesController::class,"categoryView"]);
Route::post('category/random',[BlogController::class,"addPost"]);

Route::get('category/fitness',[CategoriesController::class,"categoryView"]);
Route::post('category/fitness',[BlogController::class,"addPost"]);

Route::get('category/food',[CategoriesController::class,"categoryView"]);
Route::post('category/food',[BlogController::class,"addPost"]);

Route::get('category/fun',[CategoriesController::class,"categoryView"]);
Route::post('category/fun',[BlogController::class,"addPost"]);

Route::get('category/gaming',[CategoriesController::class,"categoryView"]);
Route::post('category/gaming',[BlogController::class,"addPost"]);

Route::get('category/sports',[CategoriesController::class,"categoryView"]);
Route::post('category/sports',[BlogController::class,"addPost"]);

Route::get('category/news',[CategoriesController::class,"categoryView"]);
Route::post('category/news',[BlogController::class,"addPost"]);

Route::get('category/tech',[CategoriesController::class,"categoryView"]);
Route::post('category/tech',[BlogController::class,"addPost"]);

Route::fallback(function() {
    return redirect("/");
});
