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
            <h1>Products Table</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin">Home</a></li>
              <li class="breadcrumb-item active">Product Table</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
    <div class="container-fluid">
    <div class="row">
    
    <div class="col-md-4">
                
                
      <form action="/admin/search-product" method="get">
          <div class="input-group">
                <input type="search" name="search"class="form-control" placeholder="Enter Product Details">
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
                <h3 class="card-title">Products</h3>
              </div>
              <!-- /.card-header -->
              <div class="row">
            
        </div>
              <div class="card-body">
             <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th style="width: 40px;" color="solid black">Product ID</th>
                    <th width="100">Product Name</th>
                    <th width="100">Unit Price</th>
                    {{-- <th>amount</th> --}}
                    {{-- <th>reserved</th> --}}
                   
                    
                    <th>User id</th>
                    
                   
                    <th>category</th>
                    <th>ratings</th>
                    <th>kind</th>
                    <th>Type</th>
                    {{-- <th>sizes</th> --}}
                    <!--<th>Cover Image</th>
                    
                    <th>updated_at</th> -->
                    <th width="200" >Actions</th>
                  
                  </tr>
                  </thead>
                  <tbody id="myTable">
                  
                  @foreach($products as $product)
                   
                   <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->price}}</td>
                    {{-- <td>{{$product->amount}}</td>
                    <td>{{$product->reserved}}</td>
                     --}}
                    
                    <td><a href="{{url('/admin/view-user/'.$product->user_id)}}">{{$product->user_id}}</a></td>
                   
                    <td>{{$product->category->title}}</td>
                    <td>{{$product->ratings}}</td>
                    <td>{{$product->kind}}</td>
                    <td>{{$product->type}}</td>
                    {{-- <td>{{$product->sizes}}</td> --}}
               
                    <td width="300" style="text-align: center">

                    
                    <a href="{{ url('/admin/delete-product/'.$product->id)}}"class="btn btn-danger btn mini" 
                     onclick="return confirm('Are You Sure ?')">Delete</a>
                    <a href="{{ url('/admin/view-product/'.$product->id)}}"class="btn btn-primary btn mini" 
                    >View</a>
                    
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