@extends('admin.master')

@section('content')
<<<<<<< HEAD
<!-- <div class="container"> -->
    <!-- <div class="row justify-content-center">  -->
        <!-- <div class="col-md-8"> -->
            <div class="register-box">
                <div class="card">
                    <div class="card-body register-card-body">
                        <div class="login-logo">
                            <a href="/"><b><img src="/dist/img/logo.jpg" alt="logo" style="width: 50%; opacity: .6"></a>
                        </div>
                    <!-- /.login-logo -->
                      <p class="login-box-msg" style="color:DodgerBlue;font-size:110%;"><b>Sign Up and Start Learning!</b></p>
                        <form method="POST" action="{{ route('register') }}">
=======
<div class="container">
    <div class="row justify-content-center"> 
        <!-- <div class="col-md-8"> -->
            <div class="card">
                <div class="card-header">
                    <p class="login-box-msg" style="color:DodgerBlue;font-size:110%;"><b>Sign Up and Start Learning!</b></p>
                </div>

                <div class="login-logo">
                    <a href="/"><b><img src="/dist/img/logo.jpg" alt="logo" style="width: 30%; opacity: .4"></a>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">

>>>>>>> 1d46ca424f5ebb810eb2f459bc766005eeaed731
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4  text-md-right">{{ __('Name') }}</label>
                             <div class="col-md-6">
                                <input id="name" type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }} " placeholder="Full Name" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <div class="input-group">
                                <label for="nic" class="col-md-4 col-form-label text-md-right">{{ __('NIC') }}</label>
                            <div class="col-md-6">
                            <input id="nic" type ="text" class="form-control" placeholder="NIC Number" name="nic" pattern="[0-9]{9}[vV]{1}$" title="Include 9 digits and letter V  eg:123456789V" required>
                            </div>
                        </div>
                    </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="E-Mail" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nic" class="col-md-4 col-form-label text-md-right"> {{ __('National ID No:') }}</label>

                            <div class="col-md-6">
                                <input type="text" name="nic" id="nic" class="form-control{{ $errors->has('email') ? ' is-invalid': ''}}" value="{{ old('nic') }}" pattern="[0-9]{9}[vV]{1}$" required>

                                @if ($errors->has('nic'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('nic') }}</strong>
                                    </span>
                                @endif 
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>
                            </div>
                        </div>

        <div class="row">
          <div class="col-8">
            <div class="checkbox icheck">
              <label>
                <input type="checkbox" > I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div>
    
          <!-- /.col -->
          <div class="col-6">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Join with us</button>
          </div>
         
          {{csrf_field() }}

          <!-- /.col -->
        </div>
                    </form>
                    <br>
                   <a href="login" class="text-center">I already have a membership</a>
               </br>
                </div>
            </div>
<<<<<<< HEAD
    <!-- </div> -->
<!-- </div> -->
=======
    </div>
</div>
>>>>>>> 1d46ca424f5ebb810eb2f459bc766005eeaed731
@endsection
