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
				<form action="{{ route('search.study') }}" method="GET">
					<input type="search" name="q" placeholder="Search here..." required="">
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
							<a class="nav-link menu__link" href="/study">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item dropdown menu__item">
							<a href="#" class="nav-link dropdown-toggle menu__link" id="navbarDropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
								Categories
								<span class="fa fa-caret-down"></span>
							</a>
							<ul class="dropdown-menu multi-column columns-3" area-labelledby="navbarDropdown">
								<div class="agile_inner_drop_nav_info row">
									<div class="col-sm-6 multi-gd-img1 multi-gd-text ">
										<a><img src="/dist/img/top2.jpg" alt="categories"/></a>
									</div>
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="/categories/{{'1'}}">Clothes</a></li>
											<li><a href="/categories/{{'2'}}">Masks</a></li>
											<li><a href="/categories/{{'3'}}">Soap</a></li>
											<li><a href="/categories/{{'4'}}">Spices</a></li>
											<li><a href="/categories/{{'5'}}">Shoes</a></li>
										</ul>
									</div>
									<!-- <div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="{{ route('categories.jewellery') }}">Jewellery</a></li>
											{{-- <li><a href="categories/">Sunglasses</a></li> --}}
											{{-- <li><a href="categories/">Perfumes</a></li> --}}
											{{-- <li><a href="categories/">Beauty</a></li> --}}
											{{-- <li><a href="categories/">Shirts</a></li> --}}
											{{-- <li><a href="categories/">Sunglasses</a></li> --}}
											{{-- <li><a href="categories/">Swimwear</a></li> --}}
										</ul>
									</div> -->
								</div>
							</ul>
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
							<cart-button initial-cart="{{ Cart::content() }}"></cart-button>
						</li>
						@guest
						<li class="active nav-item menu__item {{ Request::is('login') ? 'menu__item--current' : '' }}"> 
							<a class="nav-link menu__link" href="/login">
							<i class="fa fa-user" aria-hidden="true"></i> Sign In </a>
						</li>

						<li class="active nav-item menu__item {{ Request::is('register') ? 'menu__item--current' : '' }}">
								<a class="nav-link menu__link" href="/register">
								<i class="fa fa-user" aria-hidden="true"></i> Sign Up</a>
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



