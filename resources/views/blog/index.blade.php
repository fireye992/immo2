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
</article>
@endforeach
{{ $posts->links() }}
@endsection
