
@extends('study.master')
@section('content')

<!--vertical bar-->

<br><br>
<!--change--as detect to html tags-->

<div class="col-md-5 offset-md-3">

    <div class="card border-dark mt-4 mb-4">
        <div class="card border-dark mt-4 mb-4" style="max-width: 58rem;">
       <!-- Sachintha change  $post-> title,body,image-->
            <div class="card-header"><b><h3 id="{{ $post->title}}">{!! $post->title!!}</h3></b></div>
              
                <img  class="rounded mx-auto d-block" src="{{asset($post->post_image)}}"  width="50%" height="50%" alt="Card image cap"  >
                
                   
            <div class="card-body text-dark">
            <div class="card-text">{!! $post->body !!}</div>
            <div class="card-text">
                <small class="text-muted">{{ $post->created_at->diffForHumans() }}</small>
            </div>
            </div>
            </div>
        </div>
     
    </div>
   
<div>
    
</div>

<hr>
</div>
@endSection