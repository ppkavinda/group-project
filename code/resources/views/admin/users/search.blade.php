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
              <li class="breadcrumb-item active">User</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
              
                <h3 class="card-title">User Details</h3>
              </div>

              
          
              <form class="form-horizontal" method="post" action="{{url('/admin/search-users') }}" name="search_user" id="search_user"  >
              {{ csrf_field() }}
                <div class="card-body">
                  <div class="form-group">
                    <label for="categoryName">Search</label>
                    <input type="text" class="form-control" name="search" id="search" placeholder="Search" required >

                    @if ($errors->has('search'))
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $errors->first('search') }}</strong>
                        </span>
                    @endif
                  </div>
                  
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" value="search_users" class="btn btn-block btn-primary" 
                  onclick="return confirm('Do Run this Query?')" >Search</button>
                </div>
              </form>
                
              
           
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
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
              <div class="container">
		          @if(isset($details))
              <div class="alert alert-secondary" role="alert">
	              <button type="button" class="close" data-dismiss="alert">×</button>	
                <strong><p> The Search results for your query <b> {{$query}}  </b> are :<p></strong>
              </div>
             
                  <h3 class="card-title">User Details</h3>
               
                  <!-- /.card-header -->
            
		              	
              <div class="card-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th style="width: 40px" color="solid black">ID</th>
                
                    <th>Name</th>
                    <th>Email</th>
                    <th>NIC</th>
                    <th>Role</th>
                   
                    <th class="center">Actions</th>
                  
                  </tr>
                </thead>
                <tbody>
                @foreach($details as $user)
                  <tr>
                  <td>{{$user->id}}</td>
                  <td>{{$user->name}}</td>
                  <td>{{$user->email}}</td>
                  <td>{{$user->nic}}</td>
                  <td>{{$user->role}}</td>
                  <td> </td>
                  </tr>
                @endforeach
                  
                
               
                
               </tbody>
        
                  
                
               </table>
               @endif 
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