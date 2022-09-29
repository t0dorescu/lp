<?php
die();
include $_SERVER['DOCUMENT_ROOT'] . "/api/light.php";

$showterms = true;

$title = "Robert testimonial - Todorescu.com";
include php_root() . 'php/lp-header.php';
?>

<style>
    .main-container {
        max-width: 55vw;
    }
    @media (max-width: 768px) {
        .main-container {
            max-width: 95vw;
        }
    }
</style>

<main id="main">
    <section class="confessions">
        <div class="container main-container">
            <div class="row">
                <div class="col-12 flex-middle">
                    <div class="confession-new-item">
                        <video controls="controls" poster="<?= root() . 'assets/img/robert-thumb_.jpg' ?>">
                            <source src="<?= root() . 'assets/video/interviu-robert.mp4' ?>" type="video/mp4">
                        </video>
                        <div class="text">
                            Tudor helped Robert <strong>kickstart his programming journey</strong> and got him focused on what matters, JavaScript.
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include php_root() . 'php/lp-footer.php'; ?>