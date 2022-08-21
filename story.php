<?php
include $_SERVER['DOCUMENT_ROOT'] . "/api/index.php";
$session = (new Api())->get_session($_COOKIE['token']);

$ignore = array(
    'header' => false,
    'footer' => false,
    'menu' => false
);

$title = "Results, recruitment offers, unlimited job opportunities";
include php_root() . 'php/lp-header.php';
?>

<main id="main">
    <section id="about" class="about" style="padding-bottom: 0;margin-top:60px;">
      <div class="container" data-aos="fade-up">
        <div class="row gx-0">
          <div class="col-lg-12 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content" style="opacity: .9;">
              <h3 style="margin-top: 10px;">Tudor's Tale</h3>

              <p>Most developers have serious confidence issues, <strong>Tudor was no different</strong>. He did everything right, but still he was stuck in junior jobs, barely getting time to enjoy his 20s</p>
              
              <img src="<?= root().'assets/img/santorini.gif' ?>" style="width: 100%;" />
              
              <p>After seeing his parkour adventures ripped away, he made a life-changing decision. He swore he would learn the process of attracting dream clients. <strong>Undemanding, no meetings, and pay for his travels.</strong><Br></p>
              
              <strong style="color: var(--primary-color);">
              <i class="bi bi-cash-coin"></i> Revolut accounts
              </strong>

              <video controls="controls" poster="<?= root().'assets/img/revolut-thumb.jpg' ?>" style="width: 100%;">
                <source src="<?= root().'assets/video/revolut.mp4' ?>" type="video/mp4">
              </video>
                
              <p>He finally cracked it, and it was surprisingly easy once he got it. It even works without having <strike>FAANG</strike> on your resume. His approach is so unique, he instantly made him stand-out. (even if he never worked an actual senior job/project before)</p>

              <p>From a sad stuck shmuk, into a sad free man overnight (almost)... oh yeah, btw, happiness comes from other places; that's a different story.</p>

              <img src="<?= root().'assets/img/zoom.jpg' ?>" style="width: 100%;" />
              
              <p>He's not a life-coach, therapist or sifu. Tudor earns his living doing high-end vue3 projects<br> <a href="https://www.linkedin.com/in/tudortodorescu/" target="_blank">( latest on Linkedin <i class="bi bi-linkedin"></i> )</a>. <br><br><b>Money is empty, sharing is fun. Tudor loves to hear all about his students success, and be a part of their journey.</b>

                <br><br>
              <img src="<?= root().'assets/img/tour.gif' ?>" style="width: 100%;" />
              
              <p><b>Thirsty for more?</b> Write down your why in detail, then man-up and email <a href="mailto:adina@todorescu.com">adina@todorescu.com</a>. <br><br><i>She will forward your story to Tudor, and he'll prepare an exclusive training video (limited).</i></p>

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
</main>

<?php include php_root().'php/lp-footer.php'; ?>
</body>
</html>