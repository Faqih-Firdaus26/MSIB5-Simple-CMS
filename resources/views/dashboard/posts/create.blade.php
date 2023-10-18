@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create new post</h1>
</div>

<div class="col-lg-8">
    <form method="post" action="/dashboard/posts">
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="mb-3">
          <label for="slug" class="form-label">Slug</label>
          <input type="text" class="form-control" id="slug" name="slug">
        </div>
        <div class="mb-3">
          <label for="category" class="form-label">Category</label>
          <select name="category_id" id="" class="form-select">
            @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
          </select>
        </div>
        <div id="editor">
          <label for="body" class="form-label">Body</label>
          <input id="body" type="hidden" name="body">
          <p input="body"></p>
        </div>

        <button type="submit" class="btn btn-primary my-5">Create</button>
      </form>
</div>

@endsection