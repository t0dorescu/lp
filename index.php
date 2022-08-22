<?php
include $_SERVER['DOCUMENT_ROOT'] . "/api/light.php";

$title = "Buy your freedom back! Learn how to score premium dev jobs - Todorescu.com";
include php_root() . 'php/lp-header.php';
?>

<main id="main">
  <section class="hero">
    <div class="container" style="margin-top: 50px; text-align: center;">
      <h1 style="color: #fa643f;font-size: 2.25rem;">
        Unlimited premium web-dev projects.
      </h1>
      <h2 style="color: white;font-size: 1.5rem;">
        Be so in demand, you get to choose based on passion.
      </h2>
      <br><br>
      <a href="<?= root() . 'story' ?>" class="btn-read-more" style="font-weight: bold;">
        <span>Find out more</span>
        <i class="bi bi-arrow-right"></i>
      </a>
      <br><br>
    </div>
  </section>
</main>

<?php include php_root() . 'php/lp-footer.php'; ?>