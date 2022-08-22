<?php
include $_SERVER['DOCUMENT_ROOT'] . "/api/light.php";

$title = "Buy your freedom back! Learn how to score premium dev jobs - Todorescu.com";
include php_root() . 'php/lp-header.php';
?>

<main id="main">
  <section id="hero" class="hero">
    <div class="container" style="margin-top: 50px; text-align: center;">
      <h1 style="color: #fa643f;font-size: 2.25rem;">
        Unlimited premium projects at your feet.
      </h1>
      <h2 style="color: white;font-size: 1.5rem;">
        Be so in demand, you get to choose based on passion.
      </h2>
      <br><br>
      <a href="<?= root() . 'story' ?>" class="btn-read-more">
        <span>Read Tudor's story</span>
        <i class="bi bi-arrow-right"></i>
      </a>
    </div>
  </section>
</main>

<?php include php_root() . 'php/lp-footer.php'; ?>
</body>

</html>