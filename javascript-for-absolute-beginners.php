<?php
include $_SERVER['DOCUMENT_ROOT'] . "/api/light.php";

$hidewaitinglist = true;
$showterms = true;
$hidecookieconset = true;
$hidemenu = true;
$hidesocials = true;
$disabletopmenulink = true;
$hidecookieconset = true;

$title = "JavaScript For Absolute Beginners™ - Todorescu.com";
include php_root() . 'php/lp-header.php';
?>

<script>
    window.VIEW_CONTENT_EVENT = 10525969
    window.START_CHECKOUT_EVENT = 10525977
    window.STRIPE_PAYMENT_LINK = 'https://buy.stripe.com/14kcMYcnBeMP9Gw6ot'
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
        font-size: 1.25rem !important;
        padding: 35px 0;
        font-weight: bold;
        font-family: oswald;
        text-align: left;
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
                    JavaScript For Absolute Beginners™
                </h1>
            </div>
            <div class="row text-left mt-4">
                <div class="col-lg-6 col-12">
                    <div class="mt-4">
                        <p class="centertitle">
                            Not only is JavaScript one of the most popular programming languages in the world, it's been growing faster and faster than any other programming language. Now it's the best time to get started and become a highly paid JavaScript developer.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <h1 class="subtitle">
                        YOU WILL:
                    </h1>
                    <p class="bulletpoint">
                        ✔️ Master the most basic of basic building blocks of JavaScript
                    </p>
                    <p class="bulletpoint">
                        ✔️ By the end of the course, you'll graduate from "no-clue about JavaScript" to an intermediate level.
                    </p>
                    <p class="bulletpoint">
                        ✔️ You will be able to properly read JavaScript code
                    </p>
                    </p>
                    <p class="bulletpoint">
                        ✔️ You'll be half way of landing that junior developer dream job you've always wanted
                    </p>
                </div>
            </div>
            <br><br>
            <div class="text-center mt-0">
                <div class="row">
                    <div class="col-12">
                        <img src="<?= root() ?>assets\img\courses\course7_content.jpg" style="width: 90%;" />
                    </div>
                </div>
            </div>
            <div class="text-center mt-0">
                <h1 class="subtitle">
                    ALL FOR JUST<br>
                    <strike class="discount-price">$129</strike>
                    <span class="promo-price">$37</span>
                </h1>
                <a href="#" class="btn-read-more" onclick="startCheckout()" target="_blank">
                    <span>START NOW</span>
                    <i class="bi bi-arrow-right"></i>
                </a>
                <br><br><br><br>
                <h1 class="title color-orange " style="font-family: oswald; letter-spacing: 1px;">
                    SHOULD YOU REALLY SIGN-UP?
                </h1>
                <h1 class="subtitle2 text-center">
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
            <br><br>
            <a href="#" class="btn-read-more" onclick="startCheckout()" target="_blank">
                <span style="font-family: oswald;">ENROLL NOW</span>
                <i class="bi bi-arrow-right"></i>
            </a>
            <br><br>
            <div class="text-left mt-5">
                <h1 class="title color-orange" style="font-family: oswald; letter-spacing: 1px; font-size: 1.5rem; margin-bottom: 20px;">
                    HOW IS THIS DIFFERENT THAN EVERYTHING ELSE?
                </h1>
                <h1 class="subtitle2" style="padding-top: 0;">
                    I will walk you through each small and confusing detail and make it clear for you. It will be a friendly one-to-one digital experience and I will give you as many metaphors as you need to truly understand JavaScript.
                </h1>
            </div>
            <div class="text-center mt-5">
                <h1 class="title color-orange" style="font-family: oswald; letter-spacing: 1px; font-size: 1.5rem; margin-bottom: 20px;">
                    WHAT'S IN IT FOR ME?
                </h1>
                <h1 class="subtitle2" style="padding-top: 0;">
                    A great JavaScript developer will earn more than $100,000 per year ( imagine the possibilities )
                    <br><br>
                    ✳️ Ability to work remote and in your own time.
                    <br><br>
                    ✳️ Biggest companies in the world are looking constantly for JavaScript developers.
                    <br><br>
                    ✳️ Create projects that you can be incredibly proud of.
                    <br><br>
                    ✳️ Helps you think critically and will impact all areas of your life, not just coding
                </h1>
            </div>
            <div class="text-center mt-5">
                <h1 class="title color-orange" style="font-family: oswald; letter-spacing: 1px; font-size: 1.5rem; margin-bottom: 20px;">
                    HOW DO I KNOW IT'S REAL?
                </h1>
                <h1 class="subtitle2" style="padding-top: 0;">
                    You don't need to know anything about JavaScript. I will teach all of the important fundamentals and basics straight from the start. You'll learn everything you need step-by-step.
                    <br><br>
                    <strong>FUN FACT:</strong> You can use JavaScript to build web and mobile apps, and much much more.
                </h1>
            </div>
            <div class="text-center mt-5">
                <h1 class="title color-orange" style="font-family: oswald; letter-spacing: 1px; font-size: 1.5rem; margin-bottom: 20px;">
                    WHAT'S HOLDING ME BACK?
                </h1>
                <h1 class="subtitle2" style="padding-top: 0;">
                    🏆 You'll get to keep this course for life! ( even share it with your friends )
                    <br><br>
                    🏆 Easy to follow lectures ( 2 - 7 min per lecture )
                    <br><br>
                    🏆 Proper structure to properly internalize the core concepts
                    <br><br>
                    🏆 A perfect road-map for you to follow
                    <br><br>
                    🏆 4 hours of Full-HD 1080p videos
                    <br><br>
                    🏆 Availability on mobile, tablet, desktop and smart TV ( your choice )
                    <br><br>
                    🏆 Learn at your own pace, no rush!
                    <br><br>
                    🏆 Multitude of QUIZZES designed to boost your confidence
                    <br><br>
                    🏆 Hand-held experience, I've removed any confusion out of the equation
                    <br><br>
                    🏆 Certificate of completion to present to your future clients and employer
                    <br><br>
                    🏆 FREE Bonus Lectures, I will be constantly be updating this course
                    <br><br>
                    🏆 30 DAY MONEY BACK GUARANTEE - What do you have to lose ?
                </h1>
            </div>
            <div class="text-center mt-0">
                <h1 class="title color-orange" style="font-family: oswald; letter-spacing: 1px;">
                    I'll see you inside!
                </h1>
            </div>
            <br><br>
            <h1 class="subtitle" style="color: white !important; text-align: center;">
                START TODAY FOR ONLY<br>
                <strike class="discount-price">$129</strike>
                <span class="promo-price">$37</span>
            </h1>
            <div class="text-center">
                <a href="#" class="btn-read-more" onclick="startCheckout()" target="_blank">
                    <span style="font-family: oswald;">ENROLL NOW</span>
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>
            <br><br><br>
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