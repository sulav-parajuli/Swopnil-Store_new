<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Swopnil Store</title>
    <meta content="Grocery Store of Pokhara" name="description" />
    <meta content="grocery" name="keywords" />

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

    <!-- Vendor CSS Files -->
    <link
      href="/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link href="/vendor/aos/aos.css" rel="stylesheet" />
    <link
      href="/vendor/glightbox/css/glightbox.min.css"
      rel="stylesheet"
    />
    <link href="/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Include Font Awesome CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Template Main CSS File -->
    <link href="/css/main.css" rel="stylesheet" />
  </head>

  <body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
      <div class="container d-flex align-items-center justify-content-between">
        <a
        href="/"
          class="logo d-flex align-items-center me-auto me-lg-0"
        >
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <img src="/img/logo.png" alt="swopnil store" />
          <h1>Swopnil Store<span>.</span></h1>
        </a>

        <nav id="navbar" class="navbar">
          <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/store">Products</a></li>
            <li><a href="/#about">About</a></li>
            <li><a href="/#teams">Teams</a></li>
            <li><a href="/#posts">Posts</a></li>
            <li class="dropdown">
              <a href="#"
                ><span>Resources</span>
                <i class="bi bi-chevron-down dropdown-indicator"></i
              ></a>
              <ul>
              <li><a href="/policies">Policies</a></li>
                <!-- <li class="dropdown">
                  <a href="#"
                    ><span>Other</span>
                    <i class="bi bi-chevron-down dropdown-indicator"></i
                  ></a>
                  <ul> -->
                  <li><a href="/qrcodes">Qr Codes</a></li>
                    <li><a href="https://swopnilstore.business.site/">Google Site</a></li>
                    <li><a href="https://www.facebook.com/messages/t/2085160631740147">Message Us</a></li>
                    <li><a style="cursor:pointer" href="mailto:mail@swopnilstore.com.np">Mail Us</a></li>
                  <!-- </ul>
                </li> -->
              </ul>
            </li>
            <li><a href="/#contact">Contact</a></li>
            @if (Route::has('login'))
                                @auth
                                    <li><a
                                        href="{{ url('/dashboard') }}"
                                    >
                                        Dashboard
                                    </a></li>
                                @else
                                    <li><a
                                        href="{{ route('login') }}"
                                    >
                                        Log in
                                    </a></li>

                                    @if (Route::has('register'))
                                        <li><a
                                            href="{{ route('register') }}"
                                        >
                                            Register
                                        </a></li>
                                    @endif
                                @endauth
                                @endif
          </ul>
        </nav>
        <!-- .navbar -->

        <!-- <a class="btn-book-a-table" href="#login">Login</a> -->
        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      </div>
    </header>
    <!-- End Header -->

    @yield('content')

   <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
      <div class="container">
        <div class="row gy-3">
          <div class="col-lg-3 col-md-6 d-flex">
            <i class="bi bi-geo-alt icon"></i>
            <div>
              <h4>Address</h4>
              <p>
                Radha Krishna Marga<br />
                Pokhara, Street No: 13 - Parsyang<br />
              </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 footer-links d-flex">
            <i class="bi bi-telephone icon"></i>
            <div>
              <h4>Contact</h4>
              <p>
                <strong>Phone:</strong> +97761543093<br />
                <strong>Email:</strong> mail@swopnilstore.com.np<br />
              </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 footer-links d-flex">
            <i class="bi bi-clock icon"></i>
            <div>
              <h4>Opening Hours</h4>
              <p>
                <strong>Sun-Sat: 7AM</strong> - 9PM<br />
                Special Events: Closed
              </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Follow Us</h4>
            <div class="social-links d-flex">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="https://www.facebook.com/swopnilstore" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="https://www.instagram.com/swopnil_store/" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="copyright">
          &copy; 2024 <strong><span>Swopnil Store</span></strong
          >. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/ -->
          Designed by <a href="https://sulav-parajuli.com.np/">Sulav Parajuli</a>
        </div>
      </div>
    </footer>
    <!-- End Footer -->
    <!-- Messenger Chat plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
        var chatbox = document.getElementById('fb-customer-chat');
        chatbox.setAttribute("page_id", "2085160631740147");
        chatbox.setAttribute("attribution", "biz_inbox");

        window.fbAsyncInit = function() {
            FB.init({
                xfbml: true,
                version: 'v12.0'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <a
      href="#"
      class="scroll-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/vendor/aos/aos.js"></script>
    <script src="/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="/js/main.js"></script>
  </body>
</html>
