<template>
<div>
    <h3 class="w3l_header mt-4 mb-5">Edit your <span>detail</span></h3>
    <div class="row">
        <div class="col-md-6">
            <form  method="POST"  @submit.prevent="updateDetails">
                <!-- Personal Information -->
                <h3>Personal Info</h3>
                <!-- email address -->
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label text-right">Email </label>
                    <div class="col-sm-10">
                        <input type="text" name="email" class="form-control" id="staticEmail" v-model="user.email"  
                          placeholder="Change your email" required>
                        <i aria-hidden="true" class="fa fa-pencil edit-pencil"></i>
                    </div>
                </div>
                <!-- name -->
                <div class="form-group row">
                    <label for="inputName" class="col-sm-2 col-form-label text-right">Name </label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" id="inputName" placeholder="Change your name" v-model="user.name">
                        <i aria-hidden="true" class="fa fa-pencil edit-pencil"></i>
                    </div>
                </div>
                <!-- NIC -->
                <div class="form-group row">
                    <label for="inputNic" class="col-sm-2 col-form-label text-right">NIC</label>
                    <div class="col-sm-10">
                        <input type="text" name="nic" class="form-control" id="inputNic" placeholder="Change your NIC " v-model="user.nic">
                        <i aria-hidden="true" class="fa fa-pencil edit-pencil"></i>
                    </div>
                </div>
                 <!-- Description -->
                <div class="form-group row">
                    <label for="inputDesc" class="col-sm-2 col-form-label text-right">Description</label>
                        <div class="col-sm-10">
                            <textarea name="description" class="form-control" id="inputDesc" placeholder="Say something about you..." v-model="user.description"></textarea>
                            <i aria-hidden="true" class="fa fa-pencil edit-pencil"></i>
                            <!-- <p class="card-text">{{ user.description ? user.description : 'Say something about you...' }}</p> -->
                        </div>
                </div>
                <!-- Contact Details -->
                <h3>Contact Details</h3>
                <!-- Contact Number -->
                <div class="form-group row">
                    <label for="inputContact" class="col-sm-2 col-form-label text-right">Contact Number</label>
                        <div class="col-sm-10">
                            <input type="text" name="contact" class="form-control" 
                            id="inputContact"  placeholder="Enter your contact Number" v-model="user.contact">
                        <i aria-hidden="true" ></i>
                    </div>
                </div> 
                
                <!-- Address Line1 --> 
                <div class="form-group row">
                    <label for="inputAddress1" class="col-sm-2 col-form-label text-right">Address Line 1</label>
                    <div class="col-sm-10">
                        <input type="text" name="address1" class="form-control" id="inputAddress" placeholder="Address Line 1" v-model="user.address1">
                        <i aria-hidden="true" class="fa fa-pencil edit-pencil"></i>
                    </div>
                </div>
                <!-- Address Line2 -->
                <div class="form-group row">
                    <label for="inputAddress1" class="col-sm-2 col-form-label text-right">Address Line 2</label>
                    <div class="col-sm-10">
                        <input type="text" name="address2" class="form-control" id="inputAddress2" placeholder="Address Line 2" v-model="user.address2">
                        <i aria-hidden="true" class="fa fa-pencil edit-pencil"></i>
                    </div>
                </div>
                <!-- City -->
                <div class="form-group row">
                    <label for="inputCity" class="col-sm-2 col-form-label text-right">City</label>
                        <div class="col-sm-10">
                            <input type="text" name="city" class="form-control" id="inputCity"  placeholder="City" v-model="user.city">
                            <i aria-hidden="true" class="fa fa-pencil edit-pencil"></i>
                        </div>
                </div>
                <!-- Postal Code -->
                <div class="form-group row">
                    <label for="inputPostal_code" class="col-sm-2 col-form-label text-right">Postal Code</label>
                        <div class="col-sm-10">
                            <input type="text" name="postalcode" class="form-control" id="inputPostal_code"  placeholder="Postal Code" v-model="user.postal_code">
                            <i aria-hidden="true" class="fa fa-pencil edit-pencil"></i>
                        </div> 
                </div>
            </form>
            <br>
        <div class="col-md-5">
        <div>
            <center><a class="btn btn-dark" href="YourAdvertisements">Your Advertisements &nbsp <i class="fa fa-angle-right"></i></a></center>
            <br>
        </div>
        </div>
        </div>
            <!-- image upload -->
            <div class="col-md-6">
                <h3>Upload your picture</h3>
                <div class="mx-auto" style="width: 35rem;">
                    <center>
                        <img class="card-img-top rounded-circle d-block" :src="user.profile_pic" alt="Card image cap">
                            <image-upload @loaded="onImageLoad"></image-upload>
                    </center>
                </div>
            </div>
            
        <input type="submit" class="btn offset-md-2" :class="submitButton.class" v-model="submitButton.text">
    </div>
</div>
</template>

<script>
import imageUpload from '../../study/ImageUpload';

export default {
    props: ['userId'],
    components: {imageUpload},
    data : function () {
        return {
            user: {
                name: '',
                email: '',
                nic: '',
                contact:'',
                address1: '',
                address2: '',
                city:'',
                postal_code:'',
                description: '',
                profile_pic: '',
            },
            submitButton: {
                text: 'Update Profile',
                class: 'btn-primary'
            }
        }
    },
    mounted: function () {
        axios.get('api/users/' + this.userId)
            .then(res => {
                this.user = res.data
            })
            .catch(err => {
                console.log(err)
            })
    },
    methods: {
        onImageLoad : function (file) {
            this.user.profile_pic = file.src
        },
        updateDetails : function () {
            axios.post('users/' + this.userId + '/edit', this.user)
                .then(res => {
                    this.user = res.data
                    this.onSuccess()
                })
                .catch( err => {
                    this.onError()
                })
        },
        onSuccess: function () {
            this.submitButton.text = 'Saved !'
            this.submitButton.class = 'btn-success'
            this.resetSubmitButton()
        },
        onError: function () {
            this.submitButton.text = 'Error'
            this.submitButton.class = 'btn-danger'
            this.resetSubmitButton()
        },
        resetSubmitButton: function () {
            setTimeout(() => {
                this.submitButton.text = 'save'
                this.submitButton.class = 'btn-primary'
            }, 2000);
        }
    },
}
</script>