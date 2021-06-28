<?php

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




Route::get('/', function () {


    return view('posts',[
        'posts' => Post::latest()->with(['category','author'])->get(),
        'categories' => Category::all()
    ]);

    //$tmp = YamlFrontMatter::parse(resource_path("posts/my-fourth-post.html"));

//    return view('posts',[
//        'posts' => Post::all()
//    ]);
});

Route::get('/posts/{post:slug}', function (Post $post) {

    return view('post', [
        'post' =>   $post
    ]);

});//->where('post','[A-z_\-]+');


Route::get('/categories/{category:slug}', function (Category $category) {

    return view('posts',[
        'posts' => $category->posts,
        'categories' => Category::all(),
        'currentCategory' => $category,
    ]);
});//->where('post','[A-z_\-]+');


Route::get('/authors/{author:username}', function (User $author) {

    return view('posts',[
        'posts' => $author->posts,
    ]);
});//->where('post','[A-z_\-]+');
