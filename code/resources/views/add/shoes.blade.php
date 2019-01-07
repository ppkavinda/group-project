@extends('study.master')
@section('content')
<div class="contact">
		<div class="container">
			<h3 class="w3l_header w3_agileits_header1">Item <span>Details</span></h3>
            <div class="formColor">
                <div class="w3layouts_mail_grid">
                    <div class="agileits_mail_grid_right agileits_w3layouts_mail_grid_right">
                        <div class="agileits_mail_grid_right1 agile_mail_grid_right1">
                            <form action="/postAdd/{{'5'}}" method="post" enctype="multipart/form-data" onsubmit="return checkForm(this);">
                            @csrf
                                <div class="row">
                                    <div class="col-sm-4">
                                        <h3>Shoes and Slippers</h3>
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
                                            <div class="row p-3">
                                                <div class="col-sm-4">
                                                <label for="sizes6" id="labels">6"</label>
                                                <input type ="number" name="sizes6" style="width:50px" min="1">
                                                </div>
                                                <div class="col-sm-4">
                                                <label for="sizes7" id="labels">7"</label>
                                                <input type ="number" name="sizes7" style="width:50px" min="1">
                                                </div>
                                                <div class="col-sm-4">
                                                <label for="sizes8" id="labels">8"</label>
                                                <input type ="number" name="sizes8" value="XS" style="width:50px" min="1">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                <label for="sizes9" id="labels">9"</label>
                                                <input type ="number" name="sizes9" value="XS" style="width:50px" min="1">
                                                </div>
                                                <div class="col-sm-4">
                                                <label for="sizes10" id="labels">10"</label>
                                                <input type ="number" name="sizes10" value="XS" style="width:50px" min="1">
                                                </div>
                                                <div class="col-sm-4">
                                                <label for="sizes11" id="labels">11"</label>
                                                <input type ="number" name="sizes11" value="XS" style="width:50px" min="1">
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
                                            <label for="price" id="labels">&nbsp Price(pair of shoe or slipper LKR.) &nbsp</label>
                                            <input multi class="form-control" type="number" id="select" name="price" min="0" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="discount" id="labels">&nbsp Discount(pair of shoe or slipper LKR.) &nbsp</label>
                                            <input multi class="form-control" type="number" id="select" name="discount" min="0">
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