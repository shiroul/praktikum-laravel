@extends('layouts.app')

@section('title', $category->name)

@section('content')
    <h1>Category: {{ $category->name }}</h1>
    <ul>
        @foreach($blogs as $blog)
            <li>
                <a href="{{ route('blog.show', $blog->slug) }}">{{ $blog->title }}</a>
            </li>
        @endforeach
    </ul>

    {{ $blogs->links() }}
@endsection
