<h3>{{ $product->name }}</h3>
<p>
    <span class="item_price"> LKR {{ number_format((float)$product->price, 2, '.', '') }}</span> 
    <del>- $900</del>
</p>

<add-to-cart initial-product="{{ $product }}"></add-to-cart>
<cart-model initial-items="{{ json_encode(Cart::content()) }}"></cart-model>