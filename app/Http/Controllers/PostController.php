<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Inertia\Inertia;

class PostController extends Controller
{

    public function index()
    {
        $data = Post::with('categories')->latest()->paginate(5);
        return Inertia::render('Post/Index',[
            'data' => $data
        ]);
    }

    public function create()
    {
        $category = Category::all();
        return Inertia::render('Post/Create', [
            'category' => Category::pluck('name','id')->toArray()
        ]);
    }


    public function store(StorePostRequest $request)
    {
        try {
            $path = public_path('images');
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            $file = $request->file('image');
            $name = uniqid() . '_' . trim($file->getClientOriginalName());
            $file->move($path, $name);

            $post = new Post;
            $post->title = $request->title;
            $post->description = $request->description;
            $post->isPublished = $request->isPublished;
            $post->image = $name;
            $post->save();
            $post->categories()->attach($request->categories);

            return redirect()->route('post.index')
                ->with('message', 'Post Created Successfully');
        } catch (e) {
            return redirect()->route('post.index')
                ->with('message', 'No Post Created');
        }

        
    }


    public function show(Post $post)
    {
        $post = Post::find($post->id);
        return Inertia::render('Post/Show',[
            'post' => $post
        ]);
    }

    public function edit(Post $post)
    {
        return Inertia::render('Post/Edit', compact('post'));
    }

    public function update(UpdatePostRequest $request, Post $post)
    {
        $post->update($request->validated());
        return redirect()->route('post.index')
            ->with('message', 'Post Edited Successfully');
    }


    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('post.index')
            ->with('message', 'Post Deleted Successfully');
    }
}
