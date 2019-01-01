@extends('layouts.app')
@section('content')
<template>
<!-- background image -->
<div class="bg-img">
    <div class="container">
        <div class="row justify-content-center"> 
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <p class="login-box-msg" style="color:DodgerBlue;font-size:200%;"><b>Sign Up and Start Learning!</b></p>
                    </div>
                    <!-- Logo -->
                    <div class="login-logo">
                        <a href="/"><img src="/dist/img/logo.jpg" alt="logo" style="width: 30%; opacity: .6"></a>
                    </div>

                 <form method="POST" @submit.prevent="onSubmit" @keydown="clearError($event.target.name)">
                <!-- Name -->
                 <div class="form-group row">
                    <label for="name" class="col-md-4  text-md-right">Name </label>
                     <div class="col-md-6">
                         <input id="name" @blur="liveValidate('name')" type="text" class="form-control" name="name" v-model="user.name" placeholder="Name" required autofocus>
                        <span v-if="errors.name" :class="{'invalid-feedback d-block' : errors.name}">
                             <strong>{{ errors.name[0] }}</strong>
                        </span>
                     </div>
                 </div>
                <!-- Email Address -->
                 <div class="form-group row">
                     <label for="email" class="col-md-4 col-form-label text-md-right">Email Address </label>
                         <div class="col-md-6">
                            <input id="email" @blur="liveValidate('email')" type="email" class="form-control" name="email" v-model="user.email" placeholder="E-mail" required>
                                <span v-if="errors.email" :class="{'invalid-feedback d-block' : errors.email}">
                                    <strong>{{ errors.email[0] }}</strong>
                                 </span>
                         </div>
                 </div>
                <!-- NIC -->
                <div class="form-group row">
                    <label for="nic" class="col-md-4 col-form-label text-md-right">National ID No:</label>
                        <div class="col-md-6">
                            <input type="text" @blur="liveValidate('nic')" name="nic" id="nic" class="form-control" v-model="user.nic" placeholder="NIC" pattern="[0-9]{9}[vV]{1}$" required>
                                <span v-if="errors.nic" :class="{'invalid-feedback d-block' : errors.nic}">
                                    <strong>{{ errors.nic[0] }}</strong>
                                </span>
                        </div>
                </div>
                <!-- Password -->
                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                        <div class="col-md-6">
                            <input id="password" @keyup="confirmPassword" type="password" class="form-control" v-model="user.password" name="password" placeholder="Password"  required>
                        </div>
                </div>
                <!-- Confirm Password -->
                <div class="form-group row">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>
                        <div class="col-md-6">
                            <input id="password-confirm" @keyup="confirmPassword" type="password" class="form-control" name="password_confirmation" v-model="user.password_confirmation" placeholder="Confirm Password" required>
                                <span v-if="password.status" :class="password.class">
                                    <strong>{{ password.msg }}</strong>
                                </span>
                        </div>
                </div>
                <!-- Submit button -->
                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">Join with us</button>
                            <a class="btn btn-link" href="login">I already have membership</a>
                    </div>
                </div>
                </form>
                </div>  
            </div>
        </div>
    </div>
</div>
</template>
@endsection


<script>
import axios from 'axios'

export default {
    data: function () {
        return {
            user: {
                name: '',
                email: '',
                nic: '',
                password: '',
                password_confirmation: '',
            },
            errors: {},
            password: {
                status: false,
                msg: '',
                class: '',
            }
        }
    },
    methods: {
        /**
         * submitting the filled registration form
         */
        onSubmit: function () {
            if (this.confirmPassword) {
                axios.post('register', this.user)
                    .then( res => {
                        window.location.replace('/')
                    })
                    .catch( err => {
                        this.errors = err.response.data.errors
                        this.user.password = ''
                        this.user.password_confirmation = ''
                    })
            }
        },
        /**
         * checking the password confirmation on the fly
         */
        confirmPassword: function () {
            if (this.user.password_confirmation != '') {
                this.password.status = true
            }
            if (this.user.password != this.user.password_confirmation) {
                this.password.class = 'invalid-feedback d-block'
                this.password.msg = 'Password confirmation failed.'
            } else {
                this.password.class = 'valid-feedback d-block'
                this.password.status = false
            }
            return this.user.password == this.user.password && this.password != ''
        },
        /**
         * clear the error message when they start to type again
         */
        clearError: function (err) {
            delete this.errors[err]
        },
        /**
         * filtering out the unfilled data
         * so live validator will send only the filled data fields
         */
        filledFields: function () {
            Object.keys(this.user).forEach((key) => (this.user[key] == '') && delete this.user[key])
        },
        /**
         * live validating
         * validating form data just after they blured away
         */
        liveValidate: function (field) {
            this.filledFields
                axios.post('api/validate/register', this.user)
                .then( res => {
                    console.log(res)
                })
                .catch( err => {
                    console.log(err.response.data)
                    this.errors = err.response.data.errors
                })
        },
    },
}
</script>