<!doctype html>
<html lang="en">
<head>

  <?php if (!$isDev) : ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-122326504-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());

      gtag('config', 'UA-122326504-1');
    </script>

    <!-- tickfuckingtock pixel -->
    <script>
    !function (w, d, t) {
      w.TiktokAnalyticsObject=t;var ttq=w[t]=w[t]||[];ttq.methods=["page","track","identify","instances","debug","on","off","once","ready","alias","group","enableCookie","disableCookie"],ttq.setAndDefer=function(t,e){t[e]=function(){t.push([e].concat(Array.prototype.slice.call(arguments,0)))}};for(var i=0;i<ttq.methods.length;i++)ttq.setAndDefer(ttq,ttq.methods[i]);ttq.instance=function(t){for(var e=ttq._i[t]||[],n=0;n<ttq.methods.length;n++)ttq.setAndDefer(e,ttq.methods[n]);return e},ttq.load=function(e,n){var i="https://analytics.tiktok.com/i18n/pixel/events.js";ttq._i=ttq._i||{},ttq._i[e]=[],ttq._i[e]._u=i,ttq._t=ttq._t||{},ttq._t[e]=+new Date,ttq._o=ttq._o||{},ttq._o[e]=n||{};var o=document.createElement("script");o.type="text/javascript",o.async=!0,o.src=i+"?sdkid="+e+"&lib="+t;var a=document.getElementsByTagName("script")[0];a.parentNode.insertBefore(o,a)};

      ttq.load('CC7OOFRC77U3FDT30I4G');
      ttq.page();
    }(window, document, 'ttq');
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

<body style="background: url('<?= root().'assets/img/bg2.jpg' ?>');background-size: 100%;">
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
          <i class="bi bi-list mobile-nav-toggle color-white" style="color: white;"></i>
        </nav>
      </div>
    </header>
  <?php endif ?>