<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Response;
use Illuminate\Validation\Rule;


class PostsController extends Controller
{
    public function index()
    {

        return view('posts.index', [
            'posts' => Post::latest()->filter(
                request(['search', 'category', 'author'])
            )->paginate(18)->withQueryString(),
            'categories' => Category::all(),
        ]);


    }


    public function show(Post $post)
    {
        return view('posts.show', [
            'post' => $post
        ]);
    }


//index, show, create, store , edit, update, destroy


}
