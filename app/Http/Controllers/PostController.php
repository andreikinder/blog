<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;

use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){


//        $posts = Post::latest()->filrer(request(['search']));
//
//        if (request('search')){
//            $posts->where('title', 'like', '%'. request('search')  .'%')
//                ->OrWhere('body', 'like', '%'. request('search')  .'%');
//        }


        return view('posts.index',[
            'posts' =>  Post::latest()->filter(request(['search', 'category', 'author'] ))->paginate(6)->withQueryString()
                //->with(['category','author'])

        ]);

                //$tmp = YamlFrontMatter::parse(resource_path("posts/my-fourth-post.html"));

        //    return view('posts',[
        //        'posts' => Post::all()
        //    ]);
    }

    public function show(Post $post){
        return view('posts.show', [
            'post' =>   $post
        ]);
    }

    public function create(){
        return view('posts.create');
    }
}
