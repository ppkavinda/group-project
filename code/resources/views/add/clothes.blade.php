@extends('study.master')
@section('content')
<div class="contact">
		<div class="container">
			<h3 class="w3l_header w3_agileits_header1">Item <span>Details</span></h3>
            <div class="formColor">
                <div class="w3layouts_mail_grid">
                    <div class="agileits_mail_grid_right agileits_w3layouts_mail_grid_right">
                        <div class="agileits_mail_grid_right1 agile_mail_grid_right1">
                            <form action="/postAdd/{{'1'}}" method="post" enctype="multipart/form-data">
                            @csrf
                                <div class="row">
                                    <div class="col-sm-4">
                                        <h3>Clothes</h3>
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
                                            <option>Shirt</option>
                                            <option>T-shirt</option>
                                            <option>Male-Trouser</option>
                                            <option>Blouse</option>
                                            <option>Skirt</option>
                                            <option>frock</option>
                                            <option>Women-Trouser</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="sizes" id="labels">&nbspAmount & Sizes (XS,S,M,L,XL,XXL) &nbsp</label>
                                            <br>
                                            <div class="row p-3">
                                                <div class="col-sm-4">
                                                <label for="sizes" id="labels">XS</label>
                                                <input type ="number" name="sizesXS" min="1" style="width:50px">
                                                </div>
                                                <div class="col-sm-4">
                                                <label for="sizes" id="labels">S</label>
                                                <input type ="number" name="sizesS" min="1" style="width:50px">
                                                </div>
                                                <div class="col-sm-4">
                                                <label for="sizes" id="labels">M</label>
                                                <input type ="number" name="sizesM" min="1" style="width:50px">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                <label for="sizes" id="labels">L</label>
                                                <input type ="number" name="sizesL" min="1" style="width:50px">
                                                </div>
                                                <div class="col-sm-4">
                                                <label for="sizes" id="labels">XL</label>
                                                <input type ="number" name="sizesXL" min="1" style="width:50px">
                                                </div>
                                                <div class="col-sm-4">
                                                <label for="sizes" id="labels">XXL</label>
                                                <input type ="number" name="sizesXXL" min="1" style="width:50px">
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
                                            <label for="price" id="labels">&nbsp Price(one cloth Rs.) &nbsp</label>
                                            <input multi class="form-control" type="number" id="select" name="price" min="0" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="discount" id="labels">&nbsp Discount(one cloth Rs.) &nbsp</label>
                                            <input multi class="form-control" type="number" id="select" name="discount" min="1">
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