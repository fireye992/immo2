@extends('base')

@section('title','Accueil')
@section('content')
<h1>BLOG</h1>
@foreach($posts as $post)
<article>
    <h2>{{ $post->title }}</h2>
    <p class="small">
        @if($post->category)
        Catégorie : {{ $post->category?->name }}@if(!$post->tags->isEmpty()),@endif</p>
        @endif
        @if(!$post->tags->isEmpty())
        Tags :
        @foreach ($post->tags as $tag )
            <span class="badge bg-slate-600">{{ $tag->name }}</span>
        @endforeach
        @endif
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
