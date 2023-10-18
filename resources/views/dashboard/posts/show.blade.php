@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row  my-3">
        <div class="col-md-8">
            <h1 class="mb-3">{{ $post->title }}</h1>

            <a href="/dashboard/posts" class="btn btn-success">Back To my posts</a>
            <a href="" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
            <a href="" class="btn btn-danger"><i class="bi bi-trash"></i></a>
        
            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
            <article class="my-3 fs-5">
                {!! $post->body !!}
            </article>
            <a href="/posts" class="d-block mt-3">back to post</a>
        </div>
    </div>
</div>
@endsection