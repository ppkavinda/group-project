@extends('study.master')
@section('content')
<div class="contact">
		<div class="container">
			<h3 class="w3l_header w3_agileits_header1">Item <span>Details</span></h3>
            <div class="formColor">
                <div class="w3layouts_mail_grid">
                    <div class="agileits_mail_grid_right agileits_w3layouts_mail_grid_right">
                        <div class="agileits_mail_grid_right1 agile_mail_grid_right1">
                            <form action="/postAdd/{{4}}" method="post" enctype="multipart/form-data">
                            @csrf
                                <div class="row">
                                    <div class="col-sm-4">
                                            <h3>Spices</h3>
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
                                            <option>Turmeric</option>
                                            <option>Clove</option>
                                            <option>Cinnamon</option>
                                            <option>Pepper</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="type" id="labels">&nbsp  Type &nbsp </label>
                                            <select class="form-control" id="select" name="type">
                                            <option>Powder</option>
                                            <option>Peas</option>
                                            <option>Capsules</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="sizes" id="labels">&nbsp Weight & Amount &nbsp</label>
                                            <br>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                <label for="sizes100" id="labels">100g</label>
                                                <input type ="number" name="sizes100" min="1" style="width:75px;">
                                                </div>
                                                <div class="col-sm-4">
                                                <label for="sizes200" id="labels">200g</label>
                                                <input type ="number" name="sizes200" min="1" style="width:75px;">
                                                </div>
                                                <div class="col-sm-4">
                                                <label for="sizes400" id="labels">400g</label>
                                                <input type ="number" name="sizes400" min="1" style="width:75px;">
                                                </div>
                                            </div>     
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class=col-sm-12>
                                        <div class="form-group">
                                            <label for="details" id="labels">&nbsp Details&nbsp</label>
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
                                            <label for="price" id="labels">&nbsp Price(Per 100g LKR.) &nbsp</label>
                                            <input multi class="form-control" type="number" id="select" name="price" min="0" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="discount" id="labels">&nbsp Discount(%) &nbsp</label>
                                            <input multi class="form-control" type="number" id="select" name="discount" step="0.01" min="0" max="99.99">
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