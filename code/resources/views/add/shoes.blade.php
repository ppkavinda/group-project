@extends('study.master')
@section('content')
<div class="contact">
		<div class="container">
			<h3 class="w3l_header w3_agileits_header1">Item <span>Details</span></h3>
            <div class="formColor">
                <div class="w3layouts_mail_grid">
                    <div class="agileits_mail_grid_right agileits_w3layouts_mail_grid_right">
                        <div class="agileits_mail_grid_right1 agile_mail_grid_right1">
                            <form action="/postAdd" method="post" enctype="multipart/form-data">
                            @csrf
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="radio-inline">
                                            <input type="radio" name="kind" value="5" checked>&nbsp Shoes and Slippers
                                        </label>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="name" id="labels">&nbsp Name of the product &nbsp</label>
                                            <br>
                                            <input type ="text" id="select" name="name" required>    
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="amount" id="labels">&nbsp Amount &nbsp</label>
                                            <input multi class="form-control" type="number" id="select" name="amount" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="category" id="labels">&nbsp Category &nbsp</label>
                                            <select class="form-control" id="select" name="category">
                                            <option>Children(Male)</option>
                                            <option>Chlidren(Female)</option>
                                            <option>Men</option>
                                            <option>Women</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="type" id="labels">&nbsp Type &nbsp</label>
                                            <select class="form-control" id="select" name="type">
                                            <option>Shoes</option>
                                            <option>Slippers</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="sizes" id="labels">&nbsp Sizes &nbsp</label>
                                            <br>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                <input type ="checkbox" name="sizes[]" value="5" checked>&nbsp5
                                                </div>
                                                <div class="col-sm-4">
                                                <input type ="checkbox" name="sizes[]" value="6">&nbsp6
                                                </div>
                                                <div class="col-sm-4">
                                                <input type ="checkbox" name="sizes[]" value="7">&nbsp7
                                                </div>
                                                <div class="col-sm-4">
                                                <input type ="checkbox" name="sizes[]" value="8">&nbsp8
                                                </div>
                                                <div class="col-sm-4">
                                                <input type ="checkbox" name="sizes[]" value="9">&nbsp9
                                                </div>
                                                <div class="col-sm-4">
                                                <input type ="checkbox" name="sizes[]" value="10">&nbsp10
                                                </div>
                                            </div>    
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="details" id="labels">&nbsp Details &nbsp</label>
                                            <textarea class="form-control" id="select" rows="4" name="details" required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="image" id="labels">&nbsp Image &nbsp</label>
                                            <input type="file" class="form-control-file" id="select" name="image" accept=".png,.jpg,.jpeg" onchange="readURL(this);" required>
                                            <img id="viewImg" src="/dist/img/imgicon.png" alt="your image" />
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="price" id="labels">&nbsp Price(pair of shoes or slippers Rs.) &nbsp</label>
                                            <input multi class="form-control" type="number" id="select" name="price" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="discount" id="labels">&nbsp Discount(one cloth Rs.) &nbsp</label>
                                            <input multi class="form-control" type="number" id="select" name="discount" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <button class="btn btn-primary" type="submit">Post ad</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    // echo $posts;
    ?>
</div>
@endsection