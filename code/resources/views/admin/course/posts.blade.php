@extends('admin.master')
@section('content')





<body class="hold-transition sidebar-mini">
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Posts </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin">Home</a></li>
              <li class="breadcrumb-item active">Posts</li>
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
                
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <div class="container">
                 <div class="row">
                @if( $postscount == 0)
                   <p> No Post </p>
                @endif
                   @foreach($posts as $post)
                   <div class="col-sm-6 col-md-6">
                    <div class="post">
                      <div class="post-img-content">
                     
                      <span class="post-title"><b>{{$post->name}}:{{$post->title}}</b><br>
                        </span>
                      </div>
                    <div class="content">
                       <div class="author">
                       By <b></b>By {{$post->name}}
                        <time datetime="2014-01-20">{{$post->created_at}}</time>
                      </div>
                      <div>
                      {!!$post->body!!}
                      </div>
                      <div>
                          <a href="http://www.jquery2dotnet.com/2014/01/jquery-highlight-table-row-and-column.html" 
                          class="btn btn-success btn-sm">Read more</a>
                          <a href="http://www.jquery2dotnet.com/2014/01/jquery-highlight-table-row-and-column.html" 
                          class="btn btn-primary btn-sm">Edit</a>
                          <a href="http://www.jquery2dotnet.com/2014/01/jquery-highlight-table-row-and-column.html" 
                          class="btn btn-warning btn-sm">Delete</a>
                       </div>
                    </div>
                   
                    </div>
                  </div>
                  @endforeach
                  
                <br>
               
             </div>
            
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

  