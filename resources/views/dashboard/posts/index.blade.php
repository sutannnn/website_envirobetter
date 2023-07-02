@extends('dashboard.layouts.main')

@section('container')
  <div class="table-responsive col-lg-10">
    <h1 class="h2">All Posts</h1>
    @if(session()->has('success'))
      <div class="alert alert-success col-lg-10" role="alert">
        {{ session('success') }}
      </div>
    @endif
    <a href="/dashboard/posts/create" class="btn btn-primary mb-3">Create new post</a>
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">user_id</th>
            <th scope="col">title</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $post->user_id }}</td>
              <td>{{ $post->title }}</td>
              <td>
                  <a href="posts/{{ $post->slug }}" class="badge btn-info">Details</a>
                  <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge btn-warning">Edit</a>
                  <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="badge btn-danger border-0" onclick="return confirm('Are you sure?')">Delete</button>
                  </form>
              </td>
            </tr>
            @endforeach
        </tbody>
      </table>
    </div>

@endsection

