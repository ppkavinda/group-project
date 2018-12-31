<h3 class="w3l_header mt-4 mb-5">Edit your <span>details</span></h3>
<div class="container">
<div class="row">
    <div class="col-md-6">
        <form action="/users/{{ auth()->user()->id }}/edit" method="POST">
            @csrf
            <fieldset class="fieldset">
            <h3 class="fieldset-title">Personal Info</h3>
            <!-- email address -->
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" name="email" class="form-control" id="staticEmail" 
                        value="{{ auth()->user()->email }}" placeholder="Change your email" required>
                    <i aria-hidden="true" class="fa fa-pencil edit-pencil"></i>
                </div>
            </div>
            <!-- name -->
            <div class="form-group row">
                <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" id="inputName" 
                        value="{{ auth()->user()->name }}" placeholder="Change your name" required>
                    <i aria-hidden="true" class="fa fa-pencil edit-pencil"></i>
                </div>
            </div>
            <!-- NIC -->
            <div class="form-group row">
                <label for="inputNic" class="col-sm-2 col-form-label">NIC</label>
                <div class="col-sm-10">
                    <input type="text" name="nic" class="form-control" id="inputNic" 
                        value="{{ auth()->user()->nic }}" placeholder="Change your NIC" required>
                    <i aria-hidden="true" class="fa fa-pencil edit-pencil"></i>
                </div>
            </div>
            </fieldset>
            <fieldset class="fieldset">
             <h3 class="fieldset-title">Contact Info</h3>
            <!-- Contact Number -->
            <div class="form-group row">
                <label for="inputContact" class="col-sm-2 col-form-label">Contact Number</label>
                <div class="col-sm-10">
                    <input type="text" name="contact" class="form-control" 
                        id="inputContact"  placeholder="Enter your contact Number">
                    <i aria-hidden="true" ></i>
                </div>
            </div>
            <!-- Address Line1 -->
             <div class="form-group row">
                <label for="inputAddress" class="col-sm-2 col-form-label">Delivery Address</label>
                <div class="col-sm-10">
                    <input type="text" name="address1" class="form-control" 
                        id="address1"  placeholder="Line number 1">
                    <i aria-hidden="true" ></i>
                </div>
            </div>
            <!-- Address Line2 -->
            <div class="form-group row">
                <label for="inputAddress" class="col-sm-2 col-form-label">Delivery Address</label>
                <div class="col-sm-10">
                    <input type="text" name="address2" class="form-control" 
                        id="address2"  placeholder="Line number 2">
                    <i aria-hidden="true" ></i>
                </div>
            </div>
            <!-- City -->
            <div class="form-group row">
                <label for="inputAddress" class="col-sm-2 col-form-label">City</label>
                <div class="col-sm-10">
                    <input type="text" name="city" class="form-control" 
                        id="city"  placeholder="Line number 2">
                    <i aria-hidden="true" ></i>
                </div>
            </div>
            <!-- Postal Code -->
            <div class="form-group row">
                <label for="inputAddress" class="col-sm-2 col-form-label">Postal Code</label>
                <div class="col-sm-10">
                    <input type="text" name="postalcode" class="form-control" 
                        id="postal_code"  placeholder="Postal Code">
                    <i aria-hidden="true" ></i>
                </div>
            </div>
            <!-- Description -->
            <div class="form-group row">
                <label for="inputDesc" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                    <textarea name="description" class="form-control" id="description" 
                        placeholder="Say something about you..."></textarea>
                    <i aria-hidden="true" class="fa fa-pencil edit-pencil"></i>
                </div>
            </div>
    </div>
    <div class="col-md-6">
            <!-- image upload -->
            <img src="/dist/image/login/fish.png" style="width:200px; height:200px; float:left; border-radius:50%; margin-right:25px;">
                 <!-- <h2>{{ $user->name }}'s Profile</h2> -->
                    <label>Update Profile Image</label>
                    <input type="file" name="profile_pic">
    </div>
            <input type="submit" class="btn offset-md-2 btn-primary" value="Save">
    </fieldset>
        </form>
    
</div>
</div>