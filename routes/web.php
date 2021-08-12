<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BlogController;

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

Route::get('/',[BlogController::class,"index"])->name("index");

Route::post('/',[BlogController::class,"addPost"])->name("index.post");



Route::get('edit/{id}',[BlogController::class,"editView"])->name("index.edit.view");
Route::post('edit/{id}',[BlogController::class,"editPost"])->name("index.edit.post");

Route::get('delete/{id}',[BlogController::class,"deletePost"])->name("index.delete");

Route::fallback(function() {
    return redirect("/");
});
