<h3>{{ $product->name }}</h3>
<p>
    <span class="item_price"> LKR {{ number_format((float)$product->price, 2, '.', '') }}</span> 
    <del>- $900</del>
</p>
<div class="rating1">
    <span class="starRating">
        <input id="rating5" type="radio" name="rating" value="5">
        <label for="rating5">5</label>
        <input id="rating4" type="radio" name="rating" value="4">
        <label for="rating4">4</label>
        <input id="rating3" type="radio" name="rating" value="3" checked="">
        <label for="rating3">3</label>
        <input id="rating2" type="radio" name="rating" value="2">
        <label for="rating2">2</label>
        <input id="rating1" type="radio" name="rating" value="1">
        <label for="rating1">1</label>
    </span>
</div>
<div class="color-quality">
    <div class="color-quality-right">
        <label for="quantiry"><h5>Quality :</h5></label>
        <input type="number" name="quantiry" id="quantity" value="1" class="p-1">
    </div>
</div>
<div class="occasional">
    <h5>Types :</h5>
    <div class="colr ert">
        <label class="radio"><input type="radio" name="radio" checked=""><i></i>Casual Shoes</label>
    </div>
    <div class="colr">
        <label class="radio"><input type="radio" name="radio"><i></i>Sneakers </label>
    </div>
    <div class="colr">
        <label class="radio"><input type="radio" name="radio"><i></i>Formal Shoes</label>
    </div>
    <div class="clearfix"> </div>
</div>
<div class="occasion-cart">
    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
        <form action="#" method="post">
            <fieldset>
                <input type="hidden" name="cmd" value="_cart">
                <input type="hidden" name="add" value="1">
                <input type="hidden" name="business" value=" ">
                <input type="hidden" name="item_name" value="Wing Sneakers">
                <input type="hidden" name="amount" value="650.00">
                <input type="hidden" name="discount_amount" value="1.00">
                <input type="hidden" name="currency_code" value="USD">
                <input type="hidden" name="return" value=" ">
                <input type="hidden" name="cancel_return" value=" ">
                <input type="submit" name="submit" value="Add to cart" class="button">
            </fieldset>
        </form>
    </div>
</div>