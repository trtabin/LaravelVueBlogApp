<?php

namespace App\Http\Controllers;
use Inertia\Inertia;
use App\Models\Post;
use App\Models\Category;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() 
    {
        $data = Post::where('isPublished', 1)->latest()->paginate(7);
        return Inertia::render('Welcome',[
            'data' => $data
        ]);
    }

    public function blog($id) 
    {
        $post = Post::with('categories')->where('id', $id)->first();
        return Inertia::render('Blog',[
            'data' => compact('post'),
        ]);
    }
}
