<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Swopnil Store</title>
        <meta content="Grocery Store of Pokhara" name="description" />
    <meta content="grocery" name="keywords" />
<link href="/css/bootstrap.css" rel="stylesheet" />
    <link href="/css/bootstrap.min.css" rel="stylesheet" />
         <!-- Template Main CSS File -->
  <link href="/css/app.css" rel="stylesheet">
            <!-- Favicons -->
    <link href="/img/logo.png" rel="icon" />
    <link href="/img/logo.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <!--Bootstrap-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Top Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand text-white" href="#"><b>Swopnil Store</b></a>
        <div>
          <!-- ======= Mobile nav toggle button ======= -->
        <i class="fa-solid fa-bars-staggered d-xl-none mobile-nav-toggle text-white" onclick="toggleSidebar()"></i>
        <button class="navbar-toggler text-white" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button></div>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <!-- <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-user"></i> Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-sign-out-alt"></i> Logout</a>
                </li> -->
                <li class="nav-item">
                  <div class="dropdown">
                    <a class="nav-link" style="margin-right:5px;" href="#" id="dropdownNotification" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-bell text-white"></i></a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownNotification" style="max-width: 50px;">
        <li><a class="dropdown-item truncate" href="#">Lorem ipsum dolor...</a></li>
        <li><a class="dropdown-item truncate" href="#">Lorem ipsum dolor...</a></li>
        <li><a class="dropdown-item truncate" href="#">Lorem ipsum dolor...</a></li>
      </ul></div>
                </li>
                <li class="nav-item">
                <div class="dropdown">
      <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
        <strong>{{ Auth::user()->name }}</strong>
      </a>
      <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
        <li><a class="dropdown-item" href="#"><i class="fas fa-gear"></i> Settings</a></li>
        <li><a class="dropdown-item" href="#"><i class="fas fa-user"></i> Profile</a></li>
        <li><hr class="dropdown-divider"></li>
        <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i>
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form></li>
      </ul>
    </div></li>
            </ul>
        </div>
</nav>

<header id="header">
<aside class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" id="sidebar">

      <div class="profile" style="padding-top: 50px">
        <!-- <img src="assets/img/profile-img.jpg" alt="" class="img-fluid rounded-circle"> -->
        <h1 class="text-light" style="padding-bottom: 10px"><a href="/">Swopnil Store</a></h1>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul class="nav nav-pills flex-column mb-auto" style="width:100%">
        <li>
        <a href="/admin" class="nav-link text-white">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"/></svg>
          Dashboard
        </a>
      </li>
      <li>
        <a href="#" class="nav-link text-white">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"/></svg>
          Orders
        </a>
      </li>
      <li>
        <a href="/category" class="nav-link text-white">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"/></svg>
          Categories
        </a>
      </li>
      <li>
        <a href="/products" class="nav-link text-white">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"/></svg>
          Products
        </a>
      </li>
      <li>
        <a href="/createproduct" class="nav-link text-white">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"/></svg>
          Create Products
        </a>
      </li>
      <li>
        <a href="/createcategory" class="nav-link text-white">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"/></svg>
          Create Categories
        </a>
      </li>
      <li>
        <a href="/createledger" class="nav-link text-white">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"/></svg>
          Create Ledger
        </a>
      </li>
      <li>
        <a href="/companies" class="nav-link text-white">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"/></svg>
          Parties
        </a>
      </li>
      <li>
        <a href="/createcompany" class="nav-link text-white">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"/></svg>
          Create Parties
        </a>
      </li>
      <li>
        <a href="#" class="nav-link text-white">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"/></svg>
          Users
        </a>
      </li>
      <li>
        <a href="#" class="nav-link text-white">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"/></svg>
          Customers
        </a>
      </li>
        </ul>
        <hr>
      </nav><!-- .nav-menu -->
    </aside>
  </header>

<!-- Main Content -->
<main id="main">
<section class="container-fluid">
<div class="ms-3 mb-3 margin-top">
        <!-- Main Content Area -->
        @yield('content')
        </div>
</section>
</main>
@include('partials._footer')

<!-- Bootstrap and jQuery scripts -->
        <script src="/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
<script src="/js/app.js"></script>
</body>
</html>
