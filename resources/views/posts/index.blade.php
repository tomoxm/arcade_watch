@extends('layouts.master')

@section('content')
    <ol class="post-list">
        @foreach ($posts as $post)
            <li>
                @include('posts.article')
            </li>
        @endforeach
    </ol>
@endsection