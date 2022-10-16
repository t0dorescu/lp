<?php
include $_SERVER['DOCUMENT_ROOT'] . "/api/light.php";

$showterms = true;
$hidewaitinglist = true;
$page = 'home';
$title = "I help people get their first web development job fast - Todorescu.com";

include php_root() . 'php/lp-header.php';
?>

<main id="main">
  <section class="hero">
    <div class="container main-container">
      <img src="<?= root() ?>assets/img/tudor-front.png" style="width: 300px; height: auto;" />
      <br><br>
      <h1 style="font-family: Oswald;font-weight: 400;">
        Hi, I'm Tudor Todorescu
      </h1>
      <h2 style="font-family: Oswald;font-weight: 400;">
      ... and I help people get their <br>
      first web development job fast<br> 
      <small style="font-family: Oswald;">(under 10 weeks)</small>
      </h2>
      <br><br>
      <a href="<?= root() . 'story' ?>" class="btn-read-more">
        <span style="font-family: oswald;">READ MY STORY</span>
        <i class="bi bi-arrow-right"></i>
      </a>
      <br><br>
    </div>
  </section>
</main>

<?php include php_root() . 'php/lp-footer.php'; ?>