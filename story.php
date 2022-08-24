<?php
include $_SERVER['DOCUMENT_ROOT'] . "/api/light.php";

$title = "Results, recruitment offers, unlimited job opportunities";
include php_root() . 'php/lp-header.php';
?>

<main id="main">
  <section class="about">
    <div class="container main-container">
      <div class="row gx-0">
        <div class="col-lg-12 d-flex flex-column justify-content-center">
          <div class="content">
            <h3 class="mt-3">Tudor's story</h3>
            <div class="row">
              <div class="col-lg-9 col-md-7 col-12 flex-middle">
                <p>
                  Most developers have serious confidence issues, <strong>Tudor was no different</strong>. He did everything right, but still he was stuck in junior jobs, barely getting time to enjoy his 20s
                </p>
                <p>
                  After seeing his parkour adventures ripped away, he made a life-changing decision. He swore he would learn the process of attracting dream clients. <strong>Undemanding, no meetings, and pay for his travels.</strong>
                </p>
                <p>He finally cracked it, and it was surprisingly easy once he got it. It even works without having <strike>FAANG</strike> on your resume. His approach is so unique, he instantly made him stand-out. (even if he never worked an actual senior job/project before)</p>

              <p>From a sad stuck shmuk, into a sad free man overnight (almost)... oh yeah, btw, happiness comes from other places; that's a different story.</p>

              <p>
                He's not a life-coach, therapist or sifu. Tudor earns his living doing high-end vue3 projects.<br> <a href="https://www.linkedin.com/in/tudortodorescu/" target="_blank" class="link">View them on Linkedin <i class="bi bi-linkedin"></i></a>. 
                <br><br>
                Money is empty, sharing is fun. Tudor loves to hear all about his students success, and be a part of their journey.
              </p>
            </div>
              <div class="col-lg-3 col-md-5 col-12 flex-middle">
                <img src="<?= root() .'assets/img/team/todorescu-tudor.jpg' ?>" class="img-fluid" alt="">
                <p class="fb-text-desc">
                  He actively posts daily on his <br><a href="https://www.facebook.com/tudor.t0dorescu" target="_blank" class="link">personal facebook profile <i class="bi bi-linkedin"></i></a>
                </p>
              </div>
            </div>
            <a href="<?= root() . 'students' ?>" class="btn-read-more">
              <span>Video testimonials</span>
              <i class="bi bi-arrow-right"></i>
            </a>
            <br><br>
          </div>
        </div>
      </div>
  </section>
</main>

<?php include php_root() . 'php/lp-footer.php'; ?>
</body>
</html>