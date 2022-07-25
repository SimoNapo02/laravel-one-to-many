@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
            <div class="card w-100">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <div>
                        {{ $category->name }}
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="px-2">
                         Lista post
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <ul>
                        @foreach ($category->posts as $posts)
                        <li><a href="{{route('admin.posts.show', $post->slug)}}">{{$posts->title}}</a></li>

                        @endforeach
                    </ul>
                </div>
            </div>
    </div>
</div>
@endsection