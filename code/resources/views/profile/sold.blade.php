<h4 class="w3l_header mt-4 mb-5"> Received Orders </h4>
<div class="col-md-6">
@if (count($orderNotifications) > 0)
<table class="table table-striped">
	    <thead>
        <tr>
          <th>Order id</th>
          <th>Product Name</th>
          <th>Quantity</th>
          <th>Date</th>
          <th>Status</th>          
          <th>Actions </th>
        </tr>
      </thead>
      <tbody>
      <tr>
      @foreach(\App\Orders::find($orderNotifications->data->order_id)->products as $product)
        @if ($product->user->id == auth()->user()->id)
            <td>{{ $orderNotifications->data->order_id }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->created_at }}</td>
            <td>{{ $product->status }} </td>
            <td><a href="/order/{{ $orderNotifications->data->order_id}}/shipped/{{ $product->id}}">Mark As Shipped</a></td>
        @endif
      @endforeach
      </tr>
      {{ $orderNotifications->data->id }}
      </tbody>
@else
<h4>No Received Orders</h4>
@endif
</div>