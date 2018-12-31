<!--Sachintha -->
@extends('admin.master')
@section('content')

		{{-- <aside class="control-sidebar control-sidebar-dark"> --}}
		{{-- </aside> --}}
		<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

<title>Athwela Admin Panel</title>
<!--/tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="/css/app.css">
<link rel="stylesheet" href="/css/font-awesome.css">
<link rel="stylesheet" href="/css/study.css">
<link rel="stylesheet" href="/css/swipebox.css">
<link rel="stylesheet" href="/css/style.css">
<meta name="viewport" content="width=device-width, initial-scale=1">

 

 
</head>



@stack('styles')
</head>
<body>
	<div>
	
	</div>

	<div id="app">
		@yield('content')
	</div>

<script src="/js/manifest.js"></script>
<script src="/js/vendor.js"></script>
<script src="/js/app.js"></script>
<script src="/js/adminlte.js"></script>
@stack('scripts')
<!-- start-smoth-scrolling -->
<script type="text/javascript">
	$.ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
						
	$().UItoTop({ easingType: 'easeOutQuart' });
								
</script>
<br><br><br><br>
	@include('admin.partials.sidebar')
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Table</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin">Home</a></li>
              <li class="breadcrumb-item active">Categories Table</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
              @if(Session::has('flash_message_success'))
                
                <div class="alert alert-success alert-block">
	              <button type="button" class="close" data-dismiss="alert">×</button>	
                <strong>{!!session('flash_message_success')!!}</strong>
                </div>

              @endif
                <h3 class="card-title">Categories</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
             <table class="table table-bordered">
                <thead>
                  <tr>
                    <th style="width: 40px" color="solid black">Course ID</th>
                    <th>Category Name</th>
                    <th>Title</th>
                    <th>Sub Title</th>
                    <th>Description</th>
                    <th>Cover Image</th>
                    
                    <th>updated_at</th>
                    <th class="center">Actions</th>
                  
                  </tr>
                  </thead>
                  <tbody>
                  
                  @foreach($courses as $course)
                  <tr>
                    <td><b>{{$course->id}}</b></td>
                    <td><b>{{$course->category_title}}</b></td>
                    <td><b>{{$course->title}}</b></td>
                    <td><b>{{$course->subtitle}}</b></td>
                    <td><b>{{$course->description}}</b></td>
                    <td><img src="/dist/img/courses/{{$course->cover_img}}" style="width:150px; height:150px"></td>
                    
                    <td><b> {{$course->updated_at}} </b>  </td>
                    <td class="left">
                    <span><a href="" class="btn btn-primary btn mini">Edit</a></span>
                    <span> <a href="{{ url('admin/delete-course/'.$course->id)}}"class="btn btn-primary btn mini">Delete</a></span>
                      
                      </td> 
                      </tr>
                
                 @endforeach
                
                  </tbody>
        
                  
                
                </table>
              </div>
              <!-- /.card-body -->
              
            </div>