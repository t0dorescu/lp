<?php
include $_SERVER['DOCUMENT_ROOT'] . "/api/light.php";

$hidewaitinglist = true;
$showterms = true;
$hidecookieconset = true;
$hidemenu = true;
$hidesocials = true;
$disabletopmenulink = true;
$hidecookieconset = true;

$title = "WebDevelopment RoadMap Bundle™ - Todorescu.com";
include php_root() . 'php/lp-header.php';
?>

<?php if (!$isDev) : ?>
    <script>
        setTimeout(async () => {
            await window.lintrk('track', {
                conversion_id: 10422777
            });
        }, 1000)
    </script>
<?php endif ?>

<script>
    async function startCheckout() {
        <?php if (!$isDev) : ?>
            await window.lintrk('track', {
                conversion_id: 10422785
            });
        <?php endif ?>

        window.location = 'https://buy.stripe.com/dR6cMY2N1gUX2e4bIL';
    }
</script>

<style>
    .main-container {
        max-width: 55vw;
    }

    .main-container {
        opacity: .95;
    }

    h1 {
        font-family: oswald;
        color: white !important;
        font-size: 1.5rem !important;
    }

    h1.subtitle {
        color: var(--primary-color) !important;
    }

    .warning-span {
        font-weight: bold;
        margin-top: 20px;
        background: red;
        color: white;
        font-size: 1rem;
        line-height: 1rem;
    }

    .fucking-p {
        padding-left: 0px;
        margin-left: -10px;
    }

    @media (max-width: 768px) {
        .main-container {
            max-width: 95vw;
        }

        .fucking-p {
            padding-left: 35px;
        }
    }
</style>

<main id="main">
    <section class="hero pb-0">
        <div class="container main-container">
            <h1>
                WebDevelopment RoadMap Bundle™
            </h1>
            <br>
            <span class="warning-span">
                80% DISCOUNT <br> ONE TIME LIMITED OFFER
            </span>
            <br><br>
            <h1 class="subtitle" style="color: white !important; text-align: center;">
                ALL FOR JUST<br>
                <strike style="color: red; font-size: 1.5rem;">$399</strike>
                <span style="color: lightgreen; font-size: 2.5rem">$80</span>
            </h1>
            <br><br>
            <a href="#" class="btn-read-more" onclick="startCheckout()" target="_blank">
                <span style="font-family: oswald;">ENROLL NOW</span>
                <i class="bi bi-arrow-right"></i>
            </a>
            <br><br><br>
            <h1 class="subtitle text-center">
                #3 UNIQUE SENIOR COURSES:
            </h1>

            <div class="row">
                <div class="col-sm-12 col-lg-4">
                    <br>
                    <img src="<?= root() ?>assets\img\courses\course1_thumb.jpg" style="width: 80%; height: auto; border: 2px solid white; border-radius: 5px;" />
                    <br><br>
                    <p class="color-white text-center">
                        <strong>➤ COURSE 1</strong> <br>
                        4 Unique Portfolio Web-Dev Projects
                    </p>
                </div>
                <div class="col-sm-12 col-lg-4">
                    <br>
                    <img src="<?= root() ?>assets\img\courses\course2_thumb.jpg" style="width: 80%; height: auto; border: 2px solid white; border-radius: 5px;" />
                    <br><br>
                    <p class="color-white text-center">
                        <strong>➤ COURSE 2</strong> <br>
                        The Miracles Of Canvas Element
                    </p>
                </div>
                <div class="col-sm-12 col-lg-4">
                    <br>
                    <img src="<?= root() ?>assets\img\courses\course3_thumb.jpg" style="width: 80%; height: auto; border: 2px solid white; border-radius: 5px;" />
                    <br> <br>
                    <p class="color-white text-center">
                        <strong>➤ COURSE 3</strong> <br>
                        Matrix Magic Falling Symbols
                    </p>
                </div>
            </div>
            <br>
            <a href="#" class="btn-read-more" onclick="startCheckout()" target="_blank">
                <span style="font-family: oswald;">ENROLL NOW</span>
                <i class="bi bi-arrow-right"></i>
            </a>
            <br><br><br>
            <h1 class="title">
                SHOULD YOU REALLY SIGN-UP?
            </h1>
            <br>
            <h1 class="subtitle">
                JUST LOOK HOW IT TURNED OUT FOR OTHERS LIKE YOU...
            </h1>
            <br>
            <div class="confessions">
                <div class="row">
                    <div class="col-lg-6 col-12 flex-middle">
                        <div class="confession-new-item">
                            <video controls="controls" poster="<?= root() . 'assets/img/petrisor-thumb_.jpg' ?>">
                                <source src="<?= root() . 'assets/video/interviu-petrisor.mp4' ?>" type="video/mp4">
                            </video>
                            <div class="text">
                                Petrisor says Tudor's mentoring made a huge difference in his progress.<strong>"Tudor's a natural"</strong>.
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 flex-middle">
                        <div class="confession-new-item">
                            <video controls="controls" poster="<?= root() . 'assets/img/robert-thumb_.jpg' ?>">
                                <source src="<?= root() . 'assets/video/interviu-robert.mp4' ?>" type="video/mp4">
                            </video>
                            <div class="text">
                                Tudor helped Robert <strong>kickstart his programming journey</strong> and got him focused on what matters, JavaScript.
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 flex-middle">
                        <div class="confession-new-item">
                            <video controls="controls" poster="<?= root() . 'assets/img/mihnea-thumb_.jpg' ?>">
                                <source src="<?= root() . 'assets/video/interviu-mihnea.mp4' ?>" type="video/mp4">
                            </video>
                            <div class="text">
                                Mihnea got help with thinking. Concepts that take one month to grasp, <strong>now take less than a week</strong>.
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 flex-middle">
                        <div class="confession-new-item">
                            <video controls="controls" poster="<?= root() . 'assets/img/alina-thumb_.jpg' ?>">
                                <source src="<?= root() . 'assets/video/interviu-alina.mp4' ?>" type="video/mp4">
                            </video>
                            <div class="text">
                                Alina switched from a marketing career to a <strong>fulltime junior web developer position.</strong>.
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 flex-middle">
                        <div class="confession-new-item">
                            <video controls="controls" poster="<?= root() . 'assets/img/ovidiu-thumb_.jpg' ?>">
                                <source src="<?= root() . 'assets/video/interviu-ovidiu.mp4' ?>" type="video/mp4">
                            </video>
                            <div class="text">
                                "Tudor taught me directly how a <strong>senior developer</strong> operates" - Ovidiu.
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 flex-middle">
                        <div class="confession-new-item">
                            <video controls="controls" poster="<?= root() . 'assets/img/radu-thumb_.jpg' ?>">
                                <source src="<?= root() . 'assets/video/interviu-radu.mp4' ?>" type="video/mp4">
                            </video>
                            <div class="text">
                                Radu went from a junior job to <strong>getting his first mid-level position</strong>, using our methodologies.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <h1>
                WebDevelopment RoadMap Bundle™
            </h1>
            <br>
            <span class="warning-span">
                80% DISCOUNT <br> ONE TIME LIMITED OFFER
            </span>
            <br><br>
            <h1 class="subtitle" style="color: white !important; text-align: center;">
                ALL FOR JUST<br>
                <strike style="color: red; font-size: 1.5rem;">$399</strike>
                <span style="color: lightgreen; font-size: 2.5rem">$80</span>
            </h1>
            <br><br>
            <a href="#" class="btn-read-more" onclick="startCheckout()" target="_blank">
                <span style="font-family: oswald;">ENROLL NOW</span>
                <i class="bi bi-arrow-right"></i>
            </a>
            <br><br><br><br>
            <div class="text-left">
                <div class="row">
                    <div class="col-sm-12 col-lg-5">
                        <img src="<?= root() ?>assets\img\courses\course1.jpg" style="width: 100%; height: auto; border: 2px solid white; border-radius: 5px;" />
                        <br><br>
                    </div>
                    <div class="col-sm-12 col-lg-7 flex-middle">
                        <p class="color-white">
                            Get ready to skyrocket your web development skills. Every aspiring or existing frontend developer should get this courses.
                            <br><br>
                            <strong>Here's why:</strong>
                            <br><br>
                            Build real-life useful projects you can add to your portfolio
                            <br>
                            Get tons of experience in html CSS and JavaScript
                            <br><br>
                            Code comprehensive projects from zero to completion
                            <br>
                            Master the most basic of basic building blocks of JavaScript
                        </p>
                    </div>
                </div>
                <br>
                <p class="color-white text-center">
                    <span style="color: var(--primary-color); font-weight: bold;">I will walk you through each small and confusing detail and make it clear for you. It will be a friendly one-to-one digital experience and I will give you as many metaphors as you need to truly understand JavaScript.</span>
                </p>
                <br>
                <div class="row">
                    <div class="col-sm-12 col-lg-5">
                        <img src="<?= root() ?>assets\img\courses\course2.jpg" style="width: 100%; height: auto; border: 2px solid white; border-radius: 5px;" />
                        <br><br>
                    </div>
                    <div class="col-sm-12 col-lg-7 flex-middle">
                        <p class="color-white">
                            <strong>Benefits:</strong>
                            <br><br>
                            ✔️ You will be able to properly read JavaScript code
                            <br><br>
                            ✔️ You'll be half way of landing that junior developer dream job you've always wanted
                            <br><br>
                            ✔️ Great to have for your college exams
                            <br><br>
                            ✔️ Have great projects for your portfolio
                            <br><br>
                        </p>
                    </div>
                </div>
                <br>
                <p class="color-white text-center">
                    <span style="color: var(--primary-color); font-weight: bold;">
                        TOP 5 REASONS TO START NOW
                    </span>
                </p>
                <br>
                <div class="row">
                    <div class="col-sm-12 col-lg-5">
                        <img src="<?= root() ?>assets\img\courses\course3.jpg" style="width: 100%; height: auto; border: 2px solid white; border-radius: 5px;" />
                        <br><br>
                    </div>
                    <div class="col-sm-12 col-lg-7 flex-middle">
                        <p class="color-white">
                            🏆 1. A great JavaScript developer will earn more than $70,000 per year ( imagine the possibilities )
                            <br><br>
                            🏆 2. Ability to work remote and in your own time.
                            <br><br>
                            🏆 3. Biggest companies in the world are looking constantly for JavaScript developers.
                            <br><br>
                            🏆 4. Create projects that you can be incredibly proud of.
                            <br><br>
                            🏆 5. Helps you think critically and will impact all areas of your life, not just coding
                            <br><br>
                        </p>
                    </div>
                </div>

                <p class="color-white text-center">
                    <span style="color: var(--primary-color); font-weight: bold;">
                        <strong>START FROM ABSOLUTE ZERO</strong>
                        <br>
                        <span class="color-white">You don't need to know anything about JavaScript. I will teach all of the important fundamentals and basics straight from the start. You'll learn everything you need step-by-step.</span>
                        <br><br>
                        All of this while having a ton of FUN!
                    </span>
                </p>
                <br>
                <h1 class="subtitle" style="color: white !important; text-align: center;">
                    ALL FOR JUST<br>
                    <strike style="color: red; font-size: 1.5rem;">$399</strike>
                    <span style="color: lightgreen; font-size: 2.5rem">$80</span>
                </h1>
                <br><br>
                <div class="text-center">
                    <a href="#" class="btn-read-more" onclick="startCheckout()" target="_blank">
                        <span style="font-family: oswald;">ENROLL NOW</span>
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
                <br><br>
                <div class="text-center">
                    <h1 class="title">
                        STILL NOT SURE?
                    </h1>
                    <br>
                    <h1 class="subtitle">
                        MORE STUDENT TESTIMONIALS:
                    </h1>
                </div>
                <br><br>
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <br>
                        <img src="<?= root() ?>assets/img/courses/testimonial1.jpg" style="width: 100%;" />
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <br>
                        <img src="<?= root() ?>assets/img/courses/testimonial2.jpg" style="width: 100%;" />
                    </div>

                    <div class="col-lg-6 col-sm-12">
                        <br>
                        <img src="<?= root() ?>assets/img/courses/testimonial3.jpg" style="width: 100%;" />
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <br>
                        <img src="<?= root() ?>assets/img/courses/testimonial4.jpg" style="width: 100%;" />
                    </div>

                    <div class="col-lg-6 col-sm-12">
                        <br>
                        <img src="<?= root() ?>assets/img/courses/testimonial8.jpg" style="width: 100%;" />
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <br>
                        <img src="<?= root() ?>assets/img/courses/testimonial6.jpg" style="width: 100%;" />
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <br>
                        <img src="<?= root() ?>assets/img/courses/testimonial7.jpg" style="width: 100%;" />
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <br>
                        <img src="<?= root() ?>assets/img/courses/testimonial5.jpg" style="width: 100%;" />
                    </div>
                </div>
                <br><br>
                <div class="text-center">
                    <h1>
                        WebDevelopment RoadMap Bundle™
                    </h1>
                    <br>
                    <span class="warning-span">
                        80% DISCOUNT <br> ONE TIME LIMITED OFFER
                    </span>
                    <br><br>
                    <h1 class="subtitle" style="color: white !important; text-align: center;">
                        ALL FOR JUST<br>
                        <strike style="color: red; font-size: 1.5rem;">$399</strike>
                        <span style="color: lightgreen; font-size: 2.5rem">$80</span>
                    </h1>
                    <br><br>
                    <a href="#" class="btn-read-more" onclick="startCheckout()" target="_blank">
                        <span style="font-family: oswald;">ENROLL NOW</span>
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
                <br><br>
            </div>
        </div>
    </section>
</main>

<?php include php_root() . 'php/lp-footer.php'; ?>