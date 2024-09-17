<?php 
session_start(); // Démarrer une session afin de pouvoir en sauvegarder les variables
?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="theme-color" content="#166090" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="description" content="We are dedicated to provide high-quality, human-centered and holistic health services with technologies and innovative treatments so that our community receives the best possible outcomes for their well being.">
  <meta name="keywords" content="health care, health services, wellbeing">
  <meta name="image" content="assets/img/logo-blue.png" />
  <title>EHS | Home</title>

  <!-- Favicons -->
  <link href="assets/img/logo-white.png" rel="icon">
  <link href="assets/img/logo-blue.png" rel="icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header sticky-top">
    <!-- End Top Bar -->
    <div class="topbar d-flex align-items-center">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="d-none d-md-flex align-items-center">
          <i class="bi bi-clock me-1"></i> Monday - Saturday, 8AM to 10PM
        </div>
        <div class="d-flex align-items-center">
          <i class="bi bi-phone me-1"></i> <a class="top" href="tel: +237 676 438 338" title="Call Us Now !!" >+237 676 438 338</a>
        </div>
      </div>
    </div>
    <!-- /End Top Bar -->

    <div class="branding d-flex align-items-center">

      <div class="container position-relative d-flex align-items-center justify-content-end">
        <a href="index.php" class="logo d-flex align-items-center me-auto">
          <img src="assets/img/menu_logo.png" alt="">
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="index.php#home" class="active">Home</a></li>
            <li class="dropdown"><a href="index.php#about"><span>About Us</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="about.php#mission">Mission</a></li>
                <li><a href="about.php#values">Values</a></li>
                <li><a href="about.php#vision">Vision</a></li>
              </ul>
            </li>
            <li class="dropdown"><a href="index.php#services"><span>Services</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="index.php#services">General Medecine</a></li>
                <li><a href="index.php#services">Gynecology</a></li>
                <li><a href="index.php#services">Dentistry</a></li>
                <li><a href="index.php#services">Physical Therapy</a></li>
                <li class="dropdown"><a href="#"><span>Other Services</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                  <ul>
                    <li><a href="index.php#workspace">Workspace Rentals</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="index.php#team">Our Team</a></li>
            <li><a href="index.php#contact">Contact Us</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <a class="cta-btn" style="background-color: #2BB140;" href="http://" target="_blank" rel="noopener noreferrer">Book an Appointment</a>

      </div>

    </div>

  </header>

  <main class="main">

    <!-- Home Section -->
    <section id="home" class="home section">

      <div id="home-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <div class="carousel-item active">
          <img src="assets/img/home-carousel/home_carousel.jpg" alt="">
          <div class="container">
            <h2>Welcome to EFFIOM Health Services</h2>
            <p>Explore a variety of medical services all in one convenient location, tailored to meet our patients' health needs.
            </p>
            <a href="index.php#about" class="btn-get-started">See More</a>
          </div>
        </div><!-- End Carousel Item -->

        <div class="carousel-item">
          <img src="assets/img/home-carousel/vision.jpg" alt="">
          <div class="container">
            <h2>Your one-stop destination for quality healthcare</h2>
            <p>We are dedicated to provide high-quality, human-centered and holistic health services with technologies and innovative treatments so that our community receives the best possible outcomes for their well being.</p>
            <a href="#services" class="btn-get-started">Read More</a>
          </div>
        </div><!-- End Carousel Item -->

        <div class="carousel-item">
          <img src="assets/img/home-carousel/workspace.png" alt="">
          <div class="container">
            <h2>Also we provide workspaces for rent</h2>
            <p>Discover an exceptional environment in our modern workspaces. Perfect for start-ups, freelancers, or small businesses in growth, the space is designed to inspire creativity and enhance productivity.
            </p>
            <a href="index.php#workspace" class="btn-get-started">Read More</a>
          </div>
        </div><!-- End Carousel Item -->

        <a class="carousel-control-prev" href="index.php#home-carousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="index.php#home-carousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

        <ol class="carousel-indicators"></ol>

      </div>

    </section><!-- /Home Section -->


    <!-- About Section -->
    <section id="about" class="features section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>About Us</h2>
      </div><!-- End Section Title -->


      <div class="container">

        <div class="row justify-content-around gy-4">
          <div class="features-image col-lg-6" data-aos="fade-up" data-aos-delay="100"><img src="assets/img/mission.jpg" alt=""></div>

          <div class="col-lg-5 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <h3>Patient-Centered Excellence</h3>
            <p>For our patient to have greater control of their health and well-being, supported and helped by us to live longer, healthier lives and make informed health choices.</p>

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
              <i class="fa-solid fa-heartbeat flex-shrink-0"></i>
              <div>
                <p>We prioritise patients in every decision we take: Everything we do is directly connected to our purpose of improving the health and well-being of our patients.</p>
              </div>
            </div><!-- End Icon Box -->

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
              <i class="fa-solid fa-heartbeat flex-shrink-0"></i>
              <div>
                <p>We Listen and Learn: we respect and support each other, listening to ideas from patients, colleagues and partners and acting on them to help achieve the highest standard we can.</p>
              </div>
            </div><!-- End Icon Box -->

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="500">
              <i class="fa-solid fa-heartbeat flex-shrink-0"></i>
              <div>
                <p>We are evidence based practice: we listen to the people and community that we serve, we look at insight and evidence, we measure outcomes, so that our decisions are objective and we understand their impact.</p>
              </div>
            </div><!-- End Icon Box -->

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="600">
              <i class="fa-solid fa-heartbeat flex-shrink-0"></i>
              <div>
                <p>We are inclusive: we aim to work in partnership with patients, clinicians and the wider public and our partners because we get the best outcomes for our patients when we work together with a common purpose.</p>
              </div>
            </div><!-- End Icon Box -->

          </div>
        </div>

      </div>

    </section><!-- /Features Section -->

    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section accent-background">

      <div class="container">
        <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-xl-10">
            <div class="text-center">
              <h3>Have any problem or topic you want to discuss on ?</h3>
              <p>Our team of dedicated professionals is ready to assist you.
                We are available to address all your health concerns with the care and attention you deserve.
                Don't wait schedule your appointment and let us help you on your journey to better health.
                We are here for you, whenever you need us.
              </p>
              <a class="cta-btn" style="background-color: #2BB140;" href="http://" target="_blank" rel="noopener noreferrer">Book an Appointment</a>
            </div>
          </div>
        </div>
      </div>

    </section><!-- /Call To Action Section -->


    <!-- Services Section -->
    <section id="services" class="tabs section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Services we provide</h2>
        <p>EFFIOM is dedicated to provide human-centered health services.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tabs-tab-1">General Medecine</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tabs-tab-2">Gynecology</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tabs-tab-3">Dentistry</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tabs-tab-4">Physical Therapy</a>
              </li>
              <!--li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tabs-tab-5">Ophthalmologists</a>
              </li-->
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="tabs-tab-1">
                <div class="row">
                  <div class="col-lg-8 details order-1 order-lg-1">
                    <p class="fst-italic">Primary care is the cornerstone of comprehensive healthcare, so we offer a wide range of medical services to address your everyday health needs.</p>
                    <p>Our experienced general practitioners are here to help with everything from routine check-ups and preventive care to the diagnosis and management of chronic conditions. We focus on understanding your overall health and well-being, providing personalized care tailored to your individual needs. Whether it is managing a common cold, monitoring blood pressure, or giving lifestyle advice, we aim to keep you healthy and informed at every stage of life.</p>
                  </div>
                  <div class="col-lg-4 text-center order-2 order-lg-2">
                    <img src="assets/img/departments-1.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tabs-tab-2">
                <div class="row">
                  <div class="col-lg-8 details order-1 order-lg-1">
                    <p class="fst-italic">Our Gynecology service is dedicated to supporting women’s health through every stage of life, from adolescence to menopause and beyond.</p>
                    <p>We offer a full range of gynecological care, including routine exams, reproductive health services, and specialized treatments. Our specialists are committed to providing a safe and comfortable environment where you can discuss all your health concerns openly. Whether it’s family planning, pregnancy care, or managing hormonal changes, we are here to guide and support you with expert advice and personalized care.</p>
                  </div>
                  <div class="col-lg-4 text-center order-2 order-lg-2">
                    <img src="assets/img/women-health.jpeg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tabs-tab-3">
                <div class="row">
                  <div class="col-lg-8 details order-1 order-lg-1">
                    <p class="fst-italic">Our Dentistry service is focused on providing comprehensive oral care to help you maintain a healthy and confident smile.</p>
                    <p>From routine cleanings and preventive care to advanced restorative procedures, our skilled dental team is equipped to handle all your dental needs. We take a patient-centered approach, ensuring that your comfort and satisfaction are at the forefront of everything we do. Whether you need a simple filling, teeth whitening, or a more complex procedure like implants or orthodontics, we are committed to delivering high-quality care in a friendly and welcoming environment.</p>
                  </div>
                  <div class="col-lg-4 text-center order-2 order-lg-2">
                    <img src="assets/img/dentistry.jpeg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tabs-tab-4">
                <div class="row">
                  <div class="col-lg-8 details order-1 order-lg-1">
                    <p class="fst-italic">Our Physiotherapy service is dedicated to helping you recover from injury, manage chronic pain, and improve your overall physical well-being.</p>
                    <p>Our licensed physiotherapists use a combination of manual therapy, exercise, and education to tailor a rehabilitation program specific to your needs. Whether you are recovering from surgery, dealing with a sports injury, or managing a long-term condition like arthritis, our goal is to help you regain strength, mobility, and confidence in your daily activities. We work closely with you to ensure that your treatment plan is both effective and sustainable.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/physical-therapy.jpeg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <!--div class="tab-pane" id="tabs-tab-5">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Ophthalmologists</h3>
                    <p class="fst-italic">Omnis blanditiis saepe eos autem qui sunt debitis porro quia.</p>
                    <p>Exercitationem nostrum omnis. Ut reiciendis repudiandae minus. Omnis recusandae ut non quam ut quod eius qui. Ipsum quia odit vero atque qui quibusdam amet. Occaecati sed est sint aut vitae molestiae voluptate vel</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/departments-5.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div-->
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Services Section -->

    <!-- Other Services Section -->
    <section id="workspace" class="about section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Modern Workspace for Rent</h2>
        <p class="">Discover an exceptional environment in our modern workspaces. Perfect for start-ups, freelancers, or small buisinesses in growth, the space is designed to inspire creativity and enhance productivity.</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">
          <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="100">
            <img src="assets/img/workspace.png" class="img-fluid" alt="">
            <a href="" class=""></a>
          </div>
          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="200">
            <h4>Work in a space that supports your goals.</h4>
            <ul>
              <li><i class="bi bi-check2-all"></i> <span><p class="fst-italic"><strong>Flexible Leasing</strong> : Short-term and long-term option available.</p></span></li>
              <li><i class="bi bi-check2-all"></i> <span><p class="fst-italic"><strong>Public Location</strong> : Situated in a vibrant business district with easy access to public transport.</p></span></li>
              <li><i class="bi bi-check2-all"></i> <span><p class="fst-italic"><strong>Fully Equipped</strong> : High-speed internet, modern office furniture, and meeting rooms.</p></span></li>
              <li><i class="bi bi-check2-all"></i> <span><p class="fst-italic"><strong>Amenities</strong> : On-site café, lounge areas, and 24/7 security.</p></span></li>
              <li><i class="bi bi-check2-all"></i> <span><p class="fst-italic"><strong>Collaborative Environment</strong> : Network with like-minded professionals and grow your business.</p></span></li>
            </ul>
            <p>Our team is ready to answer any questions and help you find the perfect solution for your needs...</p>
          </div>
        </div>


        <!-- Gallery Section -->
        <section id="gallery" class="gallery section">

          <!-- Section Title -->
          <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="swiper init-swiper">
              <script type="application/json" class="swiper-config">
                {
                  "loop": true,
                  "speed": 600,
                  "autoplay": {
                    "delay": 5000
                  },
                  "slidesPerView": "auto",
                  "centeredSlides": true,
                  "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                  },
                  "breakpoints": {
                    "320": {
                      "slidesPerView": 1,
                      "spaceBetween": 0
                    },
                    "768": {
                      "slidesPerView": 3,
                      "spaceBetween": 20
                    },
                    "1200": {
                      "slidesPerView": 5,
                      "spaceBetween": 20
                    }
                  }
                }
              </script>
              <div class="swiper-wrapper align-items-center">
                <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/workspace/workspace.png"><img src="assets/img/workspace/workspace.png" class="img-fluid" alt=""></a></div>
                <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/workspace/workspace1.jpg"><img src="assets/img/workspace/workspace1.jpg" class="img-fluid" alt=""></a></div>
                <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/workspace/workspace2.jpg"><img src="assets/img/workspace/workspace2.jpg" class="img-fluid" alt=""></a></div>
                <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/workspace/workspace3.jpg"><img src="assets/img/workspace/workspace3.jpg" class="img-fluid" alt=""></a></div>
                <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/workspace/workspace4.jpg"><img src="assets/img/workspace/workspace4.jpg" class="img-fluid" alt=""></a></div>
                <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/workspace/workspace5.jpg"><img src="assets/img/workspace/workspace5.jpg" class="img-fluid" alt=""></a></div>
              </div>
              <div class="swiper-pagination"></div>
            </div>

          </div>

        </section><!-- /Gallery Section -->
    

      </div>

    </section><!-- /Other Services Section -->

    <!-- Team Section -->
    <section id="team" class="team section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Our Specialists</h2>
        <p>Our team is comprised of skilled and compassionate individuals, each bringing their expertise and commitment to ensure the highest standards of patient care.</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/doctors/doctors-8.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Darius Ndeffo</h4>
                <span>Chief Medical Officer</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/doctors/doctors-5.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Hillary Nyemb</h4>
                <span>Gynecologist</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/doctors/doctors-7.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Desmond Ekobena</h4>
                <span>Physical Therapist</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/doctors/doctors-9.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Amanda Ndjiefi</h4>
                <span>Dentist</span>
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>

    </section><!-- /Doctors Section -->

    
    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Get in Touch</h2>
        <p>Contact for Investors / Bookings</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-3 ">
            <div class="row gy-4">

              <div class="col-md-12">
                <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="300">
                  <a href="https://web.whatsapp.com/" target="_blank" title="WhatsApp" rel="noopener noreferrer"><img class="" src="assets/img/whatsapp-icon.png" style="width: 74px;"></img></a>
                  <p><br></p>Join us on whatsapp</p>
                 </div>
              </div><!-- End Info Item -->

              <div class="col-md-12">
                <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="400">
                  <a href="mailto:effiomcharles@hotmail.com"><i class="bi bi-envelope"></i></a>
                  <h3>Email Us</h3>
                  <p>effiomcharles@hotmail.com</p>
                </div>
              </div><!-- End Info Item -->

            </div>
          </div>

          <div class="col-lg-9">
            <form action="contact_form.php" method="post" class="email-form" data-aos="fade-up" data-aos-delay="500">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" class="form-control" name="name" placeholder="Your Name"  required="">
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="4" placeholder="Message" required=""></textarea>
                </div>
                

                <div class="col-md-12 text-center">
                <?php  if(isset($_SESSION['alert']) && isset($_SESSION['style'])){ ?>
                <div class="<?= $_SESSION['style']; ?>"><?= $_SESSION['alert'];  ?></div>
                <?php } session_unset();?>
                  <button type="submit" name="submit">Send Message</button>
                </div>

              </div>
            </form>

          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer light-background">

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">2024 EHS</strong></span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed with <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>