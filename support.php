<?php
include $_SERVER['DOCUMENT_ROOT'] . "/api/index.php";

$title = "Get premium support from our team - Todorescu.com";
include php_root() . 'php/lp-header.php';
?>

<main id="main">
    <section id="support" class="contact" style="background: black; opacity: .9;margin-top: 80px;">
        <div class="container">
            <header class="section-header">
                <p class="font-family-1" style="color: var(--primary-color);">Student support</p>
                <p class="gray-text" style="font-weight: 400;">Use this form only if you're in the paid program. Sign-up for the waiting list and we will contact you</p>
            </header>
            <div class="row gy-4">
                <div class="col-lg-4 col-md-3">&nbsp;</div>
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
                <div class="col-lg-4 col-md-3">&nbsp;</div>
            </div>
        </div>
    </section>
    <section id="team" class="team" style="padding-top: 30px; opacity: .9;background: none;margin-bottom: 30px;">
        <div class="container">
            <div class="row gy-4">
                <div class="col-md-3 col-6 d-flex align-items-stretch" style="padding: 0 5px;">
                    <div class="member">
                        <div class="member-img">
                            <img src="<?= root() .'assets/img/team/crisan-cristina.jpg' ?>" class="img-fluid" alt="">
                            <div class="social"></div>
                        </div>
                        <div class="member-info">
                            <h4>Crisan Cristina</h4>
                            <span>COO (operations)</span>
                            <p style="line-height: 1rem;">Making sure the trains run on time, Cristina handles daily operations.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6 d-flex align-items-stretch" style="padding: 0 5px;">
                    <div class="member">
                        <div class="member-img">
                            <img src="<?= root() .'assets/img/team/musat-radu.jpg' ?>" class="img-fluid" alt="">
                            <div class="social"></div>
                        </div>
                        <div class="member-info">
                            <h4>Musat Radu</h4>
                            <span>Support (developer)</span>
                            <p style="line-height: 1rem;">Radu will answer all your questions and make sure you never get stuck.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6 d-flex align-items-stretch" style="padding: 0 5px;">
                    <div class="member">
                        <div class="member-img">
                            <img src="<?= root() .'assets/img/team/adina-minca.jpg' ?>" class="img-fluid" alt="">
                            <div class="social"></div>
                        </div>
                        <div class="member-info">
                            <h4>Adina Minca</h4>
                            <span>PR/Customer</span>
                            <p style="line-height: 1rem;">Adina handles the press, interviews and student onboarding.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6 d-flex align-items-stretch" style="padding: 0 5px;">
                    <div class="member">
                        <div class="member-img">
                            <img src="<?= root() .'assets/img/team/tao-robert.jpg' ?>" class="img-fluid" alt="">
                            <div class="social"></div>
                        </div>
                        <div class="member-info">
                            <h4>Tao Robert</h4>
                            <span>Media/Video editing</span>
                            <p style="line-height: 1rem;">Robert is the artistic one. He will tattoo you (literally).</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include php_root() . 'php/lp-footer.php'; ?>
</body>

</html>