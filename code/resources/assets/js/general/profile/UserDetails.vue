<template>
<div>
    <h3 class="w3l_header mt-4 mb-5">Edit your <span>details</span></h3>
    <div class="row">
        <div class="col-md-6">
            <form method="POST" @submit.prevent="updateDetails">
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label text-right">Email</label>
                    <div class="col-sm-10">
                        <input type="text" name="email" class="form-control" id="staticEmail" v-model="user.email">
                        <i aria-hidden="true" class="fa fa-pencil edit-pencil"></i>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputName" class="col-sm-2 col-form-label text-right">Name</label>
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
                <input type="submit" class="btn offset-md-2" :class="submitButton.class" v-model="submitButton.text">
            </form>
        </div>
        <div class="col-md-6">
            <div class="card mx-auto" style="width: 25rem;">
                <center>
                    <img class="card-img-top rounded-circle d-block" src="/dist/img/avatar5.png" alt="Card image cap">
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
import axios from 'axios'

export default {
    props: ['userId'],
    data : function () {
        return {
            user: {
                name: '',
                email: '',
                nic: '',
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