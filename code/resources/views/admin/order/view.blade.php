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
            <h1>Orders Table</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin">Home</a></li>
              <li class="breadcrumb-item active">Orders Table</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
    
      
              <!--  <input class="form-control" id="myInput" type="text" placeholder="Search Order">
                <br>
            </div>
            <div class="row">-->
        <div class="col-md-4">
          <form action="/admin/search-order" method="get">
            <div class="input-group">
                  <input type="search" name="search"class="form-control" placeholder="Enter Order Details">
                  <span class="input-group-prepend">
                      <button type="submit" class="btn btn-primary">Search</button>
                  </span>
            </div>
         </form>
       </div>
      
     
      <div class="col-sm-4">
      <a href="{{ url('/admin/courses/generate-pdf')}}"class="btn btn-info btn mini" 
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
                <h3 class="card-title">Orders</h3>
              </div>
              <!-- /.card-header -->
              <div class="row">
            
        </div>
              <div class="card-body">
             <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th style="width: 40px" color="solid black">Order ID</th>
                    <th>Order Status</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>Postal Code</th>
                    <th>Telephone</th>
                   
                    <th>Payment ID</th>
                    <th>User ID</th>
                    <th>Created By</th>
                    
                    <!--<th>Cover Image</th>
                    
                    <th>updated_at</th> -->
                    
                  
                  </tr>
                  </thead>
                  <tbody id="myTable">
                  
                  @foreach($orders as $order)
                   
                   <tr>
                    <td><b>{{$order->id}}</b></td>
                    <td><b>{{$order->status}}</b></td>
                    <td><b>{{$order->address1}}</b>,<b>{{$order->address2}}</b></td>
                    <td><b>{{$order->city	}}</b></td>
                    <td><b>{{$order->postal_code	}}</b></td>
                    
                    
                    <td><b>{{$order->telephone}}</b></td>
                   
                    <td><b>{{$order->payment_id}}</b></td>
                    <td><b><a href="{{url('/admin/view-user/'.$order->user_id)}}">{{$order->user_id}}</a></b></td>
                    <td><b>{{date('M j,Y H:i',strtotime($order->created_at))	}}</b></td>
                   
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