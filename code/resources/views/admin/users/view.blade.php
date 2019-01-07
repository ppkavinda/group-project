
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
            <h1>Users Table</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin">Home</a></li>
              <li class="breadcrumb-item active">Users table</li>
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
                    <input type="text" class="form-control" name="search_users" id="search_users" placeholder="Search" required >

                    @if ($errors->has('search_users'))
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $errors->first('search_users') }}</strong>
                        </span>
                    @endif
                  </div>
                  
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" value="search_users" class="btn btn-block btn-primary" >Search</button>
                </div>
              </form>
              @if(Session::has('flash_message_success'))
                
                <div class="alert alert-info alert-block">
	              <button type="button" class="close" data-dismiss="alert">×</button>	
                <strong>{!!session('flash_message_success')!!}</strong>
                </div>
  

              @endif
                
              
           
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
             
              <div class="container">
		          
			         
                  <h3 class="card-title"><b><strong>User Details</b></strong></h3>
                </div>
                  <!-- /.card-header -->
            
		              	
              <div class="card-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th style="width: 40px" color="solid black">ID</th>
                    <th>name</th>
                    <th width="200">email</th>
                    <th>nic</th>
                    <th>Address</th>
                    <th>telephone</th>
                    <th>role</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($users as $user)
                <tr>
                 <td>{{$user->id}}</td>
                  <td>{{$user->name}}</td>
                  <td>{{$user->email}}</td>
                  <td>{{$user->nic}}</td>
                  <td>{{$user->address1}} {{$user->address2}}{{$user->city}}</td>
                  <td>{{$user->telephone}}</td>
                  <td>@if($user->isAdmin())Admin
                  @elseif($user-> isFacilitator())Facilitator
                  @elseif($user->isEntrepreneur())Entrepreneur
                  @else Customer
                  @endif
                  </td>
                  <td>
                  <a href="{{url('/admin/edit-users/'.$user->id) }}" class="btn btn-primary btn mini" >Promote</a>
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