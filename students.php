<?php
include $_SERVER['DOCUMENT_ROOT'] . "/api/index.php";
$session = (new Api())->get_session($_COOKIE['token']);

$ignore = array(
  'header' => false,
  'footer' => false,
  'menu' => false
);

$title = "Confessions from actual students - Todorescu.com";
include php_root() . 'php/lp-header.php';
?>

<main id="main">
    <section id="confessions" class="testimonials" style="background:black; margin-top: 60px;opacity: .95">
        <div class="container" data-aos="fade-up">
            <header class="section-header">
                <img src="<?= root() . 'assets/img/confessions-text.png' ?>" style="width: 100%;" />
            </header>
            <div class="row">
                <div class="col-lg-6 col-md-12 testimonial-new-item">
                    <video controls="controls" poster="<?= root() . 'assets/img/radu-thumb_.jpg' ?>">
                        <source src="<?= root() . 'assets/video/interviu-radu.mp4' ?>" type="video/mp4">
                    </video>
                    <div class="text" style="padding: 0 20px;">
                        Radu went from mediocre job to <strong>getting hired today</strong>. Watch his impressive story of transformation, he finally works a serious vue.js project.
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 testimonial-new-item">
                    <video controls="controls" poster="<?= root() . 'assets/img/robert-thumb_.jpg' ?>">
                        <source src="<?= root() . 'assets/video/interviu-robert.mp4' ?>" type="video/mp4">
                    </video>
                    <div class="text" style="padding: 0 20px;">
                        Tudor helped Robert <strong>kickstart his programming journey</strong> and got him focused on javascript.
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 testimonial-new-item">
                    <video controls="controls" poster="<?= root() . 'assets/img/mihnea-thumb_.jpg' ?>">
                        <source src="<?= root() . 'assets/video/interviu-mihnea.mp4' ?>" type="video/mp4">
                    </video>
                    <div class="text" style="padding: 0 20px;">
                        Mihnea got help on how a programmer should think. Concepts that take one month to grasp, <strong>took one week</strong>.
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 testimonial-new-item">
                    <video controls="controls" poster="<?= root() . 'assets/img/alina-thumb_.jpg' ?>">
                        <source src="<?= root() . 'assets/video/interviu-alina.mp4' ?>" type="video/mp4">
                    </video>
                    <div class="text" style="padding: 0 20px;">
                        Alina switched from a marketing career to landing her first one-month trial for a <strong>fulltime junior web developer position.</strong>.
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 testimonial-new-item">
                    <video controls="controls" poster="<?= root() . 'assets/img/petrisor-thumb_.jpg' ?>">
                        <source src="<?= root() . 'assets/video/interviu-petrisor.mp4' ?>" type="video/mp4">
                    </video>
                    <div class="text" style="padding: 0 20px;">
                        Petrisor says Tudor's mentoring made a huge difference in his progress.<strong>"Tudor's a natural"</strong>.
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 testimonial-new-item">
                    <video controls="controls" poster="<?= root() . 'assets/img/ovidiu-thumb_.jpg' ?>">
                        <source src="<?= root() . 'assets/video/interviu-ovidiu.mp4' ?>" type="video/mp4">
                    </video>
                    <div class="text" style="padding: 0 20px;">
                        "From Tudor I've learned directly senior developer stuff" - Ovidiu.
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 testimonial-new-item">
                    <video controls="controls" poster="<?= root() . 'assets/img/cristi-thumb_.jpg' ?>">
                        <source src="<?= root() . 'assets/video/interviu-cristi.mp4' ?>" type="video/mp4">
                    </video>
                    <div class="text" style="padding: 0 20px;">
                        Cristi saved his soul from tutorial hell and skyrocketed his skills.
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include php_root() . 'php/lp-footer.php'; ?>
</body>
</html>