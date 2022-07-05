<?php include('php/header.php'); ?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>JavaScript For Absolute Beginners - Get Started</title>

  <meta content="Coding is not easy, but I've made it fun! Learn to code JavaScript as an absolute beginner" name="description" />
  <meta content="javascript, learn coding, learn javascript, javascript course, javascript for beginners" name="keywords" />

  <!-- Favicons -->
  <link href="assets/img/favicon.jpg" rel="icon">
  <link href="assets/img/apple-touch-icon.jpg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />
  <link href="assets/vendor/cookieconsent/cookieconsent.css" rel="stylesheet" />

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet" />

  <!-- =======================================================
  * Template Name: FlexStart - v1.9.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <div class="align-items-center">&nbsp;</div>
      
      <?php if (!$isLoggedIn) : ?>
        <a 
          class="btn-standard"
          onclick="openLoginModal()"
        >Login</a>
        <a href="#pricing" >Register</a>
      <?php else : ?>
        <a
          class="btn-standard"
          href="/membership"
        >
          <i class="bi bi-file-person"></i>
          Members area
        </a>
      <?php endif ?>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li><a class="nav-link scrollto" href="#pricing">Pricing</a></li>
          <li><a class="nav-link scrollto" href="#testimonials">Testimonials</a></li>
          <li><a href="blog.html">Blog</a></li>
          <li><a class="nav-link scrollto" href="#support">Support</a></li>
          <li><a class="getstarted scrollto" href="#pricing">Enroll</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Coding is not easy, but I've made it fun!</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">Learn to code JavaScript as an absolute beginner</h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="#pricing"
                class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Get Started</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="assets/img/hero-img.jpg" class="img-fluid" alt="">
        </div>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="row gx-0">
          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <h3>Who Am I</h3>
              <h2>Professionally, I've been doing JavaScript for more than 15 years.</h2>
              <p>
                My vast experience gave me deep knowledge to get my students their dream job / project sooner.
              </p>
              <div class="text-center text-lg-start">
                <a href="#pricing"
                  class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                  <span>Get Started</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
            <img src="assets/img/tudor-todorescu.jpg" class="img-fluid profile" alt="">
          </div>
        </div>
      </div>
    </section><!-- End About Section -->

    <!-- ======= Values Section ======= -->
    <section id="values" class="values">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <h2>Values</h2>
          <p class="font-family-2">Student success is my success</p>
        </header>
        <div class="row">
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="box">
              <img src="assets/img/values-1.png" class="img-fluid" alt="">
              <h3>Student</h3>
              <p>100% attention on student success by listening to feedback through 1on1 calls</p>
            </div>
          </div>
          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
            <div class="box">
              <img src="assets/img/values-2.png" class="img-fluid" alt="">
              <h3>Progressive</h3>
              <p>Each lesson builds on the previous. Guaranteed you'll master code!</p>
            </div>
          </div>
          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
            <div class="box">
              <img src="assets/img/values-3.png" class="img-fluid" alt="">
              <h3>Projects</h3>
              <p>I'll teach you how to build your own web projects</p>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Values Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">
        <div class="row gy-4">
          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="7179" data-purecounter-duration="1"
                  class="purecounter"></span>
                <p>Students</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="71020" data-purecounter-duration="1"
                  class="purecounter"></span>
                <p>Youtube views</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-headset" style="color: #15be56;"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1"
                  class="purecounter"></span>
                <p>Hours Of Support</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-people" style="color: #bb0852;"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1"
                  class="purecounter"></span>
                <p>Years of experience</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <h2>Why Me</h2>
          <p class="font-family-2">My course is easy to follow and covers all the confusing parts.</p>
        </header>
        <div class="row">
          <div class="col-lg-6">
            <img src="assets/img/features.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
            <div class="row align-self-center gy-4">
              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Concise, easy to follow</h3>
                </div>
              </div>
              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="300">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>JavaScript essentials</h3>
                </div>
              </div>
              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="400">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Blazingly fast learning</h3>
                </div>
              </div>
              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="500">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Proven track-record</h3>
                </div>
              </div>
              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="600">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Guaranteed JavaScript mastery</h3>
                </div>
              </div>
              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="700">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>24/7 support</h3>
                </div>
              </div>
            </div>
          </div>
        </div> <!-- / row -->

        <!-- Feature Tabs -->
        <div class="row feture-tabs" data-aos="fade-up">
          <div class="col-lg-6">
            <h3 class="font-family-2">JavaScript For Absolute Beginners - COMPLETE COURSE FOR 2022</h3>
            <!-- Tabs -->
            <ul class="nav nav-pills mb-5 mt-5">
              <li>
                <a class="nav-link active" data-bs-toggle="pill" href="#tab1">What you'll learn ?</a>
              </li>
              <li>
                <a class="nav-link" data-bs-toggle="pill" href="#tab2">Minimum requirements</a>
              </li>
              <li>
                <a class="nav-link" data-bs-toggle="pill" href="#tab3">Who is this for</a>
              </li>
            </ul><!-- End Tabs -->
            <!-- Tab Content -->
            <div class="tab-content">
              <div class="tab-pane fade show active" id="tab1">
                <p>By the end of the course, you'll graduate from "no-clue about JavaScript" to an intermediate level.
                </p>
                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-check2"></i>
                  <h4>Master the most basic of basic building blocks of JavaScript</h4>
                </div>
                <p>You'll be half way of landing that junior developer dream job you've always wanted</p>
                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-check2"></i>
                  <h4>You will be able to properly read JavaScript code</h4>
                </div>
              </div><!-- End Tab 1 Content -->
              <div class="tab-pane fade show" id="tab2">
                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-check2"></i>
                  <h4>This course has zero requirements, except for the ability to open your computer.</h4>
                </div>
                <p>It's different in a way that I'll cover the fundamentals in depth using real-life examples</p>
                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-check2"></i>
                  <h4>There is one requirement from you. To bring your passion and enthusiasm for learning.</h4>
                </div>
              </div><!-- End Tab 2 Content -->
              <div class="tab-pane fade show" id="tab3">
                <p>College students who find confusing computer science classes and want to master a real-life skill.
                </p>
                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-check2"></i>
                  <h4>Absolute beginners who haven't wrote a single line of JavaScript code in their life</h4>
                </div>
                <p>People who are dedicating to changing their career path and pursuing a career in web development.</p>
              </div><!-- End Tab 3 Content -->
            </div>
          </div>
          <div class="col-lg-6">
            <img src="assets/img/features-2.png" class="img-fluid mt-5" alt="" />
          </div>
        </div><!-- End Feature Tabs -->
      </div>
    </section>

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <h2>START NOW </h2>
          <p class="font-family-2">TOP 6 REASONS TO GET STARTED TODAY</p>
        </header>
        <div class="row gy-4">
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-box blue">
              <h3>POPULARITY</h3>
              <p>JavaScript has been growing faster and faster than any other programming language. Now it's the best time to become highly paid JavaScript developer.</p>
              <a href="#pricing" class="read-more"><span>Get started</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-box orange">
              <h3>FUN FACT</h3>
              <p>You can use JavaScript to build web and mobile apps, and much much more. ( such as games, IOT and even cars ) </p>
              <a href="#pricing" class="read-more"><span>Get started</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-box green">
              <h3>INCREDIBLE SALARIES</h3>
              <p>A great JavaScript developer will earn more than $70,000 per year ( imagine the possibilities working remotely )</p>
              <a href="#pricing" class="read-more"><span>Get started</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-box red">
              <h3>WORK FROM ANYWHERE/ANYTIME</h3>
              <p>You're paid for your development, and you have the freedom to work remotely while having time to spend with friends & family.</p>
              <a href="#pricing" class="read-more"><span>Get started</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-box purple">
              <h3>HIGHLY IN-DEMAND</h3>
              <p>Biggest companies in the world are looking constantly for JavaScript developers. As long as the internet exists, your job will be save, all websites in the world are built with JS</p>
              <a href="#pricing" class="read-more"><span>Get started</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
            <div class="service-box pink">
              <h3>MIND SUPER-POWERS</h3>
              <p>Helps you think more clearly and will drastically impact all areas of your life, not just coding</p>
              <a href="#pricing" class="read-more"><span>Get started</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Services Section -->

    <!-- ======= Pricing Section ======= -->
    <?php include('php/templates/pricing-table.php') ?>

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <h2>F.A.Q</h2>
          <p class="font-family-2">Frequently Asked Questions</p>
        </header>
        <div class="row">
          <div class="col-lg-6">
            <!-- F.A.Q List 1-->
            <div class="accordion accordion-flush" id="faqlist1">
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#faq-content-1">
                    What do I need to know to take this course?
                  </button>
                </h2>
                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                  <div class="accordion-body">
                    This course is for absolute beginners. If you know how to open your computer then you're good to go.
                    Seriously, I'll cover everything tiny step in detail.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#faq-content-2">
                    How do I access the membership after purchasing it?
                  </button>
                </h2>
                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                  <div class="accordion-body">
                    Check your email after enrolling on our platform, or the redirect page. You should receive an email
                    with a link to the course (+bonuses). If you do not receive this email please send me a message at
                    <a href="mailTo:support@todorescu.com">support@todorescu.com</a> and I will help you work it out.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#faq-content-3">
                    Does this course/program cover React, Vue Express, jQuery, etc?
                  </button>
                </h2>
                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                  <div class="accordion-body">
                    No. This course is focused 100% on learning JavaScript. This means that no major frameworks or
                    libraries will be used. However, once you master this you'll have access to the the other courses
                    that builds upon it.
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <!-- F.A.Q List 2-->
            <div class="accordion accordion-flush" id="faqlist2">
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#faq2-content-1">
                    What if I buy/sign-up to the course and do not like it?
                  </button>
                </h2>
                <div id="faq2-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                  <div class="accordion-body">
                    It's 110% fine, I'll refund you the full-amount, no question asked.Just email me at <a
                      href="mailTo:support@todorescu.com">support@todorescu.com</a> for a full refund.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#faq2-content-2">
                    Will I get all the other courses as bonuses?
                  </button>
                </h2>
                <div id="faq2-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                  <div class="accordion-body">
                    Absolutely! If you register today with the discount you'll have access to all of my other courses.
                    No extra charge.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#faq2-content-3">
                    Any other questions?
                  </button>
                </h2>
                <div id="faq2-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                  <div class="accordion-body">
                    If you have any more questions about the course email me at <a
                      href="mailTo:support@todorescu.com">support@todorescu.com</a> and I will answer any questions you
                    have.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section><!-- End F.A.Q Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <h2>Udemy Testimonials</h2>
          <p class="font-family-2">Happy students = Happy instructors</p>
        </header>
        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">
          <div class="swiper-pagination" style="margin-top: 20px;"></div>
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Wow. He is a terrific teacher. I am impressed with his skills. <br><br>Very knowledgeable and easy to
                  understand. I have watch some of his works in another platform and he is amazing. Thanks for your hard
                  work and I hope more people appreciate your genius, and I mean it. <br><br>You deserve it. I am just
                  waiting for more courses from you.
                </p>
              </div>
            </div><!-- End testimonial item -->
            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Lots of informations but the explanations are a bit superficial even if we are talking about a crash
                  course.
                </p>
              </div>
            </div><!-- End testimonial item -->
            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                </div>
                <p>
                  In my opinion, it is not a course for absolute beginners, some experience in JavaScript is useful. A*
                  is implemented here and not self-programmed, but I think that's OK.<br><br>
                  There are good implementations of A* and here code is taken from a developer who works for Google.
                  <br><br>The main concern, as far as I can tell as an advanced beginner, is to write clean and
                  organised code, mostly for the presentation of A*. It was very informative for me how the code was
                  organised and the interaction with the pre-built A* code. I have now bought more courses from the
                  instructor to work on the thoroughly interesting topics on the side. Well done
                </p>
              </div>
            </div><!-- End testimonial item -->
            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                    class="bi bi-star-fill"></i>
                </div>
                <p>
                  This course is more suitable for intermediate learner because the author did not fully explain all the
                  new concepts. Either you have to google them yourself or you just copy and paste without 100%
                  understanding the project (which is not recommended). Anyway, I learn a lot from the course even
                  though it is short
                </p>
              </div>
            </div><!-- End testimonial item -->
            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Tudor did a great job explaining the basics of JavaScript. I learned JavaScript on my own and I took
                  this course to get a better understanding of why I do the things I do with the language as well as to
                  learn some new things. I did learn some new things and now have a better understanding of the JS
                  basics. Great job!
                </p>
              </div>
            </div><!-- End testimonial item -->
            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  As comprehensive as such a short course can bee. The lecturer explains well and clearly as he goes
                  through the code, and he soon sufficiently in to make it easy to see the code.
                </p>
              </div>
            </div><!-- End testimonial item -->
            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                    class="bi bi-star-fill"></i>
                </div>
                <p>
                  Straight to the point. A bit faster sometimes, but since the source code is available, it was very
                  helpful for developers having previous experience with other frontend technologies.
                </p>
              </div>
            </div><!-- End testimonial item -->
            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                    class="bi bi-star-fill"></i>
                </div>
                <p>
                  Great course for beginners, everything is explained pretty well, most of basic aspects are covered,
                  really helpful
                </p>
              </div>
            </div><!-- End testimonial item -->
          </div>
        </div>

      </div>

    </section><!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <h2>Behind the scenes</h2>
          <p class="font-family-2">Our Team</p>
        </header>
        <div class="row gy-4">
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/tzuka.jpg" class="img-fluid" alt="">
                <div class="social">
                  <!-- <a href="javascript:void(0)"><i class="bi bi-twitter"></i></a> -->
                  <!-- <a href="javascript:void(0)"><i class="bi bi-facebook"></i></a> -->
                  <!-- <a href="javascript:void(0)"><i class="bi bi-instagram"></i></a> -->
                  <!-- <a href="javascript:void(0)"><i class="bi bi-linkedin"></i></a> -->
                </div>
              </div>
              <div class="member-info">
                <h4>Tzuka</h4>
                <span>CEO (boss)</span>
                <p>Our beloved director brings vision and excitment to our mission.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/crisan-cristina.jpg" class="img-fluid" alt="">
                <div class="social">
                  <!-- <a href="javascript:void(0)"><i class="bi bi-twitter"></i></a> -->
                  <!-- <a href="javascript:void(0)"><i class="bi bi-facebook"></i></a> -->
                  <!-- <a href="javascript:void(0)"><i class="bi bi-instagram"></i></a> -->
                  <!-- <a href="javascript:void(0)"><i class="bi bi-linkedin"></i></a> -->
                </div>
              </div>
              <div class="member-info">
                <h4>Crisan Cristina</h4>
                <span>COO (operations)</span>
                <p>Making sure the trains run on time, Cristina handles daily operations.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/todorescu-tudor.jpg" class="img-fluid" alt="">
                <div class="social">
                  <!-- <a href="javascript:void(0)"><i class="bi bi-twitter"></i></a> -->
                  <!-- <a href="javascript:void(0)"><i class="bi bi-facebook"></i></a> -->
                  <!-- <a href="javascript:void(0)"><i class="bi bi-instagram"></i></a> -->
                  <!-- <a href="javascript:void(0)"><i class="bi bi-linkedin"></i></a> -->
                </div>
              </div>
              <div class="member-info">
                <h4>Todorescu Tudor</h4>
                <span>CTO & instructor</span>
                <p>Dedicated to building the best tech, Tudor will reveal cutting edge industry secrets.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/musat-radu.jpg" class="img-fluid" alt="">
                <div class="social">
                  <!-- <a href="javascript:void(0)"><i class="bi bi-twitter"></i></a> -->
                  <!-- <a href="javascript:void(0)"><i class="bi bi-facebook"></i></a> -->
                  <!-- <a href="javascript:void(0)"><i class="bi bi-instagram"></i></a> -->
                  <!-- <a href="javascript:void(0)"><i class="bi bi-linkedin"></i></a> -->
                </div>
              </div>
              <div class="member-info">
                <h4>Musat Radu</h4>
                <span>Support (developer)</span>
                <p>Radu will answer all your questions and make sure you get unstuck.</p>
              </div>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Team Section -->

    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-blog-posts" class="recent-blog-posts">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <h2>Blog</h2>
          <p class="font-family-2">Recent posts</p>
        </header>
        <div class="row">
          <div class="col-lg-4">
            <div class="post-box">
              <div class="post-img"><img src="assets/img/blog/blog-1.jpg" class="img-fluid" alt=""></div>
              <span class="post-date">Tue, September 15</span>
              <h3 class="post-title">How to create custom javaScript events</h3>
              <a href="blog-single.html" class="readmore stretched-link mt-auto"><span>Read More</span><i
                  class="bi bi-arrow-right"></i></a>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="post-box">
              <div class="post-img"><img src="assets/img/blog/blog-2.jpg" class="img-fluid" alt=""></div>
              <span class="post-date">Fri, August 28</span>
              <h3 class="post-title">How to implement debounce and throttle in JavaScript</h3>
              <a href="blog-single.html" class="readmore stretched-link mt-auto"><span>Read More</span><i
                  class="bi bi-arrow-right"></i></a>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="post-box">
              <div class="post-img"><img src="assets/img/blog/blog-3.jpg" class="img-fluid" alt=""></div>
              <span class="post-date">Mon, July 11</span>
              <h3 class="post-title">How to use the most used array method - map</h3>
              <a href="blog-single.html" class="readmore stretched-link mt-auto"><span>Read More</span><i
                  class="bi bi-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Recent Blog Posts Section -->

    <!-- ======= Contact Section ======= -->
    <section id="support" class="contact">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <h2>Contact</h2>
          <p class="font-family-2">Get Support</p>
        </header>
        <div class="row gy-4">
          <div class="col-lg-6">
            <div class="row gy-4">
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-envelope"></i>
                  <h3>Email Us</h3>
                  <p><a href="mailTo:support@todorescu.com">support@todorescu.com</a></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-telephone"></i>
                  <h3>Whatsapp</h3>
                  <p><a href="tel:40756281010">+40 756 281 010</a></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Company</h3>
                  <p>
                    ICE STATION ZEBRA SRL<br>
                    CIF: 46266079<br>
                    REG: J1/685/08.06.2022<br>
                  </p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-clock"></i>
                  <h3>Open Hours</h3>
                  <p>Monday - Friday<br>9:00AM - 05:00PM (GMT+3)</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" class="php-email-form">
              <div class="row gy-4">
                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                </div>
                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                </div>
                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                </div>
                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                  <button type="submit">Send Message</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section><!-- End Support Section -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12 text-center">
            <h4>Newsletter</h4>
            <p>Sign-up for the newsletter to not miss out on the latest tips/tricks. </p>
          </div>
          <div class="col-lg-6">
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
              <!-- <img src="assets/img/logo.png" alt=""> -->
              <span>TODORESCU</span>
            </a>
            <p>Me and my team are here for you and we are glad to be part of your programming journey. If you need
              assistance or have questions with ABSOLUTELY ANYTHING, feel free to contact us. ( highly encouraged )</p>
            <div class="social-links mt-3">
              <a href="https://www.youtube.com/channel/UCEpjzXih2Ca98SheN6rkRPg" class="youtube"><i
                  class="bi bi-youtube"></i></a>
              <a href="https://www.linkedin.com/in/tudortodorescu/" class="linkedin"><i class="bi bi-linkedin"></i></a>
              <a href="https://github.com/tudortodorescu" class="github"><i class="bi bi-github"></i></a>
              <a href="https://twitter.com/todorescu_tudor" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="https://www.facebook.com/tudor.todorescu" class="facebook"><i class="bi bi-facebook"></i></a>
            </div>
          </div>
          <div class="col-lg-2 col-6 footer-links">
            <h4>Navigation Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#hero">Home</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#about">About</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#values">Values</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#pricing">Pricing</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#bonuses">BONUSES</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#testimonials">Testimonials</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="blog.html">Blog</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#support">Support</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#pricing">Enroll</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="terms-of-service.html" target="_blank">Terms of service</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="privacy-policy.html" target="_blank">Privacy policy</a>
              <li><i class="bi bi-chevron-right"></i> <a href="cookie-policy.html" target="_blank">Cookie policy</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-2 col-6 footer-links">
            <h4>Courses</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#pricing">JavaScript for absolute beginners</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#pricing">Chess game engine</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#pricing">Flappy bird in canvas</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#pricing">Path finding algorithm</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#pricing">CSS hacking challenges</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#pricing">Ultimate Vue 2/3 crash course</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#pricing">3 Unique web dev projects</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#pricing">Matrix symbols rain effect</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#pricing">HTML canvas manipulation</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Contact Us</h4>
            <p>
              ICE STATION ZEBRA SRL<br>
              CIF 46266079 CIF RO28941568<br>
              Romania <br><br>
              <strong>Whatsapp:</strong><br> <a href="tel:40756281010">+40 756 281 010</a><br><br>
              <strong>Email us:</strong> <a href="mailTo:support@todorescu.com">support@todorescu.com</a><br>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>ICE STATION ZEBRAL SRL</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <!-- Modals -->
  <?php include('php/templates/login-modal.php') ?>
  <?php include('php/templates/register-modal.php') ?>
  <?php include('php/templates/forgot-password-modal.php') ?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i>
  </a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/utils/utils.js"></script>

  <!-- Cookie consent -->
  <script src="assets/vendor/cookieconsent/cookieconsent.js"></script>
  <script>
    initCookieConsent().run({
      languages: {
        'en': {
          consent_modal: {
            title: 'Cookie policy',
            description: 'This website uses cookies to understand how you interact with it. <a href="/cookie-policy.html" target="_blank">Read more</a>',
            primary_btn: {
              text: 'Accept all',
              role: 'accept_all'
            },
            secondary_btn: {
              text: 'Settings',
              role: 'settings'
            }
          },
          settings_modal: {
            title: 'Cookie preferences',
            save_settings_btn: 'Save settings',
            accept_all_btn: 'Accept all',
            blocks: [
              {
                title: 'Essential cookies',
                description: 'These cookies are strictly necessary to enable core functionality such as security, network management, your cookie preferences and accessibility'
              }, {
                title: 'Performance and Functionality Cookies',
                description: 'Performance and Functionality Cookies help us remember that an user had logged in previously',
              }, {
                title: 'Marketing cookies',
                description: 'Marketing Cookies enable us to identify future prospects and personalize sales and marketing interactions.',
              }, {
                title: 'Analytics and Customization Cookies',
                description: 'These cookies collect information that is used to help us understand how your platform is being used or how effective our marketing campaigns are',
              }, {
                title: 'Social Media Cookies',
                description: 'These cookies are used when users log in with Facebook, Twitter or Google+',
              }, {
                title: 'Third Party Cookies',
                description: 'Third party service providers control many of the performance and functionality, advertising, marketing and analytics cookies',
              }
            ]
          }
        }
      }
    })
  </script>

</body>
</html>