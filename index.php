<?php
include $_SERVER['DOCUMENT_ROOT'] . "/api/light.php";

$showterms = true;

$title = "Unlimited premium web-dev projects - Todorescu.com";
include php_root() . 'php/lp-header.php';
?>

<main id="main">
  <section class="hero">
    <div class="container main-container">
      <h1>
        Unlimited premium web-dev projects
      </h1>
      <h2>
        Be so in demand, you get to choose based on passion
      </h2>
      <br><br>
      <a href="<?= root() . 'story' ?>" class="btn-read-more">
        <span style="font-family: oswald;">FIND OUT MORE</span>
        <i class="bi bi-arrow-right"></i>
      </a>
      <br><br>
    </div>
  </section>
</main>

<?php include php_root() . 'php/lp-footer.php'; ?>