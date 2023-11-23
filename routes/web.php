<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/", [PostController::class,"showPosts"])->name("allposts");
Route::post("/add", [PostController::class, "addPost"])->name("addPost");
Route::post("/update", [PostController::class, "updatePost"])->name("updatePost");
Route::get("/showPost/{id}", [PostController::class, "singlePost"])->name("view.post");
Route::get("/deletePost/{id}", [PostController::class, "deletePost"])->name("delete.post");
Route::get("/deleteAll", [PostController::class,"deleteAll"])->name("delete.all");
Route::get("/updatepage/{id}", [PostController::class,"updatePage"])->name("update.page");
Route::get("addPostForm", function () {
    return view("addPostForm");
})->name("addpost.form");
