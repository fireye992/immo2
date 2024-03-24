@extends('base')

@section('title','Accueil')
@section('content')
<h1>BLOG</h1>
@foreach($posts as $post)
<article>
    <h2>{{ $post->title }}</h2>
<p>
    {{ $post->content }}
</p>
<p>
    <a href="{{ route('blog.show',['slug' => $post->slug, 'post' => $post->id]) }}" class="px-3 py-1 rounded-sm text-white pfont-serif py-15 px- bg-slate-700 hover:bg-slate-500">Plus d'infos</a>
</p>
</article>
@endforeach
{{ $posts->links() }}
@endsection
