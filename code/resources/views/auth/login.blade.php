@extends('layouts.app')
<!-- background image -->
<div class="bg-img">
@section('content')
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
                         </div>  

                        <div class="card-footer">
                            <div class="col-md-9 offset-md-4">Don't have an account?
                        		 <a class="sign-link" href="/register" data-purpose="sign-up">
                         			Sign up
                        		</a>
                   			</div>
                        </div>
                    </form>  
                </div>             
            </div>
        </div>
    </div>
</div>
@endsection
