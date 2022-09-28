<?php
die();
include $_SERVER['DOCUMENT_ROOT'] . "/api/light.php";

$showterms = true;

$title = "Mihnea testimonial - Todorescu.com";
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
                        <video controls="controls" poster="<?= root() . 'assets/img/mihnea-thumb_.jpg' ?>">
                            <source src="<?= root() . 'assets/video/interviu-mihnea.mp4' ?>" type="video/mp4">
                        </video>
                        <div class="text">
                            Mihnea got help with thinking. Concepts that take one month to grasp, <strong>now take less than a week</strong>.
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include php_root() . 'php/lp-footer.php'; ?>