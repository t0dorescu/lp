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
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
      <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <div class="align-items-center">&nbsp;</div>
        
        <?php if (!$session['is_logged_in']) : ?>
          <a 
            class="btn-standard"
            onclick="openLoginModal()"
          >Login</a>
          <a href="#pricing" >Register</a>
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
            <li><a class="nav-link scrollto active" href="#hero">Why</a></li>
            <li><a class="nav-link scrollto" href="#about">About</a></li>
            <li><a class="nav-link scrollto" href="#team">Team</a></li>
            <?php if (!$session['is_logged_in']) : ?>
              <li><a class="nav-link scrollto" href="#pricing">Pricing</a></li>
            <?php endif ?>
            <li><a class="nav-link scrollto" href="#testimonials">Testimonials</a></li>
            <li><a class="nav-link scrollto" href="#faq">FAQ</a></li>
            <!-- <li><a href="<?= root().'blog' ?>">Blog</a></li> -->
            <li><a class="nav-link scrollto" href="#support">Support</a></li>
            <?php if (!$session['is_logged_in']) : ?>
              <li><a class="getstarted scrollto" href="#pricing">Enroll</a></li>
            <?php else : ?>
              <li><a class="getstarted scrollto" href="/membership">Members area</a></li>
            <?php endif ?>
            </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
      </div>
    </header><!-- End Header -->
  <?php endif ?>