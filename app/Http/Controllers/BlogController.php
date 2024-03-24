<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormPostRequest;
use App\Models\Post;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function create()
    {
        $post = new Post();
        $post->title = 'Nom du bordel';
        $post->slug = 'slug_du_bordel';
        $post->content = 'mets ton contenu de merde ici';
        return view('blog.create', [
            'post'  => $post
        ]);
    }

    public function store(FormPostRequest $request) {
        $post = Post::create($request->validated());
        return redirect()->route('blog.show', ['slug' => $post
        ->slug, 'post' => $post->id])
        ->with('success', "sauvegarde ok");
    }

    public function edit(Post $post) {
        return view('blog.edit',[
            'post' => $post
        ]);
    }

    public function update(Post $post, FormPostRequest $request) {
        $post->update($request->validated());
        return redirect()
        ->route('blog.show', ['slug' => $post->slug, 'post' => $post->id])
        ->with('success', "modif ok");

    }

    public function index(): View {
        return view('blog.index', [
            'posts' => Post::paginate(1)
    ]);
}

    public function show(string $slug, Post $post): RedirectResponse | View
    {
        if ($post->slug !== $slug) {
            return to_route('blog.show', ['slug' => $post->slug, 'id' => $post->id]);
        }
        return view('blog.show', [
            'post' => $post
        ]);
    }
}
