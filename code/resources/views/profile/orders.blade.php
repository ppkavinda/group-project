<h3 class="w3l_header mt-4 mb-5">My <span>orders</span></h3>
<div class="row">
  <div class="col-12 table-responsive">
    <table class="table table-striped">
	    <thead>
        <tr>
          <th>Order</th>
          <th>Product Name</th>
          <th>Quantity</th>
          <th>Unit Price</th>
          <th>Total Ptice</th>
          <th>Date</th>
          <th>Status</th>          
        </tr>
      </thead>
      <tbody>
      
    
       @foreach($orders as $order) { 

        <tr>
          <td>{{$order->id}}</td>
          <td>{{$order->created_at}}</td>
          <td>{{$order->status}}</td>
          

         </tr>
          
        @endforeach
  
      </tbody>
      </table>
    </div>

</div>