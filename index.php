<?php 
  include $_SERVER['DOCUMENT_ROOT']."/api/index.php";
  $session = (new Api())->get_session($_COOKIE['token']);
  
  $ignore = array(
    'header' => false,
    'footer' => false,
    'menu' => false
  );
  
  $title = "Buy your freedom back! Jobs so high-paid you'll suddenly have 50 new cousins";
  include php_root().'php/lp-header.php';
?>

<style>
  body {
    background-color: black;
    background-image: url('<?= root().'assets/img/punkbg_1.jpg' ?>');
  }
</style>
  <section
    id="hero"
    class="hero d-flex align-items-center"
    style="padding-bottom: 0;"
  >
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 
            data-aos="fade-up" 
            style="
              color: #fa643f;
              font-size: 2.25rem;
              padding: 2rem 0 1rem;
            "
          >Obnoxiously highest-paid web dev jobs at your feet.</h1>
          <h2 
            data-aos="fade-up" 
            data-aos-delay="400"
            style="
              color: #95f0f1;
              font-size: 1.5rem;
              padding: 1rem 0;
              width: 100%;
            "
          >Jobs so high-paid, everyone begins to hate you. Old friends come crawling back</h2>
          
          <!-- Suddenly you'll have 50 new cousins</h2> -->
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="assets/img/fighterjet2.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>
  </section>
  <section
    class="d-flex align-items-center"
    style="padding-bottom: 0;"
  >
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-12">
          <img src="<?= root().'assets/img/offers/offer13.png' ?>" class="offer-img" />
        </div>
        <div class="col-lg-4 col-md-12">
          <img src="<?= root().'assets/img/offers/offer11.png' ?>" class="offer-img" />
        </div>
        <div class="col-lg-4 col-md-12">
          <img src="<?= root().'assets/img/offers/offer10.png' ?>" class="offer-img" />
        </div>
      </div>
    </div>
  </section>
  <main id="main">
    <section id="about" class="about" style="padding-bottom: 0;">
      <div class="container" data-aos="fade-up">
        <div class="row gx-0">
          <div class="col-lg-12 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content" style="opacity: .9;">
              <h3 style="margin-top: 40px;">Tudor's Tale</h3>

              <p>Most developers have serious confidence issues, <strong>Tudor was no different</strong>. He did everything right, but still he was stuck in junior jobs, barely getting time to enjoy his 20s</p>
              
              <img src="<?= root().'assets/img/santorini.gif' ?>" style="width: 100%;" />
              
              <p>After seeing his parkour adventures ripped away, he made a life-changing decision. He swore he would learn the process of attracting dream clients. <strong>Undemanding, no meetings, and pay for his travels.</strong><Br></p>
              
              <strong style="color: var(--primary-color);">
              <i class="bi bi-cash-coin"></i> Revolut accounts
              </strong>

              <video controls="controls" poster="<?= root().'assets/img/revolut-thumb.jpg' ?>" style="width: 100%;">
                <source src="<?= root().'assets/video/revolut.mp4' ?>" type="video/mp4">
              </video>
                
              <p><br>He finally cracked it, and it was surprisingly easy once he got it. It even works without having FAANG on your resume. His approach is so unique, he instantly made him stand-out. (even if he never worked an actual senior job/project before)</p>

              <p>From a sad stuck shmuk, into a sad free man overnight (almost)... oh yeah, btw, happiness comes from other places; that's a different story.</p>

              <img src="<?= root().'assets/img/zoom.jpg' ?>" style="width: 100%;" />
              
              <p>He's not a life-coach, therapist or sifu. Tudor earns his living doing high-end vue3 projects<br> <a href="https://www.linkedin.com/in/tudortodorescu/" target="_blank">(latest on Linkedin <i class="bi bi-linkedin"></i>)</a>. <br><br><b>Money is empty, sharing is fun. Tudor loves to hear all about his students success, and be a part of their journey.</b>

              <p>Want more? Write down why you want a change in your career and email <a href="mailto:adina@todorescu.com">adina@todorescu.com</a> with your why. <br><br><i>She will forward your story to Tudor, and he'll prepare a special training (in video format).</i></p>

              <a 
                href="mailto:adina@todorescu.com"
                class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center"
              >
                <span>Request training</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
      </div>
    </section>
    <section id="confessions" class="testimonials" style="margin-bottom: 30px; padding-bottom: 0; background: black;opacity: .9;padding-top: 15px;margin-top: 30px;">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <img src="<?= root().'assets/img/confessions-text.png' ?>" style="width: 100%;" />
        </header>
        <div class="row">
          <div class="col-lg-6 col-md-12 testimonial-new-item">
            <video 
              controls="controls"
              poster="<?= root().'assets/img/radu-thumb_.jpg' ?>" 
            >
              <source src="<?= root().'assets/video/interviu-radu.mp4' ?>" type="video/mp4">
            </video>
            <div class="text">
              Radu went from mediocre job to <strong>getting hired today</strong>. Watch his impressive story of transformation, he finally works a serious vue.js project.
            </div>
          </div>
          <div class="col-lg-6 col-md-12 testimonial-new-item">
            <video 
              controls="controls"
              poster="<?= root().'assets/img/robert-thumb_.jpg' ?>" 
            >
              <source src="<?= root().'assets/video/interviu-robert.mp4' ?>" type="video/mp4">
            </video>
            <div class="text">
              Tudor helped Robert <strong>kickstart his programming journey</strong> and got him focused on javascript.
            </div>
          </div>
          <div class="col-lg-6 col-md-12 testimonial-new-item">
            <video 
              controls="controls"
              poster="<?= root().'assets/img/mihnea-thumb_.jpg' ?>" 
            >
              <source src="<?= root().'assets/video/interviu-mihnea.mp4' ?>" type="video/mp4">
            </video>
            <div class="text">
              Mihnea got help on how a programmer should think. Concepts that take one month to grasp, <strong>took one week</strong>.
            </div>
          </div>
          <div class="col-lg-6 col-md-12 testimonial-new-item">
            <video 
              controls="controls"
              poster="<?= root().'assets/img/alina-thumb_.jpg' ?>" 
            >
              <source src="<?= root().'assets/video/interviu-alina.mp4' ?>" type="video/mp4">
            </video>
            <div class="text">
              Alina switched from a marketing career to landing her first one-month trial for a <strong>fulltime junior web developer position.</strong>.
            </div>
          </div>
          <div class="col-lg-6 col-md-12 testimonial-new-item">
            <video 
              controls="controls"
              poster="<?= root().'assets/img/petrisor-thumb_.jpg' ?>"  
            >
              <source src="<?= root().'assets/video/interviu-petrisor.mp4' ?>" type="video/mp4">
            </video>
            <div class="text">
              Petrisor says Tudor's mentoring made a huge difference in his progress.<strong>"Tudor's a natural"</strong>.
            </div>
          </div>
          <div class="col-lg-6 col-md-12 testimonial-new-item">
            <video 
              controls="controls"
              poster="<?= root().'assets/img/ovidiu-thumb_.jpg' ?>" 
            >
              <source src="<?= root().'assets/video/interviu-ovidiu.mp4' ?>" type="video/mp4">
            </video>
            <div class="text">
              "From Tudor I've learned directly senior developer stuff" - Ovidiu.
            </div>
          </div>
          <div class="col-lg-6 col-md-12 testimonial-new-item">
            <video 
              controls="controls"
              poster="<?= root().'assets/img/cristi-thumb_.jpg' ?>" 
            >
              <source src="<?= root().'assets/video/interviu-cristi.mp4' ?>" type="video/mp4">
            </video>
            <div class="text">
              Cristi saved his soul from tutorial hell and skyrocketed his skills.
            </div>
          </div>
        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="200">
          <div class="col-12" style="margin: 30px 0 0 0; padding: 0 30px; text-align: center;">
            <img src="<?= root().'assets/img/recruitment.png' ?>" style="width: 100%" />
          </div>
          <div class="col-lg-4 col-md-6 col-12">
            <img src="<?= root().'assets/img/offers/offer2.png' ?>" class="offer-img-bottom" />
          </div>
          <div class="col-lg-4 col-md-6 col-12">
            <img src="<?= root().'assets/img/offers/offer8.png' ?>" class="offer-img-bottom" /> 
            <img src="<?= root().'assets/img/offers/offer6.png' ?>" class="offer-img-bottom" /> 
          </div>
          <div class="col-lg-4 col-md-6 col-12">
            <img src="<?= root().'assets/img/offers/offer3.png' ?>" class="offer-img-bottom" />
          </div>
          <div class="col-lg-4 col-md-6 col-12">
            <img src="<?= root().'assets/img/offers/offer4.png' ?>" class="offer-img-bottom" />
          </div>
          <div class="col-lg-4 col-md-6 col-12">
            <img src="<?= root().'assets/img/offers/offer5.png' ?>" class="offer-img-bottom" />
          </div>
          <div class="col-lg-4 col-md-6 col-12">
            <img src="<?= root().'assets/img/offers/offer1.png' ?>" class="offer-img-bottom" />
          </div>
          <div class="col-12" style="text-align: center;">
            <button 
              style="
                font-size: 1.15rem;
                padding: 10px 20px;
                margin-bottom: 20px;
              "
              class="btn btn-primary mb-4"
              onclick="window.location = '<?= root().'results' ?>'"
            >
            <i class="bi bi-infinity"></i> Load more...
          </button>
          </div>
        </div> 
        <!-- <div class="row" data-aos="fade-up" data-aos-delay="200">
            <img src="<?= root().'assets/img/reviews/js-beginners.png' ?>" />
            <img src="<?= root().'assets/img/reviews/review1.png' ?>" />
            <img src="<?= root().'assets/img/reviews/review2.png' ?>" />
            <img src="<?= root().'assets/img/reviews/review3.png' ?>" />
            <img src="<?= root().'assets/img/reviews/review4.png' ?>" />
            <img src="<?= root().'assets/img/reviews/review5.png' ?>" />
            <img src="<?= root().'assets/img/reviews/review6.png' ?>" />
            <img src="<?= root().'assets/img/reviews/review7.png' ?>" />
            <img src="<?= root().'assets/img/reviews/review8.png' ?>" />
            <img src="<?= root().'assets/img/reviews/pathfinding.png' ?>" />
            <img src="<?= root().'assets/img/reviews/review9.png' ?>" />
            <img src="<?= root().'assets/img/reviews/vue.png' ?>" />
            <img src="<?= root().'assets/img/reviews/review10.png' ?>" />
            <img src="<?= root().'assets/img/reviews/review11.png' ?>" />
            <img src="<?= root().'assets/img/reviews/review12.png' ?>" />
            <img src="<?= root().'assets/img/reviews/review13.png' ?>" />
            <img src="<?= root().'assets/img/reviews/review14.png' ?>" />
        </div> -->
      </div>
    </section>
    <section id="support" class="contact" style="background: black; opacity: .9">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <p class="font-family-2" style="color: var(--primary-color);">Student support</p>
          <p class="gray-text">Please, if you're not in the paid program, don't use this form. If you do, we will blacklist your info</p>
        </header>
        <div class="row gy-4">
          <div class="col-12">
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
                  <button class="btn js_send_message" type="submit">Send</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <section id="team" class="team" style="padding-top: 30px; opacity: .9;background: none;margin-bottom: 30px;">
      <div class="container" data-aos="fade-up">
        <div class="row gy-4">
          <div class="col-4 d-flex align-items-stretch" style="padding: 0 5px;" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/tzuka.jpg" class="img-fluid" alt="">
                <div class="social"></div>
              </div>
              <div class="member-info">
                <h4>Tzuka</h4>
                <span>CEO (boss)</span>
                <p style="line-height: 1rem;">Our beloved director brings vision and excitement to our mission.</p>
              </div>
            </div>
          </div>
          <div class="col-4 d-flex align-items-stretch" style="padding: 0 5px;" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/crisan-cristina.jpg" class="img-fluid" alt="">
                <div class="social"></div>
              </div>
              <div class="member-info">
                <h4>Crisan Cristina</h4>
                <span>COO (operations)</span>
                <p style="line-height: 1rem;">Making sure the trains run on time, Cristina handles daily operations.</p>
              </div>
            </div>
          </div>
          <div class="col-4 d-flex align-items-stretch" style="padding: 0 5px;" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/todorescu-tudor.jpg" class="img-fluid" alt="">
                <div class="social"></div>
              </div>
              <div class="member-info">
                <h4>Todorescu Tudor</h4>
                <span>Founder</span>
                <p style="line-height: 1rem;">The man with the plan.</p>
              </div>
            </div>
          </div>
          <div class="col-4 d-flex align-items-stretch" style="padding: 0 5px;" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/musat-radu.jpg" class="img-fluid" alt="">
                <div class="social"></div>
              </div>
              <div class="member-info">
                <h4>Musat Radu</h4>
                <span>Support (developer)</span>
                <p style="line-height: 1rem;">Radu will answer all your questions and make sure you never get stuck.</p>
              </div>
            </div>
          </div>
          <div class="col-4 d-flex align-items-stretch" style="padding: 0 5px;" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/adina-minca.jpg" class="img-fluid" alt="">
                <div class="social"></div>
              </div>
              <div class="member-info">
                <h4>Adina Minca</h4>
                <span>PR/Customer</span>
                <p style="line-height: 1rem;">Adina handles the press, interviews and student onboarding.</p>
              </div>
            </div>
          </div>
          <div class="col-4 d-flex align-items-stretch" style="padding: 0 5px;" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/tao-robert.jpg" class="img-fluid" alt="">
                <div class="social"></div>
              </div>
              <div class="member-info">
                <h4>Tao Robert</h4>
                <span>Media/Video editing</span>
                <p style="line-height: 1rem;">Robert is the artistic one. He will tattoo you (literally).</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>  
  </main>
  
  <?php include php_root().'php/lp-footer.php'; ?>
</body>
</html>