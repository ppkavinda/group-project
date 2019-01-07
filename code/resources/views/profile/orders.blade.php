<h3 class="w3l_header mt-4 mb-5">My <span>orders</span></h3>
<div class="row">
<div class="table-responsive">
  @if (count($orders))
    <table class="table table-striped">
	    <thead>
        <tr>
          <th>Order</th>
          <th>Product Name</th>
          <th>Quantity</th>
          <th>Unit Price(Rs)</th>
          <th>Total Price(Rs)</th>
          <th>Date</th>
          <th>Status</th>          
        </tr>
      </thead>
      <tbody>
        @foreach($orders as $order)
          @foreach($order -> products as $product)
            <tr>
              <td>{{$order->id}}</td>
              <td>{{$product->name}}</td>
              <td>{{$product->pivot->amount}}</td>
              <td>{{$product->pivot->price}}</td>
              <td>{{$product->pivot->amount*$product->pivot->price}}</td>
              <td>{{$order->created_at}}</td>
              @if($order->status===0)
              <td><span class="label label-primary"> Placed, not payed</span></td>
              @elseif($order->status===1)
              <td> <span class="label label-info">Payed</span></td>
              @elseif($order->status===2)
              <td><span class="label label-success"> Shipped</span></td>
              @elseif($order->status===3)
              <td> Delivered</td>
              @else
              <td> <span class="label label-primary">Complete</td>
              @endif
            </tr>
          @endforeach
        @endforeach
  
      </tbody>
      </table>
    @else
    <div class="container">
      <h3>You havent bought any products yet!</h3>
    </div>
    @endif
    </div>

</div>