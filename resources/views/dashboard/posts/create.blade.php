@extends('dashboard.layouts.main')

@section('container')

<div class="table-responsive col-lg-10">
  <h1 class="h2">Create New Post</h1>
</div>

<div class="col-lg-8">
  <form method="post" action="/dashboard/posts" class="mb-5" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required value="{{ old('title') }}">
      <div id="emailHelp" class="form-text">Format Title: Nama Title Serta Slug</div>
    </div>
    <div class="mb-3">
      <label for="slug" class="form-label">Slug</label>
      <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required value="{{ old('slug') }}">
      <div id="emailHelp" class="form-text">Format Slug(nama sama dengan title): nama-title-serta-slug</div>
    </div>
    <div class="mb-3">
      <label for="image" class="form-label">Post Image</label>
      <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image">
      @error('image')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="body" class="form-label">Body</label>
      @error('body')
        <p class="text-danger">{{ $message }}</p>
      @enderror
        <input id="body" type="hidden" name="body" value="{{ old('body') }}">
        <trix-editor input="body"></trix-editor>
    </div>
    
    <button type="submit" class="btn btn-primary">Create Post</button>
  </form>
</div>

<script>
  const title = document.querySelector('#title');
  const slug = document.querySelector('#slug');

  title.addEventListener('change', function() {
    fetch('/dashboard/posts/checkSlug?title=' + title.value)
      .then(response => response.json())
      .then (data => slug.value = data.slug)
  });


</script>

@endsection

