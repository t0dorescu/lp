<?php
include $_SERVER['DOCUMENT_ROOT'] . "/api/light.php";

$title = "Confessions from actual students - Todorescu.com";
include php_root() . 'php/lp-header.php';
?>

<main id="main">
    <section class="confessions">
        <div class="container main-container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 flex-middle">
                    <div class="confession-new-item">
                        <video controls="controls" poster="<?= root() . 'assets/img/cristi-thumb_.jpg' ?>">
                            <source src="<?= root() . 'assets/video/interviu-cristi.mp4' ?>" type="video/mp4">
                        </video>
                        <div class="text">
                            Using our consulting calls, Cristi <b>significantly upgraded his programming skills</b>, making him more desirable for companies
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 flex-middle">
                    <div class="confession-new-item">
                        <video controls="controls" poster="<?= root() . 'assets/img/robert-thumb_.jpg' ?>">
                            <source src="<?= root() . 'assets/video/interviu-robert.mp4' ?>" type="video/mp4">
                        </video>
                        <div class="text">
                            Tudor helped Robert <strong>kickstart his programming journey</strong> and got him focused on what matters, JavaScript.
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 flex-middle">
                    <div class="confession-new-item">
                        <video controls="controls" poster="<?= root() . 'assets/img/mihnea-thumb_.jpg' ?>">
                            <source src="<?= root() . 'assets/video/interviu-mihnea.mp4' ?>" type="video/mp4">
                        </video>
                        <div class="text">
                            Mihnea got help with thinking. Concepts that take one month to grasp, <strong>now take less than a week</strong>.
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 flex-middle">
                    <div class="confession-new-item">
                        <video controls="controls" poster="<?= root() . 'assets/img/alina-thumb_.jpg' ?>">
                            <source src="<?= root() . 'assets/video/interviu-alina.mp4' ?>" type="video/mp4">
                        </video>
                        <div class="text">
                            Alina switched from a marketing career to a <strong>fulltime junior web developer position.</strong>.
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 flex-middle">
                    <div class="confession-new-item">
                        <video controls="controls" poster="<?= root() . 'assets/img/petrisor-thumb_.jpg' ?>">
                            <source src="<?= root() . 'assets/video/interviu-petrisor.mp4' ?>" type="video/mp4">
                        </video>
                        <div class="text">
                            Petrisor says Tudor's mentoring made a huge difference in his progress.<strong>"Tudor's a natural"</strong>.
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 flex-middle">
                    <div class="confession-new-item">
                        <video controls="controls" poster="<?= root() . 'assets/img/ovidiu-thumb_.jpg' ?>">
                            <source src="<?= root() . 'assets/video/interviu-ovidiu.mp4' ?>" type="video/mp4">
                        </video>
                        <div class="text">
                            "Tudor taught me directly how a <strong>senior developer</strong> operates" - Ovidiu.
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12"></div>
                <div class="col-lg-4 col-md-6 col-12 flex-middle">
                    <div class="confession-new-item">
                        <video controls="controls" poster="<?= root() . 'assets/img/radu-thumb_.jpg' ?>">
                            <source src="<?= root() . 'assets/video/interviu-radu.mp4' ?>" type="video/mp4">
                        </video>
                        <div class="text">
                            Radu went from a junior job to <strong>getting his first mid-level position</strong>, using our methodologies.
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12"></div>
            </div>
        </div>
    </section>
</main>

<?php include php_root() . 'php/lp-footer.php'; ?>