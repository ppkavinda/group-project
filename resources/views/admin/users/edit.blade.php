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
              <li class="breadcrumb-item active">Edit role</li>
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
                <h3 class="card-title">Edit Category</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" method="post" action="{{url('/admin/edit-users/'.$usersdetails->id) }}" 
              name="edit_user" id="edit_user" >{{ csrf_field() }}
                <div class="card-body">
                <div class="form-group">
                  <label for="categoryName">Role</label>
                    <select id="category_id"  name="category_id" class="form-control" placeholder="Role">
                          <option value="0">Select Role</option>
                         
                          @foreach( $roles as $role)
                          @if(($role->id)  != 4)
                          <option value="{{$role->id}}">{{ $role->role }}</option>
                          @continue
                          @endif
                          @endforeach
                   </select>
                </div>
                </div>  
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit"   onclick="return confirm('Are you sure?')" value="Add Category" class="btn btn-block btn-primary" >Update
                  </button>
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
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
   
 @endsection('content')