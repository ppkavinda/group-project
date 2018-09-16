
<div class="row mb-4">
    <div class="col-sm-12">
        <div class="card " style="border: 1px solid gray">
        <div class="card-body">
            <h4 class="card-title">{!! $post->title !!} </h4>
            <p><small class="text-success">{{ $post->created_at->diffForHumans() }}</small></p>
            <p class="card-text">{!!$post->body!!}...</p>
            <a href="/posts/{{ $post->id }}" class="btn btn-primary mt-4">See More</a>
        </div>
        </div>
    </div>
</div>

{{-- <div class="w3-card-4 w3-margin w3-white">
    <h2><b>{{$post->title}}</b></h2>
   <div>
        <img src="/dist/img/{{ $post->post_image}}" alt="Nature" style="width:20%">
    </div>
    <div class="w3-container">
      
        <h5>{{$post->title}}, <span class="w3-opacity">{{$post->created_at}}</span></h5>
    </div>

    <div class="w3-container">
        <p>{{$post->body}}
    </p>
     
        <hr>
    </div>
</div> --}}