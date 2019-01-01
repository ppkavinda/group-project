<h3 class="w3l_header mt-4 mb-5">My <span>orders</span></h3>
<div class="container">
	<div class="row">
		<div class="table-responsive">
      <table class="table table-bordered">
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
        
        $products = Product::all()->filter(function($orders));
        $ordersOfCurrentUser = Auth::user()->orders();

        $productsOfCurrrentUser = new Collection([]);

        foreach($order as $ordersOfCurrentUser) {
          $productsOfCurrrentUser = $productsOfCurrrentUser->merge($order->products()->get());
        }
        
        </tbody>
      </table>
    </div>
  </div>
</div>