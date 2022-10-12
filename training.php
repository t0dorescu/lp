<?php
include $_SERVER['DOCUMENT_ROOT'] . "/api/light.php";

$hidewaitinglist = true;
$showterms = true;
$hidemenu = true;
$hidesocials = true;
$disabletopmenulink = true;
$hidecookieconset = true;

$title = "Training Video - Todorescu.com";
include php_root() . 'php/lp-header.php';
?>

<?php if (!$isDev) : ?>
    <script>
        setTimeout(async () => {
            await window.lintrk('track', {
                conversion_id: 10422729
            });
        }, 1000)
    </script>
<?php endif ?>

<style>
    .main-container {
        max-width: 65vw;
    }

    h1 {
        font-family: oswald;
        color: white !important;
    }

    h2 {
        font-family: oswald;
        color: var(--primary-color) !important;
    }

    .btn-read-more {
        width: auto;
        padding: 30px;
        margin: 30px auto;
        border: 0;
    }

    .btn-read-more>* {
        margin: 5px;
    }

    .btn-read-more span {
        font-size: 1.25rem;
        letter-spacing: 1px;
        font-family: Arial;
        font-weight: 500;
    }

    iframe {
        border: 5px solid white;
        border-radius: 10px;
        width: 70%;
    }

    .confession-new-item .text,
    .confession-new-item .text strong,
    .confession-new-item .text b {
        font-size: 1.25rem;
        font-family: Oswald !important;
    }

    @media (max-width: 768px) {
        h1.title,
        h2.title {
            font-size: 1.5rem;
        }

        .btn-read-more {
            padding: 25px 15px;
        }

        .btn-read-more i {
            display: none;
        }

        .btn-read-more span {
            font-size: .8rem;
        }

        iframe {
            width: 100%;
        }

        .main-container {
            max-width: 95vw;
        }
    }
</style>

<main id="main">
    <section class="hero">
        <div class="container main-container mt-0">
            <br><br>
            <h1 class="title">
            GET HIRED AS A WEB DEVELOPER<br>
                        IN UNDER 10 WEEKS<br>
            </h1>
            <h2 class="title">
                ... BY USING THE TODORESCU METHOD™
            </h2>
            <br>
            <iframe src="https://www.youtube-nocookie.com/embed/yXvuctXgOYg?modestbranding=1&autohide=1&showinfo=0&controls=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <br><br><br>
            <a href="<?= root() . 'call' ?>" class="btn-read-more" target="_blank">
                <i class="bi bi-calendar-date"></i>
                <span style="font-family: oswald;">BOOK MY INFORMATION CALL</span>
            </a>
            <br><br><br><br><br>
            <h1 class="title" style="font-size: 2rem;">
                CAN THIS WORK FOR ME?
            </h1>
            <h2 class="title">
                LOOK HOW IT TURNED OUT FOR OTHERS JUST LIKE YOU...
            </h2>
            <br>
            <div class="confessions">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12 flex-middle">
                        <div class="confession-new-item">
                            <video controls="controls" poster="<?= root() . 'assets/img/alina-thumb_.jpg' ?>">
                                <source src="<?= root() . 'assets/video/interviu-alina.mp4' ?>" type="video/mp4">
                            </video>
                            <div class="text">
                                Alina switched from a marketing career to a <strong>fulltime junior web developer position.</strong>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12 flex-middle">
                        <div class="confession-new-item">
                            <video controls="controls" poster="<?= root() . 'assets/img/radu-thumb_.jpg' ?>">
                                <source src="<?= root() . 'assets/video/interviu-radu.mp4' ?>" type="video/mp4">
                            </video>
                            <div class="text">
                                Radu went from a junior job to <strong>getting his first mid-level position</strong>, using our method.
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12 flex-middle">
                        <div class="confession-new-item">
                            <video controls="controls" poster="<?= root() . 'assets/img/ovidiu-thumb_.jpg' ?>">
                                <source src="<?= root() . 'assets/video/interviu-ovidiu.mp4' ?>" type="video/mp4">
                            </video>
                            <div class="text">
                                "Tudor taught me directly how a <strong>senior developer</strong> operates" - Ovidiu.
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12 flex-middle">
                        <div class="confession-new-item">
                            <video controls="controls" poster="<?= root() . 'assets/img/robert-thumb_.jpg' ?>">
                                <source src="<?= root() . 'assets/video/interviu-robert.mp4' ?>" type="video/mp4">
                            </video>
                            <div class="text">
                                Tudor helped Robert <strong>kickstart his programming journey</strong> and got him focused on what matters.
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
                            <video controls="controls" poster="<?= root() . 'assets/img/petrisor-thumb_.jpg' ?>">
                                <source src="<?= root() . 'assets/video/interviu-petrisor.mp4' ?>" type="video/mp4">
                            </video>
                            <div class="text">
                                Petrisor says Tudor's mentoring made a huge difference in his progress.<strong>"Tudor's a natural"</strong>.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include php_root() . 'php/lp-footer.php'; ?>