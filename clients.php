<?php
include $_SERVER['DOCUMENT_ROOT'] . "/api/light.php";

$showterms = true;
$hidewaitinglist = true;
$title = "Testimonials - Todorescu.com";

include php_root() . 'php/lp-header.php';
?>

<style>
    .main-container {
        max-width: 45vw;
    }

    @media (max-width: 768px) {
        .main-container {
            max-width: 95vw;
        }
    }

    .confession-new-item .text,
    .confession-new-item .text strong,
    .confession-new-item .text b {
        font-size: 1.5rem;
        font-family: Oswald !important;
    }
</style>

<main id="main">
    <section class="confessions">
        <div class="container main-container">
            <div class="row">
                <div class="col-12 flex-middle">
                    <div class="confession-new-item">
                        <video controls="controls" poster="<?= root() . 'assets/img/cristi-thumb_.jpg' ?>">
                            <source src="<?= root() . 'assets/video/interviu-cristi.mp4' ?>" type="video/mp4">
                        </video>
                        <div class="text">
                            While still a college student, Cristi landed his <b>first junior web-developer role</b>, with a one month internship first.
                        </div>
                    </div>
                </div>
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
                <div class="col-12 flex-middle">
                    <div class="confession-new-item">
                        <video controls="controls" poster="<?= root() . 'assets/img/mihnea-thumb_.jpg' ?>">
                            <source src="<?= root() . 'assets/video/interviu-mihnea.mp4' ?>" type="video/mp4">
                        </video>
                        <div class="text">
                            Mihnea is finishing high-school, he got help with <strong>computational thinking</strong>
                        </div>
                    </div>
                </div>
                <div class="col-12 flex-middle">
                    <div class="confession-new-item">
                        <video controls="controls" poster="<?= root() . 'assets/img/alina-thumb_.jpg' ?>">
                            <source src="<?= root() . 'assets/video/interviu-alina.mp4' ?>" type="video/mp4">
                        </video>
                        <div class="text">
                            Alina transitioned from marketing career and became a <strong>fulltime junior web developer</strong>
                        </div>
                    </div>
                </div>
                <div class="col-12 flex-middle">
                    <div class="confession-new-item">
                        <video controls="controls" poster="<?= root() . 'assets/img/petrisor-thumb_.jpg' ?>">
                            <source src="<?= root() . 'assets/video/interviu-petrisor.mp4' ?>" type="video/mp4">
                        </video>
                        <div class="text">
                            Petrisor says Tudor's mentoring made a huge difference in his progress.<strong>"Tudor's a natural"</strong>.
                        </div>
                    </div>
                </div>
                <div class="col-12 flex-middle">
                    <div class="confession-new-item">
                        <video controls="controls" poster="<?= root() . 'assets/img/ovidiu-thumb_.jpg' ?>">
                            <source src="<?= root() . 'assets/video/interviu-ovidiu.mp4' ?>" type="video/mp4">
                        </video>
                        <div class="text">
                            "Tudor taught me directly how a <strong>senior developer</strong> operates" - Ovidiu
                        </div>
                    </div>
                </div>
                <div class="col-sm-12"></div>
                <div class="col-12 flex-middle">
                    <div class="confession-new-item">
                        <video controls="controls" poster="<?= root() . 'assets/img/radu-thumb_.jpg' ?>">
                            <source src="<?= root() . 'assets/video/interviu-radu.mp4' ?>" type="video/mp4">
                        </video>
                        <div class="text">
                            Radu went from a junior job to <strong>getting his first mid-level position</strong>, using our procedure.
                        </div>
                    </div>
                </div>
                <div class="col-sm-12"></div>
            </div>
            <div style="background: black;">
                <br><br>
                <a href="<?= root() . 'wait' ?>" class="btn-read-more">
                    <span style="font-family: oswald;">WAITING LIST</span>
                    <i class="bi bi-arrow-right"></i>
                </a>
                <br><br><br>
            </div>
        </div>
    </section>
</main>

<?php include php_root() . 'php/lp-footer.php'; ?>