@extends('admin.master')

@section('content')
<div class="register-box">
  <div class="card">
    <div class="card-body register-card-body">
	  <div class="login-logo">
	    <a href="/"><b><img src="/dist/img/logo.jpg" alt="logo" style="width: 40%; opacity: .2"></a>
	  </div>
      <p class="login-box-msg">Register a new membership</p>

      <form action="../../index.html" method="post">
        <div class="form-group has-feedback">
        	<div class="input-group">
        		<div class="input-group-prepend">
		          <span class="input-group-text fa fa-user form-control-feedback"></span>
        		</div>
				  <input type="text" class="form-control" placeholder="Full name">
        	</div>
        </div>
        <div class="form-group has-feedback">
        	<div class="input-group">
        		<div class="input-group-prepend">
		          <span class="input-group-text fa fa-envelope form-control-feedback"></span>
        		</div>
		          <input type="email" class="form-control" placeholder="Email">
        	</div>
        </div>
        <div class="form-group has-feedback">
        	<div class="input-group">
        		<div class="input-group-prepend">
		          <span class="input-group-text fa fa-key form-control-feedback"></span>
        		</div>
		          <input type="password" class="form-control" placeholder="Password">
        	</div>
        </div>
        <div class="form-group has-feedback">
        	<div class="input-group">
        		<div class="input-group-prepend">
		          <span class="input-group-text fa fa-key form-control-feedback"></span>
        		</div>
		          <input type="password" class="form-control" placeholder="Retype password">
        	</div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="checkbox icheck">
              <label>
                <input type="checkbox"> I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fa fa-facebook mr-2"></i>
          Sign up using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fa fa-google-plus mr-2"></i>
          Sign up using Google+
        </a>
      </div>

      <a href="login.html" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
@endsection