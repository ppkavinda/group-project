<!-- top bar: login/register and contact info -->

<!-- //header -->
<!-- logo and search bar -->
<div class="header-bot">
	<div class="header-bot_inner_wthreeinfo_header_mid">
		<div class="row ">
			<!-- header-bot -->
			<div class="col-md-8 logo_agile">
				<h1>
					<a href="/">
						<img src="/dist/img/logo_without_vidatha.png" alt="logo">
						<span>Learning</span>Center
					</a>
				</h1>
			</div>
			<div class="col-md-4 header-middle">
				<form action="#" method="post">
						<input type="search" name="search" placeholder="Search here..." required="">
						<input type="submit" value=" ">
				</form>
			</div>
        <!-- header-bot -->
		</div>
	</div>
	
	</div>
</div>
<!-- //header-bot -->
<!-- banner -->
<div class="ban-top">
	<div class="container">
		<div class="top_nav_left">
			<nav class="navbar navbar-expand-lg navbar-default navbar-dark py-0 pb-0">
			  <div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggler mt-2" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" area-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				  </button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
				  <ul class="navbar-nav menu__list mr-auto">
						<li class="nav-item menu__item {{ Request::is('/') ? 'menu__item--current' : '' }}">
							<a class="nav-link menu__link" href="/">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item menu__item {{ Request::is('courses*') ? 'menu__item--current' : '' }}">
							<a class="nav-link menu__link" href="/courses">Courses</a>
						</li>
						<li class="nav-item menu__item {{ Request::is('about') ? 'menu__item--current' : '' }}">
							<a class="nav-link menu__link" href="/about">About</a>
						</li>
						<li class=" nav-item menu__item {{ Request::is('contact') ? 'menu__item--current' : '' }}">
							<a class="nav-link menu__link" href="/contact">Contact</a>
						</li>
					</ul>
					<ul class="navbar-nav menu__list ml-auto"> 
						<li class=" nav-item menu__item">
							<div class="wthreecartaits wthreecartaits2 cart cart box_1" id="testcart" title="Go to Shopping center"> 
								<a href="/shop" class="w3view-cart"><i class="fa fa-cart-arrow-down" ></i></a>
							</div>
						</li>
						@guest
						<li class="active nav-item menu__item {{ Request::is('login') ? 'menu__item--current' : '' }}"> 
							<a class="nav-link menu__link" data-toggle="modal" data-target="#myModal">
							<i class="fa fa-user" aria-hidden="true"></i> Sign In </a>
								<!-- <button class="btn btn-primary" >Login In</button> -->
						</li>
						<li class="nav-item menu__item {{ Request::is('register') ? 'menu__item--current' : '' }}">
								<a class="nav-link menu__link"  data-toggle="modal" data-target="#myModal1">
								<i class="fa fa-user" aria-hidden="true"></i> Sign Up </a>
				+		</li>
						@else
						
						<li class="nav-item menu__item {{ Request::is('/cart') ? 'menu__item--current' : '' }}">
								<a class="nav-link menu__link" href="/cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i> My cart</a>
						</li>
						<li class="nav-item menu__item dropdown {{ Request::is('profile*') ? 'menu__item--current' : '' }}">
							<a id="navbarDropdown" class="nav-link menu__link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
									{{ Auth::user()->name }} <span class="fa fa-caret-down"></span>
							</a>

							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="/profile"><i class="fa fa-user" aria-hidden="true"></i> My Profile</a>
								<a class="dropdown-item" href="{{ route('logout') }}"
									onclick="event.preventDefault();
										document.getElementById('logout-form').submit();">
									{{ __('Logout') }}
								</a>

								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									@csrf
								</form>
							</div>
						</li>
						@endguest
						</ul>
				<+/div>
			  </div>
			</nav>	
<!-- login modal -->

			  <div class="modal fade" id="myModal" role="dialog">
              <div class="modal-dialog">
              <div class="modal-content">
              <div class="modal-header"> 

                <p style="color:DodgerBlue;font-size:160%;" class="text-center" ><b>{{ __('Sign In!') }}</b></p>
                <button type="button" class="close" data-dismiss="modal" >&times;</button>

                </div>
                <div class="modal-body">
                <!-- /.login-logo -->
                <div class="login-logo">
                    <a href="/"><img src="/dist/img/logo.jpg" class="rounded mx-auto d-block" style="width: 45%; opacity: .6"></a>
                </div>
                <br>
              
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        
                        <div class="form-group row">
                           <span class="input-group-text fa fa-envelope form-control-feedback ">
                           </span>
                           	   <div class="col-md-6 offset-md-4">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email"  name="email" value="{{ old('email') }}" placeholder="E-mail" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                              </div>  
                        </div>

                        <div class="form-group row">
                            <span class="input-group-text fa fa-key form-control-feedback "></span>
                              <div class="col-md-6 offset-md-4">
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
                                        {{ __('Remember Me') }}
                                    </label>
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
                        <div class="modal-footer">
                       
                            <div class="col-md-9 offset-md-4">Don't have an account?
                        		 <a class="sign-link" href="/register" data-purpose="sign-up">
                         			Sign up
                        		</a>
                   			</div>
                        <!-- </div> -->
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>

    <!-- register modal -->

     <div class="modal fade" id="myModal1" role="dialog">
              <div class="modal-dialog">
              	<div class="modal-content">
              		<div class="modal-header"> 
                	<p class="login-box-msg" style="color:DodgerBlue;font-size:160%;"><b>Sign Up and Start Learning!</b></p>
                	<button type="button" class="close" data-dismiss="modal" >&times;</button>

                </div>

                <div class="modal-body">
                	<div class="login-logo">
                    	<a href="/"><img src="/dist/img/logo.jpg" alt="logo" style="width: 30%; opacity: .6"></a>
                	</div>
                		<register/>
                </div>
                </div>
              </div>
     	</div>
		</div>
	</div>
 <div class="clearfix"></div>
</div>