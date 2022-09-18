<?php
include $_SERVER['DOCUMENT_ROOT'] . "/api/light.php";

$hidewaitinglist = true;
$showterms = true;
$hidecookieconset = true;
$hidemenu = true;
$hidesocials = true;
$disabletopmenulink = true;
$hidecookieconset = true;

$title = "The Inteligent WebDeveloper Bundle™ - Todorescu.com";
include php_root() . 'php/lp-header.php';
?>

<script>
    window.VIEW_CONTENT_EVENT = 10422777
    window.START_CHECKOUT_EVENT = 10422785
    window.STRIPE_PAYMENT_LINK = 'https://buy.stripe.com/00g9AM0ET0VZ1a0bIM'
</script>

<?php if (!$isDev) : ?>
    <script>
        setTimeout(async () => {
            await window.lintrk('track', {
                conversion_id: window.VIEW_CONTENT_EVENT
            });
        }, 1000)
    </script>
<?php endif ?>

<script>
    async function startCheckout() {
        <?php if (!$isDev) : ?>
            await window.lintrk('track', {
                conversion_id: window.START_CHECKOUT_EVENT
            });
        <?php endif ?>

        window.location.href = window.STRIPE_PAYMENT_LINK;
    }
</script>

<style>
    .main-container {
        max-width: 55vw;
        opacity: .95;
    }

    h1 {
        color: white !important;
    }

    h1.maintitle {
        font-size: 2rem !important;
        font-family: oswald;
        margin-bottom: 25px;
    }

    .subtitle {
        color: white;
        font-size: 1.25rem !important;
        padding: 25px 0;
    }

    .subtitle2 {
        color: var(--primary-color) !important;
        font-size: 2rem !important;
        padding: 20px 0;
        font-weight: bold;
        font-family: oswald;
    }

    .discount-price {
        color: red;
        font-size: 2rem;
    }

    .promo-price {
        color: lime;
        font-size: 2.5rem
    }

    .btn-read-more span {
        font-family: oswald;
    }

    p.bulletpoint {
        color: white;
        font-family: coolvetica;
        font-size: 1.5rem;
    }

    p.centertitle {
        font-family: oswald;
        font-weight: bold;
        text-align: center;
        font-size: 1.25rem;
        padding: 15px 0;
        color: white;
    }

    .warning-span {
        font-weight: bold;
        margin-top: 20px;
        background: red;
        color: white;
        font-size: 1rem;
        line-height: 1rem;
    }

    .bundleitem img {
        width: 80%;
        height: auto;
        border: 2px solid white;
        border-radius: 5px;
        margin-top: 25px;
    }

    .bundleitem p {
        color: white;
        text-align: center;
        font-family: oswald;
        font-size: 1.25rem;
        margin-top: 25px;
    }

    @media (max-width: 768px) {
        .main-container {
            max-width: 95vw;
        }
    }
</style>

<main id="main">
    <section class="hero pb-0">
        <div class="container main-container">
            <div class="text-center">
                <h1 class="maintitle">
                    The Inteligent WebDeveloper Bundle™
                </h1>
                <span class="warning-span">
                    ATTENTION <br> ONLY FOR CREATIVE ENGINEERS
                </span>
                <h1 class="subtitle">
                    ALL FOR JUST<br>
                    <strike class="discount-price">$399</strike>
                    <span class="promo-price">$77</span>
                </h1>
                <a href="#" class="btn-read-more" onclick="startCheckout()" target="_blank">
                    <span>I WANT TO BE SMART</span>
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>
            <div class="row text-left mt-4">
                <div class="col-lg-4 col-12">&nbsp;</div>
                <div class="col-lg-6 col-12">
                    <h1 class="subtitle">
                        YOU WILL:
                    </h1>
                    <p class="bulletpoint">
                        ✔️ Become a more creative web developer
                    </p>
                    <p class="bulletpoint">
                        ✔️ Be seen as a smart web developer
                    </p>
                    <p class="bulletpoint">
                        ✔️ Impress others with your new skills
                    </p>
                </div>
                <div class="col-lg-2 col-12">&nbsp;</div>
            </div>
            <div class="mt-4">
                <p class="centertitle">
                    ’’It’s not enough to solve a problem, but to do so in the simplest way possible. Most often no one actually reads your code yet elegance is extremely satisfying.’’
                </p>
            </div>
            <div class="text-center mt-0">
                <h1 class="subtitle2">
                    YOUR BUNDLE INCLUDES:
                </h1>
                <div class="row">
                    <div class="col-sm-12 col-lg-4 bundleitem">
                        <img src="<?= root() ?>assets\img\courses\course1_thumb.jpg" />
                        <p>
                            <strong>➤ COURSE 1</strong> <br>
                            Four (4) Unique Portfolio Web-Dev Projects
                        </p>
                    </div>
                    <div class="col-sm-12 col-lg-4 bundleitem">
                        <img src="<?= root() ?>assets\img\courses\course4_thumb.jpg" />
                        <p>
                            <strong>➤ COURSE 2</strong> <br>
                            CSS Hacking - 12 Innovative Challenges
                        </p>
                    </div>
                    <div class="col-sm-12 col-lg-4 bundleitem">
                        <img src="<?= root() ?>assets\img\courses\course5_thumb.jpg" />
                        <p>
                            <strong>➤ COURSE 3</strong> <br>
                            Path Finding Algorithms With JavaScript
                        </p>
                    </div>
                    <div class="col-sm-12 col-lg-2">&nbsp;</div>
                    <div class="col-sm-12 col-lg-4 bundleitem">
                        <img src="<?= root() ?>assets\img\courses\course2_thumb.jpg" />
                        <p>
                            <strong>➤ COURSE 4</strong> <br>
                            The Miracles Of HTML Canvas Element
                        </p>
                    </div>
                    <div class="col-sm-12 col-lg-4 bundleitem">
                        <img src="<?= root() ?>assets\img\courses\course3_thumb.jpg" />
                        <p>
                            <strong>➤ COURSE 5</strong> <br>
                            Matrix Magic Falling Symbols With JS
                        </p>
                    </div>
                    <div class="col-sm-12 col-lg-2">&nbsp;</div>
                </div>
            </div>
            <div class="text-center mt-5">
                <a href="#" class="btn-read-more" onclick="startCheckout()" target="_blank">
                    <span>SIGN-UP NOW</span>
                    <i class="bi bi-arrow-right"></i>
                </a>
                <br><br><br>
                <h1 class="title color-orange" style="font-family: oswald; letter-spacing: 1px;">
                    SHOULD YOU REALLY SIGN-UP?
                </h1>
                <h1 class="subtitle2">
                    JUST LOOK HOW IT TURNED OUT FOR OTHERS LIKE YOU...
                </h1>
            </div>
            <div class="confessions">
                <div class="row">
                    <div class="col-lg-6 col-12 flex-middle">
                        <div class="confession-new-item">
                            <video controls="controls" poster="<?= root() . 'assets/img/petrisor-thumb_.jpg' ?>">
                                <source src="<?= root() . 'assets/video/interviu-petrisor.mp4' ?>" type="video/mp4">
                            </video>
                            <div class="text">
                                Petrisor says Tudor's made a <strong>huge difference</strong> in his creativity.
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 flex-middle">
                        <div class="confession-new-item">
                            <video controls="controls" poster="<?= root() . 'assets/img/robert-thumb_.jpg' ?>">
                                <source src="<?= root() . 'assets/video/interviu-robert.mp4' ?>" type="video/mp4">
                            </video>
                            <div class="text">
                                Tudor helped Robert <strong>kickstart his love for programming.</strong> He finally focused on what matters, JavaScript.
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
                                Alina switched from a marketing career to a <strong>fulltime junior web developer position.</strong>
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
                                Radu went from a junior job to <strong>getting his first mid-level position</strong>, using our courses.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h1 class="subtitle" style="color: white !important; text-align: center;">
                ALL FOR JUST<br>
                <strike class="discount-price">$399</strike>
                <span class="promo-price">$77</span>
            </h1>
            <a href="#" class="btn-read-more" onclick="startCheckout()" target="_blank">
                <span style="font-family: oswald;">ENROLL NOW</span>
                <i class="bi bi-arrow-right"></i>
            </a>
            <br><br><br><br>
            <div class="text-left">
                <div class="row">
                    <div class="col-sm-12 col-lg-6 text-center">
                        <img src="<?= root() ?>assets\img\courses\course1.jpg" style="width: 100%; height: auto; border: 2px solid white; border-radius: 5px; width: 70%;" />
                        <br><br>
                    </div>
                    <div class="col-sm-12 col-lg-6 flex-middle">
                        <p class="color-white">
                            <span style="font-family: oswald;">Get ready to skyrocket your web development skills. Every aspiring or existing frontend developer should get this courses.</span>
                            <br><br>
                            <strong style="color: var(--primary-color);font-family:oswald;">Here's why:</strong>
                            <br><br>
                            💻 You'll know how to build real-life useful projects, that you need for your portfolio.
                            <br><br>
                            💻 You'll get astronomical experience in HTML, CSS, JS.
                            <br><br>
                            💻 You'll code by yourself comprehensive projects, from 0 to 100.
                        </p>
                    </div>
                </div>
                <br>
                <p class="color-white text-center">
                    ☕☕☕<br><br>
                    <span style="color: var(--primary-color); font-weight: bold;">
                        <span class="color-white">I will walk you</span> through each small and confusing detail.
                        <br><br>
                        <span class="color-white">It will be a</span> friendly one-to-one digital experience.
                        <br><br>
                        <span class="color-white">I will reveal unique ways</span> in which you'll truly understand JavaScript.
                    </span>
                </p>
                <br>
                <div class="row">
                    <div class="col-sm-12 col-lg-6 text-center">
                        <img src="<?= root() ?>assets\img\courses\course2.jpg" style="width: 100%; height: auto; border: 2px solid white; border-radius: 5px; width: 70%;" />
                        <br><br>
                    </div>
                    <div class="col-sm-12 col-lg-6 flex-middle">
                        <p class="color-white">
                            <br>
                            <span style="color: var(--primary-color); font-weight: bold; font-size: 1.5rem">BENEFITS:</span>
                            <br><br>
                            ✔️ You will be able to properly read any web-dev code.
                            <br><br>
                            ✔️ You'll be significantly more prepared at your next tech interview.
                            <br><br>
                            ✔️ You'll have magnificient projects that'll impress your college professors.
                            <br><br>
                            ✔️ You'll have one-of-a-kind projects inside your CV (resume).
                            <br><br>
                        </p>
                    </div>
                </div>
                <p class="color-white text-center">
                    <span style="color: var(--primary-color); font-family: oswald !important; font-weight: bold; font-size: 1.5rem">
                        5 REASONS TO START NOW
                    </span>
                </p>
                <br>
                <div class="row">
                    <div class="col-sm-12 col-lg-6 text-center">
                        <img src="<?= root() ?>assets\img\courses\course3.jpg" style="width: 100%; height: auto; border: 2px solid white; border-radius: 5px; width: 70%;" />
                        <br><br>
                    </div>
                    <div class="col-sm-12 col-lg-6 flex-middle">
                        <p class="color-white">
                            🏆 1. A great JavaScript developer will earn more than $70,000 per year.
                            <br><br>
                            🏆 2. Ability to work remotely from anywhere (at your choosing).
                            <br><br>
                            🏆 3. Biggest companies in the world are looking constantly for JavaScript developers.
                            <br><br>
                            🏆 4. Create projects that you can be incredibly proud of.
                            <br><br>
                            🏆 5. Helps you think critically and will impact all areas of your life, not just coding.
                            <br><br>
                        </p>
                    </div>
                </div>
                <p class="color-white text-center">
                    <span style="color: var(--primary-color); font-weight: bold;">
                        <strong>START FROM GROUND UP</strong>
                        <br>
                        <span class="color-white">I will teach all of the important fundamentals straight from the start. You'll learn in a step-by-step style.</span>
                        <br><br>
                        All of this while having a ton of FUN!
                    </span>
                </p>
                <h1 class="subtitle" style="color: white !important; text-align: center;">
                    START NOW FOR ONLY<br>
                    <strike class="discount-price">$399</strike>
                    <span class="promo-price">$77</span>
                </h1>
                <div class="text-center">
                    <a href="#" class="btn-read-more" onclick="startCheckout()" target="_blank">
                        <span style="font-family: oswald;">START NOW</span>
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
                <br><br>
                <div class="text-center">
                    <h1 class="title" style="color: var(--primary-color) !important;font-family:oswald;">
                        YOU'RE STILL NOT SURE?
                    </h1>
                    <h1 class="subtitle">
                        HERE'S MORE STUDENT TESTIMONIALS:
                    </h1>
                </div>
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
                    <a href="#" class="btn-read-more" onclick="startCheckout()" target="_blank">
                        <span style="font-family: oswald;">GET STARTED NOW</span>
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
                <br><br>
                <div class="text-center">
                    <h1 style="font-family: oswald;"><span style="color: var(--primary-color);font-family: oswald;">LIMITED BONUS:</span> For every 10th enrollment I'll personally select one and give a FREE 30 minute 1on1 zoom mentoring call</h1>
                    <br>
                    <small style="color: #eee;">(this bonus depends heavy on my availability, so don't wait, get started now!) </small>
                </div>
                <br><br>
            </div>
        </div>
    </section>
</main>

<?php include php_root() . 'php/lp-footer.php'; ?>