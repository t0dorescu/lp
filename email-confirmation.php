<?php
include $_SERVER['DOCUMENT_ROOT'] . "/api/light.php";

$hidewaitinglist = true;
$showterms = false;
$hidemenu = true;
$hidesocials = true;
$disabletopmenulink = true;
$hidecookieconset = true;

$title = "Confirm your email address - Todorescu.com";
include php_root() . 'php/lp-header.php';
?>

<style>
    h1 {
        font-family: oswald;
        color: white !important;
    }
    h2 {
        font-family: oswald;
        color: var(--primary-color) !important;
    }
    .footer {
      display: none !important;
    }
</style>

<main id="main">
  <section class="hero">
    <div class="container main-container">
      <br><br>
      <h1>
        We've sent a confirmation link to your e-mail.
      </h1>
      <br>
      <h2>
        If you haven't received <br>it check your SPAM folder
      </h2>
      <br><br><br><br>
    </div>
  </section>
</main>

<?php include php_root() . 'php/lp-footer.php'; ?>