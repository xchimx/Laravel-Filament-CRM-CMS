<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\View\View;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index()
    {
        return view('home', [
            'posts' =>  Post::where('published',1)->with('category')->get(),
            'categories' => Category::all()
        ]);
    }

    public function show(string $slug,string $id): View
    {
        return view('post', [
            'post' => Post::where('published',1)->where('slug',$slug)->with('category')->findOrfail($id),
             'categories' => Category::all()
        ]);
    }
}


