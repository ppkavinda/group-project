@extends('admin.master')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



<body class="hold-transition sidebar-mini">
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Enrollment Table</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin">Home</a></li>
              <li class="breadcrumb-item active">Enrollment Table</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
      <div class="container-fluid">
      <div class="row">
    
      <div class="col-sm-6">
      <div class="col-md-6">
                <input class="form-control" id="myInput" type="text" placeholder="Search...">
                <br>
            </div>
        <!-- <form action="/admin/search-course" method="get">
          <div class="input-group">
                <input type="search" name="search"class="form-control" placeholder="Enter Course Name">
                <span class="input-group-prepend">
                    <button type="submit" class="btn btn-primary">Search</button>
                </span>
          </div>
        </form>-->
      </div>
      <div class="col-sm-6">
      <a href="/admin/view-course/coursePdf"class="btn btn-info btn mini" 
                     onclick="return confirm('Are You sure?')">Convert to  Pdf</a>
     
     </diV>
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
                <h3 class="card-title">Enrollment</h3>
              </div>
              <!-- /.card-header -->
              <div class="row">
            
        </div>
              <div class="card-body">
             <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th style="width: 40px" color="solid black">User ID</th>
                    <th>User Name</th>
                    <th>Email </th>
                    <th>NIC</th>
                    
                    <!--<th>Cover Image</th>
                    
                    <th>updated_at</th> -->
                    
                  
                  </tr>
                  </thead>
                  <tbody id="myTable">
                  
                  @foreach($course->users as $user)
                   
                   <tr>
                    <td><b>{{ $user->id }}</b></td>
                    <td><b>{{$user->name}}</b></td>
                    <td><b>{{$user->email}}</b></td>
                    <td><b>{{$user->nic}}</b></td>
                   
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
        
<script>
$(document).ready(function(){
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
</script>
</body>
</html>
 @endsection