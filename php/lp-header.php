<!doctype html>
<html lang="en">
<head>
  
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <?php if (!$isDev) : ?>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-122326504-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-122326504-1');
    </script>

  <!-- tiktok pixel -->
  <script>
    !function (w, d, t) {
      w.TiktokAnalyticsObject=t;var ttq=w[t]=w[t]||[];ttq.methods=["page","track","identify","instances","debug","on","off","once","ready","alias","group","enableCookie","disableCookie"],ttq.setAndDefer=function(t,e){t[e]=function(){t.push([e].concat(Array.prototype.slice.call(arguments,0)))}};for(var i=0;i<ttq.methods.length;i++)ttq.setAndDefer(ttq,ttq.methods[i]);ttq.instance=function(t){for(var e=ttq._i[t]||[],n=0;n<ttq.methods.length;n++)ttq.setAndDefer(e,ttq.methods[n]);return e},ttq.load=function(e,n){var i="https://analytics.tiktok.com/i18n/pixel/events.js";ttq._i=ttq._i||{},ttq._i[e]=[],ttq._i[e]._u=i,ttq._t=ttq._t||{},ttq._t[e]=+new Date,ttq._o=ttq._o||{},ttq._o[e]=n||{};var o=document.createElement("script");o.type="text/javascript",o.async=!0,o.src=i+"?sdkid="+e+"&lib="+t;var a=document.getElementsByTagName("script")[0];a.parentNode.insertBefore(o,a)};

      ttq.load('CC0BE0BC77U26CFAPLGG');
      ttq.page();
    }(window, document, 'ttq');
    </script>
  <?php endif ?>

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
          <a href="<?= root() ?>">
            <img 
              src="<?= root().'assets/img/tudor-todorescu.jpg' ?>"
              style="
                width: 30px;
                height: 30px;
              "
            />
          </a>
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
            <?php if (!$ignore['menu']) : ?>
              <li><a class="nav-link scrollto" href="#about">About</a></li>
              <li><a class="nav-link scrollto" href="#confessions">Confessions</a></li>
              <li><a class="nav-link scrollto" href="<?= root().'results' ?>">Results</a></li>
              <li><a class="nav-link scrollto" href="#support">Support</a></li>
                <?php if (!$session['is_logged_in']) : ?>
                  <li><a class="getstarted scrollto" href="#newsletter">Waiting list</a></li>
                <?php else : ?>
                  <li><a class="getstarted scrollto" href="/membership">Members area</a></li>
                <?php endif ?>
              <?php else : ?>
                <li><a class="nav-link scrollto" href="<?= root() ?>">Home</a></li>
              <?php endif ?>
            </ul>
          <i class="bi bi-list mobile-nav-toggle" style="color: white;"></i>
        </nav>
      </div>
    </header>
  <?php endif ?>