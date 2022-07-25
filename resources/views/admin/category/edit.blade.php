@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
            <div class="card w-100">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <div>
                       Crea Post
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{route('admin.posts.store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                          <label for="form-title">Titolo del Post</label>
                          <input type="text" class="form-control @error('title') is-invalid @enderror" id="form-title" name="title"  value="{{ old('title', $post->title) }}">
                          @error('title')
                          <small class="form-text text-muted alert alert-danger">{{ $message }}</small>
                          @enderror
                        </div>
                        <div class="form-group">
                            <label for="form-content">Contento</label>
                            <textarea class="form-control @error('content') is-invalid @enderror" id="form-content" name="content" rows="20"> {{ old('content', $post->content) }} </textarea>                 
                            @error('content')
                            <small class="form-text text-muted alert alert-danger">{{ $message }}</small>
                            @enderror          
                        </div>
                        <div class="form-group form-check">
                          <input type="checkbox" class="form-check-input" id="form-public-post" name="is_public" {{ old('is_public', $post->is_public) ? 'checked' : ''}}>
                          <label class="form-check-label" for="form-public-post">Pubblica</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Crea</button>
                      </form>                 
                </div>
            </div>
    </div>
</div>
@endsection