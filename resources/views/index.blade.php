<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

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

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}:host,html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;font-feature-settings:normal;font-variation-settings:normal;-webkit-tap-highlight-color:transparent}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-feature-settings:normal;font-variation-settings:normal;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-feature-settings:inherit;font-variation-settings:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}dialog{padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.absolute{position:absolute}.relative{position:relative}.-left-20{left:-5rem}.top-0{top:0px}.-bottom-16{bottom:-4rem}.-left-16{left:-4rem}.-mx-3{margin-left:-0.75rem;margin-right:-0.75rem}.mt-4{margin-top:1rem}.mt-6{margin-top:1.5rem}.flex{display:flex}.grid{display:grid}.hidden{display:none}.aspect-video{aspect-ratio:16 / 9}.size-12{width:3rem;height:3rem}.size-5{width:1.25rem;height:1.25rem}.size-6{width:1.5rem;height:1.5rem}.h-12{height:3rem}.h-40{height:10rem}.h-full{height:100%}.min-h-screen{min-height:100vh}.w-full{width:100%}.w-\[calc\(100\%\+8rem\)\]{width:calc(100% + 8rem)}.w-auto{width:auto}.max-w-\[877px\]{max-width:877px}.max-w-2xl{max-width:42rem}.flex-1{flex:1 1 0%}.shrink-0{flex-shrink:0}.grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.flex-col{flex-direction:column}.items-start{align-items:flex-start}.items-center{align-items:center}.items-stretch{align-items:stretch}.justify-end{justify-content:flex-end}.justify-center{justify-content:center}.gap-2{gap:0.5rem}.gap-4{gap:1rem}.gap-6{gap:1.5rem}.self-center{align-self:center}.overflow-hidden{overflow:hidden}.rounded-\[10px\]{border-radius:10px}.rounded-full{border-radius:9999px}.rounded-lg{border-radius:0.5rem}.rounded-md{border-radius:0.375rem}.rounded-sm{border-radius:0.125rem}.bg-\[\#FF2D20\]\/10{background-color:rgb(255 45 32 / 0.1)}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gradient-to-b{background-image:linear-gradient(to bottom, var(--tw-gradient-stops))}.from-transparent{--tw-gradient-from:transparent var(--tw-gradient-from-position);--tw-gradient-to:rgb(0 0 0 / 0) var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-white{--tw-gradient-to:rgb(255 255 255 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to)}.to-white{--tw-gradient-to:#fff var(--tw-gradient-to-position)}.stroke-\[\#FF2D20\]{stroke:#FF2D20}.object-cover{object-fit:cover}.object-top{object-position:top}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.py-10{padding-top:2.5rem;padding-bottom:2.5rem}.px-3{padding-left:0.75rem;padding-right:0.75rem}.py-16{padding-top:4rem;padding-bottom:4rem}.py-2{padding-top:0.5rem;padding-bottom:0.5rem}.pt-3{padding-top:0.75rem}.text-center{text-align:center}.font-sans{font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji}.text-sm{font-size:0.875rem;line-height:1.25rem}.text-sm\/relaxed{font-size:0.875rem;line-height:1.625}.text-xl{font-size:1.25rem;line-height:1.75rem}.font-semibold{font-weight:600}.text-black{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-\[0px_14px_34px_0px_rgba\(0\2c 0\2c 0\2c 0\.08\)\]{--tw-shadow:0px 14px 34px 0px rgba(0,0,0,0.08);--tw-shadow-colored:0px 14px 34px 0px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.ring-transparent{--tw-ring-color:transparent}.ring-white\/\[0\.05\]{--tw-ring-color:rgb(255 255 255 / 0.05)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.06\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.06));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.25\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.25));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.transition{transition-property:color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.duration-300{transition-duration:300ms}.selection\:bg-\[\#FF2D20\] *::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-\[\#FF2D20\]::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-black:hover{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.hover\:text-black\/70:hover{color:rgb(0 0 0 / 0.7)}.hover\:ring-black\/20:hover{--tw-ring-color:rgb(0 0 0 / 0.2)}.focus\:outline-none:focus{outline:2px solid transparent;outline-offset:2px}.focus-visible\:ring-1:focus-visible{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}@media (min-width: 640px){.sm\:size-16{width:4rem;height:4rem}.sm\:size-6{width:1.5rem;height:1.5rem}.sm\:pt-5{padding-top:1.25rem}}@media (min-width: 768px){.md\:row-span-3{grid-row:span 3 / span 3}}@media (min-width: 1024px){.lg\:col-start-2{grid-column-start:2}.lg\:h-16{height:4rem}.lg\:max-w-7xl{max-width:80rem}.lg\:grid-cols-3{grid-template-columns:repeat(3, minmax(0, 1fr))}.lg\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.lg\:flex-col{flex-direction:column}.lg\:items-end{align-items:flex-end}.lg\:justify-center{justify-content:center}.lg\:gap-8{gap:2rem}.lg\:p-10{padding:2.5rem}.lg\:pb-10{padding-bottom:2.5rem}.lg\:pt-0{padding-top:0px}.lg\:text-\[\#FF2D20\]{--tw-text-opacity:1;color:rgb(255 45 32 / var(--tw-text-opacity))}}@media (prefers-color-scheme: dark){.dark\:block{display:block}.dark\:hidden{display:none}.dark\:bg-black{--tw-bg-opacity:1;background-color:rgb(0 0 0 / var(--tw-bg-opacity))}.dark\:bg-zinc-900{--tw-bg-opacity:1;background-color:rgb(24 24 27 / var(--tw-bg-opacity))}.dark\:via-zinc-900{--tw-gradient-to:rgb(24 24 27 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)}.dark\:to-zinc-900{--tw-gradient-to:#18181b var(--tw-gradient-to-position)}.dark\:text-white\/50{color:rgb(255 255 255 / 0.5)}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-white\/70{color:rgb(255 255 255 / 0.7)}.dark\:ring-zinc-800{--tw-ring-opacity:1;--tw-ring-color:rgb(39 39 42 / var(--tw-ring-opacity))}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:hover\:text-white\/70:hover{color:rgb(255 255 255 / 0.7)}.dark\:hover\:text-white\/80:hover{color:rgb(255 255 255 / 0.8)}.dark\:hover\:ring-zinc-700:hover{--tw-ring-opacity:1;--tw-ring-color:rgb(63 63 70 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-white:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 255 255 / var(--tw-ring-opacity))}}
        </style>

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
         <!-- Template Main CSS File -->
    <link href="/css/main.css" rel="stylesheet" />
  </head>
    </head>
    <body>
                    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
      <div class="container d-flex align-items-center justify-content-between">
        <a
          href="index.html"
          class="logo d-flex align-items-center me-auto me-lg-0"
        >
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <img src="/img/logo.png" alt="swopnil store" />
          <h1>Swopnil Store<span>.</span></h1>
        </a>

        <nav id="navbar" class="navbar">
          <ul>
            <li><a href="#hero">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#teams">Teams</a></li>
            <li><a href="#posts">Posts</a></li>
            <li class="dropdown">
              <a href="#"
                ><span>Resources</span>
                <i class="bi bi-chevron-down dropdown-indicator"></i
              ></a>
              <ul>
                <li><a href="policies.html">Policies</a></li>
                <!-- <li class="dropdown">
                  <a href="#"
                    ><span>Other</span>
                    <i class="bi bi-chevron-down dropdown-indicator"></i
                  ></a>
                  <ul> -->
                    <li><a href="QRcode.html">Qr Codes</a></li>
                    <li><a href="https://swopnilstore.business.site/?utm_source=gmb&utm_medium=referral">Google Site</a></li>
                    <li><a href="https://www.facebook.com/messages/t/2085160631740147">Message Us</a></li>
                    <li><a style="cursor:pointer" href="mailto:mail@swopnilstore.com.np">Mail Us</a></li>
                  <!-- </ul>
                </li> -->
              </ul>
            </li>
            <li><a href="#contact">Contact</a></li>
            @if (Route::has('login'))
                                @auth
                                    <li><a
                                        href="{{ url('/dashboard') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Dashboard
                                    </a></li>
                                @else
                                    <li><a
                                        href="{{ route('login') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Log in
                                    </a></li>

                                    @if (Route::has('register'))
                                        <li><a
                                            href="{{ route('register') }}"
                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
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

                         <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center section-bg">
      <!-- <div class="container">
        <div class="row justify-content-between gy-5">
          <div
            class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start"
          >
            <h2 data-aos="fade-up">Enjoy Your Healthy<br />Delicious Food</h2>
            <p data-aos="fade-up" data-aos-delay="100">
              Sed autem laudantium dolores. Voluptatem itaque ea consequatur
              eveniet. Eum quas beatae cumque eum quaerat.
            </p>
            <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
              <a href="#book-a-table" class="btn-book-a-table">Book a Table</a>
              <a
                href="https://www.youtube.com/watch?v=LXb3EKWsInQ"
                class="glightbox btn-watch-video d-flex align-items-center"
                ><i class="bi bi-play-circle"></i><span>Watch Video</span></a
              >
            </div>
          </div>
          <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
            <img
              src="/img/hero-img.png"
              class="img-fluid"
              alt=""
              data-aos="zoom-out"
              data-aos-delay="300"
            />
          </div>
        </div>
      </div> -->
      <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="1"
            aria-label="Slide 2"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="2"
            aria-label="Slide 3"
          ></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img
              src="/img/slider/grocery.png"
              class="d-block w-100"
              alt="..."
            />
          </div>
          <div class="carousel-item">
            <img
              src="/img/slider/gillette.png"
              class="d-block w-100"
              alt="..."
            />
          </div>
          <div class="carousel-item">
            <img
              src="/img/slider/drinks.png"
              class="d-block w-100"
              alt="..."
            />
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>
    <!-- End Hero Section -->

    <main id="main">
      <!-- ======= About Section ======= -->
      <section id="about" class="about">
        <div class="container" data-aos="fade-up">
          <div class="section-header">
            <h2>About Us</h2>
            <p>Learn More <span>About Us</span></p>
          </div>

          <div class="row gy-4">
            <div
              class="col-lg-7 position-relative about-img"
              style="
                background-image: url(/img/about-2.jpg);
                background-size: cover;
              "
              data-aos="fade-up"
              data-aos-delay="150"
            >
              <div class="call-us position-absolute">
                <h4>Purchase a product</h4>
                <p><a href="tel:+97761543093">+97761543093</a></p>
              </div>
            </div>
            <div
              class="col-lg-5 d-flex align-items-end"
              data-aos="fade-up"
              data-aos-delay="300"
            >
              <div class="content ps-0 ps-lg-5">
                <p>
                  <b class="fst-italic">Welcome to Swopnil Store</b><br />
                  Located in the heart of Pokhara, Nepal, Swopnil Store has been
                  your trusted neighborhood grocery store since 2007 AD. Founded
                  by Mr. Yadav Prasad Parajuli, our store is named after
                  "Swopnil," meaning "Dreamy" or "Dream place," reflecting our
                  vision of creating a one-stop destination for all your needs
                  while supporting our local community.
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i> Our Journey</li>
                  <p>
                    Our story began with a passion for fresh food and a strong
                    commitment to our community. Mr. Parajuli envisioned a place
                    where people could conveniently find everything they need,
                    from basic groceries to household essentials, while
                    supporting local farmers and suppliers. Over the years,
                    Swopnil Store has grown to embody this dream, providing the
                    highest-quality products and exceptional customer service.
                  </p>
                  <li>
                    <i class="bi bi-check2-all"></i> Our Mission and Values
                  </li>
                  <p>
                    At Swopnil Store, our mission is simple: to offer the best
                    grocery shopping experience. We are dedicated to: <br /><b
                      >Quality:</b
                    >
                    Providing high-quality, fresh products. <br /><b
                      >Community:</b
                    >
                    Supporting local farmers and suppliers to sustain our local
                    economy.<br />
                    <b>Integrity:</b> Upholding the highest standards of
                    customer service and business practices.
                  </p>

                <!-- <div class="position-relative mt-4">
                  <img src="/img/about-2.jpg" class="img-fluid" alt="" />
                  <a
                    href="https://www.youtube.com/watch?v=LXb3EKWsInQ"
                    class="glightbox play-btn"
                  ></a>
                </div> -->
              </div>
            </div>
          </div>
          <div class="row gy-4">
            <div
              class="col-lg-12 d-flex align-items-end"
              data-aos="fade-up"
              data-aos-delay="300"
            >
              <div class="content ps-0 ps-lg-12">
                <ul>
                  <li style="padding-top: 1.5%;"><i class="bi bi-check2-all" style="padding-top: 1.5%;"></i>Community Engagement</li>
                  <p>
                    Giving back to our community is at the heart of what we do.
                    We regularly participate in local events and support
                    community initiatives. By sourcing products from local
                    farmers, we ensure you get the freshest items while boosting
                    the local economy.
                  </p>
                  <li><i class="bi bi-check2-all"></i> Our Offerings</li>
                  <p>
                    We offer a wide range of products including:<br /><b
                      >Groceries: </b
                    >Basic essentials, organic vegetables and fruits, poultry,
                    and cattle feedings. <br /><b
                      >Cosmetics and Stationeries: </b
                    >A variety of personal care items and office supplies.<br /><b
                      >Household Items: </b
                    >Cleaning supplies, kitchenware, gas cylinder and home
                    decor.<br /><b>Dairy Products: </b> Fresh milk, cheese, and
                    yogurt.<br /><b>Snacks and Drinks: </b>Chips, cookies, soft
                    drinks, and more.<br /><b>Pooja Items: </b> Essential items
                    for religious beliefs.<br />
                  </p>
                  <li><i class="bi bi-check2-all"></i>Customer Experience</li>
                  <p>
                    Our store is designed to provide a pleasant and convenient
                    shopping experience. We offer:<br /><b>Home Delivery: </b>
                    Bringing your groceries right to your doorstep.<br /><b>
                      Digital Money Exchange Services:
                    </b>
                    Through eSewa, IMEPay, Khalti etc.<br /><b
                      >Home Transaction Services: </b
                    >Including electricity payments, bills, money transfers, travel
                    bookings etc.<br /><b> Discounts and Guarantees:</b> Enjoy heavy
                    discounts on purchases, and rest assured with our 100% fresh
                    goods guarantee and return policy for damaged items.<br /><b
                      >Wholesale Prices:</b
                    >
                    Special discounts for small groceries buying in bulk.
                  </p>
                  <li><i class="bi bi-check2-all"></i>Our Vision</li>
                  <p>
                    Looking ahead, we aim to expand our product lines and
                    introduce new services to better serve our community. Our
                    vision is to continue growing while maintaining our
                    unwavering commitment to quality and community.
                  </p>
                  <li><i class="bi bi-check2-all"></i>Contact Us</li>
                  <p>
                    Visit us at Radha Krishna Marga, Parsyang, Pokhara, Street
                    No. 13, or reach out to us at +97761543093 and
                    mail@swopnilstore.com.np. Follow us on social media to stay
                    updated on our latest offerings and promotions.
                  </p>
                </ul>
                <p>
                  Thank you for choosing Swopnil Store – where dreams and
                  community come together.
                </p>

                <!-- <div class="position-relative mt-4">
                <img src="/img/about-2.jpg" class="img-fluid" alt="" />
                <a
                  href="https://www.youtube.com/watch?v=LXb3EKWsInQ"
                  class="glightbox play-btn"
                ></a>
              </div> -->
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End About Section -->

      <!-- ======= Why Us Section ======= -->
      <section id="why-us" class="why-us section-bg">
        <div class="container" data-aos="fade-up">
          <div class="row gy-4">
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
              <div class="why-box">
                <h3>Why to Choose Swopnil Store?</h3>
                <p>
                  Swopnil Store offers the freshest and healthiest groceries at affordable prices. We provide convenient delivery within Pokhara valley and guarantee top-quality products with a solid return policy. Our dedication to the community is reflected in our support for local events and innovative services like digital payments and home transactions. Shop with us for quality, convenience, and community focus.
                </p>
                <div class="text-center">
                  <a href="#about" class="more-btn"
                    >Learn More <i class="bx bx-chevron-right"></i
                  ></a>
                </div>
              </div>
            </div>
            <!-- End Why Box -->

            <div class="col-lg-8 d-flex align-items-center">
              <div class="row gy-4">
                <div class="col-xl-4" data-aos="fade-up" data-aos-delay="200">
                  <div
                    class="icon-box d-flex flex-column justify-content-center align-items-center"
                  >
                    <i class="bi bi-gem"></i>
                    <h4> Premium Quality Groceries:</h4>
                    <p>
                      We source the healthiest, fresh, and long-term unexpired foods from various places in Nepal, ensuring our customers' well-being.
                    </p>
                  </div>
                </div>
                <!-- End Icon Box -->

                <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
                  <div
                    class="icon-box d-flex flex-column justify-content-center align-items-center"
                  >
                    <i class="bi bi-shield-check"></i>
                    <h4>Trusted Brands at Affordable Prices:</h4>
                    <p>
                      We offer branded and essential groceries at competitive rates, making it easy to get what you need without overspending.
                    </p>
                  </div>
                </div>
                <!-- End Icon Box -->

                <div class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
                  <div
                    class="icon-box d-flex flex-column justify-content-center align-items-center"
                  >
                    <i class="bi bi-truck"></i>
                    <h4>Reliable Delivery and Customer Satisfaction:</h4>
                    <p>
                      We deliver within Pokhara valley, guaranteeing quality and excellent service. We promise healthy products and never compromise on quality.
                    </p>
                  </div>
                </div>
                <!-- End Icon Box -->
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Why Us Section -->

      <!-- ======= Stats Counter Section ======= -->
      <section id="stats-counter" class="stats-counter">
        <div class="container" data-aos="zoom-out">
          <div class="row gy-4">
            <div class="col-lg-3 col-md-6">
              <div class="stats-item text-center w-100 h-100">
                <span
                  data-purecounter-start="0"
                  data-purecounter-end="232"
                  data-purecounter-duration="1"
                  class="purecounter"
                ></span>
                <p>Clients</p>
              </div>
            </div>
            <!-- End Stats Item -->

            <div class="col-lg-3 col-md-6">
              <div class="stats-item text-center w-100 h-100">
                <span
                  data-purecounter-start="0"
                  data-purecounter-end="521"
                  data-purecounter-duration="1"
                  class="purecounter"
                ></span>
                <p>Projects</p>
              </div>
            </div>
            <!-- End Stats Item -->

            <div class="col-lg-3 col-md-6">
              <div class="stats-item text-center w-100 h-100">
                <span
                  data-purecounter-start="0"
                  data-purecounter-end="1453"
                  data-purecounter-duration="1"
                  class="purecounter"
                ></span>
                <p>Hours Of Support</p>
              </div>
            </div>
            <!-- End Stats Item -->

            <div class="col-lg-3 col-md-6">
              <div class="stats-item text-center w-100 h-100">
                <span
                  data-purecounter-start="0"
                  data-purecounter-end="32"
                  data-purecounter-duration="1"
                  class="purecounter"
                ></span>
                <p>Workers</p>
              </div>
            </div>
            <!-- End Stats Item -->
          </div>
        </div>
      </section>
      <!-- End Stats Counter Section -->

      <!-- ======= Testimonials Section ======= -->
      <section id="testimonials" class="testimonials section-bg">
        <div class="container" data-aos="fade-up">
          <div class="section-header">
            <h2>Testimonials</h2>
            <p>What Are They <span>Saying About Us</span></p>
          </div>

          <div class="slides-1 swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="testimonial-item">
                  <div class="row gy-4 justify-content-center">
                    <div class="col-lg-6">
                      <div class="testimonial-content">
                        <p>
                          <i class="bi bi-quote quote-icon-left"></i>
                          Good Service
                          <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                        <h3>Umesh Bhurtel</h3>
                        <div class="stars">
                          <i class="bi bi-star-fill"></i
                          ><i class="bi bi-star-fill"></i
                          ><i class="bi bi-star-fill"></i
                          ><i class="bi bi-star-fill"></i
                          ><i class="bi bi-star-fill"></i>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-2 text-center">
                      <img
                        src="/img/testimonials/Umesh.png"
                        class="img-fluid testimonial-img"
                        alt=""
                      />
                    </div>
                  </div>
                </div>
              </div>
              <!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <div class="row gy-4 justify-content-center">
                    <div class="col-lg-6">
                      <div class="testimonial-content">
                        <p>
                          <i class="bi bi-quote quote-icon-left"></i>
                          I am impressed and fully satisfied with this store services.
                          <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                        <h3>Sudip Kafle</h3>
                        <!-- <h4>Designer</h4> -->
                        <div class="stars">
                          <i class="bi bi-star-fill"></i
                          ><i class="bi bi-star-fill"></i
                          ><i class="bi bi-star-fill"></i
                          ><i class="bi bi-star-fill"></i
                          ><i class="bi bi-star-fill"></i>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-2 text-center">
                      <img
                        src="/img/testimonials/sudip.jpg"
                        class="img-fluid testimonial-img"
                        alt=""
                      />
                    </div>
                  </div>
                </div>
              </div>
              <!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <div class="row gy-4 justify-content-center">
                    <div class="col-lg-6">
                      <div class="testimonial-content">
                        <p>
                          <i class="bi bi-quote quote-icon-left"></i>
                          Nice services.
                          <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                        <h3>Udaya Adhikari</h3>
                        <div class="stars">
                          <i class="bi bi-star-fill"></i
                          ><i class="bi bi-star-fill"></i
                          ><i class="bi bi-star-fill"></i
                          ><i class="bi bi-star-fill"></i
                          ><i class="bi bi-star-fill"></i>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-2 text-center">
                      <img
                        src="/img/testimonials/udaya.jpg"
                        class="img-fluid testimonial-img"
                        alt=""
                      />
                    </div>
                  </div>
                </div>
              </div>
              <!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <div class="row gy-4 justify-content-center">
                    <div class="col-lg-6">
                      <div class="testimonial-content">
                        <p>
                          <i class="bi bi-quote quote-icon-left"></i>
                          Small store for basic and essentials needs.
                          <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                        <h3>THAKALI THAKALI</h3>
                        <div class="stars">
                          <i class="bi bi-star-fill"></i
                          ><i class="bi bi-star-fill"></i
                          ><i class="bi bi-star-fill"></i
                          ><i class="bi bi-star"></i
                          ><i class="bi bi-star"></i>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-2 text-center">
                      <img
                        src="/img/testimonials/thakali.png"
                        class="img-fluid testimonial-img"
                        alt=""
                      />
                    </div>
                  </div>
                </div>
              </div>
              <!-- End testimonial item -->
            </div>
            <div class="swiper-pagination"></div>
          </div>
          <div class="text-center">
            <a type="submit" style="color:white;background-color: var(--color-primary);border-radius: 50px;padding:8px 20px;" href="https://www.google.com/maps/place/Swopnil+Store/@28.2215632,83.9380495,13z/data=!4m12!1m2!2m1!1sSwopnil+Store!3m8!1s0x39959456ec60b459:0xba6b352ce067731c!8m2!3d28.2215694!4d83.9792493!9m1!1b1!15sCg1Td29wbmlsIFN0b3JlWg8iDXN3b3BuaWwgc3RvcmWSAQ1ncm9jZXJ5X3N0b3Jl4AEA!16s%2Fg%2F11gcq0zj9p?entry=ttu">See More</a>
          </div>
        </div>
      </section>
      <!-- End Testimonials Section -->

      <!-- ======= Teams Section ======= -->
      <section id="teams" class="teams section-bg">
        <div class="container" data-aos="fade-up">
          <div class="section-header">
            <h2>Teams</h2>
            <p>Meet <span>Our</span> Team</p>
          </div>

          <div class="row gy-4">
            <div
              class="col-lg-4 col-md-6 d-flex align-items-stretch"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <div class="team-member">
                <div class="member-img">
                  <img
                    src="/img/teams/yadav.jpg"
                    class="img-fluid"
                    alt="Proprieter"
                    style="height:50%;background-size: cover;"
                  />
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href="https://www.facebook.com/yadav.parajuli.94"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.instagram.com/yadav.parajuli/"><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4>Mr.Yadav Prasad Parajuli</h4>
                  <span>Proprieter</span>
                  <hr/>
                  <div class="d-flex justify-content-evenly">
                    <a href="tel:+9779856040093"><i class="bi bi-telephone"></i>&nbsp;Call</a>
                    <a href="mailto:yadav.parajuli@swopnilstore.com.np"><i class="bi bi-envelope"></i>&nbsp;Mail</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Teams Member -->

            <div
              class="col-lg-4 col-md-6 d-flex align-items-stretch"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <div class="team-member">
                <div class="member-img">
                  <img
                    src="/img/teams/shanti.png"
                    class="img-fluid"
                    alt="shanti parajuli"
                    style="height:20%;background-size: cover;"
                  />
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href="https://www.facebook.com/shanti.parajuli.161"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.instagram.com/shanti_parajuli/"><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4>Shanti Parajuli</h4>
                  <span>Director/Manager</span>
                  <hr/>
                  <div class="d-flex justify-content-evenly">
                    <a href="tel:+9779846046923"><i class="bi bi-telephone"></i>&nbsp;Call</a>
                    <a href="mailto:shanti.parajuli@swopnilstore.com.np"><i class="bi bi-envelope"></i>&nbsp;Mail</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Teams Member -->

            <div
              class="col-lg-4 col-md-6 d-flex align-items-stretch"
              data-aos="fade-up"
              data-aos-delay="300"
            >
              <div class="team-member">
                <div class="member-img">
                  <img
                    src="/img/teams/sulav.png"
                    class="img-fluid"
                    alt="sulav-parajuli"
                  />
                  <div class="social">
                    <a href="https://x.com/SulavParajul1"><i class="bi bi-twitter"></i></a>
                    <a href="https://www.facebook.com/sulav.parajuli.5/"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.instagram.com/_sulav_parajuli/"><i class="bi bi-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/sulavparajuli/"><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4>Sulav Parajuli</h4>
                  <span>Manager</span>
                  <hr/>
                  <div class="d-flex justify-content-evenly">
                    <a href="tel:+9779816106956"><i class="bi bi-telephone"></i>&nbsp;Call</a>
                    <a href="mailto:sulav.parajuli@swopnilstore.com.np"><i class="bi bi-envelope"></i>&nbsp;Mail</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Teams Member -->
          </div>
        </div>
      </section>
      <!-- End Teams Section -->

      <!-- ======= Posts Section ======= -->
      <section id="posts" class="posts section-bg">
        <div class="container" data-aos="fade-up">
          <div class="section-header">
            <h2>Posts</h2>
            <p>Check <span>Our Posts</span></p>
          </div>

          <div class="posts-slider swiper">
            <div class="swiper-wrapper align-items-center">
              <div class="swiper-slide">
                <a
                  class="glightbox"
                  data-posts="images-posts"
                  href="/img/posts/grocery.png"
                  ><img
                    src="/img/posts/grocery.png"
                    class="img-fluid"
                    alt=""
                /></a>
              </div>
              <div class="swiper-slide">
                <a
                  class="glightbox"
                  data-posts="images-posts"
                  href="/img/posts/gillette.png"
                  ><img
                    src="/img/posts/gillette.png"
                    class="img-fluid"
                    alt=""
                /></a>
              </div>
              <div class="swiper-slide">
                <a
                  class="glightbox"
                  data-posts="images-posts"
                  href="/img/posts/drinks.png"
                  ><img
                    src="/img/posts/drinks.png"
                    class="img-fluid"
                    alt=""
                /></a>
              </div>
              <div class="swiper-slide">
                <a
                  class="glightbox"
                  data-posts="images-posts"
                  href="/img/posts/frozen.png"
                  ><img
                    src="/img/posts/frozen.png"
                    class="img-fluid"
                    alt=""
                /></a>
              </div>
              <div class="swiper-slide">
                <a
                  class="glightbox"
                  data-posts="images-posts"
                  href="/img/posts/vegen.png"
                  ><img
                    src="/img/posts/vegen.png"
                    class="img-fluid"
                    alt=""
                /></a>
              </div>
              <div class="swiper-slide">
                <a
                  class="glightbox"
                  data-posts="images-posts"
                  href="/img/posts/personalcare.png"
                  ><img
                    src="/img/posts/personalcare.png"
                    class="img-fluid"
                    alt=""
                /></a>
              </div>
              <div class="swiper-slide">
                <a
                  class="glightbox"
                  data-posts="images-posts"
                  href="/img/posts/Babycare.png"
                  ><img
                    src="/img/posts/Babycare.png"
                    class="img-fluid"
                    alt=""
                /></a>
              </div>
              <div class="swiper-slide">
                <a
                  class="glightbox"
                  data-posts="images-posts"
                  href="/img/posts/Cards.png"
                  ><img
                    src="/img/posts/Cards.png"
                    class="img-fluid"
                    alt=""
                /></a>
              </div>
              <div class="swiper-slide">
                <a
                  class="glightbox"
                  data-posts="images-posts"
                  href="/img/posts/householdcare.png"
                  ><img
                    src="/img/posts/householdcare.png"
                    class="img-fluid"
                    alt=""
                /></a>
              </div>
              <div class="swiper-slide">
                <a
                  class="glightbox"
                  data-posts="images-posts"
                  href="/img/posts/fruitsandchocolates.jpg"
                  ><img
                    src="/img/posts/fruitsandchocolates.jpg"
                    class="img-fluid"
                    alt=""
                /></a>
              </div>
              <div class="swiper-slide">
                <a
                  class="glightbox"
                  data-posts="images-posts"
                  href="/img/posts/feed.png"
                  ><img
                    src="/img/posts/feed.png"
                    class="img-fluid"
                    alt=""
                /></a>
              </div>
              <div class="swiper-slide">
                <a
                  class="glightbox"
                  data-posts="images-posts"
                  href="/img/posts/gasitems.png"
                  ><img
                    src="/img/posts/gasitems.png"
                    class="img-fluid"
                    alt=""
                /></a>
              </div>
              <div class="swiper-slide">
                <a
                  class="glightbox"
                  data-posts="images-posts"
                  href="/img/posts/slippers.png"
                  ><img
                    src="/img/posts/slippers.png"
                    class="img-fluid"
                    alt=""
                /></a>
              </div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
          <div class="text-center">
            <a type="submit" style="color:white;background-color: var(--color-primary);border-radius: 50px;padding:8px 20px;" href="https://www.instagram.com/swopnil_store/">See More</a>
          </div>
        </div>
      </section>
      <!-- End Posts Section -->

      <!-- ======= Contact Section ======= -->
      <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
          <div class="section-header">
            <h2>Contact</h2>
            <p>Need Help? <span>Contact Us</span></p>
          </div>

          <div class="mb-3">
            <iframe style="border: 0; width: 100%; height: 350px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3515.530641487839!2d83.97667437527325!3d28.221569375891736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39959456ec60b459%3A0xba6b352ce067731c!2sSwopnil%20Store!5e0!3m2!1sen!2snp!4v1716266715326!5m2!1sen!2snp" 
              frameborder="0"
              allowfullscreen
            ></iframe>
          </div>
          <!-- End Google Maps -->

          <div class="row gy-4">
            <div class="col-md-6">
              <div class="info-item d-flex align-items-center">
                <i class="icon bi bi-map flex-shrink-0"></i>
                <div>
                  <h3>Our Address</h3>
                  <p>Radha Krishna Marga, Pokhara, Street No: 13</p>
                </div>
              </div>
            </div>
            <!-- End Info Item -->

            <div class="col-md-6">
              <div class="info-item d-flex align-items-center">
                <i class="icon bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h3>Email Us</h3>
                  <p><a href="mailto:mail@swopnilstore.com.np">mail@swopnilstore.com.np</a></p>
                </div>
              </div>
            </div>
            <!-- End Info Item -->

            <div class="col-md-6">
              <div class="info-item d-flex align-items-center">
                <i class="icon bi bi-telephone flex-shrink-0"></i>
                <div>
                  <h3>Call Us</h3>
                  <p><a href="tel:+97761543093">+97761543093</a></p>
                </div>
              </div>
            </div>
            <!-- End Info Item -->

            <div class="col-md-6">
              <div class="info-item d-flex align-items-center">
                <i class="icon bi bi-share flex-shrink-0"></i>
                <div>
                  <h3>Message Us</h3>
                  <div class="social-links d-flex">
                    <a href="https://maps.app.goo.gl/V9ZARshNft9ACavh6" class="google"><i class="bi bi-google"></i></a>
                    <a href="https://wa.link/6il70s" class="whatsapp"><i class="bi bi-whatsapp"></i></a>
                    <a href="https://www.facebook.com/messages/t/2085160631740147" class="messenger"><i class="bi bi-messenger"></i></a>
                    <a href="https://www.instagram.com/swopnil_store/" class="instagram"><i class="bi bi-instagram"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Info Item -->
          </div>

          <form
          onsubmit="handleFormSubmit(this); return false;"
            role="form"
            class="php-email-form p-3 p-md-4"
          >
            <div class="row">
              <div class="col-xl-6 form-group">
                <input
                  type="text"
                  name="name"
                  class="form-control"
                  id="name"
                  placeholder="Your Name"
                  required
                />
              </div>
              <div class="col-xl-6 form-group">
                <input
                  type="email"
                  class="form-control"
                  name="email"
                  id="email"
                  placeholder="Your Email"
                  required
                />
              </div>
            </div>
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                name="subject"
                id="subject"
                placeholder="Subject"
                required
              />
            </div>
            <div class="form-group">
              <textarea
                class="form-control"
                name="message"
                rows="5"
                placeholder="Message"
                required
              ></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <!-- <div class="error-message"></div> -->
              <div class="sent-message">
                Your message has been sent. Thank you!
              </div>
            </div>
            <div class="text-center">
              <button type="submit">Send Message</button>
            </div>
          </form>
          <!--End Contact Form -->
        </div>
      </section>
      <!-- End Contact Section -->
    </main>
    <!-- End #main -->
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
                <strong>Phone:</strong> <a href="tel:+97761543093" style="color: #ffffff;">+97761543093</a><br />
                <strong>Email:</strong> <a href="mailto:mail@swopnilstore.com.np" style="color: #ffffff;">mail@swopnilstore.com.np</a><br />
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

<script>
  function handleFormSubmit(form) {
      const name = encodeURIComponent(form.name.value);
      const email = encodeURIComponent(form.email.value);
      const message = encodeURIComponent(form.message.value);
      const subject = encodeURIComponent(form.subject.value);
      const body = `Name: ${name}%0AEmail: ${email}%0AMessage: ${message}`;
      const mailtoLink = `mailto:mail@swopnilstore.com.np?subject=${subject}&body=${body}`;
      window.location.href = mailtoLink;
  }
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
