@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $article->title }}</h1>
    @if($article->image)
        <img src="{{ asset('images/' . $article->image) }}" alt="{{ $article->title }}" class="img-fluid mb-3">
    @endif
    <p>{{ $article->content }}</p>
    <a href="{{ route('articles.index') }}" class="btn btn-secondary">Back to Articles</a>
</div>
@endsection