<!doctype html>
<html lang="en">
<head>

  <?php if (!$isDev) : ?>
    <!-- google Analytics -->
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
  <link href="<?= root() . 'assets/img/tudor-todorescu.jpg' ?>" rel="icon">
  <link href="<?= root() . 'assets/img/tudor-todorescu.jpg' ?>" rel="apple-touch-icon">

  <!-- Vendor CSS Files -->
  <link href="<?= root() . 'assets/vendor/bootstrap/css/bootstrap.min.css' . v_lp() ?>" rel="stylesheet" />
  <link href="<?= root() . 'assets/vendor/bootstrap-icons/bootstrap-icons.css' . v_lp() ?>" rel="stylesheet" />
  <link href="<?= root() . 'assets/vendor/cookieconsent/cookieconsent.css' . v_lp() ?>" rel="stylesheet" />

  <!-- Template Main CSS File -->
  <link href="<?= root() . 'assets/css/style.css' . v_lp() ?>" rel="stylesheet" />
</head>

<body style="background: url('<?= root().'assets/img/bg5.jpg' ?>');background-size: 100%;">
  <?php if (!$optin_page) : ?>
    <header id="header" class="header fixed-top">
      <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <div class="align-items-center">&nbsp;</div>

        <?php if (!$disabletopmenulink) : ?>
          <a href="<?= root() ?>" style="display: flex;">
        <?php else : ?>
          <div style="display: flex;">
        <?php endif ?>
          
          <img src="<?= root() ?>assets/img/tudor-todorescu.jpg" style="
            margin-right: 10px;
            margin-top: 7px;
            border-radius: 3px;
            user-select: none;
          "> 
          <p style="
            font-weight: bold;
            color: white;
            font-size: 1.5rem;
            margin: 0;
            padding-top: 5px;
            font-family: oswald;
            letter-spacing: 2px;
            user-select: none;
          ">TODORESCU</p>

        <?php if (!$disabletopmenulink) : ?>
          </a>
        <?php else : ?>
          </div>
        <?php endif ?>

        <nav id="navbar" class="navbar">
          <ul>
            <?php if (!$hidemenu) : ?>
              <li><a class="nav-link" href="<?= root() ?>">Home</a></li>
              <li><a class="nav-link" href="<?= root() . 'story' ?>">Story</a></li>
              <li><a class="nav-link" href="<?= root() . 'students' ?>">Students</a></li>
              <li><a class="nav-link" href="<?= root() . 'results' ?>">Results</a></li>
              <li><a class="nav-link" href="<?= root() . 'support' ?>">Support</a></li>
              <?php if (!$hidewaitinglist) : ?>
                <li><a class="getstarted scrollto" href="#footer">Waiting list</a></li>
              <?php endif ?>
            </ul>
            <i class="bi bi-list mobile-nav-toggle" style="color: white;"></i>
            <?php endif ?>
          </nav>
      </div>
    </header>
  <?php endif ?>