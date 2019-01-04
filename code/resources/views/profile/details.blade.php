<h3 class="w3l_header mt-4 mb-5">Edit your <span>details</span></h3>
<div class="container">
<div class="row">
    <div class="col-md-6">
        <form action="/users/{{ auth()->user()->id }}/edit" method="POST">
            @csrf
            <fieldset class="fieldset">
            <h2 class="fieldset-title">Personal Info</h2>
            <!-- email address -->
            <div class="form-group row">
                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
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
            <!-- Description -->
            <div class="form-group row">
                <label for="inputDesc" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                    <textarea name="description" class="form-control" id="description" 
                        placeholder="Say something about you..."></textarea>
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
                    <i aria-hidden="true" class="fa fa-pencil edit-pencil"></i>
                </div>
            </div>
            <!-- Address Line1 -->
             <div class="form-group row">
                <label for="inputAddress" class="col-sm-2 col-form-label">Delivery Address</label>
                <div class="col-sm-10">
                    <input type="text" name="address1" class="form-control" 
                        id="address1"  placeholder="Line number 1">
                    <i aria-hidden="true" class="fa fa-pencil edit-pencil" ></i>
                </div>
            </div>
            <!-- Address Line2 -->
            <div class="form-group row">
                <label for="inputAddress" class="col-sm-2 col-form-label">Delivery Address</label>
                <div class="col-sm-10">
                    <input type="text" name="address2" class="form-control" 
                        id="address2"  placeholder="Line number 2">
                    <i aria-hidden="true" class="fa fa-pencil edit-pencil"></i>
                </div>
            </div>
            <!-- City -->
            <div class="form-group row">
                <label for="inputAddress" class="col-sm-2 col-form-label">City</label>
                <div class="col-sm-10">
                    <input type="text" name="city" class="form-control" 
                        id="city"  placeholder="Line number 2">
                    <i aria-hidden="true" class="fa fa-pencil edit-pencil" ></i>
                </div>
            </div>
            <!-- Postal Code -->
            <div class="form-group row">
                <label for="inputAddress" class="col-sm-2 col-form-label">Postal Code</label>
                <div class="col-sm-10">
                    <input type="text" name="postalcode" class="form-control" 
                        id="postal_code"  placeholder="Postal Code">
                    <i aria-hidden="true" class="fa fa-pencil edit-pencil"></i>
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
                    <select name="courses[]" multiple class="form-control">
                    <option value="" disabled selected>Select your conducting courses</option>
                        @foreach($courses as $course)
                            <option  value="{{ $course->id }}">{{ $course->title }}</option>
                        @endforeach            
                    </select>
                </div>
            </div>

            <!-- Available days -->
            <div class="form-group row">
                <label for="inputDays" class="col-sm-2 col-form-label">Available days</label>
                    <div class="col-sm-10">
                        <select id="framework" name="days[]" multiple class="form-control" > 
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
                    <div class="customSelect">
                      <div class="select">
                        <select id="experience" name=experience multiple class="form-control">
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
                </div>
            </div>

            <!-- Education Level -->
            <div class="form-group row">
                <label for="inputExperience" class="col-sm-2 col-form-label">Education Level</label>
                <div class="col-sm-10">
                    <select id="eduction" name="education" multiple class="form-control">
                            <option value="" disabled selected>Select your your highest level of education </option>
                            <option value="1">GCE O/L</option>   
                            <option value="2">GCE A/L</option> 
                            <option value="3">Bachelor's degree</option>           
                            <option value="4">Master's degree</option>           
                            <option value="5">Doctorate degree</option>                     
                    </select>
                </div>
            </div>
        </fieldset>
        @endif

        </form>
            <br>
         
            <!-- Add advertisment -->
            <div class="col-md-5">
                <div class="viewAdd">
                    <center><a href="YourAdvertisements"><font color=white>Your Advertisements &nbsp &nbsp</font></a><i class="fa fa-angle-right"></i></center>
                </div>
            </div>
    </div>
     
            <!-- image upload -->
            <div class="col-md-6">
                <fieldset class="fieldset">
                    <h3 class="fieldset-title">Upload your picture</h3> 
                        <div class="mx-auto" style="width: 35rem;">  
                            <center>         
                                <img src="/pubic/dist/image/avatar5.png" style="width:200px; height:200px; float:left; border-radius:50%; margin-right:25px;">
                            </center>
                            <input type="file" name="profile_pic">
                        </div>
                </fieldset>
            </div>

            <input type="submit" class="btn offset-md-2 btn-primary" value="Update Your Details">
    </div>
</div>

