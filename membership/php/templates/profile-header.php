<!-- ============= -->
<!-- PROFILE -->
<!-- ============= -->
<li class="nav-item dropdown pe-3">
    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
        <?php if ($session['member']['gravatar_url']) : ?>
            <img 
                src="<?= $session['member']['gravatar_url']; ?>"
                alt="Profile"
                class="rounded-circle"
            />
        <?php endif ?>
        <span class="d-none d-md-block dropdown-toggle ps-2">
            <?= substr($session['member']['first_name'], 0, 1) ?>. <?= $session['member']['last_name'] ?>
        </span>
    </a>
    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
        <li class="dropdown-header">
            <?php if ($session['member']['gravatar_url']) : ?>
                <img 
                    src="<?= $session['member']['gravatar_url']; ?>"
                    class="rounded-circle"
                />
                <div class="row">&nbsp;</div>
            <?php endif ?>
            <h6><?= $session['member']['first_name'] ?>, <?= $session['member']['last_name'] ?></h6>
            <span>
                <img src="<?= root() ?>assets/img/pricing-<?= $session['member']['plan'] ?>.png" alt="" style="height: 20px;" />
                <?= ucfirst($session['member']['plan']).' plan' ?>
            </span>
            <div class="row">&nbsp;</div>
        </li>
        <li>
            <hr class="dropdown-divider">
        </li>
        <li>
            <a class="dropdown-item d-flex align-items-center" href="my-profile">
            <i class="bi bi-person"></i>
            <span>My Profile</span>
            </a>
        </li>
        <li>
            <hr class="dropdown-divider">
        </li>
        <li>
            <a class="dropdown-item d-flex align-items-center" href="account-settings">
            <i class="bi bi-gear"></i>
            <span>Account Settings</span>
            </a>
        </li>
        <li>
            <hr class="dropdown-divider">
        </li>
        <li>
            <a class="dropdown-item d-flex align-items-center" href="support">
            <i class="bi bi-question-circle"></i>
            <span>Need Help?</span>
            </a>
        </li>
        <li>
            <hr class="dropdown-divider">
        </li>
        <li>
            <a class="dropdown-item d-flex align-items-center" href="logout">
            <i class="bi bi-box-arrow-right"></i>
            <span>Sign Out</span>
            </a>
        </li>
    </ul><!-- End Profile Dropdown Items -->
</li><!-- End Profile Nav -->