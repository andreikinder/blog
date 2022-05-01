<?php

use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\NewsletterController;
use Illuminate\Support\Facades\Route;

use App\Models\Post;
use App\Models\Category;
use App\Models\User;

use Illuminate\Support\Facades;
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

use App\Http\Controllers\PostController;

use App\Http\Controllers\RegisterController;

use App\Http\Controllers\SessionController;

use App\Http\Controllers\PostCommentController;




Route::get('/', [PostController::class, 'index'])->name('home');

Route::get('/posts/{post:slug}',  [PostController::class, 'show']);//->where('post','[A-z_\-]+');
Route::post('/posts/{post:slug}/comments', [PostCommentController::class, 'store']);

Route::get('/register', [RegisterController ::class, 'create'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController ::class, 'store'])->name('register')->middleware('guest');


Route::get('/login', [SessionController::class, 'create'])->middleware('guest');
Route::post('/login', [SessionController::class, 'store'])->middleware('guest');
Route::post('/logout', [SessionController::class, 'destroy'])->middleware('auth');


Route::post('/newsletter', NewsletterController::class);



Route::middleware('can:admin')->group(function (){
    Route::resource('/admin/posts', AdminPostController::class)->except('show');
});




//Route::get('/categories/{category:slug}', function (Category $category) {
//
//    return view('posts',[
//        'posts' => $category->posts,
//        'categories' => Category::all(),
//        'currentCategory' => $category,
//    ]);
//})->name('category');//->where('post','[A-z_\-]+');


//Route::get('/authors/{author:username}', function (User $author) {
//
//    return view('posts.index',[
//        'posts' => $author->posts,
//    ]);
//});//->where('post','[A-z_\-]+');
