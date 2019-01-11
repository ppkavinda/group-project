<h3 class="w3l_header mt-4 mb-5">Edit your <span>details</span></h3>
<div class="container">
  <div class="row">
    <div class="col-md-8">
        <form method="POST" action="/users/{{ auth()->user()->id }}/edit" >
            @csrf
            <!-- image upload -->
                <fieldset class="fieldset">
                    <h3 class="fieldset-title">Upload your picture</h3> 
                        <div class="mx-auto" style="width: 35rem;">  
                            <center>         
                                <img class="img-fluid" src="/dist/img/avatar5.png" style="width:200px; height:200px; float:left; border-radius:50%; margin-right:25px;">
                            </center>
                            <input type="file" name="profile_pic">
                        </div>
            </fieldset>
            <fieldset class="fieldset">
            <h2 class="fieldset-title" class="pt-3 mt-3">Personal Info</h2>
            <!-- email address -->
            <div class="form-group row">
                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" name="email" class="form-control" id="staticEmail" 
                        value="{{ auth()->user()->email }}" placeholder="Change your email" >
                    <i aria-hidden="true" class="fa fa-pencil edit-pencil"></i>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            
            <!-- name -->
            <div class="form-group row">
                <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" id="inputName" 
                        value="{{ auth()->user()->name }}" placeholder="Change your name" >
                    <i aria-hidden="true" class="fa fa-pencil edit-pencil"></i>
                    @if ($errors->has('name'))
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <!-- NIC -->
            <div class="form-group row">
                <label for="inputNic" class="col-sm-2 col-form-label">NIC</label>
                <div class="col-sm-10">
                    <input type="text" name="nic" class="form-control" id="inputNic" 
                        value="{{ auth()->user()->nic }}" placeholder="Change your NIC">
                    <i aria-hidden="true" class="fa fa-pencil edit-pencil"></i>
                    @if ($errors->has('nic'))
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $errors->first('nic') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <!-- Description -->
            <div class="form-group row">
                <label for="inputDesc" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                    <textarea name="description" class="form-control" id="description" 
                        placeholder="Say something about you...">{{ auth()->user()->description }}</textarea>
                    <i aria-hidden="true" class="fa fa-pencil edit-pencil"></i>
                    @if ($errors->has('description'))
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $errors->first('description') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            </fieldset>

            <fieldset class="fieldset">
             <h3 class="fieldset-title">Contact Info</h3>
            <!-- Contact Number -->
            <div class="form-group row">
                <label for="inputContact" class="col-sm-2 col-form-label">Contact Number</label>
                <div class="col-sm-10">
                    <input type="text" name="telephone" class="form-control" 
                        id="inputContact" value="{{ old('telephone') }}" placeholder="Enter your contact Number">
                    <i aria-hidden="true" class="fa fa-pencil edit-pencil"></i>
                    @if ($errors->has('telephone'))
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $errors->first('telephone') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <!-- Address Line1 -->
             <div class="form-group row">
                <label for="inputAddress" class="col-sm-2 col-form-label">Your Address</label>
                <div class="col-sm-10">
                    <input type="text" name="address1" class="form-control" 
                        id="address1" value="{{ old('address1') }}" placeholder="Line number 1">
                    <i aria-hidden="true" class="fa fa-pencil edit-pencil" ></i>
                    @if ($errors->has('address1'))
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $errors->first('address1') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <!-- Address Line2 -->
            <div class="form-group row">
                <label for="inputAddress" class="col-sm-2 col-form-label">Your Address</label>
                <div class="col-sm-10">
                    <input type="text" name="address2" class="form-control" 
                        id="address2" value="{{ old('address2') }}" placeholder="Line number 2 optional">
                    <i aria-hidden="true" class="fa fa-pencil edit-pencil"></i>
                    @if ($errors->has('address2'))
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $errors->first('address2') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <!-- City -->
            <div class="form-group row">
                <label for="inputAddress" class="col-sm-2 col-form-label">City</label>
                <div class="col-sm-10">
                    <input type="text" name="city" class="form-control" 
                        id="city" value="{{ old('city') }}" placeholder="City">
                    <i aria-hidden="true" class="fa fa-pencil edit-pencil" ></i>
                    @if ($errors->has('city'))
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $errors->first('city') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <!-- Postal Code -->
            <div class="form-group row">
                <label for="inputAddress" class="col-sm-2 col-form-label">Postal Code</label>
                <div class="col-sm-10">
                    <input type="text" name="postal_code" class="form-control" 
                        id="postal_code" value="{{ old('postal_code') }}" placeholder="Postal Code">
                    <i aria-hidden="true" class="fa fa-pencil edit-pencil"></i>
                    @if ($errors->has('postal_code'))
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $errors->first('postal_code') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            </fieldset>

                <!-- only the facilitator can view this part -->
            @if (auth()->user()->isFacilitator())  
                <!-- Facilitator user details -->
                <fieldset class="fieldset">
                    <h3 class="fieldset-title">Facilitator's Details</h3> 
                    <!-- Courses coducting -->
                    <div class="form-group row">
                        <label for="inputCourse" class="col-sm-2 col-form-label">Courses conducting</label>
                        <div class="col-sm-10">
                            <select name="courses" class="form-control col-md-15" id="coursesConducting">
                                    <option>Select one...</option>
                                    <option value="" disabled selected>Select your conducting course</option>
                                    <option value="1">Soap Manufacturing</option>
                                    <option value="2">Candle Manufacturing</option> 
                                    <option value="3">Spices Manufacturing</option> 
                                    <option value="4">Rubber products Manufacturing</option>           
                            </select>
                        </div>
                    </div>

                    <!-- Available days -->
                    <div class="form-group row">
                        <label for="inputDays" class="col-sm-2 col-form-label">Available days</label>
                            <div class="col-sm-10">
                            <select name="days" class="form-control col-md-15" id="availableDays">
                                    <option>Select one...</option>
                                    <option value="" disabled selected>Select your available days</option>
                                    <option value="8">Whole week</option> 
                                    <option value="1">Monday</option>   
                                    <option value="2">Tuesday</option> 
                                    <option value="3">Wednesday</option>           
                                    <option value="4">Thursday</option>           
                                    <option value="5">Friday</option>           
                                    <option value="6">Saturday</option>           
                                    <option value="7">Sunday</option>                                      
                                </select>
                            </div>
                    </div>
                    <!-- Experience Level -->
                    <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 ">Experience Level</label>
                            <div class="col-sm-10">
                            <select name="e" class="form-control col-md-15" id="experience">
                                    <option value="" disabled selected>Select your relevant experience level</option>
                                    <option value="1">Less than 1 year</option>   
                                    <option value="2">1-3 years</option> 
                                    <option value="3">3-5 years</option>           
                                    <option value="4">5-8years</option>           
                                    <option value="5">8-10years</option>           
                                    <option value="6">10+ years</option>                
                            </select>
                            </div>
                    </div>

                    <!-- Education Level -->
                    <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Education Level</label>
                        <div class="col-sm-10">
                            <select name="education" class="form-control col-md-15" id="eduction">
                                    <option value="" disabled selected>Select your your highest level of education </option>
                                    <option value="1">GCE O/L</option>   
                                    <option value="2">GCE A/L</option> 
                                    <option value="3">Bachelor's degree</option>           
                                    <option value="4">Master's degree</option>           
                                    <option value="5">Doctorate </option>                     
                            </select>
                        </div>
                    </div>
                </fieldset>
            @endif
            <center>  
                <button type="submit" class="btn offset-md-2 btn-primary">Update Profile
                </button>
            </center>
        
        </form>
        <br>
        <!-- Add advertisment -->
    </div>
    </div>
  
</div>

