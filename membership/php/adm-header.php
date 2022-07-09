<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?= $title ?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= root() ?>assets/img/favicon.jpg" rel="icon">
  <link href="<?= root() ?>assets/img/apple-touch-icon.jpg" rel="apple-touch-icon">

  <!-- Vendor CSS Files -->
  <link href="<?= root() ?>membership/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= root() ?>membership/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= root() ?>membership/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= root() ?>membership/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="<?= root() ?>membership/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="<?= root() ?>membership/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?= root() ?>membership/assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="d-flex align-items-center justify-content-between">
      <i class="bi bi-list toggle-sidebar-btn"></i>
      
      <!--
        <?php if ($session['member']['plan'] === 'free') : ?>
          <span>Free trial - 8 days left <button class="btn btn-sm btn-primary">Upgrade</button></span>
        <?php endif ?>
      -->
    </div>

    <!-- SEARCH -->
    <!-- ============= -->
    <!-- <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div> -->

    <!-- ============= -->
    <!-- NOTIFICATIONS -->
    <!-- ============= -->
    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">
        <!-- SEARCH ICON -->
        <!-- <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li> -->
        <?php include 'templates/notifications-header.php' ?>
        <?php include 'templates/messages-header.php' ?>
        <?php include 'templates/profile-header.php' ?>
      </ul> 
    </nav><!-- End Icons Navigation -->
  </header><!-- End Header -->