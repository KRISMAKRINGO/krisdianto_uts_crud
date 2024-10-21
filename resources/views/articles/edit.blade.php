@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Article</h1>
    <form action="{{ route('articles.update', $article) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $article->title }}" required>
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control" id="content" name="content" rows="5" required>{{ $article->content }}</textarea>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" class="form-control-file" id="image" name="image">
        </div>
        @if($article->image)
            <img src="{{ asset('images/' . $article->image) }}" alt="{{ $article->title }}" class="img-thumbnail mb-3" style="max-width: 200px;">
        @endif
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection