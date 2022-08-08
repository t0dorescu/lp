<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title><?= $title ?></title>

  <meta content="Coding is not easy, but I've made it fun! Learn to code JavaScript as an absolute beginner" name="description" />
  <meta content="javascript, learn coding, learn javascript, javascript course, javascript for beginners" name="keywords" />

  <!-- Favicons -->
  <link href="assets/img/favicon.jpg" rel="icon">
  <link href="assets/img/apple-touch-icon.jpg" rel="apple-touch-icon">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css<?= v_lp() ?>" rel="stylesheet" />
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css<?= v_lp() ?>" rel="stylesheet" />
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css<?= v_lp() ?>" rel="stylesheet" />
  <link href="assets/vendor/glightbox/css/glightbox.min.css<?= v_lp() ?>" rel="stylesheet" />
  <link href="assets/vendor/remixicon/remixicon.css<?= v_lp() ?>" rel="stylesheet" />
  <link href="assets/vendor/swiper/swiper-bundle.min.css<?= v_lp() ?>" rel="stylesheet" />
  <link href="assets/vendor/cookieconsent/cookieconsent.css<?= v_lp() ?>" rel="stylesheet" />

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css<?= v_lp() ?>" rel="stylesheet" />
</head>

<body>
  <?php if (!$ignore['header']) : ?>
    <header 
      id="header"
      class="header fixed-top"
      style="
        background: black;
        opacity: .9;
      "
    >
      <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <div class="align-items-center">&nbsp;</div>
        <?php if (!$session['is_logged_in']) : ?>
          <img 
            src="<?= root().'assets/img/tudor-todorescu.jpg' ?>"
            style="
              width: 30px;
              height: 30px;
            "
          />
        <?php else : ?>
          <a
            class="btn-standard"
            href="<?= root().'membership' ?>"
          >
            <i class="bi bi-file-person"></i>
            Members area
          </a>
        <?php endif ?>
        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link scrollto" href="#about">About</a></li>
            <li><a class="nav-link scrollto" href="#confessions">Confessions</a></li>
            <li><a class="nav-link scrollto" href="#support">Support</a></li>
            <?php if (!$session['is_logged_in']) : ?>
              <li><a class="getstarted scrollto" href="#newsletter">Waiting list</a></li>
            <?php else : ?>
              <li><a class="getstarted scrollto" href="/membership">Members area</a></li>
            <?php endif ?>
            </ul>
          <i class="bi bi-list mobile-nav-toggle" style="color: white;"></i>
        </nav>
      </div>
    </header>
  <?php endif ?>