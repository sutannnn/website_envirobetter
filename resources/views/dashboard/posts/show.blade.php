@extends('dashboard.layouts.main')

@section('container')
<article>
    <h2>{{ $post->title }}</h2>
    <a href="/dashboard/posts" class="btn btn-success">Back</a>
    <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning">Edit</a>
    <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
        @method('delete')
        @csrf
        <button class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
      </form>
      @if($post->image)
      <div style="max-height: 350px; overflow:hidden;">
        <img src="{{ asset('storage/'. $post->image) }}" alt="{{ $post->title }}">
      </div>
      @else
        <img src="/image/3.png" alt="{{ $post->title }}">
      @endif
    <h5>{!! $post->body !!}</h5>
</article>

@endsection

