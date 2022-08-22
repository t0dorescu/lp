<?php
include $_SERVER['DOCUMENT_ROOT'] . "/api/light.php";

$title = "Confessions from actual students - Todorescu.com";
include php_root() . 'php/lp-header.php';
?>

<main id="main">
    <section class="confessions" style="margin-top: 50px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 flex-middle">
                    <div class=" testimonial-new-item">
                        <video controls="controls" poster="<?= root() . 'assets/img/radu-thumb_.jpg' ?>">
                            <source src="<?= root() . 'assets/video/interviu-radu.mp4' ?>" type="video/mp4">
                        </video>
                        <div class="text" style="padding: 0 20px;">
                            Radu went from mediocre job to <strong>getting hired today</strong>. Watch his impressive story.
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 flex-middle">
                    <div class=" testimonial-new-item">
                        <video controls="controls" poster="<?= root() . 'assets/img/robert-thumb_.jpg' ?>">
                            <source src="<?= root() . 'assets/video/interviu-robert.mp4' ?>" type="video/mp4">
                        </video>
                        <div class="text" style="padding: 0 20px;">
                            Tudor helped Robert <strong>kickstart his programming journey</strong> and got him focused on javascript.
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 flex-middle">
                    <div class=" testimonial-new-item">
                        <video controls="controls" poster="<?= root() . 'assets/img/mihnea-thumb_.jpg' ?>">
                            <source src="<?= root() . 'assets/video/interviu-mihnea.mp4' ?>" type="video/mp4">
                        </video>
                        <div class="text" style="padding: 0 20px;">
                            Mihnea got help with thinking. Concepts that take one month to grasp, <strong>took one week</strong>.
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 flex-middle">
                    <div class=" testimonial-new-item">
                        <video controls="controls" poster="<?= root() . 'assets/img/alina-thumb_.jpg' ?>">
                            <source src="<?= root() . 'assets/video/interviu-alina.mp4' ?>" type="video/mp4">
                        </video>
                        <div class="text" style="padding: 0 20px;">
                            Alina switched from a marketing career to a <strong>fulltime junior web developer position.</strong>.
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 flex-middle">
                    <div class=" testimonial-new-item">
                        <video controls="controls" poster="<?= root() . 'assets/img/petrisor-thumb_.jpg' ?>">
                            <source src="<?= root() . 'assets/video/interviu-petrisor.mp4' ?>" type="video/mp4">
                        </video>
                        <div class="text" style="padding: 0 20px;">
                            Petrisor says Tudor's mentoring made a huge difference in his progress.<strong>"Tudor's a natural"</strong>.
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 flex-middle">
                    <div class=" testimonial-new-item">
                        <video controls="controls" poster="<?= root() . 'assets/img/ovidiu-thumb_.jpg' ?>">
                            <source src="<?= root() . 'assets/video/interviu-ovidiu.mp4' ?>" type="video/mp4">
                        </video>
                        <div class="text" style="padding: 0 20px;">
                            "From Tudor I've learned directly senior developer stuff" - Ovidiu.
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12"></div>
                <div class="col-lg-4 col-md-6 col-12 flex-middle">
                    <div class=" testimonial-new-item">
                        <video controls="controls" poster="<?= root() . 'assets/img/cristi-thumb_.jpg' ?>">
                            <source src="<?= root() . 'assets/video/interviu-cristi.mp4' ?>" type="video/mp4">
                        </video>
                        <div class="text" style="padding: 0 20px;">
                            Cristi saved his soul from tutorial hell and skyrocketed his skills.
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12"></div>
            </div>
        </div>
    </section>
</main>

<?php include php_root() . 'php/lp-footer.php'; ?>
</body>

</html>