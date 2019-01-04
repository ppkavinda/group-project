@extends('admin.master')
@section('content')



<body class="hold-transition sidebar-mini">
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Courses Table</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin">Home</a></li>
              <li class="breadcrumb-item active">Courses Table</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
      <div class="row">
    
      <div class="col-sm-6">
        <form action="/admin/serach-course" method="get">
          <div class="input-group">
                <input type="search" name="search"class="form-control" placeholder="Enter Course Name">
                <span class="input-group-prepend">
                    <button type="submit" class="btn btn-primary">Search</button>
                </span>
          </div>
        </form>
      </div>
     
     </div>
     <br>
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
                <h3 class="card-title">Courses</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
             <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th style="width: 40px" color="solid black">Course ID</th>
                    <th>title</th>
                    <th>body</th>
                    <th>course name</th>
                    <th>Published by</th>
                    <!--<th>Cover Image</th>
                    
                    <th>updated_at</th> -->
                    <th width="250" >Actions</th>
                  
                  </tr>
                  </thead>
                  <tbody>
                  
                  @foreach($posts as $post)
                  <tr>
                    <td><b>{{$post->title}}</b></td>
                    <td><b>{{$post->body}}</b></td>
                    <td><b>{{$post->published}}</b></td>
                    <td><b>{{$post->course_id}}</b></td>

                    <td><b>{{$post->course_id}}</b></td>
                  <!--  <td><img class="img-fluid" src="/storage/{{$post->cover_img}}" style="width:150px; "></td>-
                    
                    <td><b> {{$post->updated_at}} </b>  </td>-->
                    <td width="300" style="text-align: center">

                    <a href="{{url('/admin/edit-course/'.$post->id) }}" class="btn btn-primary btn mini" 
                    onclick="return confirm('Do you want to edit this details?')" >Edit</a>
                    
                    <a href="{{ url('/admin/delete-course/'.$post->id)}}"class="btn btn-danger btn mini" 
                     onclick="return confirm('Are You Sure ?')">Delete</a>
                  
                    
                    <a href="{{ url('/admin/view-course/posts/'.$post->id)}}"class="btn btn-info btn mini" 
                     onclick="return confirm('Do You want to see ?')">See  Posts</a>
                    
                    </td> 
                    </tr>
                
                 @endforeach
                
                  </tbody>
               
                  
                
                </table>
                {{$posts->links()}}
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