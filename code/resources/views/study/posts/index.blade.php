
@extends('study.master')
@section('content')
<div class="col-md-8 offset-md-2">
    <post-viewer post-id="{{ $post->id }}"></post-viewer>
    <div class="text-center">
        <small class="text-muted">{{ $post->created_at->diffForHumans() }} by <a href="/profile/{{ $post->auther->id }}">{{ $post->auther->name }}</a></small> </div>
        <hr>
        <h5 class="my-3">Ask a Question</h5>
        <post-forum post-id="{{ $post->id }}"></post-forum>
    </div>
@endSection