<<<<<<< HEAD
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header"> 
||||||| merged common ancestors
<div class="modal fade" id="myModal" role="dialog">
              <div class="modal-dialog">
              <div class="modal-content">
              <div class="modal-header"> 
=======
@extends('layouts.app')
<!-- background image -->
<div class="bg-img">
@section('content')
>>>>>>> c2e717a56b6a56de3bf857813e79bf6c4703b5ad

<<<<<<< HEAD
            <p style="color:DodgerBlue;font-size:160%;" class="text-center" ><b>{{ __('Sign In!') }}</b></p>
                <button type="button" class="close" data-dismiss="modal" >&times;</button>

            </div>
            <div class="modal-body">
                <!-- /.login-logo -->
                <div class="login-logo">
                    <a href="/"><img src="/dist/img/logo.jpg" class="rounded mx-auto d-block" style="width: 45%; opacity: .6"></a>
                </div>
                <br>   @csrf
                    <form method="POST" action="{{ route('login') }}">
||||||| merged common ancestors
                <p style="color:DodgerBlue;font-size:160%;" class="text-center" ><b>{{ __('Sign In!') }}</b></p>
                <button type="button" class="close" data-dismiss="modal" >&times;</button>

                </div>
                <div class="modal-body">
                <!-- /.login-logo -->
                <div class="login-logo">
                    <a href="/"><img src="/dist/img/logo.jpg" class="rounded mx-auto d-block" style="width: 45%; opacity: .6"></a>
                </div>
                <br>   @csrf
                    <form method="POST" action="{{ route('login') }}">
=======
    <div class="container">
        <div class="row justify-content-center"> 
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <p class="login-box-msg" style="color:DodgerBlue;font-size:200%;"><b>Login to your Athwela Account!</b></p>
                    </div>
                    <!-- /.login-logo -->
                    <div class="login-logo">
                        <a href="/"><img src="/dist/img/logo.jpg" class="rounded mx-auto d-block" style="width: 45%; opacity: .6"></a>
                    </div>
                    <br>   
                    <form method="POST" action="{{ route('login') }}" >
                    {{ csrf_field() }}
>>>>>>> c2e717a56b6a56de3bf857813e79bf6c4703b5ad
                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="E-mail" required autofocus>
                                    @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>
                                        @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                        @endif
                                </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row ">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                                <br>or
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
<<<<<<< HEAD
                         </div> 

                        <div class="modal-footer">
                       
||||||| merged common ancestors
                         </div>   
                        <div class="modal-footer">
                       
=======
                         </div>  

                        <div class="card-footer">
>>>>>>> c2e717a56b6a56de3bf857813e79bf6c4703b5ad
                            <div class="col-md-9 offset-md-4">Don't have an account?
<<<<<<< HEAD
                            <a data-toggle="myModal1" href="#myModal1">Sign Up</a>
||||||| merged common ancestors
                        		 <a class="sign-link" href="/pages/Register.vue" data-purpose="sign-up">
                         			Sign up
                        		</a>
=======
                        		 <a class="sign-link" href="/register" data-purpose="sign-up">
                         			Sign up
                        		</a>
>>>>>>> c2e717a56b6a56de3bf857813e79bf6c4703b5ad
                   			</div>
                        </div>
<<<<<<< HEAD
                    </form>
||||||| merged common ancestors
                        </form>
                    </div>
                </div>
=======
                    </form>  
                </div>             
>>>>>>> c2e717a56b6a56de3bf857813e79bf6c4703b5ad
            </div>
<<<<<<< HEAD
        </div>
    </div>
</div>
||||||| merged common ancestors
        </div>
=======
        </div>
    </div>
</div>
@endsection
>>>>>>> c2e717a56b6a56de3bf857813e79bf6c4703b5ad
