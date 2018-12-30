@extends('study.master')
@section('content')
<h3 class="w3l_header mt-4 mb-5">Your Post Advertisements</h3>
@for($x=0; $x<count($posts); $x++)
    <div class="advertisementBorder">
        <br>
        <div class="row">
            <div class="col-md-6">
                <form action="/users/edit" method="POST">
                    <fieldset disabled>
                        <div class="form-group row">
                            <label for="kind" class="col-sm-3 col-form-label">&nbsp Name</label>
                            <div class="col-sm-9">
                                <input type="text" id="kind" value={{$posts[$x]['kind']}}>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="category" class="col-sm-3 col-form-label">&nbsp Category</label>
                            <div class="col-sm-9">
                                <input type="text" id="category" value={{$posts[$x]['category']}}>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="type" class="col-sm-3 col-form-label">&nbsp Type</label>
                            <div class="col-sm-9">
                                <input type="text" id="type" value={{$posts[$x]['type']}}>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="size" class="col-sm-3 col-form-label">&nbsp Size/Weight</label>
                            <div class="col-sm-9">
                                <input type="text" id="size" value={{$posts[$x]['sizes']}}>
                            </div>
                        </div>

                    </fieldset>
                    <div class="form-group row">
                        <label for="addDetails" class="col-sm-3 col-form-label">&nbsp Details</label>
                        <div class="col-sm-9">
                            <textarea name="addDetails" id="details" cols="47"rows="2">{{$posts[$x]['details']}}</textarea>
                            <i aria-hidden="true" class="fa fa-pencil edit-pencil"></i>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputName" class="col-sm-3 col-form-label">&nbsp Price(Rs.)</label>
                        <div class="col-sm-9">
                        <input multi class="form-control" type="number" name="price" value={{$posts[$x]['price']}} required>
                        </div>
                    </div>
                    <input type="submit" class="btn offset-md-3 btn-primary" value="Save">
                </form>
            </div>
            <div class="col-md-6">
                {{-- <center> --}}
                <div class="card mx-auto" style="width: 25rem;">
                    <center>
                        <img src=@$posts[0]['image']>
                    </center>
                </div>
            </div>
        </div>
        <br>
    </div>
    <br><br>
@endfor
{{}}
@endsection