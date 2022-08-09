<?php 
  include $_SERVER['DOCUMENT_ROOT']."/api/index.php";
  $session = (new Api())->get_session($_COOKIE['token']);
  
  $ignore = array(
    'header' => false,
    'footer' => false
  );
  
  $title = "Get high-ticket web development projects without much experience";
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
          >Start enjoying<br> life more.</h1>
          <h2 
            data-aos="fade-up" 
            data-aos-delay="400"
            style="
              color: #95f0f1;
              font-size: 1.5rem;
              padding: 1rem 0;
            "
          >Get high-ticket web development projects without much experience</h2>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="assets/img/fighterjet2.png" class="img-fluid" alt="">
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
              
              <p>After seeing his parkour adventures ripped away from him, he made a life-changing decision. He swore he would learn the process of attracting dream clients. <strong>Undemanding, no meetings, and pay for his travels.</strong><Br></p>
              
              <strong style="color: var(--primary-color);">
              <i class="bi bi-cash-coin"></i> Revolut accounts
              </strong>

              <video controls="controls" poster="<?= root().'assets/img/revolut-thumb.jpg' ?>" style="width: 100%;">
                <source src="<?= root().'assets/video/revolut.mp4' ?>" type="video/mp4">
              </video>
                
              <p><br>He finally cracked it, and it was surprisingly easy once he got it. It even works without having FAANG on resume. His system has already helped dozens change their career</p>

              <p>His system made him from a sad stuck shmuk, into a sad free adventurer, oh yeah, happiness comes from other places, but that's a different story.</p>

              <img src="<?= root().'assets/img/zoom.jpg' ?>" style="width: 100%;" />
              
              <p>He's not a life coach or a guru. He still earns his living doing vue.js long-term projects <a href="https://www.linkedin.com/in/tudortodorescu/" target="_blank">(check Linkedin <i class="bi bi-linkedin"></i>)</a>. However, his heart is in helping others unlock their potential.

              <p>His system works not only for him, but for anybody willing to give it a try.
              <br><br>
              
              He put together an on-point video training revealing his way;<br> Do you want it ? Then just send an email to <a href="mailto:adina@todorescu.com">adina@todorescu.com</a>.</p>

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
          <img src="<?= root().'assets/img/confessions.png' ?>" style="width: 100%;" />
        </header>
        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">
          <div class="swiper-pagination" style="margin-top: 20px;"></div>
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="testimonial-item">
                <video 
                  controls="controls"
                  poster="<?= root().'assets/img/radu-thumb_.jpg' ?>" 
                  style="width: 100%;"
                >
                  <source src="<?= root().'assets/video/interviu-radu.mp4' ?>" type="video/mp4">
                </video>
                <div class="stars" style="margin-top: 20px;">
                  Radu went from mediocre job to <strong>getting hired today</strong>. Watch his impressive story of transformation, he finally works a serious vue.js project.
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="testimonial-item">
                <video 
                  controls="controls"
                  poster="<?= root().'assets/img/alina-thumb_.jpg' ?>" 
                  style="width: 100%;"
                >
                  <source src="<?= root().'assets/video/interviu-alina.mp4' ?>" type="video/mp4">
                </video>
                <div class="stars" style="margin-top: 20px;">
                  Alina switched from a marketing career to landing her first one-month trial for a <strong>fulltime junior web developer position.</strong>.
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="testimonial-item">
                <video 
                  controls="controls"
                  poster="<?= root().'assets/img/petrisor-thumb_.jpg' ?>"  
                  style="width: 100%;"
                >
                  <source src="<?= root().'assets/video/interviu-petrisor.mp4' ?>" type="video/mp4">
                </video>
                <div class="stars" style="margin-top: 20px;">
                  Petrisor says Tudor's mentoring made a huge difference in his progress.<strong>"Tudor's a natural"</strong>.
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="testimonial-item">
                <video 
                  controls="controls"
                  poster="<?= root().'assets/img/robert-thumb_.jpg' ?>" 
                  style="width: 100%;"
                >
                  <source src="<?= root().'assets/video/interviu-robert.mp4' ?>" type="video/mp4">
                </video>
                <div class="stars" style="margin-top: 20px;">
                  Tudor helped Robert <strong>kickstart his programming journey</strong> and got him focused on javascript.
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="testimonial-item">
                <video 
                  controls="controls"
                  poster="<?= root().'assets/img/ovidiu-thumb_.jpg' ?>" 
                  style="width: 100%;"
                >
                  <source src="<?= root().'assets/video/interviu-ovidiu.mp4' ?>" type="video/mp4">
                </video>
                <div class="stars" style="margin-top: 20px;">
                  "From Tudor I've learned directly senior developer stuff" - Ovidiu.
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="testimonial-item">
                <video 
                  controls="controls"
                  poster="<?= root().'assets/img/cristi-thumb_.jpg' ?>" 
                  style="width: 100%;"
                >
                  <source src="<?= root().'assets/video/interviu-cristi.mp4' ?>" type="video/mp4">
                </video>
                <div class="stars" style="margin-top: 20px;">
                  "From Tudor I've learned directly senior developer stuff", told Ovidiu in his video confession.
                </div>
              </div>
            </div>
          </div>
        </div>
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