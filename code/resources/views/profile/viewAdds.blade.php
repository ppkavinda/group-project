@extends('study.master')
@section('content')
<h3 class="w3l_header mt-4 mb-5">Your Post Advertisements</h3>
@for($x=0; $x< count($posts); $x++)
    <div class="advertisementBorder">
        <br>
        <div class="row">
            <div class="col-md-6">
                <form action="/YourAdvertisements/{{$posts[$x]['id']}}/update" method="POST" onsubmit="return checkForm(this);">
                @csrf
                    <fieldset disabled>
                        <div class="form-group row">
                            <label for="kind" class="col-sm-3 col-form-label">&nbsp Name</label>
                            <div class="col-sm-9">
                                <input type="text" id="kind" value={{$posts[$x]['name']}}>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="category" class="col-sm-3 col-form-label">&nbsp Category</label>
                            <div class="col-sm-9">
                                <input type="text" id="category" value={{$posts[$x]['kind']}}>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="type" class="col-sm-3 col-form-label">&nbsp Type</label>
                            <div class="col-sm-9">
                                <input type="text" id="type" value={{$posts[$x]['type']}}>
                            </div>
                        </div>
                    </fieldset>
                        @if($posts[$x]['category_id']==1)
                            <div class="form-group row">
                                <label for="amount" class="col-sm-3 col-form-label">&nbsp Sizes & Amount</label>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group col">
                                            <label for="size(XS)" class="col-sm-3 col-form-label">size(XS)</label>
                                            <input  class="form-control" name=size(XS) type="number" min="0" value="{{$sizes[$x][0]['size(XS)']}}">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group col">
                                            <label for="size(S)" class="col-sm-3 col-form-label">size(S)</label>
                                            <input  class="form-control" name=size(S) type="number" min="0" value="{{$sizes[$x][0]['size(S)']}}">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group col">
                                            <label for="size(M)" class="col-sm-3 col-form-label">size(M)</label>
                                            <input  class="form-control" name=size(M) type="number" min="0" value="{{$sizes[$x][0]['size(M)']}}">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group col">
                                            <label for="size(L)" class="col-sm-3 col-form-label">size(L)</label>
                                            <input  class="form-control" name=size(L) type="number" min="0" value="{{$sizes[$x][0]['size(L)']}}">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group col">
                                            <label for="size(XL)" class="col-sm-3 col-form-label">size(XL)</label>
                                            <input  class="form-control" name=size(XL) type="number" min="0" value="{{$sizes[$x][0]['size(XL)']}}">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group col">
                                            <label for="size(XXL)" class="col-sm-3 col-form-label">size(XXL)</label>
                                            <input  class="form-control" name=size(XXL) type="number" min="0" value="{{$sizes[$x][0]['size(XXL)']}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @elseif($posts[$x]['category_id']==2)
                            <div class="form-group row">
                                <label for="amount" class="col-sm-3 col-form-label">&nbsp Sizes & Amount</label>
                                <div class="row">
                                @if($sizes[$x][0]['size(25*25)']!=null)
                                    <div class="col-sm-6">
                                        <div class="form-group col">
                                            <label for="size(25*25)" class="col-sm-3 col-form-label">size(25cm*25cm)</label>
                                            <input  class="form-control" name=size(25*25) type="number" min="0" value="{{$sizes[$x][0]['size(25*25)']}}">
                                        </div>
                                    </div>
                                @elseif($sizes[$x][0]['size(50*50)']!=null)
                                    <div class="col-sm-6">
                                        <div class="form-group col">
                                            <label for="size(50*50)" class="col-sm-3 col-form-label">size(50cm*50cm)</label>
                                            <input  class="form-control" name=size(50*50) type="number" min="0" value="{{$sizes[$x][0]['size(50*50)']}}">
                                        </div>
                                    </div>
                                @elseif($sizes[$x][0]['size(60*60)']!=null)
                                    <div class="col-sm-6">
                                        <div class="form-group col">
                                            <label for="size(60*60)" class="col-sm-3 col-form-label">size(60cm*60cm)</label>
                                            <input  class="form-control" name=size(60*60) type="number" min="0" value="{{$sizes[$x][0]['size(60*60)']}}">
                                        </div>
                                    </div>
                                @endif
                                </div>
                            </div>
                        @elseif($posts[$x]['category_id']==3)
                            <div class="form-group row">
                                <label for="amount" class="col-sm-3 col-form-label">&nbsp Weight & Amount</label>
                                <div class="row">
                                @if($sizes[$x][0]['size(50g)']!=null)
                                    <div class="col-sm-6">
                                        <div class="form-group col">
                                            <label for="size(50g)" class="col-sm-3 col-form-label">Weight(50g)</label>
                                            <input  class="form-control" name=size(50g) type="number" min="0" value="{{$sizes[$x][0]['size(50g)']}}">
                                        </div>
                                    </div>
                                @elseif($sizes[$x][0]['size(100g)']!=null)
                                    <div class="col-sm-6">
                                        <div class="form-group col">
                                            <label for="size(100g)" class="col-sm-3 col-form-label">Weight(100g)</label>
                                            <input  class="form-control" name=size(100g) type="number" min="0" value="{{$sizes[$x][0]['size(100g)']}}">
                                        </div>
                                    </div>
                                @elseif($sizes[$x][0]['size(200g)']!=null)
                                    <div class="col-sm-6">
                                        <div class="form-group col">
                                            <label for="size(200g)" class="col-sm-3 col-form-label">size(200g)</label>
                                            <input  class="form-control" name=size(200g) type="number" min="0" value="{{$sizes[$x][0]['size(200g)']}}">
                                        </div>
                                    </div>
                                @endif
                                </div>
                            </div>
                        @elseif($posts[$x]['category_id']==4)
                            <div class="form-group row">
                                <label for="amount" class="col-sm-3 col-form-label">&nbsp Sizes & Amount</label>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group col">
                                            <label for="size(100g)" class="col-sm-3 col-form-label">Weight(100g)</label>
                                            <input  class="form-control" name=size(100g) type="number" min="0" value="{{$sizes[$x][0]['size(100g)']}}">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group col">
                                            <label for="size(200g)" class="col-sm-3 col-form-label">Weight(200g)</label>
                                            <input  class="form-control" name=size(200g) type="number" min="0" value="{{$sizes[$x][0]['size(200g)']}}">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group col">
                                            <label for="size(400g)" class="col-sm-3 col-form-label">Weight(400g)</label>
                                            <input  class="form-control" name=size(400g) type="number" min="0" value="{{$sizes[$x][0]['size(400g)']}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @elseif($posts[$x]['category_id']==5)
                            <div class="form-group row">
                                <label for="amount" class="col-sm-3 col-form-label">&nbsp Sizes & Amount</label>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group col">
                                            <label for="size(6)" class="col-sm-3 col-form-label">size(6")</label>
                                            <input  class="form-control" name=size(6) type="number" min="0" value="{{$sizes[$x][0]['size(6)']}}">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group col">
                                            <label for="size(7)" class="col-sm-3 col-form-label">size(7")</label>
                                            <input  class="form-control" name=size(7) type="number" min="0" value="{{$sizes[$x][0]['size(7)']}}">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group col">
                                            <label for="size(8)" class="col-sm-3 col-form-label">size(8")</label>
                                            <input  class="form-control" name=size(8) type="number" min="0" value="{{$sizes[$x][0]['size(8)']}}">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group col">
                                            <label for="size(9)" class="col-sm-3 col-form-label">size(9")</label>
                                            <input  class="form-control" name=size(9) type="number" min="0" value="{{$sizes[$x][0]['size(9)']}}">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group col">
                                            <label for="size(10)" class="col-sm-3 col-form-label">size(10")</label>
                                            <input  class="form-control" name=size(10) type="number" min="0" value="{{$sizes[$x][0]['size(10)']}}">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group col">
                                            <label for="size(11)" class="col-sm-3 col-form-label">size(11")</label>
                                            <input  class="form-control" name=size(11) type="number" min="0" value="{{$sizes[$x][0]['size(11)']}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    <div class="form-group row">
                        <label for="addDetails" class="col-sm-3 col-form-label">&nbsp Details</label>
                        <div class="col-sm-9">
                            <textarea name="addDetails" id="details" cols="44"rows="2">{{$posts[$x]['description']}}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="price" class="col-sm-3 col-form-label">&nbsp Price(LKR)</label>
                        <div class="col-sm-4">
                        <input multi class="form-control" type="number" name="price" min="0" value={{$posts[$x]['price']}} required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="discount" class="col-sm-3 col-form-label">&nbsp Discount(LKR)</label>
                        <div class="col-sm-4">
                        <input multi class="form-control" type="number" name="discount" value={{$posts[$x]['discount']}} required>
                        </div>
                    </div>
                    <input type="submit" class="btn offset-md-3 btn-primary" value="Update">
                    <a class="btn btn-danger" href="/YourAdvertisements/{{$posts[$x]['id']}}/delete" onclick="return confirm('Delete this advertisement!!')">Delete</a>
                </form> 
            </div>
            <div class="col-md-6">
                <div id=postsImage>
                    <div class="card mx-auto">
                        <center>
                        <img class="img-fluid" src="/storage/{{$posts[$x]['img1']}}"  height="200px" width="auto" alt="Computer Hope">
                        </center>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>
    <br><br>
@endfor
@endsection