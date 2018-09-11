
@extends('study.master')
@section('content')
<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey">

<!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->
<div class="w3-content" style="max-width:1400px">

<!-- Header -->
<header class="w3-container w3-center w3-padding-32"> 
  <h1><b>Course</b></h1>
  
</header>

<!-- Grid -->
<div class="w3-row">

<!-- Blog entries -->
<div class="w3-col l8 s12">
<!-- Blog entry -->

  @if(count($posts)> 0)
  @foreach($posts->all() as $post)
  <h2><b><u>{{$post->title}}</u></b></h2>
  <div class="w3-card-4 w3-margin w3-white">
   
   <div>
    <img src="{{asset($post->post_image)}}" alt="Nature" style="width:40%"></div>
    <div class="w3-container">
      
      <h5>{{$post->post_title}}, <span class="w3-opacity">{{$post->created_at}}</span></h5>
    </div>

    <div class="w3-container">
      <p>{{$post->post_body}}
    </p>
     
        
        @endforeach
  @else
    <p>No Post Avaliable</p>
  @endif
      
    </div>
  </div>


  <hr>

 </div>


@endSection