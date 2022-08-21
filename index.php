<?php
include $_SERVER['DOCUMENT_ROOT'] . "/api/index.php";
$session = (new Api())->get_session($_COOKIE['token']);

$ignore = array(
  'header' => false,
  'footer' => false,
  'menu' => false
);

$title = "Buy your freedom back! Learn how to score premium dev jobs - Todorescu.com";
include php_root() . 'php/lp-header.php';
?>

<main id="main">
  <section id="hero" class="hero d-flex align-items-center" style="padding-bottom: 0;">
    <div class="container" style="max-width: fit-content; margin: .5rem auto;">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up" style="
              color: #fa643f;
              font-size: 2.25rem;
              padding: 2rem 0 1rem;
            ">Unlimited premium projects at your feet.</h1>
          <h2 data-aos="fade-up" data-aos-delay="400" style="
              color: #95f0f1;
              font-size: 1.5rem;
              padding: 1rem 0;
              width: 100%;
            ">Be so in demand, you get to choose based on passion.</h2>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="assets/img/fighterjet4.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>
  </section>
</main>

<?php include php_root() . 'php/lp-footer.php'; ?>
</body>
</html>