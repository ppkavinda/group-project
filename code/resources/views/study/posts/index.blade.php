
@extends('study.master')
@section('content')

<center><div class="card">
<div class="card border-info mt-4 mb-4" style="max-width: 58rem;">

  <div class="card-header"><b><h3>{{ $post->title}}</h3></b></div>
    <img  src="/dist/img/post/asoap.jpg"  width="50%" height="50%" alt="Card image cap">
    
    <div class="card-body text-dark">
      <p class="card-text">{{ $post->body }}</p>
      <p class="card-text"><small class="text-muted">{{ $post->created_at->diffForHumans() }}</small></p>
    </div>
  
</div>
</center>
<hr>
@endSection