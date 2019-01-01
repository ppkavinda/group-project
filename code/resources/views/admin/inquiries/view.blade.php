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
                    <th style="width: 40px" color="solid black">Inquiry ID</th>
                    <th> Name</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Message</th>
                    
                    
                    <th>updated_at</th>
                    <th class="center">Actions</th>
                  
                  </tr>
                  </thead>
                  <tbody>
                  
                  @foreach( $inquiries as $inquiry)
                  <tr>
                    <td><b>{{$inquiry->id}}</b></td>
                    <td><b>{{$inquiry->name}}</b></td>
                    <td><b>{{$inquiry->email}}</b></td>
                    <td><b>{{$inquiry->subject}}</b></td>
                    <td><b>{{$inquiry->message	}}</b></td>
                   
                    
                    <td><b> {{$inquiry->updated_at}} </b>  </td>
                    <td class="left">
                    
                    <span> <a href="{{ url('admin/delete-inquiry/'.$inquiry->id)}}"class="btn btn-primary btn mini">Delete</a></span>
                      
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
        

<script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->




    
<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>

<script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<br>
<br>
<br>
</body>
</html>
 @endsection