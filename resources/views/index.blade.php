@extends('partials.master')

@section('content')
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

@endsection