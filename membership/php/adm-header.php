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
      <a href="<?= root() ?>  " class="logo d-flex align-items-center">
        <img src="<?= root() ?>assets/img/tudor-todorescu.jpg" alt="">
        <span class="d-none d-lg-block"><?= strtoupper($session['member']['plan']) ?> PLAN</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
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
        <li class="nav-item dropdown">
          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">0</span>
          </a>
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 0 new notifications
              <!-- <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2 text-thin">View all</span></a> -->
            </li>
            <!-- <li>
              <hr class="dropdown-divider">
            </li>
            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li> -->
          </ul><!-- End Notification Dropdown Items -->
        </li><!-- End Notification Nav -->

        <!-- ============= -->
        <!-- MESSAGES -->
        <!-- ============= -->
        <li class="nav-item dropdown">
          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">0</span>
          </a>
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 0 new messages
              <!-- <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2 text-thin">View all</span></a> -->
            </li>
            <!-- <li>
              <hr class="dropdown-divider">
            </li>
            <li class="message-item">
              <a href="#">
                <img src="<?= root() ?>assets/img/tudor-todorescu.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Maria Hudson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li> -->
          </ul><!-- End Messages Dropdown Items -->
        </li><!-- End Messages Nav -->
        <?= php_root()."membership/php/templates/profile-header.php" ?>
      </ul> 
    </nav><!-- End Icons Navigation -->
  </header><!-- End Header -->