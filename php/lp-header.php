<!doctype html>
<html lang="en">

<head>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <?php if (!$isDev) : ?>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-122326504-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());

      gtag('config', 'UA-122326504-1');
    </script>
  <?php endif ?>

  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title><?= $title ?></title>

  <!-- Favicons -->
  <link href="<?= root() . 'assets/img/favicon.jpg' ?>" rel="icon">
  <link href="<?= root() . 'assets/img/tudor-todorescu.jpg' ?>" rel="apple-touch-icon">

  <!-- Vendor CSS Files -->
  <link href="<?= root() . 'assets/vendor/bootstrap/css/bootstrap.min.css' . v_lp() ?>" rel="stylesheet" />
  <link href="<?= root() . 'assets/vendor/bootstrap-icons/bootstrap-icons.css' . v_lp() ?>" rel="stylesheet" />
  <link href="<?= root() . 'assets/vendor/cookieconsent/cookieconsent.css' . v_lp() ?>" rel="stylesheet" />

  <!-- Template Main CSS File -->
  <link href="<?= root() . 'assets/css/style.css' . v_lp() ?>" rel="stylesheet" />
</head>

<body>
  <?php if (!$optin_page) : ?>
    <header id="header" class="header fixed-top">
      <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <div class="align-items-center">&nbsp;</div>
        <a href="<?= root() ?>">
          <img src="<?= root() . 'assets/img/tudor-todorescu.jpg' ?>" />
        </a>
        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link" href="<?= root() ?>">Home</a></li>
            <li><a class="nav-link" href="<?= root() . 'story' ?>">Story</a></li>
            <li><a class="nav-link" href="<?= root() . 'students' ?>">Students</a></li>
            <li><a class="nav-link" href="<?= root() . 'results' ?>">Results</a></li>
            <li><a class="nav-link" href="<?= root() . 'support' ?>">Support</a></li>
            <li><a class="getstarted scrollto" href="#footer">Waiting list</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle color-white"></i>
        </nav>
      </div>
    </header>
  <?php endif ?>