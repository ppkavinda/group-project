
@extends('study.master')
@section('content')

<div class="w3-content" style="max-width:1400px">

<!-- Header -->
<header class="w3-container w3-center w3-padding-32"> 
  <h1><b>Course</b></h1>
  
</header>

<!-- Grid -->
<div class="w3-row">

<!-- Blog entries --> 
{{-- <di/v class="w3-col l8 s12"> --}}
  <!-- Blog entry -->
 
   @if(count($posts)> 0)
    @foreach($posts as $post)
    <div class="w3-card-4 w3-margin w3-white">
    <h2><b><u>{{$post->title}}</u></b></h2>
   <div>
    <img src="{{asset($post->post_image)}}" alt="Nature" style="width:40%"></div>
    <div class="w3-container">
      
      <h5>{{$post->post_title}}, <span class="w3-opacity">{{$post->created_at}}</span></h5>
    </div>

    <div class="w3-container">
      <p>{{$post->post_body}}
    </p>
     
      <hr>
    </div>
  </div>
  @endforeach
    @else
    <p>No Post Avaliable</p>
    @endif
  <hr>

 {{-- </div> --}}


@endSection

@push('styles')
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
@endPush