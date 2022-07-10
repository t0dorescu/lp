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
  <link href="<?= root() ?>membership/assets/vendor/bootstrap/css/bootstrap.min.css<?= v_adm() ?>" rel="stylesheet">
  <link href="<?= root() ?>membership/assets/vendor/bootstrap-icons/bootstrap-icons.css<?= v_adm() ?>" rel="stylesheet">
  <link href="<?= root() ?>membership/assets/vendor/boxicons/css/boxicons.min.css<?= v_adm() ?>" rel="stylesheet">
  <link href="<?= root() ?>membership/assets/vendor/quill/quill.snow.css<?= v_adm() ?>" rel="stylesheet">
  <link href="<?= root() ?>membership/assets/vendor/quill/quill.bubble.css<?= v_adm() ?>" rel="stylesheet">
  <link href="<?= root() ?>membership/assets/vendor/remixicon/remixicon.css<?= v_adm() ?>" rel="stylesheet">
  <link href="<?= root() ?>membership/assets/vendor/simple-datatables/style.css<?= v_adm() ?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css<?= v_adm() ?>" rel="stylesheet">
</head>
<body>
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="d-flex align-items-center justify-content-between">
      <i class="bi bi-list toggle-sidebar-btn"></i>
      
        <?php if ($session['member']['plan'] === 'free') : ?>
          <span class="header-plan-txt">
            <strong>Free trial</strong>
            <br> 8 days left 
            <button 
              class="btn btn-sm btn-primary d-none d-md-block"
              style="
                margin-top: -1rem;
                margin-left: .5rem;
                float: right;
              ">Upgrade plan</button>
          </span>
        
        <?php elseif ($session['member']['plan'] === 'junior') : ?>
          <span class="header-plan-txt">
            <button class="btn btn-sm btn-primary">Upgrade plan</button>
          </span>
        
        <?php elseif ($session['member']['plan'] === 'midlevel') : ?>
          <span class="header-plan-txt">
            <button class="btn btn-sm btn-primary">Upgrade plan</button>
          </span>
        
        <?php endif ?>
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
        <?php include php_root().'membership/php/templates/notifications-header.php' ?>
        <?php include php_root().'membership/php/templates/messages-header.php' ?>
        <?php include php_root().'membership/php/templates/profile-header.php' ?>
      </ul> 
    </nav><!-- End Icons Navigation -->
  </header><!-- End Header -->