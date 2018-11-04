@extends('shop.master')
@section('content')
<div class="container-wide" style="min-height: 50vh">
    <h3 class="wthree_text_info text-left my-3 py-3">
        Shopping Cart 
        <span>
            <small>( {{ \Cart::count() }} {{ str_plural('item', \Cart::count()) }})</small>
        </span>
    </h3>	

    <div class="row">
        @if (count($cart))
        <div class="col-md-9">
                @foreach ($cart as $item)
                    <div class="card bg-light mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-2">
                                    <img src="{{ $item->options->img1 }}" alt="{{ $item->name }}" class="img-fluid">
                                </div>
                                <div class="col-md-5 text-dark">
                                    <h6 class="row"><strong><a href="/products/{{ $item->id }}">{{ $item->name }}</a></strong></h6>
                                    <form action="/cart/{{ $item->rowId }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="link btn-link btn text-danger"><small>remove</small></button>
                                    </form>
                                </div>
                                <div class="col-md-2">
                                    <div class="minicart-details-quantity my-auto row">
                                        <label class="label col-md-4 text-right">Qty </label>
                                        <input type="number" class="form-control col-md-7" min="1" value="{{ $item->qty }}" name="quantity">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <h5 class="text-right">LKR {{ $item->price }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="col-md-3">
                <div class="card bg-light mb-3">
                        <div class="card-body">
                            <a class="btn btn-primary form-control">Go to checkout</a>
                            <div class="my-3">
                                <p class="row">
                                    <span class="col-sm-4 mr-auto">{{ str_plural('Item', \Cart::count()) }}</span>
                                    <span class="col-sm-8 text-right">{{ \Cart::count() }}</span>
                                </p>
                                <hr>
                                <p class="row font-weight-bold">
                                    <span class="col-sm-4 mr-auto" style="font-size: 1.4em">Total </span>
                                    <span class="col-sm-8 text-right" style="font-size: 1.4em">{{ \Cart::subtotal() }}</span>
                                </p>
                            </div>
                        </div>
                    </div>
            </div>
        @else
        <div class="col-md-12">
            <div class="card text-center m-3 p-3">

                <div class="card-body m-3 p-3">
                    <h5 class="card-title">You don't have any items in your cart. Let's get shopping!</h5>
                    <a href="/shop" class="btn btn-primary m-3">Start Shopping</a>
                </div>
            </div>
        </div>
        @endif
    </div>

</div>
@endsection