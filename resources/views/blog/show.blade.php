@extends('layouts.app')

@section('title', $blog->title)

@section('content')
    <h1>{{ $blog->title }}</h1>
    <p>By <a href="{{ route('author.show', $blog->author->slug) }}">{{ $blog->author->name }}</a> | Category: <a href="{{ route('category.show', $blog->category->slug) }}">{{ $blog->category->name }}</a></p>
    <p>{{ $blog->content }}</p>
@endsection
