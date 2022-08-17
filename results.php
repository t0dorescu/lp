<?php
include $_SERVER['DOCUMENT_ROOT'] . "/api/index.php";
$session = (new Api())->get_session($_COOKIE['token']);

$ignore = array(
    'header' => false,
    'footer' => false,
    'menu' => true
);

$title = "Results, recruitment offers, unlimited job opportunities";
include php_root() . 'php/lp-header.php';
?>

<style>
    body {
        background-color: black;
        background-image: url('<?= root() . 'assets/img/punkbg_1.jpg' ?>');
    }
</style>

<section id="hero" class="hero d-flex align-items-center" style="padding-bottom: 0;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 d-flex flex-column justify-content-center">
                <h1 data-aos="fade-up" style="
                    color: #fa643f;
                    font-size: 2.25rem;
                    padding: 2rem 0 1rem;
                    text-align: center;
                ">Unlimited job opportunities at your choosing.</h1>
                <h2 data-aos="fade-up" data-aos-delay="400" style="
                    color: #95f0f1;
                    font-size: 1.5rem;
                    padding: 1rem 0;
                    width: 100%;
                    text-align: center;
                ">So many offers you'll suddenly have new 50 cousins inviting you to their wedding.</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
                <img src="<?= root() . 'assets/img/offers/offer2.png' ?>" class="offer-img-bottom-results" />
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <img src="<?= root() . 'assets/img/offers/offer8.png' ?>" class="offer-img-bottom-results" />
                <img src="<?= root() . 'assets/img/offers/offer6.png' ?>" class="offer-img-bottom-results" />
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <img src="<?= root() . 'assets/img/offers/offer3.png' ?>" class="offer-img-bottom-results" />
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <img src="<?= root() . 'assets/img/offers/offer4.png' ?>" class="offer-img-bottom-results" />
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <img src="<?= root() . 'assets/img/offers/offer5.png' ?>" class="offer-img-bottom-results" />
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <img src="<?= root() . 'assets/img/offers/offer1.png' ?>" class="offer-img-bottom-results" />
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <img src="<?= root() . 'assets/img/offers/offer13.png' ?>" class="offer-img-bottom-results" />
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <img src="<?= root() . 'assets/img/offers/offer10.png' ?>" class="offer-img-bottom-results" />
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <img src="<?= root() . 'assets/img/offers/offer12.png' ?>" class="offer-img-bottom-results" />
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <img src="<?= root() . 'assets/img/offers/offer9.png' ?>" class="offer-img-bottom-results" />
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <img src="<?= root() . 'assets/img/offers/offer11.png' ?>" class="offer-img-bottom-results" />
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <img src="<?= root() . 'assets/img/offers/offer14.png' ?>" class="offer-img-bottom-results" />
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <img src="<?= root() . 'assets/img/offers/offer15.png' ?>" class="offer-img-bottom-results" />
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <img src="<?= root() . 'assets/img/offers/offer16.png' ?>" class="offer-img-bottom-results" />
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <img src="<?= root() . 'assets/img/offers/offer17.png' ?>" class="offer-img-bottom-results" />
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <img src="<?= root() . 'assets/img/offers/offer18.png' ?>" class="offer-img-bottom-results" />
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <img src="<?= root() . 'assets/img/offers/offer19.png' ?>" class="offer-img-bottom-results" />
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <img src="<?= root() . 'assets/img/offers/offer20.png' ?>" class="offer-img-bottom-results" />
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <img src="<?= root() . 'assets/img/offers/offer21.png' ?>" class="offer-img-bottom-results" />
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <img src="<?= root() . 'assets/img/offers/offer22.png' ?>" class="offer-img-bottom-results" />
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <img src="<?= root() . 'assets/img/offers/offer23.png' ?>" class="offer-img-bottom-results" />
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <img src="<?= root() . 'assets/img/offers/offer24.png' ?>" class="offer-img-bottom-results" />
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <img src="<?= root() . 'assets/img/offers/offer25.png' ?>" class="offer-img-bottom-results" />
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <img src="<?= root() . 'assets/img/offers/offer26.png' ?>" class="offer-img-bottom-results" />
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <img src="<?= root() . 'assets/img/offers/offer27.png' ?>" class="offer-img-bottom-results" />
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <img src="<?= root() . 'assets/img/offers/offer28.png' ?>" class="offer-img-bottom-results" />
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <img src="<?= root() . 'assets/img/offers/offer29.png' ?>" class="offer-img-bottom-results" />
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <img src="<?= root() . 'assets/img/offers/offer30.png' ?>" class="offer-img-bottom-results" />
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <img src="<?= root() . 'assets/img/offers/offer31.png' ?>" class="offer-img-bottom-results" />
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <img src="<?= root() . 'assets/img/offers/offer32.png' ?>" class="offer-img-bottom-results" />
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <img src="<?= root() . 'assets/img/offers/offer33.png' ?>" class="offer-img-bottom-results" />
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <img src="<?= root() . 'assets/img/offers/offer34.png' ?>" class="offer-img-bottom-results" />
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <img src="<?= root() . 'assets/img/offers/offer35.png' ?>" class="offer-img-bottom-results" />
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <img src="<?= root() . 'assets/img/offers/offer36.png' ?>" class="offer-img-bottom-results" />
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <img src="<?= root() . 'assets/img/offers/offer37.png' ?>" class="offer-img-bottom-results" />
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <img src="<?= root() . 'assets/img/offers/offer38.png' ?>" class="offer-img-bottom-results" />
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <img src="<?= root() . 'assets/img/offers/offer39.png' ?>" class="offer-img-bottom-results" />
            </div>
        </div>
    </div>
</section>


<?php include php_root() . 'php/lp-footer.php'; ?>
</body>

</html>