
@extends('study.master')
@section('content')

<!--vertical bar-->

<br><br>
<!--change--as detect to html tags-->

<div class="col-md-5 offset-md-3">
    <div class="card">
        <div class="card border-info mt-4 mb-4" style="max-width: 58rem;">
       
            <div class="card-header"><b><h3 id="{{ $post->title}}">{{ $post->title}}</h3></b></div>
              
                <img  src="/dist/img/post/post3_1.jpg"  width="50%" height="50%" alt="Card image cap">
                
    
            <div class="card-body text-dark">
              <p class="card-text"><b>{!! $post->body !!}
             </b> </p>
                 
                <p class="card-text">
                  <small class="text-muted">{{ $post->created_at->diffForHumans() }}
                  </small>
               </p>
            </div>
            </div>
        </div>
     
    </div>
<div>
    
</div>

<hr>
</div>
@endSection