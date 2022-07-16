<?php 
  include $_SERVER['DOCUMENT_ROOT']."/api/index.php";
  $session = (new Api())->get_session($_COOKIE['token']);
  
  $ignore = array(
    'header' => false,
    'footer' => false
  );
  
  $title = "High-class level coding - Get started today";
  include php_root().'php/lp-header.php';
?>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Learn to code like an absolute beast!</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">Equip yourself with olympic level coding skills</h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <?php if (!$session['is_logged_in']) : ?>
                <a href="#pricing"
                  class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                  <span>Get Started</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              <?php endif ?>
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
              <h2>Completed 6-figures projects. I've done high-standard industry frontend development</h2>
              <p>
                15+ years of coding is a long time. Imagine how fast you can save years of burnout, migraines and ruinned relationships locking yourself-up in your room trying to learn all of this?
              </p>
              <div class="text-center text-lg-start">
                <?php if (!$session['is_logged_in']) : ?>
                  <a href="#pricing"
                    class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                    <span>Get Started</span>
                    <i class="bi bi-arrow-right"></i>
                  </a>
                <?php endif ?>
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
              <p>100% attention on student success by providing clarity through 1on1 calls</p>
            </div>
          </div>
          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
            <div class="box">
              <img src="assets/img/values-2.png" class="img-fluid" alt="">
              <h3>Progressive</h3>
              <p>Each lesson builds on the previous. This snowball effect will boost you everest heights!</p>
            </div>
          </div>
          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
            <div class="box">
              <img src="assets/img/values-3.png" class="img-fluid" alt="">
              <h3>Projects</h3>
              <p>I'll teach you how to build web projects the right way. Projects employeers and clients pay top dollars for.</p>
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
                <p>Udemy students</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="51020" data-purecounter-duration="1"
                  class="purecounter"></span>
                <p>Youtube views</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-headset" style="color: #15be56;"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="241" data-purecounter-duration="1"
                  class="purecounter"></span>
                <p>Hours of coaching</p>
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
          <p class="font-family-2">I've created a curriculum so easy to follow, with (almost) zero confusion.</p>
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
                  <h3>Concise, to the point</h3>
                </div>
              </div>
              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="300">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Essentials and fundamentals</h3>
                </div>
              </div>
              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="400">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Blazingly effective learning</h3>
                </div>
              </div>
              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="500">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Proven real-life methods</h3>
                </div>
              </div>
              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="600">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Guaranteed mastery (if you put in the work of course)</h3>
                </div>
              </div>
              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="700">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Real support</h3>
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
              <?php if (!$session['is_logged_in']) : ?>
                <a href="#pricing" class="read-more"><span>Get started</span> <i class="bi bi-arrow-right"></i></a>
              <?php endif ?>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-box orange">
              <h3>FUN FACT</h3>
              <p>You can use JavaScript to build web and mobile apps, and much much more. ( such as games, IOT and even cars ) </p>
              <?php if (!$session['is_logged_in']) : ?>
                <a href="#pricing" class="read-more"><span>Get started</span> <i class="bi bi-arrow-right"></i></a>
              <?php endif ?>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-box green">
              <h3>INCREDIBLE SALARIES</h3>
              <p>A great JavaScript developer will earn more than $70,000 per year ( imagine the possibilities working remotely )</p>
              <?php if (!$session['is_logged_in']) : ?>
                <a href="#pricing" class="read-more"><span>Get started</span> <i class="bi bi-arrow-right"></i></a>
              <?php endif ?>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-box red">
              <h3>WORK FROM ANYWHERE/ANYTIME</h3>
              <p>You're paid for your development, and you have the freedom to work remotely while having time to spend with friends & family.</p>
              <?php if (!$session['is_logged_in']) : ?>
                <a href="#pricing" class="read-more"><span>Get started</span> <i class="bi bi-arrow-right"></i></a>
              <?php endif ?>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-box purple">
              <h3>HIGHLY IN-DEMAND</h3>
              <p>Biggest companies in the world are looking constantly for JavaScript developers. As long as the internet exists, your job will be save, all websites in the world are built with JS</p>
              <?php if (!$session['is_logged_in']) : ?>
                <a href="#pricing" class="read-more"><span>Get started</span> <i class="bi bi-arrow-right"></i></a>
              <?php endif ?>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
            <div class="service-box pink">
              <h3>MIND SUPER-POWERS</h3>
              <p>Helps you think more clearly and will drastically impact all areas of your life, not just coding</p>
              <?php if (!$session['is_logged_in']) : ?>
                <a href="#pricing" class="read-more"><span>Get started</span> <i class="bi bi-arrow-right"></i></a>
              <?php endif ?>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Services Section -->

    <!-- ======= Pricing Section ======= -->
    <?php if (!$session['is_logged_in']) : ?>
      <?php include php_root()."php/templates/pricing/pricing-table.php"; ?>
    <?php endif ?>

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
                    Will I get all the other courses as well?
                  </button>
                </h2>
                <div id="faq2-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                  <div class="accordion-body">
                    Absolutely! Just pick the right plan for you you'll have access to the amazing courses.
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
    <section id="testimonials" class="testimonials" style="padding-bottom: 0;">
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
    <section id="team" class="team" style="padding-top: 0;">
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
    <!--
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
              <a href="blog/blog-single.html" class="readmore stretched-link mt-auto"><span>Read More</span><i
                  class="bi bi-arrow-right"></i></a>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="post-box">
              <div class="post-img"><img src="assets/img/blog/blog-2.jpg" class="img-fluid" alt=""></div>
              <span class="post-date">Fri, August 28</span>
              <h3 class="post-title">How to implement debounce and throttle in JavaScript</h3>
              <a href="blog/blog-single.html" class="readmore stretched-link mt-auto"><span>Read More</span><i
                  class="bi bi-arrow-right"></i></a>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="post-box">
              <div class="post-img"><img src="assets/img/blog/blog-3.jpg" class="img-fluid" alt=""></div>
              <span class="post-date">Mon, July 11</span>
              <h3 class="post-title">How to use the most used array method - map</h3>
              <a href="blog/blog-single.html" class="readmore stretched-link mt-auto"><span>Read More</span><i
                  class="bi bi-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    -->
    <!-- End Recent Blog Posts Section -->

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
            <form action="api/contact.php" method="post" class="php-email-form">
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
                  <div class="sent-message text-thin">Your message has been sent. We will contact you shortly.</div>
                  <button class="btn js_send_message" type="submit">Send Message</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section><!-- End Support Section -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include php_root().'php/lp-footer.php'; ?>

</body>
</html>