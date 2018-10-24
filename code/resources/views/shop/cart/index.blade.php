@extends('shop.master')
@section('content')
<div class="container">
    <h3 class="wthree_text_info text-left my-3 py-3">Shopping Cart <span><small>( {{ \Cart::count() }} items)</small></span></h3>	

    <div class="row">
        <div class="col-md-9">
            @foreach ($cart as $item)
                <div class="card bg-light mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2">
                                {{-- {{ dd($item) }} --}}
                                <img src="{{ $item->options->img1 }}" alt="{{ $item->name }}" class="img-fluid">
                            </div>
                            <div class="col-md-5 text-dark">
                                <h6 class="row"><strong><a href="/products/{{ $item->id }}">{{ $item->name }}</a></strong></h6>
                                <small class="mt-3 row"><a class=" text-danger" href="/products/1">remove</a></small>
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
            <div class="card bg-light">
                    <div class="card-body">
                        <a class="btn btn-primary form-control">Go to checkout</a>
                        <div class="my-3">
                            <p>asdf<span class="text-right">asf</span></p>
                            
                        </div>
                    </div>
                </div>
        </div>
    </div>

</div>
@endsection