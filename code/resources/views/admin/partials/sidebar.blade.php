<div class="wrapper">
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <!-- Brand Logo -->
    <a href="/admin" class="brand-link">
    <div>
    <img src="/dist/img/logo.jpg"  alt="logo"  class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Athwela</span>
    </a>
   
     

   </div>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         
          <li class="nav-item">
              <a href="/profile" class="nav-link">
                <i class="fa fa-user nav-icon"></i>
                <p> My Profile</p>
              </a>
            </li>
      <!--    <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-user"></i>
              <p>
               My Profile
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="/admin/profile" class="nav-link">
                <i class="fa fa-user nav-icon"></i>
                <p> My Details</p>
              </a>
              </li>
              <li class="nav-item">
              <a href="/profile" class="nav-link">
                <i class="fa fa-book nav-icon"></i>
                <p> My Courses</p>
              </a>
              </li>
              <li class="nav-item">
              <a href="/profile" class="nav-link">
                <i class="fa fa-shopping-cart nav-icon"></i>
                <p> Cart</p>
              </a>
              </li>
              <li class="nav-item">
              <a href="admin/profile" class="nav-link">
                <i class="fa fa-gear nav-icon"></i>
                <p> Settings</p>
              </a>
              </li>
            </ul>
        </li>-->
          
       <!--- <a class="nav-link active profile-nav-link" id="v-pills-details-tab" 
             href="#v-pills-details" role="tab" 
            aria-controls="v-pills-details" aria-selected="false">
                <i class="fa fa-user" ></i> My details
        </a>
        <a class="nav-link profile-nav-link" id="v-pills-profile-tab" 
            data-toggle="pill" href="#v-pills-courses" role="tab" 
            aria-controls="v-pills-profile" aria-selected="false">
                <i class="fa fa-book"></i> My Courses
        </a>
        <a class="nav-link profile-nav-link" id="v-pills-messages-tab" 
            data-toggle="pill" href="#v-pills-cart" role="tab" 
            aria-controls="v-pills-cart" aria-selected="false">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart
            </a>
        <a class="nav-link profile-nav-link" id="v-pills-settings-tab" 
            data-toggle="pill" href="#v-pills-settings" role="tab" 
            aria-controls="v-pills-settings" aria-selected="false">
                <i class="fa fa-gear"></i> Settings-->
        </a>
   
          <li class="nav-item has-treeview">
            <a href="/admin/view-users" class="nav-link">
              <i class="nav-icon fa fa-user"></i>
              <p>
               Users
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            
              <li class="nav-item">
                <a href="/admin/view-users" class="nav-link">
                  <i class="fa fa-user nav-icon"></i>
                  <p>View</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/search-users" class="nav-link">
                  <i class="fa fa-search nav-icon"></i>
                  <p>Search</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/search-users" class="nav-link">
                  <i class="fa fa-gear nav-icon"></i>
                  <p>Manage role</p>
                </a>
              </li>
            </ul>
          </li>
          <a href="index3.html" class="brand-link">
    
      <span class="brand-text font-weight-light"> Learning Centre</span>
    </a>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-list"></i>
              <p>
                Categories
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/view-category" class="nav-link">
                  <i class="fa fa-table nav-icon"></i>
                  <p>View Categories</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="/admin/view-courselist" class="nav-link">
              <i class="nav-icon fa fa-book"></i></i>
              <p>
                Courses
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/add-course" class="nav-link">
                  <i class="fa fa-edit nav-icon"></i>
                  <p>Add  Courses</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/view-course" class="nav-link">
                  <i class="fa fa-edit nav-icon"></i>
                  <p>Edit Courses</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/view-course" class="nav-link">
                  <i class="fa fa-table nav-icon"></i>
                  <p>View Course</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-clipboard"></i>
              <p>
               Posts
                <i class="fa fa-angle-left right"></i>
                <span class="badge badge-light">{{$postCount}}</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                <a href="/admin/view-posts" class="nav-link">
                  <i class="fa fa-table nav-icon"></i>
                  <p>View Posts</p>
                </a>
              </li>
              </ul>
          </li> 
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-comment"></i>
              <p>
              Comments
                <i class="fa fa-angle-left right"></i>
                <span class="badge badge-light">{{$commentCount}}</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                <a href="/admin/view-comments" class="nav-link">
                  <i class="fa fa-table nav-icon"></i>
                  <p>View Comments</p>
                </a>
              </li>
              </ul>
          </li> 

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-envelope-o"></i>
              <p>
                Inquiry
                <i class="fa fa-angle-left right"></i>
                <span class="badge badge-light">{{$inquiryCount}}</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
            
              <li class="nav-item">
                <a href="/admin/view-inquiry" class="nav-link">
                  <i class="fa fa-table nav-icon"></i>
                  <p>View Inquiries</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/view-inquiry" class="nav-link">
                  <i class="fa fa-edit nav-icon"></i>
                  <p>Delete Inquiry</p>
                </a>
              </li>
            </ul>
          </li>
          
          
          <a href="index3.html" class="brand-link">
    
      <span class="brand-text font-weight-light"> Shopping Centre</span>
    </a>
    <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-product-hunt"></i>
              <p>
                Product
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/view-products" class="nav-link">
                  <i class="fa fa-table nav-icon"></i>
                  <p>View Product</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-clipboard"></i>
              <p>
                Order
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
          
              <li class="nav-item">
                <a href="/admin/view-orders" class="nav-link">
               
                  <i class="fa fa-file nav-icon"></i>
                  <p>View Order</p>
                </a>
              </li>
              
            </ul>
          </li>
         
          
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
</div>
