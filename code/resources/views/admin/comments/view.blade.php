@extends('admin.master')
@section('content')



<body class="hold-transition sidebar-mini">
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Comments</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin">Home</a></li>
              <li class="breadcrumb-item active">Comments Table</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
      <div class="row">
    
      <div class="col-sm-6">
        <form action="/admin/search-comments" method="get">
          <div class="input-group">
                <input type="search" name="search"class="form-control" placeholder="Enter Comments id">
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
                <h3 class="card-title">Comments</h3>
              </div>
             
              <div class="card-body">
              <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th style="width: 40px" color="solid black">Comments ID</th>
                   
                    
                   
                    <th>Body</th>
                    <th>Post id</th>
                    <th>Post title</th>
                    
                    <th>User id</th>
                    <th>User Name</th>
                    <th>Create At</th>
                   
                    <th width="250" >Actions</th>
                  
                  </tr>
                  </thead>
                  <tbody>
                 
                  @foreach($comments as $comment)
                  <tr>
                    <td><b>{{$comment->id}}</b></td>
                    <td><b>{{$comment->body}}</b></td>
                    <td><b>{{$comment->post_id}}</b></td>
                    <td><b>{{$comment->post->title}}</b></td>
                    <td><b>{{$comment->user->name}}</b></td>
                    <td><b>{{$comment->user_id}}</b></td>
                  
              
                    
                   
                   
                    
                   
                    <td><b>{{date('M j,Y H:i',strtotime($comment->created_at))	}} </b></td>
                  
                    <td width="100" style="text-align: center">
                   
                    
                    <a href="{{ url('/admin/delete-comment/'.$comment->id)}}"class="btn btn-danger btn mini" 
                     onclick="return confirm('Are You Sure ?')">Delete</a>
                      <br>
                     
                    
                    
                    
                    </td> 
                    </tr>
                
                 @endforeach
                
                  </tbody>
               
                  
                
                </table>
                
             
              </div>
           
              <!-- /.card-body -->
              
            </div>
            
            <div class="col-sm-6">
            {{$comments->links()}}
     
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