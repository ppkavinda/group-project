{{--
<p>
    <span class="item_price"> LKR {{ number_format((float)$product->price, 2, '.', '') }}</span> 
</p>

<add-to-cart initial-product="{{ $product }}"></add-to-cart> 
--}}

<div class="col-md-6">
    <br>
    <add-to-cart initial-product="{{ $product }}"></add-to-cart> 
</div>

