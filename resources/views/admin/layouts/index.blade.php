<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description-gambolthemes" content="">
	<meta name="author-gambolthemes" content="">
	<title>Gambo Supermarket Admin</title>
    
   @include('admin.bootstrap.bootstrap')
<!--  
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
	<link href="{{asset('admin-css/styles.css')}}" rel="stylesheet">
	<link href="{{asset('admin-css/admin-style.css')}}" rel="stylesheet">
	 -->
	<!-- Vendor Stylesheets -->
	<link href="{{asset('admin-css/bootstrap/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('admin-css/fontawesome-free/all.min.css')}}" rel="stylesheet">
</head>
    <body class="sb-nav-fixed">
       @yield('menubar')
        <nav class="sb-topnav navbar navbar-expand navbar-light bg-clr">
            <a class="navbar-brand logo-brand" href="{{route('index')}}">Gambo Supermarket</a>
			<button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="bi bi-list"></i></button>
            <a href="{{route('index')}}" class="frnt-link"><i class="bi bi-box-arrow-up-right"></i>Home</a>
            <ul class="navbar-nav ml-auto mr-md-0" style="margin-left:75%;">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-bs-toggle="dropdown"  aria-expanded="false"><i class="bi bi-person-fill"></i></a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                        <a class="dropdown-item admin-dropdown-item" href="edit_profile.html">Edit Profile</a>
						<a class="dropdown-item admin-dropdown-item" href="change_password.html">Change Password</a>
                        <a class="dropdown-item admin-dropdown-item" href="{{route('logout')}}">Logout</a>
                    </div>
                </li>				
            </ul>			
        </nav>
        @yield('navbar')
        <div id="layoutSidenav">                   
          <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link active" href="{{route('index')}}">
								<div class="sb-nav-link-icon"><i class="bi bi-speedometer2"></i></div>
                                Dashboard
							</a>
                             <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
								<div class="sb-nav-link-icon"><i class="bi bi-newspaper"></i></div>
                                Posts
                                <div class="sb-sidenav-collapse-arrow"><i class="bi bi-caret-down"></i></div>
							</a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
									<a class="nav-link sub_nav_link" href="posts.html">All Posts</a>
									<a class="nav-link sub_nav_link" href="add_post.html">Add New</a>
									<a class="nav-link sub_nav_link" href="post_categories.html">Categories</a>
									<a class="nav-link sub_nav_link" href="post_tags.html">Tags</a>
								</nav>
                            </div>		
							<a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLocations" aria-expanded="false" aria-controls="collapseLocations">
								<div class="sb-nav-link-icon"><i class="bi bi-geo-alt-fill"></i></div>
                                Locations
                                <div class="sb-sidenav-collapse-arrow"><i class="bi bi-caret-down"></i></div>
							</a>
                            <div class="collapse" id="collapseLocations" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
									<a class="nav-link sub_nav_link" href="locations.html">All Locations</a>
									<a class="nav-link sub_nav_link" href="add_location.html">Add Location</a>
								</nav>
                            </div>		
							<a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseAreas" aria-expanded="false" aria-controls="collapseAreas">
								<div class="sb-nav-link-icon"><i class="bi bi-geo-fill"></i></div>
                                Areas
                                <div class="sb-sidenav-collapse-arrow"><i class="bi bi-caret-down"></i></div>
							</a>
                            <div class="collapse" id="collapseAreas" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
									<a class="nav-link sub_nav_link" href="areas.html">All Areas</a>
									<a class="nav-link sub_nav_link" href="add_area.html">Add Area</a>
								</nav>
                            </div>
							<a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseCategories" aria-expanded="false" aria-controls="collapseCategories">
								<div class="sb-nav-link-icon"><i class="bi bi-list-ul"></i></div>
                                Categories
                                <div class="sb-sidenav-collapse-arrow"><i class="bi bi-caret-down"></i></div>
							</a>
                            <div class="collapse" id="collapseCategories" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
									<a class="nav-link sub_nav_link" href="{{route('category')}}">All Categories</a>
									<a class="nav-link sub_nav_link" href="{{route('category_add')}}">Add Category</a>
								</nav>
                            </div>
							<a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseShops" aria-expanded="false" aria-controls="collapseShops">
								<div class="sb-nav-link-icon"><i class="bi bi-shop-window"></i></div>
                                Shops
                                <div class="sb-sidenav-collapse-arrow"><i class="bi bi-caret-down"></i></div>
							</a>
                            <div class="collapse" id="collapseShops" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
									<a class="nav-link sub_nav_link" href="shops.html">All Shops</a>
									<a class="nav-link sub_nav_link" href="add_shop.html">Add Shop</a>
								</nav>
                            </div>
							<a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseProducts" aria-expanded="false" aria-controls="collapseProducts">
								<div class="sb-nav-link-icon"><i class="bi bi-box2-fill"></i></div>
                                Products
                                <div class="sb-sidenav-collapse-arrow"><i class="bi bi-caret-down"></i></div>
							</a>
                            <div class="collapse" id="collapseProducts" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
									<a class="nav-link sub_nav_link" href="products.html">All Products</a>
									<a class="nav-link sub_nav_link" href="add_product.html">Add Product</a>
								</nav>
                            </div>
							<a class="nav-link" href="orders.html">
								<div class="sb-nav-link-icon"><i class="bi bi-cart-plus-fill"></i></div>
                                Orders
							</a>
							<a class="nav-link" href="customers.html">
								<div class="sb-nav-link-icon"><i class="bi bi-people-fill"></i></div>
                                Customers
							</a>
							<a class="nav-link" href="offers.html">
								<div class="sb-nav-link-icon"><i class="bi bi-gift-fill"></i></div>
                                Offers
							</a>
							<a class="nav-link" href="pages.html">
								<div class="sb-nav-link-icon"><i class="bi bi-people-fill"></i></div>
                                Pages
							</a>
                            <a class="nav-link" href="menu.html">
								<div class="sb-nav-link-icon"><i class="bi bi-stack"></i></div>
                                Menu
							</a>
							<a class="nav-link" href="updater.html">
								<div class="sb-nav-link-icon"><i class="bi bi-cloud-arrow-up-fill"></i></div>
                                Updater
							</a>
							<a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseSettings" aria-expanded="false" aria-controls="collapseSettings">
								<div class="sb-nav-link-icon"><i class="bi bi-gear-fill"></i></div>
                                Setting
                                <div class="sb-sidenav-collapse-arrow"><i class="bi bi-caret-down"></i></div>
							</a>
                            <div class="collapse" id="collapseSettings" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
									<a class="nav-link sub_nav_link" href="general_setting.html">General Settings</a>
									<a class="nav-link sub_nav_link" href="payment_setting.html">Payment Settings</a>
									<a class="nav-link sub_nav_link" href="email_setting.html">Email Settings</a>
								</nav>
                            </div>
							<a class="nav-link" href="reports.html">
								<div class="sb-nav-link-icon"><i class="bi bi-bar-chart-line-fill"></i></div>
                                Reports
							</a>
                        </div>
                    </div>
                </nav>
            </div>      
        </div> 
    @stack('script')
    </body>
</html>
               