<div class="card mb-3 bg-light">
  <div class="card-body">
    <img class="float-left mr-3" src="{{ $comment->user->profile_pic }}" alt="avatar" width="50px">
    <span class="card-title"><a class="font-weight-bold text-capitalize" href="/profile/{{ $comment->user->id }}">{{ $comment->user->name }}</a> <small class="font-weight-light">{{ $comment->created_at->diffForHumans() }}</small></span>
    <p class="card-text blockquote">{{ $comment->body }}</p>
    <a href="#" class="link link-primary"><small>Reply</small></a>
  </div>
</div>
