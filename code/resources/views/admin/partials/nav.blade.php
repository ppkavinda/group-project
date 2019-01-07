
<nav class="main-header navbar navbar-expand bg-dark navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/admin" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/shop" class="nav-link">Shop</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/" class="nav-link">Study</a>
      </li>
          <li class="nav-item d-none d-sm-inline-block">
              <a href="/contact" class="nav-link">Contact</a>
          </li>
            <li class="nav-item d-none d-sm-inline-block">
              <a href="/about" class="nav-link">About</a>
           </li>
      @guest
						
		    	@else
						<li class="nav-item menu__item dropdown {{ Request::is('profile*') ? 'menu__item--current' : '' }}">
							<a id="navbarDropdown" class="nav-link menu__link" href="#" role="button" 
								data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
									{{ Auth::user()->name }} <span class="fa fa-caret-down"></span>
							</a>

							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								
								<div style="background-color:black;"><a class="dropdown-item" style="background-color:white; color:black !important;" href="{{ route('logout') }}"
									onclick="event.preventDefault();
										document.getElementById('logout-form').submit();">
									{{ __('Logout') }}
								</a>
                </div>

								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									@csrf
								</form>
							</div>
						</li>
						@endguest

      
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-2">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fa fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
     
      <!-- Notifications Dropdown Menu -->
      
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
            class="fa fa-th-large"></i></a>
      </li>
    </ul>
  </nav>
