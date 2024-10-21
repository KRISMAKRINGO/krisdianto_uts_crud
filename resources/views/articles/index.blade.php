@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Articles</h1>
    <a href="{{ route('articles.create') }}" class="btn btn-primary mb-3">Create New Article</a>
    @foreach($articles as $article)
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">{{ $article->title }}</h5>
                <p class="card-text">{{ Str::limit($article->content, 100) }}</p>
                <a href="{{ route('articles.show', $article) }}" class="btn btn-info">Read More</a>
                <a href="{{ route('articles.edit', $article) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('articles.destroy', $article) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </div>
        </div>
    @endforeach
    {{ $articles->links() }}
</div>
@endsection