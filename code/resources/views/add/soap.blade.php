@extends('study.master')
@section('content')
<div class="contact">
		<div class="container">
			<h3 class="w3l_header w3_agileits_header1">Item <span>Details</span></h3>
            <div class="formColor">
                <div class="w3layouts_mail_grid">
                    <div class="agileits_mail_grid_right agileits_w3layouts_mail_grid_right">
                        <div class="agileits_mail_grid_right1 agile_mail_grid_right1">
                            <form action="/postAdd/{{'3'}}" method="post" enctype="multipart/form-data" onsubmit="return checkForm(this);">
                            @csrf
                                <div class="row">
                                    <div class="col-sm-4">
                                        <h3>Soap</h3>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="name" id="labels">&nbsp Name of the product &nbsp</label>
                                            <br>
                                            <input type ="text" id="select" name="name" required>    
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="sizes" id="labels">&nbsp Size(g) &nbsp</label>
                                            <select class="form-control" id="select" name="sizes">
                                                <option></option>
                                                <option>50g</option>
                                                <option>100g</option>
                                                <option>200g</option>
                                            </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="amount" id="labels">&nbsp Amount &nbsp</label>
                                        <br>
                                        <input multi class="form-control" type ="number" id="select" name="amount" min="1" required>    
                                    </div>
                                </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="category" id="labels">&nbsp Category &nbsp</label>
                                            <select class="form-control" id="select" name="category">
                                            <option>Baby</option>
                                            <option>Cleaning</option>
                                            <option>Kitchen</option>
                                            <option>Personal</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="type" id="labels">&nbsp Type &nbsp</label>
                                            <select class="form-control" id="select" name="type">
                                            <option>Bar Soap</option>
                                            <option>Powder</option>
                                            <option>Other</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="details" id="labels">&nbsp Details &nbsp</label>
                                            <textarea class="form-control" id="select" name="details" rows="4" required></textarea>
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
                                            <label for="price" id="labels">&nbsp Price(one piece LKR.) &nbsp</label>
                                            <input multi class="form-control" type="number" id="select" min="0" name="price">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="discount" id="labels">&nbsp Discount(one piece LKR.) &nbsp</label>
                                            <input multi class="form-control" type="number" id="select" name="discount" >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 text-center">
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
</div>
@endsection