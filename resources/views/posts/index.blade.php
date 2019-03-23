@extends('layouts.app')

@section('content')
    <ul class="list-group">
        @foreach($posts as $post)
            <li class="list-group-item">
                <img class="rounded float-right" height="64" src="/images/{{ $post->path }}">
                <a class="mr-2" href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a>
                <span>{{ $post->user->name }}</span>
            </li>
        @endforeach
    </ul>
@endsection