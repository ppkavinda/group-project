<h4 class="w3l_header mt-4 mb-5"> Received <span>Orders</span> </h4>
<div class="col-md-12">
@if (count($orderNotifications) > 0)
<table class="table table-striped">
	    <thead>
        <tr>
          <th>Order id</th>
          <th>Product Name</th>
          <th>Quantity</th>
          <th>Address</th>
          <th>Date</th>
          <th>Status</th>          
          <th>Actions </th>
        </tr>
      </thead>
      <tbody>
      <tr>
      @forelse($orderNotifications as $notification)
        @forelse(\App\Order::find($notification->data['order_id'])->products as $product)
          @if ($product->user->id == auth()->user()->id)
              <td>{{ $notification->data['order_id']}}</td>
              <td>{{ $product->name }}</td>
              <td>{{ $product->pivot->amount }}</td>
              <td>
                @if(\App\Order::find($notification->data['order_id'])->address)
                  {{ \App\Order::find($notification->data['order_id'])->address }}
                @else
                  {{ \App\Order::find($notification->data['order_id'])->user->address1 . ', ' . \App\Order::find($notification->data['order_id'])->user->address2 }}
                @endif
              </td>
              <td>{{ $product->created_at }}</td>
              <td>
                @if(\App\Order::find($notification->data['order_id'])->status == 0)
                  Not Payed
                @elseif(\App\Order::find($notification->data['order_id'])->status == 1)
                  Payed
                @elseif(\App\Order::find($notification->data['order_id'])->status == 2)
                  Shipped
                @endif
              </td>
              <td>
                @if(\App\Order::find($notification->data['order_id'])->status == 1)
                  <a href="/orders/{{ $notification->data['order_id'] }}/shipped/{{ $product->id}}" class="btn btn-primary">Mark As Shipped</a>
                @endif
              </td>
          @endif
        @empty
          <td>No Received Orders</td>
        @endforelse
      @empty
        <td>No Received Orders</td>
      @endforelse
      </tr>
      {{-- {{ $orderNotifications->data->id }} --}}
      </tbody></table>
@else
<h4>No Received Orders</h4>
@endif
</div>