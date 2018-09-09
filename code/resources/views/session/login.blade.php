@extends('admin.master')

@section('content')
<div class="login-box">
  <div class="card">
    <div class="card-body login-card-body">
    <div class="login-logo">
      <a href="/"><img src="/dist/img/logo.jpg" alt="logo" style="width: 50%; opacity: .4"></a>
    </div>
    <!-- /.login-logo -->
      <p class="login-box-msg" style="color:DodgerBlue;font-size:110%";><b>Login to your Athwela Account!</b></p>

     <form method="post" action="{{route ('signin') }}">
  {{csrf_field() }}
        <div class="form-group has-feedback">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text fa fa-envelope form-control-feedback"></span>
            </div>
              <input type="email" class="form-control" placeholder="Email"  email="email" name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$">
          </div>
        </div>
        <div class="form-group has-feedback">
          <div class="input-group">
          <div class="input-group-prepend">
              <span class="input-group-text fa fa-key form-control-feedback"></span>
          </div>
              <input type="password" class="form-control" placeholder="Password" name="pwd" required>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="checkbox icheck">
              <label>
                <input type="checkbox"> Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat" name="login">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fa fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fa fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div>
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="/recover">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="/register" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
</div>
@endsection