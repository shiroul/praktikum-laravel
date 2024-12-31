@extends('layouts.app')

@section('title', 'Blog')

@section('content')
    <h1>Blog</h1>
    <ul>
        @foreach($blogs as $blog)
            <li>
                <a href="{{ route('blog.show', $blog->slug) }}">{{ $blog->title }}</a>
            </li>
        @endforeach
    </ul>

    {{ $blogs->links() }} 
@endsection
