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
<!-- //header-bot -->
<!-- banner -->
<div class="ban-top">
	<div class="container">
		<div class="top_nav_left">
			<nav class="navbar navbar-expand-lg navbar-default navbar-dark py-0 pb-0">
			  <div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggler mt-2" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" 
				  	area-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
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
						<li class="nav-item menu__item {{ Request::is('/cart') ? 'menu__item--current' : '' }}">
							<cart-button initial-cart-count="{{ Cart::count() }}"></cart-button>
						</li>
						@guest
						<li class="active nav-item menu__item {{ Request::is('login') ? 'menu__item--current' : '' }}"> 
							<a class="nav-link menu__link" data-toggle="modal" data-target="#myModal">
							<i class="fa fa-user" aria-hidden="true"></i> Sign In </a>
						</li>

						<li class="active nav-item menu__item {{ Request::is('register') ? 'menu__item--current' : '' }}">
								<a class="nav-link menu__link"  data-toggle="modal" data-target="#myModal1">
								<i class="fa fa-user" aria-hidden="true"></i> Sign Up </a>
						</li>
						@else
						<li class="nav-item menu__item dropdown {{ Request::is('profile*') ? 'menu__item--current' : '' }}">
							<a id="navbarDropdown" class="nav-link menu__link" href="#" role="button" 
								data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
				</div>
			  </div>
			</nav>	
		</div>
	</div>
</div>

<!-- login modal -->

@extends('auth.login')
@section('content')
        
<!-- register modal -->

@section('content')
    <register></register>
@endsection

