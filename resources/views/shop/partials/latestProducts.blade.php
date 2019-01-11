<div class="w3_agile_latest_arrivals">
    <h3 class="wthree_text_info">Featured <span>Arrivals</span></h3>	
    <div class="row">
        @foreach ($latest as $item)
            <div class="col-md-3 product-men single">
                <div class="men-pro-item simpleCart_shelfItem">
                    <div class="men-thumb-item">
                        <img src="/storage/img/products/sample.png" alt="" class="pro-image-front">
                        <img src="/storage/img/products/sample.png" alt="" class="pro-image-back">
                            <div class="men-cart-pro">
                                <div class="inner-men-cart-pro">
                                    <a href="/products/{{ $item->id }}" class="link-product-add-cart">Quick View</a>
                                </div>
                            </div>
                        <span class="product-new-top">New</span>
                    </div>
                    <div class="item-info-product ">
                        <h4><a href="single.html">{{ $item->name }}</a></h4>
                        <div class="info-product-price">
                            <span class="item_price">LKR {{ $item->price }}</span>
                            <del>$189.71</del>
                        </div>
                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                            <form action="#" method="post">
                                <fieldset>
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="add" value="1">
                                    <input type="hidden" name="business" value=" ">
                                    <input type="hidden" name="item_name" value="Sleeveless Solid Blue Top">
                                    <input type="hidden" name="amount" value="30.99">
                                    <input type="hidden" name="discount_amount" value="1.00">
                                    <input type="hidden" name="currency_code" value="USD">
                                    <input type="hidden" name="return" value=" ">
                                    <input type="hidden" name="cancel_return" value=" ">
                                    <input type="submit" name="submit" value="Add to cart" class="button">
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>