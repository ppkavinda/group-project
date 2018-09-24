
@extends('study.master')
@section('content')
<div class="col-md-8 offset-md-2">
    <post-viewer post-id="{{ $post->id }}"></post-viewer>
    <div class="text-center">
        <small class="text-muted">{{ $post->created_at->diffForHumans() }} by <a href="/profile/{{ $post->auther->id }}">{{ $post->auther->name }}</a></small> </div>
        <hr>
        <h5 class="my-3">Ask a Question</h5>
        <div class="card bg-light p-3">
            <form action="/comments/{{ $post->id }}" method="post">
                @csrf
                <div class="form-group">
                    <textarea class="form-control" name="body" rows="3" placeholder="Type your question here..."></textarea>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Comment</button>
                </div>
            </form>
        </div>
        <hr>
        <h5 class="my-3">Comments</h5>
        @foreach($post->comments as $comment)
            @include('study.posts.comment')
        @endforeach
    </div>
@endSection