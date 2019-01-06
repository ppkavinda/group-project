
@extends('admin.master')
@section('content')

<body class="hold-transition sidebar-mini">
<div class="content-wrapper">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Posts</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin">Home</a></li>
              <li class="breadcrumb-item active">View Post</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
<div class="col-md-8 offset-md-2">
        <post-viewer initial-post="{{ $post }}"></post-viewer>
        <div class="text-center">
            <small class="text-muted">
                {{ $post->created_at->diffForHumans() }} by
                <a href="/profile/{{ $post->auther->id }}">{{ $post->auther->name }}</a>
            </small>
        </div>
        <hr>
        <h5 class="my-3">Ask a Question</h5>
        <post-forum initial-comments="{{ $post->comments }}" post-id={{ $post->id }}></post-forum>
    </div>
</div>
</body>
@endSection