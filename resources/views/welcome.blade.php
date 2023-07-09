<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Jai Sang Ma Restaurant</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('frontend/assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('frontend/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('frontend/assets/css/main.css')}}" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>❤️Jai Sung Ma</h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#hero">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#menu">Menu</a></li>
          <!--<li><a href="#events">Events</a></li>-->
          <li><a href="#chefs">Chefs</a></li>
          <li><a href="#gallery">Gallery</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="{{route('login')}}">Login</a></li>


          <!--<li><a href="{{route('register')}}">Register</a></li>
        </ul>
      </nav><!-- .navbar -->


      <!--<a class="btn-book-a-table" href="{{route('login')}}">Login</a>-->
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
          <h2 data-aos="fade-up">🧡Jai Sung Ma<br>Hygienic and Yummy</h2>
          <p data-aos="fade-up" data-aos-delay="100">Jai Sang Ma Restaurant. More than 3 years of cooking experience. Ensure deliciousness and is hygienic.</p>
          <!-- <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="#book-a-table" class="btn-book-a-table">Book a Table</a>
            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>-->
        </div>
        <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
          <img src="{{asset('frontend/assets/img/hero-img.png')}}" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <p>Learn More <span>About Us</span></p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-7 position-relative about-img" style="background-image: url(frontend/assets/img/about.jpg) ;" data-aos="fade-up" data-aos-delay="150">
            <div class="call-us position-absolute">
              <h4>Book a Table</h4>
              <p>096 594 9424</p>
            </div>
          </div>
          <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
                <h2>🧡Jai Sung Ma Restaurant</h2>
              </p>
              <ul>
                <li><i class="bi bi-check2-all"></i> Yummy</li>
                <li><i class="bi bi-check2-all"></i> Comfortable seats</li>
                <li><i class="bi bi-check2-all"></i> Parking</li>
              </ul>
              <p>
                Jai Sung Ma is cooked to order dish restaurant. There are many menus. Comfortable seats, good music, parking.
              </p>

              <div class="position-relative mt-4">
                <img src="{{asset('frontend/assets/img/about-2.jpg')}}" class="img-fluid" alt="">
                <!--<a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>-->
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="why-box">
              <h3>Why should you choose us?</h3>
              <p>
                Because Jai Sung Ma restaurant more than 3 years of experience in cooking. We care about quality,sanitary and deliciousness.

              </p>
              <!--<div class="text-center">
                <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
              </div>-->
            </div>
          </div><!-- End Why Box -->

          <div class="col-lg-8 d-flex align-items-center">
            <div class="row gy-4">

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-credit-card-2-back"></i>
                  <h4>Credit card</h4>
                  <p>Accept credit card payments</p>
                </div>
              </div><!-- End Icon Box -->

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-cart-plus"></i>
                  <h4>Online Order</h4>
                  <p>Able to call to order food and add line to order food</p>
                </div>
              </div><!-- End Icon Box -->

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-bicycle"></i>
                  <h4>Service</h4>
                  <p>There is a food delivery service. and collect money on delivery</p>
                </div>
              </div><!-- End Icon Box -->

            </div>
          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Stats Counter Section ======= -->
    <section id="stats-counter" class="stats-counter">
      <div class="container" data-aos="zoom-out">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="3" data-purecounter-duration="1" class="purecounter"></span>
              <p>Chefs</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="25" data-purecounter-duration="1" class="purecounter"></span>
              <p>Menu</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="30" data-purecounter-duration="1" class="purecounter"></span>
              <p>Month Of Support</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="2" data-purecounter-duration="1" class="purecounter"></span>
              <p>Workers</p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>
    </section><!-- End Stats Counter Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <p><span>Menu</span></p>
        </div>

        <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

          <li class="nav-item">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-starters">
              <h4>Starters</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-breakfast">
              <h4>Drink</h4>
            </a><!-- End tab nav item -->

          <!--<li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-lunch">
              <h4>Lunch</h4>
            </a>
          </li><!-- End tab nav item -->

          <!--<li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-dinner">
              <h4>Dinner</h4>
            </a>
          </li><!-- End tab nav item -->

        </ul>

        <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

          <div class="tab-pane fade active show" id="menu-starters">

            <div class="tab-header text-center">
              <h3>Starters</h3>
            </div>

            <div class="row gy-5">

              @foreach ($product as $pro)
              <div class="col-lg-4 menu-item">
                <a href="{{asset('backend/img/img_pro/'.$pro->image)}}" class="glightbox"><img src="{{asset('backend/img/img_pro/'.$pro->image)}}" class="menu-img img-fluid" alt=""></a>
                <h4>{{$pro->name}}</h4>
                <p class="ingredients">
                    {{$pro->description}}
                  </p>
                <p class="price">
                    ฿{{$pro->price}}
                </p>
              </div><!-- Menu Item1 -->

              @endforeach


            </div>
          </div><!-- End Drink Menu Content -->

          <!--! <div class="tab-pane fade" id="menu-lunch">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Lunch</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/menu-item-1.png" class="glightbox"><img src="assets/img/menu/menu-item-1.png" class="menu-img img-fluid" alt=""></a>
                <h4>Magnam Tiste</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $5.95
                </p>
              </div><!-- Menu Item -->

              <!--!<div class="col-lg-4 menu-item">
                <a href="assets/img/menu/menu-item-2.png" class="glightbox"><img src="assets/img/menu/menu-item-2.png" class="menu-img img-fluid" alt=""></a>
                <h4>Aut Luia</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $14.95
                </p>
              </div><!-- Menu Item -->

              <!--!<div class="col-lg-4 menu-item">
                <a href="assets/img/menu/menu-item-3.png" class="glightbox"><img src="assets/img/menu/menu-item-3.png" class="menu-img img-fluid" alt=""></a>
                <h4>Est Eligendi</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $8.95
                </p>
              </div><!-- Menu Item -->

              <!--!<div class="col-lg-4 menu-item">
                <a href="assets/img/menu/menu-item-4.png" class="glightbox"><img src="assets/img/menu/menu-item-4.png" class="menu-img img-fluid" alt=""></a>
                <h4>Eos Luibusdam</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $12.95
                </p>
              </div><!-- Menu Item -->

              <!--!<div class="col-lg-4 menu-item">
                <a href="assets/img/menu/menu-item-5.png" class="glightbox"><img src="assets/img/menu/menu-item-5.png" class="menu-img img-fluid" alt=""></a>
                <h4>Eos Luibusdam</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $12.95
                </p>
              </div><!-- Menu Item -->

              <!--!<div class="col-lg-4 menu-item">
                <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img src="assets/img/menu/menu-item-6.png" class="menu-img img-fluid" alt=""></a>
                <h4>Laboriosam Direva</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $9.95
                </p>
              </div><!-- Menu Item -->

            <!--!</div>
          </div><!-- End Lunch Menu Content -->

          <!--!<div class="tab-pane fade" id="menu-dinner">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Dinner</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/menu-item-1.png" class="glightbox"><img src="assets/img/menu/menu-item-1.png" class="menu-img img-fluid" alt=""></a>
                <h4>Magnam Tiste</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $5.95
                </p>
              </div><!-- Menu Item -->

              <!--!<div class="col-lg-4 menu-item">
                <a href="assets/img/menu/menu-item-2.png" class="glightbox"><img src="assets/img/menu/menu-item-2.png" class="menu-img img-fluid" alt=""></a>
                <h4>Aut Luia</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $14.95
                </p>
              </div><!-- Menu Item -->

              <!--!<div class="col-lg-4 menu-item">
                <a href="assets/img/menu/menu-item-3.png" class="glightbox"><img src="assets/img/menu/menu-item-3.png" class="menu-img img-fluid" alt=""></a>
                <h4>Est Eligendi</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $8.95
                </p>
              </div><!-- Menu Item -->

              <!--!<div class="col-lg-4 menu-item">
                <a href="assets/img/menu/menu-item-4.png" class="glightbox"><img src="assets/img/menu/menu-item-4.png" class="menu-img img-fluid" alt=""></a>
                <h4>Eos Luibusdam</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $12.95
                </p>
              </div><!-- Menu Item -->

              <!--!<div class="col-lg-4 menu-item">
                <a href="assets/img/menu/menu-item-5.png" class="glightbox"><img src="assets/img/menu/menu-item-5.png" class="menu-img img-fluid" alt=""></a>
                <h4>Eos Luibusdam</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $12.95
                </p>
              </div><!-- Menu Item -->

              <!--!<div class="col-lg-4 menu-item">
                <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img src="assets/img/menu/menu-item-6.png" class="menu-img img-fluid" alt=""></a>
                <h4>Laboriosam Direva</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $9.95
                </p>
              </div><!-- Menu Item -->

            <!--!</div>
          </div><!-- End Dinner Menu Content -->

        </div>

      </div>
    </section><!-- End Menu Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
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
                        เลือกเลยครับไม่ต้องกลัวไม่อร่อย อร่อยหมดเลยครับ แนะนำไข่เจียวห่อหมก กับ ข้าวผัดมันกุ้งครับ อยากให้ลอง อาหารอร่อย
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Kraiwit Noonoi</h3>
                      <h4>Guest</h4><!-- Ceo &amp; Founder -->
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="{{asset('frontend/assets/img/testimonials/testimonials-1.jpg')}}" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial1 item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        สุดจัดในย่านนี้อาหารอร่อยเป็นกันเอง อาหารอร่อย จานใหญ่
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Pu Kaoubon</h3>
                      <h4>Guest</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="{{asset('frontend/assets/img/testimonials/testimonials-2.jpg')}}" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial2 item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        อร่อยมาก บริการดี อาหารราคาถูกไม่แพง​ บรรยาการดี ร้านสะอาด​น่านั่ง
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Sapa Booncherd</h3>
                      <h4>Guest</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="{{asset('frontend/assets/img/testimonials/testimonials-3.jpg')}}" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial3 item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        ร้านโล่ง อากาศถ่ายเท รสชาติอาหารดี
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Metha Meekwamsukdee</h3>
                      <h4>Professional</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="{{asset('frontend/assets/img/testimonials/testimonials-4.jpg')}}" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial4 item -->

            <div class="swiper-slide">
                <div class="testimonial-item">
                  <div class="row gy-4 justify-content-center">
                    <div class="col-lg-6">
                      <div class="testimonial-content">
                        <p>
                          <i class="bi bi-quote quote-icon-left"></i>
                          อร่อยเหาะ
                          <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                        <h3>Prangtip Hunchana</h3>
                        <h4>Professional</h4>
                        <div class="stars">
                          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-2 text-center">
                      <img src="{{asset('frontend/assets/img/testimonials/testimonials-5.jpg')}}" class="img-fluid testimonial-img" alt="">
                    </div>
                  </div>
                </div>
              </div><!-- End testimonial5 item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <div class="row gy-4 justify-content-center">
                    <div class="col-lg-6">
                      <div class="testimonial-content">
                        <p>
                          <i class="bi bi-quote quote-icon-left"></i>
                          ร้านชิวมากๆ สะแด่วแห้ว
                          <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                        <h3>Suphanut laksanawilas</h3>
                        <h4>Professional</h4>
                        <div class="stars">
                          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-2 text-center">
                      <img src="{{asset('frontend/assets/img/testimonials/testimonials-6.jpg')}}" class="img-fluid testimonial-img" alt="">
                    </div>
                  </div>
                </div>
              </div><!-- End testimonial6 item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Events Section ======= -->
    <!--<section id="events" class="events">
      <div class="container-fluid" data-aos="fade-up">

        <div class="section-header">
          <h2>Events</h2>
          <p>Share <span>Your Moments</span> In Our Restaurant</p>
        </div>

        <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(assets/img/events-1.jpg)">
              <h3>Custom Parties</h3>
              <div class="price align-self-start">$99</div>
              <p class="description">
                Quo corporis voluptas ea ad. Consectetur inventore sapiente ipsum voluptas eos omnis facere. Enim facilis veritatis id est rem repudiandae nulla expedita quas.
              </p>
            </div>

            <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(assets/img/events-2.jpg)">
              <h3>Private Parties</h3>
              <div class="price align-self-start">$289</div>
              <p class="description">
                In delectus sint qui et enim. Et ab repudiandae inventore quaerat doloribus. Facere nemo vero est ut dolores ea assumenda et. Delectus saepe accusamus aspernatur.
              </p>
            </div>

            <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(assets/img/events-3.jpg)">
              <h3>Birthday Parties</h3>
              <div class="price align-self-start">$499</div>
              <p class="description">
                Laborum aperiam atque omnis minus omnis est qui assumenda quos. Quis id sit quibusdam. Esse quisquam ducimus officia ipsum ut quibusdam maxime. Non enim perspiciatis.
              </p>
            </div>

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Events Section -->

    <!-- ======= Chefs Section ======= -->
    <section id="chefs" class="chefs section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <p>Our <span>Proffesional</span> Chefs</p>
        </div>

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="chef-member">
              <div class="member-img">
                <img src="{{asset('frontend/assets/img/chefs/chefs-1.jpg')}}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <!--<a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>-->
                </div>
              </div>
              <div class="member-info">
                <h2>Mareerad Rukchan</h2>
                <span>Master Chef</span>
                {{-- <p>Velit aut quia fugit et et. Dolorum ea voluptate.</p> --}}
              </div>
            </div>
          </div><!-- End Chefs Member -->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="chef-member">
              <div class="member-img">
                <img src="{{asset('frontend/assets/img/chefs/chefs-2.jpg')}}" class="img-fluid" alt="">
                <div class="social">
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <!--<a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>-->
                </div>
              </div>
              <div class="member-info">
                <h2>Arunrat Rukchan</h2>
                <span>Chef</span>
                {{-- <p>Quo esse repellendus quia id. Est eum et accusantiumiente.</p> --}}
              </div>
            </div>
          </div><!-- End Chefs Member -->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="chef-member">
              <div class="member-img">
                <img src="{{asset('frontend/assets/img/chefs/chefs-3.jpg')}}" class="img-fluid" alt="">
                <div class="social">
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <!--<a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>-->
                </div>
              </div>
              <div class="member-info">
                <h2>Anuruk Rukchan</h2>
                <span>Cook</span>
                {{-- <p>Vero omnis enim consequatur. Voluptas consectetur.</p> --}}
              </div>
            </div>
          </div><!-- End Chefs Member -->

        </div>

      </div>
    </section><!-- End Chefs Section -->

    <!-- ======= Book A Table Section ======= -->
    <!--<section id="book-a-table" class="book-a-table">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <p>Book <span>Your Stay</span> With Us</p>
        </div>

        <div class="row g-0">

          <div class="col-lg-4 reservation-img" style="background-image: url(frontend/assets/img/reservation.jpg);" data-aos="zoom-out" data-aos-delay="200"></div>

          <div class="col-lg-8 d-flex align-items-center reservation-form-bg">
            <form action="forms/book-a-table.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
              <div class="row gy-4">
                <div class="col-lg-4 col-md-6">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                  <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                  <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                  <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="text" name="date" class="form-control" id="date" placeholder="Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                  <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="text" class="form-control" name="time" id="time" placeholder="Time" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                  <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="number" class="form-control" name="people" id="people" placeholder="# of people" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Book a Table</button></div>
            </form>
          </div><!-- End Reservation Form

        </div>
      </div>
    </section><!-- End Book A Table Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <p>Check <span>Our Gallery</span></p>
        </div>

        <div class="gallery-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="{{asset('frontend/assets/img/gallery/gallery-1.jpg')}}"><img src="{{asset('frontend/assets/img/gallery/gallery-1.jpg')}}" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="{{asset('frontend/assets/img/gallery/gallery-2.jpg')}}"><img src="{{asset('frontend/assets/img/gallery/gallery-2.jpg')}}" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="{{asset('frontend/assets/img/gallery/gallery-3.jpg')}}"><img src="{{asset('frontend/assets/img/gallery/gallery-3.jpg')}}" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="{{asset('frontend/assets/img/gallery/gallery-4.jpg')}}"><img src="{{asset('frontend/assets/img/gallery/gallery-4.jpg')}}" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="{{asset('frontend/assets/img/gallery/gallery-5.jpg')}}"><img src="{{asset('frontend/assets/img/gallery/gallery-5.jpg')}}" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="{{asset('frontend/assets/img/gallery/gallery-6.jpg')}}"><img src="{{asset('frontend/assets/img/gallery/gallery-6.jpg')}}" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="{{asset('frontend/assets/img/gallery/gallery-7.jpg')}}"><img src="{{asset('frontend/assets/img/gallery/gallery-7.jpg')}}" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="{{asset('frontend/assets/img/gallery/gallery-8.jpg')}}"><img src="{{asset('frontend/assets/img/gallery/gallery-8.jpg')}}" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="{{asset('frontend/assets/img/gallery/gallery-9.jpg')}}"><img src="{{asset('frontend/assets/img/gallery/gallery-9.jpg')}}" class="img-fluid" alt=""></a></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <p>Need Help? <span>Contact Us</span></p>
        </div>

        <div class="mb-3">
          <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3870.64657326533!2d100.65654855092863!3d14.038951894307228!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311d7fea5531e373%3A0xb7b2c0c99a57c11d!2z4Lij4LmJ4Liy4LiZ4LmD4LiI4Liq4Lix4LmI4LiH4Lih4Liy!5e0!3m2!1sth!2sth!4v1674741494973!5m2!1sth!2sth" frameborder="0" allowfullscreen></iframe>
        </div><!-- End Google Maps -->

        <div class="row gy-4">

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-map flex-shrink-0"></i>
              <div>
                <h3>Our Address</h3>
                <p>Pruksa 13, Khlong Sam, Pathum Thani</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center">
              <i class="icon bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p>18jaisangma@gmail.com</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p>096 594 9424</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-clock flex-shrink-0"></i>
              <div>
                <h3>Opening Hours</h3>
                <div><strong>Mon-Sat:</strong> 8AM - 20PM;
                  <strong>Sunday:</strong> 8AM - 22PM
                </div>
              </div>
            </div>
          </div><!-- End Info Item -->

        </div>

        <form action="{{asset('frontend/forms/contact.php')}}" method="post" role="form" class="php-email-form p-3 p-md-4">
          <div class="row">
            <div class="col-xl-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="col-xl-6 form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
            </div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>
        <!--End Contact Form -->

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div>
            <h4>Address</h4>
            <p>
              Pruksa 13, Khlong Sam, Pathum Thani 🇹🇭<br>
            </p>
          </div>

        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Reservations</h4>
            <p>
              <strong>Phone:</strong> 096 594 9424<br>
              <strong>Email:</strong> 18jaisangma@gmail.com<br>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Opening Hours</h4>
            <p>
              Monday - Saturday: 8AM - 20PM<br>
              Sunday: 8AM - 22PM
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Follow Us</h4>
          <div class="social-links d-flex">
            <a href="https://www.facebook.com/profile.php?id=100063650880883" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
            <!--<a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>-->
          </div>
        </div>

      </div>
    </div>

    <div class="container">
      <div class="copyright">
          <div class="row">
              <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                  <!--&copy; <a class="border-bottom" href="#">This WebSite</a>, All Right Reserved. <br>!-->
                  <p class=" text-muted">©This WebSite, All Right Reserved.</p>
                  <p class=" text-muted">© Bootstrap V.5.0.2</p>
                  <p class=" text-muted">Information Technology @PSC</p>
                  <div class="container">
                      <p class=" text-muted">Designed By <a class="border-bottom"
                              href="https://www.facebook.com/EmzMetha" target="_blank">Emz</a></p>
                  </div>
              </div>
              <div class="col-md-6 text-center text-md-end">
                <div class="footer-menu">
                    <h4><a href="{{route('register')}} ">Register</a></h4>
                </div>
                <div class="footer-menu">
                    <h4><a href="{{route('login')}}">Login</a></h4>
                </div>
              </div>

          </div>
      </div>
  </div>

  </footer>
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('frontend/assets/js/main.js')}}"></script>

</body>

</html>
