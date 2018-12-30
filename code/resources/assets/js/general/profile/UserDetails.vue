<template>
<div>
    <h3 class="w3l_header mt-4 mb-5">Edit your <span>detail</span></h3>
    <div class="row">
        <div class="col-md-6">
            <form method="POST" @submit.prevent="updateDetails">
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label text-right">Email </label>
                    <div class="col-sm-10">
                        <input type="text" name="email" class="form-control" id="staticEmail" v-model="user.email"  
                          placeholder="Change your email" required>
                        <i aria-hidden="true" class="fa fa-pencil edit-pencil"></i>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputName" class="col-sm-2 col-form-label text-right">Name </label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" id="inputName" placeholder="Name" v-model="user.name">
                        <i aria-hidden="true" class="fa fa-pencil edit-pencil"></i>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputNic" class="col-sm-2 col-form-label text-right">NIC</label>
                    <div class="col-sm-10">
                        <input type="text" name="nic" class="form-control" id="inputNic" placeholder="Nic" v-model="user.nic">
                        <i aria-hidden="true" class="fa fa-pencil edit-pencil"></i>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputAddress1" class="col-sm-2 col-form-label text-right">Address</label>
                    <div class="col-sm-10">
                        <input type="text" name="address1" class="form-control" id="inputAddress" placeholder="Address Line 1" v-model="user.address1">
                        <i aria-hidden="true" class="fa fa-pencil edit-pencil"></i>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputAddress1" class="col-sm-2 col-form-label text-right"></label>
                    <div class="col-sm-10">
                        <input type="text" name="address2" class="form-control" id="inputAddress2" placeholder="Address Line 2" v-model="user.address2">
                        <i aria-hidden="true" class="fa fa-pencil edit-pencil"></i>
                    </div>
                </div>
                <input type="submit" class="btn offset-md-2" :class="submitButton.class" v-model="submitButton.text">
            </form>
        </div>
        <div class="col-md-6">
            <div class="mx-auto" style="width: 25rem;">
                <center>
                    <img class="card-img-top rounded-circle d-block" :src="user.profile_pic" alt="Card image cap">
                    <image-upload @loaded="onImageLoad"></image-upload>
                </center>
                <div class="card-body">
                    <h5 class="card-title">Description</h5>
                    <p class="card-text">{{ user.description ? user.description : 'Say something about you...' }}</p>
                </div>
            </div>
        </div>
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
                address1: '',
                address2: '',
                description: '',
                profile_pic: '',
            },
            submitButton: {
                text: 'Save',
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
        onImageLoad (file) {
            this.user.profile_pic = file.src
        },
        updateDetails () {
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