@extends('layouts.app')

@section('title', $author->name)

@section('content')
    <h1>Author: {{ $author->name }}</h1>
    <ul>
        @foreach($blogs as $blog)
            <li>
                <a href="{{ route('blog.show', $blog->slug) }}">{{ $blog->title }}</a>
            </li>
        @endforeach
    </ul>

    {{ $blogs->links() }}
@endsection
