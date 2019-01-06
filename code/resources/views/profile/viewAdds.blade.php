@extends('study.master')
@section('content')
<h3 class="w3l_header mt-4 mb-5">Your Post Advertisements</h3>
@for($x=0; $x<count($posts); $x++)
    <div class="advertisementBorder">
        <br>
        <div class="row">
            <div class="col-md-6">
                <form action="/YourAdvertisements/{{$posts[$x]['id']}}/update" method="POST">
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
                        <div class="form-group row">
                            <div class="col-sm-3">&nbsp Size/Weight</div>
                            <div class="col-sm-9">
                                {{$posts[$x]['sizes']}}
                            </div>
                        </div>
                    </fieldset>
                        <div class="form-group row">
                            <label for="amount" class="col-sm-3 col-form-label">&nbsp Amount</label>
                            <div class="col-sm-9">
                                <input  class="form-control" name="amount" type="text" id="size" value={{$posts[$x]['amount']}}>
                                <i aria-hidden="true" class="fa fa-pencil edit-pencil"></i>
                            </div>
                        </div>
                    <div class="form-group row">
                        <label for="addDetails" class="col-sm-3 col-form-label">&nbsp Details</label>
                        <div class="col-sm-9">
                            <textarea name="addDetails" id="details" cols="44"rows="2">{{$posts[$x]['description']}}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="price" class="col-sm-3 col-form-label">&nbsp Price(Rs.)</label>
                        <div class="col-sm-9">
                        <input multi class="form-control" type="number" name="price" value={{$posts[$x]['price']}} required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="discount" class="col-sm-3 col-form-label">&nbsp Discount(Rs.)</label>
                        <div class="col-sm-9">
                        <input multi class="form-control" type="number" name="discount" value={{$posts[$x]['discount']}} required>
                        </div>
                    </div>
                    <input type="submit" class="btn offset-md-3 btn-primary" value="Save">
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