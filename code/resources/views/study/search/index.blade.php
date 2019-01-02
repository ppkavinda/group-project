@extends('shop.master')
@section('content')
<div class="container">
    <ul class="row">
        <div class="col-md-10 p-3">
            <h3 class="p-3">Courses</h3>
            @foreach($courses as $course)
            {{-- {{ dd($course) }} --}}
            <div class="card m-3">
                <div class="card-body row">
                    <div class="col-md-3">
                        <img class="img-fluid pull-right" src="{{ $course->cover_img }}">
                    </div>
                    <div class="col-md-9">
                        <h5 class="card-title">{{ $course->title }}</h5>
                        <p class="card-text">{{ $course->description }}</p>
                        <a href="{{ route('posts.show', $course->id) }}" class="btn btn-primary mt-1">Show full post</a>
                    </div>
                </div>
            </div>
            @endforeach

            <h3 class="p-3">Posts</h3>
            @foreach($posts as $post)
            <div class="card m-3">
                <div class="card-body row">
                    <div class="col-md-3">
                        <img class="img-fluid pull-right" src="{{ $post->cover_img }}">
                    </div>
                    <div class="col-md-9">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text">{{ $post->snippet() }}</p>
                        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary mt-1">Show full post</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </ul>
</div>
@endsection