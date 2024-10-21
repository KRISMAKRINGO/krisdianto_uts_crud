@extends('layouts.app')

@section('content')
<div class="container">
    <div class="jumbotron">
        <h1 class="display-4">Welcome to Shoe Store Blog</h1>
        <p class="lead">Find the latest articles about shoes and trends in our store.</p>
        <hr class="my-4">
        <p>Explore our collection of articles or create your own!</p>
        <a class="btn btn-primary btn-lg" href="{{ route('articles.index') }}" role="button">View Articles</a>
    </div>
</div>
@endsection