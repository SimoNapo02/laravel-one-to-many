@extends('layouts.app')


@section('content')
<div class="container margin-auto">
    <div class="card">
        <div class="card-header text-uppercase ">Modifica Post</div>
        <div class="card-body">
            <form action="{{route('admin.posts.update', $post)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title">Titolo del post</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                        aria-describedby="emailHelp" value="{{old('title', $post->title)}}">
                </div>
                @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label for="content">Inserisci il contenuto del post</label>
                <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content"
                    rows="7">{{old('content',$post->content)}}</textarea>
                @error('content')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="form-group form-check pt-4">
                    <input type="checkbox" name="published" class="form-check-input" id="published" {{old('published',
                        $post->published)
                    ? 'checked' : "" }}>
                    <label class="form-check-label" for="published">Pubblico</label>
                </div>
                <button type="submit" class="btn btn-primary">Modifica post</button>
            </form>
        </div>
    </div>
</div>
@endsection