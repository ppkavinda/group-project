@extends('admin.master')
@section('content')



<body class="hold-transition sidebar-mini">
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
                
                <div class="alert alert-success" role="alert">
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
                    <!--<th>Cover Image</th>
                    
                    <th>updated_at</th> -->
                    <th class="center">Actions</th>
                  
                  </tr>
                  </thead>
                  <tbody>
                  
                  @foreach($courses as $course)
                  <tr>
                    <td><b>{{$course->id}}</b></td>
                    <td><b>{{$course->category->title}}</b></td>
                    <td><b>{{$course->title}}</b></td>
                    <td><b>{{$course->subtitle}}</b></td>
                    <td><b>{{$course->description}}</b></td>
                  <!--  <td><img class="img-fluid" src="/storage/{{$course->cover_img}}" style="width:150px; "></td>-
                    
                    <td><b> {{$course->updated_at}} </b>  </td>-->
                    <td class="left" width="200px">

                    <a href="{{url('/admin/edit-course/'.$course->id) }}" class="btn btn-primary btn mini" 
                    onclick="return confirm('Do you want to edit this details?')" >Edit</a>
                    
                    <a href="{{ url('admin/delete-course/'.$course->id)}}"class="btn btn-danger btn mini" 
                     onclick="return confirm('Are You Sure ?')">Delete</a>
                    <a href="{{ url('admin/delete-course/'.$course->id)}}"class="btn btn-danger btn mini" 
                     onclick="return confirm('Do You want to see ?')">Delete</a>
                   
                    </td> 
                    </tr>
                
                 @endforeach
                
                  </tbody>
        
                  
                
                </table>
              </div>
              <!-- /.card-body -->
              
            </div>
            
            
            
            
          
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
        

</body>
</html>
 @endsection