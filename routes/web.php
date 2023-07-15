<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\User1Controller;
use App\Http\Controllers\UserController;

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

Route::get('/', [PostController::class, 'index'])->name('welcome');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts/create', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');
Route::get('/contact', [PostController::class, 'contact'])->name('contact');

Route::get('/user1s', [User1Controller::class, 'index'])->name('user1s.index');
Route::get('/user1s/create', [User1Controller::class, 'create'])->name('user1s.create');
Route::post('/user1s', [User1Controller::class, 'store'])->name('user1s.store');
Route::get('/user1s/{user}', [User1Controller::class, 'show'])->name('user1s.show');
Route::get('/user1s/{user}/edit', [User1Controller::class, 'edit'])->name('user1s.edit');
Route::put('/user1s/{user}', [User1Controller::class, 'update'])->name('user1s.update');
Route::delete('/user1s/{user}', [User1Controller::class, 'delete'])->name('user1s.destroy');



// Route::get('/posts', function () {
//     return response()->json([
//         'title' => 'mon super titre',
//         'description' => 'ma super description'
//     ]);
// });

// Route::get('/articles', function(){
    
//     return view('articles');

// });