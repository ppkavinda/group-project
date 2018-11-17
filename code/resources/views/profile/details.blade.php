<h3 class="w3l_header mt-4 mb-5">Edit your details</h3>
<div class="row">
    <div class="col-md-6">
        <form action="/users/{{ auth()->user()->id }}/edit" method="POST">
            @csrf
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Email </label>
                <div class="col-sm-10">
                    <input type="text" name="email" class="form-control" id="staticEmail" 
                        value="{{ auth()->user()->email }}" placeholder="Change your email">
                    <i aria-hidden="true" class="fa fa-pencil edit-pencil"></i>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" id="inputName" 
                        value="{{ auth()->user()->name }}" placeholder="Change your name">
                    <i aria-hidden="true" class="fa fa-pencil edit-pencil"></i>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputNic" class="col-sm-2 col-form-label">NIC</label>
                <div class="col-sm-10">
                    <input type="text" name="nic" class="form-control" id="inputNic" 
                        value="{{ auth()->user()->nic }}" placeholder="Change your NIC">
                    <i aria-hidden="true" class="fa fa-pencil edit-pencil"></i>
                </div>
            </div>
             <div class="form-group row">
                <label for="inputContact" class="col-sm-2 col-form-label">Contact Number</label>
                <div class="col-sm-10">
                    <input type="Number" name="contact" class="form-control" 
                        id="inputContact"  placeholder="Enter your contact Number">
                    <i aria-hidden="true" ></i>
                </div>
            </div>
             <div class="form-group row">
                <label for="inputAddress" class="col-sm-2 col-form-label">Delivery Address</label>
                <div class="col-sm-10">
                    <input type="text" name="address" class="form-control" 
                        id="inputAddress"  placeholder="Enter your Delivery Address">
                    <i aria-hidden="true" ></i>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputDesc" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                    <textarea name="description" class="form-control" id="inputDesc" 
                        placeholder="Say something about you..."></textarea>
                    <i aria-hidden="true" class="fa fa-pencil edit-pencil"></i>
                </div>
            </div>
            <input type="submit" class="btn offset-md-2 btn-primary" value="Save">
        </form>
    </div>
    <div class="col-md-6">
        <center>
            <div class=" mx-auto" style="width: 25rem;">
                <center>
                    <img class="card-img-top rounded-circle d-block" src="{{ auth()->user()->profile_pic }}" alt="Card image cap">
                </center>
                {{-- <image-upload></image-upload> --}}
            </div>
        {{-- <div class="">
            <div class="image-upload-preview-with-crop--previewWrapper--1eYsy">
                <div class="image-upload-preview-with-crop--imageWrapper--fNINE">
                    <img data-purpose="image-preview" src="https://udemy-images.udemy.com/user/200_H/anonymous_3.png" 
                        alt="Course image" class="">
                </div>
                <div class="image-upload-preview-with-crop--tips--17Lj2">
                    Your image should be at minimum 200x200 pixels and maximum 6000x6000 pixels.
                </div>
            </div>
            <div class="image-upload-preview-with-crop--form-element--2Nnsf">
                <div>
                    <label>Add / Change Image:</label>
                </div>
                <div class="file-uploader--file-selector--SGCns" data-purpose="">
                    <label for="FileUploaderS3-0--1">
                        <span class="input-group">
                            <!-- <input readonly="" value="No file selected" class="form-control" type="text"> -->
                            <span class="input-group-btn">
                                <!-- <button type="button" class="btn btn-default">Upload Image</button> -->
                            </span>
                        </span>
                    </label>
                    <input accept=".gif,.jpg,.jpeg,.png" id="FileUploaderS3-0--1" class="" type="file">
                </div>
                    <input name="image_file" value="" type="hidden">
                </div>
            </div> --}}
        </center>
    </div>
</div>