<template>
  <div class="card-body">
      <form method="POST" @submit.prevent="onSubmit">
          <div class="form-group row">
              <label for="name" class="col-md-4  text-md-right">Name</label>
                <div class="col-md-6">
                  <input id="name" type="text" class="form-control" name="name" v-model="user.name" placeholder="Name" required autofocus>

                    <span v-if="errors.name" class="invalid-feedback">
                        <strong>{{ errors.name }}</strong>
                    </span>
              </div>
          </div>

          <div class="form-group row">
              <label for="email" class="col-md-4 col-form-label text-md-right">Email Address</label>

              <div class="col-md-6">
                  <input id="email" type="email" class="form-control" name="email" v-model="user.email" placeholder="E-mail" required>

                    <span v-if="errors.email" class="invalid-feedback">
                        <strong>{{ errors.email }}</strong>
                    </span>
              </div>
          </div>

          <div class="form-group row">
              <label for="nic" class="col-md-4 col-form-label text-md-right">National ID No:</label>

              <div class="col-md-6">
                  <input type="text" name="nic" id="nic" class="form-control" v-model="user.nic" placeholder="NIC" pattern="[0-9]{9}[vV]{1}$" required>

                    <span v-if="errors.nic" class="invalid-feedback">
                        <strong>{{ errors.nic }}</strong>
                    </span>
              </div>
          </div>

          <div class="form-group row">
              <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

              <div class="col-md-6">
                  <input id="password" type="password" class="form-control" v-model="user.password" name="password" placeholder="Password"  required>

                    <span class="invalid-feedback">
                        <strong>{{ errors.password }}</strong>
                    </span>
              </div>
          </div>

          <div class="form-group row">
              <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>

              <div class="col-md-6">
                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" v-model="user.password_confirmation" placeholder="Confirm Password" required>
              </div>
          </div>

          <div class="form-group row mb-0">
              <div class="col-md-6 offset-md-4">
                  <button type="submit" class="btn btn-primary">Join with us</button>
                  <a class="btn btn-link" href="login">I already have membership</a>
              </div>
          </div>
      </form>
  </div>  
</template>

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
        }
    },
    methods: {
        onSubmit: function () {
            axios.post('register', this.user)
                .then(res => {
                    console.log(res)
                })
                .catch( err => {
                    console.log(err.errors)
                })
            // console.log('send', this.user)
        },
        confirmPassword: function () {
            return this.password == this.password_confirmation
        }
    }
}
</script>