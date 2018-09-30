<div class="row mb-4">
    <div class="col-sm-12">
        <div class="card bg-light">
            <div class="card-header">
                <h2 class="">{{ $post->title }} </h2>
            </div>
        <div class="card-body">

                <img src="{{ $post->cover_img }}" alt="{{ $post->title }}" class="float-left mr-3" width="20%">
                <p><small class="text-success">{{ $post->created_at->diffForHumans() }}</small></p>
                
                <p class="card-text">{{ $post->snippet() }}</p>
            
            <a href="/posts/{{ $post->id }}" class="btn btn-primary mt-4">See More</a>
        </div>
        </div>
    </div>
</div>