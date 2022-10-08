<?php
include $_SERVER['DOCUMENT_ROOT'] . "/api/light.php";

$showterms = true;

$title = "Get premium support from our team - Todorescu.com";
include php_root() . 'php/lp-header.php';
?>

<style>
    @media (max-width: 768px) {
        .hide-mf {
            display: none !important;
        }
    }
</style>
<main id="main">
    <section class="team" style="margin-top: 75px; margin-bottom: 0;">
        <div class="container">
            <div class="row gy-4">
                <div class="col-md-3 col-6 d-flex align-items-stretch">
                    <div class="member">
                        <div class="member-img">
                            <img src="<?= root() . 'assets/img/team/crisan-cristina.jpg' ?>" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Crisan Cristina</h4>
                            <span>COO (operations)</span>
                            <p>Making sure the trains run on time, Cristina handles daily operations.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6 d-flex align-items-stretch">
                    <div class="member">
                        <div class="member-img">
                            <img src="<?= root() . 'assets/img/team/musat-radu.jpg' ?>" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Musat Radu</h4>
                            <span>Support (developer)</span>
                            <p>Radu will answer all your questions and make sure you never get stuck.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6 d-flex align-items-stretch">
                    <div class="member">
                        <div class="member-img">
                            <img src="<?= root() . 'assets/img/team/adina-minca.jpg' ?>" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Adina Minca</h4>
                            <span>PR/Customer</span>
                            <p>Adina handles the press, interviews and student onboarding.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6 d-flex align-items-stretch">
                    <div class="member">
                        <div class="member-img">
                            <img src="<?= root() . 'assets/img/team/tao-robert.jpg' ?>" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Tao Robert</h4>
                            <span>Media/Video editing</span>
                            <p>Robert is the artistic one. He will tattoo you (literally).</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="support" style="margin-top: 0;">
        <div class="container main-container" style="margin-top: 0;">
            <header class="section-header">
                <h1>
                    Contact
                </h1>
                <p class="gray-text">
                    Use this form only if you're a paid client. <br>
                    New prospects must sign-up to our waiting list<br><br>
                </p>
            </header>
            <div class="row gy-4">
                <div class="col-lg-4 col-md-3 hide-mf">&nbsp;</div>
                <div class="col-lg-4 col-md-6 col-12">
                    <form action="api/contact.php" method="post" class="php-email-form">
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                            </div>
                            <div class="col-md-6 ">
                                <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                            </div>
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                            </div>
                            <div class="col-md-12">
                                <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                            </div>
                            <div class="col-md-12 text-center">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message text-thin">Your message has been sent. We will contact you shortly.</div>
                                <button class="btn js_send_message" type="submit">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4 col-md-3 hide-mf">&nbsp;</div>
            </div>
        </div>
    </section>
</main>

<?php include php_root() . 'php/lp-footer.php'; ?>