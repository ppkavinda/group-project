@extends('admin.master')
@section('content')



<body class="hold-transition sidebar-mini">
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Posts</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin">Home</a></li>
              <li class="breadcrumb-item active">Posts Table</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
      <div class="row">
    
      <div class="col-sm-6">
        <form action="/admin/search-post" method="get">
          <div class="input-group">
                <input type="search" name="search" class="form-control" placeholder="Enter Post Details">
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
	              <button type="button" class="close" data-dismiss="alert">x</button>	
                <strong>{!!session('flash_message_success')!!}</strong>
                </div>

              @endif
                <h3 class="card-title">Posts</h3>
              </div>
             
              <div class="card-body">
              <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th style="width: 40px" color="solid black">Post ID</th>
                    <th>Post Title</th>
                    <th>course id</th>
                    <th>course name</th>
                    <th>user id</th>
                    <th>user name</th>
                   <!-- <th>Cover imge </th>-->
                    <th>Published </th>
                    
                    <th width=200>Create At</th>
                    <th width=200>Last Updated</th>
                   
                    <th width="250" >Actions</th>
                  
                  </tr>
                  </thead>
                  <tbody>
                 @if($posts->count()>0)
                  @foreach($posts as $post)
                  <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->course_id}}</td>
                    <td>{{$post->course->title}}</td>
                    <td>{{$post->user_id}}</td>
                    <td>{{$post->auther->name}}</td>
                    <!--<td><img class="img-fluid" src="img/posts/covers/{{$post->cover_img}}" style="width:150px; "></td>-->
                    
                   
                    <td>
                    @if($post->published == 1)
                    Publish 
                    @else
                    Not Publish
                    @endif
                    
                    </td>
                    
                   
                   
                    
                   
                    <td>{{date('M j,Y H:i',strtotime($post->created_at))	}} </td>
                    <td>{{date('M j,Y H:i',strtotime($post->updated_at)) }}</td>
                    <td width="300" style="text-align: center">
                    <a href="{{url('posts/'.$post->id ) }}" class="btn btn-secondary btn mini" 
                    onclick="return confirm('Do you want to see this details?')" >View</a>
                    <a href="{{url('posts/'.$post->id.'/edit' ) }}" class="btn btn-primary btn mini" 
                    onclick="return confirm('Do you want to edit this details?')" >Edit</a>
                    
                    <a href="{{ url('/admin/delete-post/'.$post->id)}}"class="btn btn-danger btn mini" 
                     onclick="return confirm('Are You Sure ?')">Delete</a>
                      <br>
                      <br>
                     <a href="{{ url('/admin/search-comments/'.$post->id)}}"class="btn btn-info btn mini" 
                     onclick="return confirm('Do you want to see this details?')">View Comments</a>
                    
                    
                    
                    </td> 
                    </tr>
                
                 @endforeach
                @else
                <b>No Post</b>
                @endif
                  </tbody>
               
                  
                
                </table>
                
             
              </div>
           
              <!-- /.card-body -->
              
            </div>
            
            <div class="col-sm-6">
            
     
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