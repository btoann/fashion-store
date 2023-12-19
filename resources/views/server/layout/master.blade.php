<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="{{ asset('/') }}">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Katniss">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/katniss/img/katniss-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/katniss">
    <meta property="og:title" content="Bracket">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/katniss/img/katniss-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/katniss/img/katniss-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">


    <title>@yield('title') | Admin - AllStrore</title>

    <!-- vendor css -->
    <link href="resources/server/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="resources/server/lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="resources/server/lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="resources/server/lib/rickshaw/rickshaw.min.css" rel="stylesheet">

    <!-- Katniss CSS -->
    <link rel="stylesheet" href="resources/server/css/katniss.css">
    
    <script src="resources/server/lib/jquery/jquery.js"></script>
  </head>

  <body>

    <!-- ##### SIDEBAR LOGO ##### -->
    <div class="kt-sideleft-header">
      <div class="kt-logo"><a href="index.html">AllStore</a></div>
      <div id="ktDate" class="kt-date-today"></div>
      <div class="input-group kt-input-search">
        <input type="text" class="form-control" placeholder="Search...">
        <span class="input-group-btn mg-0">
          <button class="btn"><i class="fa fa-search"></i></button>
        </span>
      </div><!-- input-group -->
    </div><!-- kt-sideleft-header -->

    <!-- ##### SIDEBAR MENU ##### -->
    <div class="kt-sideleft">
      <label class="kt-sidebar-label">Navigation</label>
      <ul class="nav kt-sideleft-menu">
        <li class="nav-item">
          <a href="./administrator" class="nav-link {{ (request()->segment(2) == '') ? 'active' : '' }}">
            <i class="icon ion-ios-home-outline"></i>
            <span>Home</span>
          </a>
        </li><!-- nav-item -->
        <li class="nav-item">
          <a href="" class="nav-link with-sub {{ (request()->segment(2) == 'categories') ? 'active' : '' }}">
            <i class="icon ion-ios-list-outline"></i>
            <span>Categories</span>
          </a>
          <ul class="nav-sub" style="{{ (request()->segment(2) == 'categories') ? 'display: block;' : '' }}">
            <li class="nav-item"><a href="./administrator/categories" class="nav-link {{ (request()->segment(2) == 'categories' && request()->segment(3) == '') ? 'active' : '' }}">Dashboard</a></li>
            <li class="nav-item"><a href="./administrator/categories/view" class="nav-link {{ (request()->segment(2) == 'categories' && request()->segment(3) == 'view') ? 'active' : '' }}">View</a></li>
          </ul>
        </li><!-- nav-item -->
        <li class="nav-item">
          <a href="" class="nav-link with-sub {{ (request()->segment(2) == 'products') ? 'active' : '' }}">
            <i class="icon ion-ios-filing-outline"></i>
            <span>Products</span>
          </a>
          <ul class="nav-sub" style="{{ (request()->segment(2) == 'products') ? 'display: block;' : '' }}">
            <li class="nav-item"><a href="./administrator/products" class="nav-link {{ (request()->segment(2) == 'products' && request()->segment(3) == '') ? 'active' : '' }}">Dashboard</a></li>
            <li class="nav-item"><a href="./administrator/products/view" class="nav-link {{ (request()->segment(2) == 'products' && request()->segment(3) == 'view') ? 'active' : '' }}">View</a></li>
            <li class="nav-item"><a href="./administrator/products/comments" class="nav-link {{ (request()->segment(2) == 'products' && request()->segment(3) == 'comments') ? 'active' : '' }}">Comments</a></li>
          </ul>
        </li><!-- nav-item -->
        <li class="nav-item">
          <a href="" class="nav-link with-sub {{ (request()->segment(2) == 'brands') ? 'active' : '' }}">
            <i class="icon ion-ios-bookmarks-outline"></i>
            <span>Brands</span>
          </a>
          <ul class="nav-sub" style="{{ (request()->segment(2) == 'brands') ? 'display: block;' : '' }}">
            <li class="nav-item"><a href="./administrator/brands" class="nav-link {{ (request()->segment(2) == 'brands' && request()->segment(3) == '') ? 'active' : '' }}">Dashboard</a></li>
            <li class="nav-item"><a href="./administrator/brands/view" class="nav-link {{ (request()->segment(2) == 'brands' && request()->segment(3) == 'view') ? 'active' : '' }}">View</a></li>
          </ul>
        </li><!-- nav-item -->
        <li class="nav-item">
          <a href="" class="nav-link with-sub {{ (request()->segment(2) == 'users') ? 'active' : '' }}">
            <i class="icon ion-ios-person-outline"></i>
            <span>Users</span>
          </a>
          <ul class="nav-sub" style="{{ (request()->segment(2) == 'users') ? 'display: block;' : '' }}">
            <li class="nav-item"><a href="./administrator/users" class="nav-link {{ (request()->segment(2) == 'users' && request()->segment(3) == '') ? 'active' : '' }}">Dashboard</a></li>
            <li class="nav-item"><a href="./administrator/users/view" class="nav-link {{ (request()->segment(2) == 'users' && request()->segment(3) == 'view') ? 'active' : '' }}">View</a></li>
          </ul>
        </li><!-- nav-item -->
        <li class="nav-item">
          <a href="" class="nav-link with-sub {{ (request()->segment(2) == 'blogs') ? 'active' : '' }}">
            <i class="icon ion-ios-chatboxes-outline"></i>
            <span>Blogs</span>
          </a>
          <ul class="nav-sub" style="{{ (request()->segment(2) == 'blogs') ? 'display: block;' : '' }}">
            <li class="nav-item"><a href="./administrator/blogs" class="nav-link {{ (request()->segment(2) == 'blogs' && request()->segment(3) == '') ? 'active' : '' }}">Dashboard</a></li>
            <li class="nav-item"><a href="./administrator/blogs/view" class="nav-link {{ (request()->segment(2) == 'blogs' && request()->segment(3) == 'view') ? 'active' : '' }}">View</a></li>
            <li class="nav-item"><a href="./administrator/blogs/comments" class="nav-link {{ (request()->segment(2) == 'blogs' && request()->segment(3) == 'comments') ? 'active' : '' }}">Comments</a></li>
          </ul>
        </li><!-- nav-item -->
        <li class="nav-item">
          <a href="./administrator/orders" class="nav-link {{ (request()->segment(2) == 'orders') ? 'active' : '' }}">
            <i class="icon ion-ios-briefcase-outline"></i>
            <span>Orders</span>
          </a>
        </li><!-- nav-item -->
      </ul>
    </div><!-- kt-sideleft -->

    <!-- ##### HEAD PANEL ##### -->
    <div class="kt-headpanel">
      <div class="kt-headpanel-left">
        <a id="naviconMenu" href="" class="kt-navicon d-none d-lg-flex"><i class="icon ion-navicon-round"></i></a>
        <a id="naviconMenuMobile" href="" class="kt-navicon d-lg-none"><i class="icon ion-navicon-round"></i></a>
      </div><!-- kt-headpanel-left -->

      <div class="kt-headpanel-right">
        <div class="dropdown dropdown-notification">
          <a href="" class="nav-link pd-x-7 pos-relative" data-toggle="dropdown">
            <i class="icon ion-ios-bell-outline tx-24"></i>
            <!-- start: if statement -->
            <span class="square-8 bg-danger pos-absolute t-15 r-0 rounded-circle"></span>
            <!-- end: if statement -->
          </a>
          <div class="dropdown-menu wd-300 pd-0-force">
            <div class="dropdown-menu-header">
              <label>Notifications</label>
              <a href="">Mark All as Read</a>
            </div><!-- d-flex -->

            <div class="media-list">
              <!-- loop starts here -->
              <a href="" class="media-list-link read">
                <div class="media pd-x-20 pd-y-15">
                  <img src="resources/img/img8.jpg" class="wd-40 rounded-circle" alt="">
                  <div class="media-body">
                    <p class="tx-13 mg-b-0"><strong class="tx-medium">Suzzeth Bungaos</strong> tagged you and 18 others in a post.</p>
                    <span class="tx-12">October 03, 2017 8:45am</span>
                  </div>
                </div><!-- media -->
              </a>
              <!-- loop ends here -->
              <a href="" class="media-list-link read">
                <div class="media pd-x-20 pd-y-15">
                  <img src="resources/img/img9.jpg" class="wd-40 rounded-circle" alt="">
                  <div class="media-body">
                    <p class="tx-13 mg-b-0"><strong class="tx-medium">Mellisa Brown</strong> appreciated your work <strong class="tx-medium">The Social Network</strong></p>
                    <span class="tx-12">October 02, 2017 12:44am</span>
                  </div>
                </div><!-- media -->
              </a>
              <a href="" class="media-list-link read">
                <div class="media pd-x-20 pd-y-15">
                  <img src="resources/img/img10.jpg" class="wd-40 rounded-circle" alt="">
                  <div class="media-body">
                    <p class="tx-13 mg-b-0">20+ new items added are for sale in your <strong class="tx-medium">Sale Group</strong></p>
                    <span class="tx-12">October 01, 2017 10:20pm</span>
                  </div>
                </div><!-- media -->
              </a>
              <a href="" class="media-list-link read">
                <div class="media pd-x-20 pd-y-15">
                  <img src="resources/img/img5.jpg" class="wd-40 rounded-circle" alt="">
                  <div class="media-body">
                    <p class="tx-13 mg-b-0"><strong class="tx-medium">Julius Erving</strong> wants to connect with you on your conversation with <strong class="tx-medium">Ronnie Mara</strong></p>
                    <span class="tx-12">October 01, 2017 6:08pm</span>
                  </div>
                </div><!-- media -->
              </a>
              <div class="media-list-footer">
                <a href="" class="tx-12"><i class="fa fa-angle-down mg-r-5"></i> Show All Notifications</a>
              </div>
            </div><!-- media-list -->
          </div><!-- dropdown-menu -->
        </div><!-- dropdown -->
        <div class="dropdown dropdown-profile">
          <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
            <img src="resources/img/img3.jpg" class="wd-32 rounded-circle" alt="">
            <span class="logged-name"><span class="hidden-xs-down">Jane Doe</span> <i class="fa fa-angle-down mg-l-3"></i></span>
          </a>
          <div class="dropdown-menu wd-200">
            <ul class="list-unstyled user-profile-nav">
              <li><a href="#"><i class="icon ion-ios-person-outline"></i> Edit Profile</a></li>
              <li><a href="#"><i class="icon ion-ios-gear-outline"></i> Settings</a></li>
              <li><a href="#"><i class="icon ion-power"></i> Sign Out</a></li>
            </ul>
          </div><!-- dropdown-menu -->
        </div><!-- dropdown -->
      </div><!-- kt-headpanel-right -->
    </div><!-- kt-headpanel -->
    <div class="kt-breadcrumb">
      <nav class="breadcrumb">
        <a class="breadcrumb-item" href="./administrator">AllStore</a>
        @if (request()->segment(3) != '')
          <a class="breadcrumb-item active" href="./administrator/{{ request()->segment(2) }}">@yield('title')</a>
          <span class="breadcrumb-item active">{{ ucfirst(request()->segment(3)) }}</span>
        @else
          <span class="breadcrumb-item active">@yield('title')</span>
        @endif
      </nav>
    </div><!-- kt-breadcrumb -->

    <!-- ##### MAIN PANEL ##### -->
    <div class="kt-mainpanel">
      <div class="kt-pagetitle">
        <h5>@yield('title'){{ (request()->segment(3) != '') ? ' - ' . request()->segment(3) : '' }}</h5>
      </div><!-- kt-pagetitle -->

{{-- Body --}}
@yield('body')
      
      <div class="kt-footer">
        <span>non-Copyright &copy;</span>
        <span>btoann</span>
      </div><!-- kt-footer -->
    </div><!-- kt-mainpanel -->

    <script src="resources/server/lib/popper.js/popper.js"></script>
    <script src="resources/server/lib/bootstrap/bootstrap.js"></script>
    <script src="resources/server/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
    <script src="resources/server/lib/moment/moment.js"></script>
    <script src="resources/server/lib/d3/d3.js"></script>
    <script src="resources/server/lib/rickshaw/rickshaw.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyAEt_DBLTknLexNbTVwbXyq2HSf2UbRBU8"></script>
    <script src="resources/server/lib/gmaps/gmaps.js"></script>
    <script src="resources/server/lib/chart.js/Chart.js"></script>

    <script src="resources/server/js/katniss.js"></script>
    <script src="resources/server/js/ResizeSensor.js"></script>
    <script src="resources/server/js/dashboard.js"></script>

  </body>
</html>
