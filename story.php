<?php
include $_SERVER['DOCUMENT_ROOT'] . "/api/light.php";

$title = "Results, recruitment offers, unlimited job opportunities";
include php_root() . 'php/lp-header.php';
?>

<main id="main">
  <section class="about">
    <div class="container main-container">
      <div class="row gx-0">
        <div class="col-lg-12 d-flex flex-column">
          <div class="content" style="text-align: left;">
            <h3 class="mt-3" style="text-align: left;">Tudor's story</h3>
            <div class="row">
              <div class="col-lg-9 col-md-7 col-12 flex-middle">
              <p style="text-align: left;">
              If you allow me, let me introduce myself briefly. 
              I’m Tudor Todorescu. I’ve let programming enhance my lifestyle for the last 2.5 years. 
              <br><br>
              I’ve sterilized all my financial problems just by crafting source code for companies. I’m a bit contrarian, which is the secret advantage that allows me to get sunshine clarity on the solutions I provide for the companies I work for. 
              <br><br>
              Because of this, I’ve gained widespread notoriety; many asked me to reveal my secrets and show them how to get the same results as myself. Close to 6-figure yearly salaries while having unlimited freedom.
              <br><br>
              Initially, I was reluctant to teach any of this, but seeing many developers from the community struggling, I started to feel like my stomach was shrinking; a sense of guilt hit me right in the heart. Why am I being so lucky and others still struggling even to get a simple junior job? 
              <br><br>
              That sense of guilt haunted me for many days, making it hard to enjoy all the material things I bought whit that hard-worked money. It is not fair for me to enjoy life while others are in need.
              <br><br>
              I’ve decided to help other people achieve a piece of this glory. I opened some spots and didn’t expect any sparks to fly, but it worked, to my surprise; it just clicked for others as well. Some of my students got similar results really quickly. 
              <br><br>
              </p>
            </div>
              <div class="col-lg-3 col-md-5 col-12 flex-middle">
                <img src="<?= root() .'assets/img/facebook-profile-pic.jpg' ?>" class="img-fluid" alt="">
                <p class="fb-text-desc">
                View Tudor's impressive portfolio.<br> <a href="https://www.linkedin.com/in/tudortodorescu/" target="_blank" class="link">View now <i class="bi bi-linkedin"></i></a>
                </p>
              </div>
            </div>
            <a href="<?= root() . 'students' ?>" class="btn-read-more">
              <span>Student testimonials</span>
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