<?php
include $_SERVER['DOCUMENT_ROOT'] . "/api/light.php";

$hidewaitinglist = true;
$showterms = true;

$title = "Limited training video - Todorescu.com";
include php_root() . 'php/lp-header.php';
?>

<main id="main">
    <section class="hero" style="padding-bottom: 0;">
        <div class="container main-container" style="max-width: 95vw; opacity: .95; margin-top: 60px;">
            <div class="row">
                <div class="col-lg-6 col-12 flex-middle">
                    <h1 style="font-family: oswald;color: white; font-weight: 400;">
                        “They Laughed When I Applied For A <br><span style="font-family: oswald;color: var(--primary-color);">Mid-Level Position With A 80% Raise.</span><br> Then I Showed Them This Email…”
                    </h1>
                    <br><br>
                    <!-- background: #3b8753; -->
                    <a href="<?= root() . 'story' ?>" class="btn-read-more" style="width: auto; padding: 30px;margin: 0 auto;">
                        <i class="bi bi-envelope" style="margin-right: 10px;"></i>
                        <span style="font-size: 1.25rem; letter-spacing: 1px;font-family: Arial;font-weight: 500;">Email me the video</span>
                    </a>
                    <br><br>
                </div>
                <div class="col-lg-6 col-12" style="text-align: left;">
                    <img src="<?= root().'assets/img/training.jpg' ?>" style="width: 100%; height: auto;border-radius: 5px;" />
                </div>
            </div>
      
        </div>
    </section>
</main>

<?php include php_root() . 'php/lp-footer.php'; ?>