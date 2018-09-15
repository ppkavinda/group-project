
@extends('study.master')
@section('content')

<div class="col-md-5 offset-md-3">

    <div class="card border-dark mt-4 mb-4">
        <div class="card border-dark mt-4 mb-4" style="max-width: 58rem;">
            <div class="card-header"><b><h3 class="text-center">{!! $post->title !!}</h3></b></div>
              
            <div class="card-body text-dark">
                <div class="card-text">{!! $post->body !!}</div>
            </div>
            <div class="text-center">
                <small class="text-muted">{{ $post->created_at->diffForHumans() }} by <a href="/profile/{{ $post->auther->id }}">{{ $post->auther->name }}</a></small>
            </div>
        </div>
    </div>
</div>

<hr>
@endSection