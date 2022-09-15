<?php
include $_SERVER['DOCUMENT_ROOT'] . "/api/light.php";

$showterms = true;

$title = "Portfolio - Todorescu.com";
include php_root() . 'php/lp-header.php';
?>

<style>
    .main-container {
        max-width: 55vw;
    }

    p.first {
        color: white;
        text-align: left;
        font-size: 1.1rem;
        font-family: oswald;
    }

    p.first strong {
        color: var(--primary-color);
        font-size: 1.5rem;
    }

    iframe {
        width: 100%;
    }

    img.image {
        width: 100%;
        margin: 10px auto;
    }

    @media (max-width: 768px) {
        .main-container {
            max-width: 95vw;
        }

        img.image2 {
            width: 100%;
        }
    }
</style>

<main id="main">
    <section class="hero pb-0">
        <div class="container main-container">
            <div class="row">
                <div class="col-lg-3 col-sm-12">
                    <a href="<?= root() ?>assets/img/portfolio/upwork3.jpg" target="_blank">
                        <img src="<?= root() ?>assets/img/portfolio/upwork3.jpg" class="image">
                    </a>
                </div>
                <div class="col-lg-3 col-sm-12">
                    <a href="<?= root() ?>assets/img/portfolio/upwork2.jpg" target="_blank">
                        <img src="<?= root() ?>assets/img/portfolio/upwork2.jpg" class="image">
                    </a>
                </div>
                <div class="col-lg-3 col-sm-12">
                    <a href="<?= root() ?>assets/img/portfolio/upwork1.jpg" target="_blank">
                        <img src="<?= root() ?>assets/img/portfolio/upwork1.jpg" class="image">
                    </a>
                </div>
                <div class="col-lg-3 col-sm-12">
                    <a href="<?= root() ?>assets/img/portfolio/upwork4.jpg" target="_blank">
                        <img src="<?= root() ?>assets/img/portfolio/upwork4.jpg" class="image">
                    </a>
                </div>
            </div>
            <br>
            <p class="first">
                <strong>Vue - Senior Frontend Developer</strong>
                <br>
                Skills: Vue.js · Vuex · Vue · JavaScript
                <br><br>
                Lead developer responsible for building complex/scalable frontend infrastructure for the survey/quiz builder.
                <br><br>
                Find out more about this SaaS: <a href="https://www.kartra.com" style="font-family: oswald;">www.kartra.com</a><br> ( the all-in-one marketing solution )
                <br><br>
                See a demo here:<br> <a href="https://www.youtube.com/watch?v=ZOOcJ1jkbdY" style="font-family: oswald;" target="_blank">https://www.youtube.com/watch?v=ZOOcJ1jkbdY</a>
                <br>
                <div class="row">
                    <div class="col-lg-4 col-sm-12">
                        <a href="<?= root() ?>assets/img/portfolio/kartra1.jpg" target="_blank">
                            <img src="<?= root() ?>assets/img/portfolio/kartra1.jpg" class="image">
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <a href="<?= root() ?>assets/img/portfolio/kartra2.jpg" target="_blank">
                            <img src="<?= root() ?>assets/img/portfolio/kartra2.jpg" class="image">
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <a href="<?= root() ?>assets/img/portfolio/kartra3.jpg" target="_blank">
                            <img src="<?= root() ?>assets/img/portfolio/kartra3.jpg" class="image">
                        </a>
                    </div>
                </div>
            </p>
            <br>
            <p class="first">
                <strong>Angular - Senior Frontend Developer</strong>
                <br>
                Skills: TypeScript · ECMAScript · Angular · AngularJS · JavaScript
                <br><br>
                Angular expert, any type of small/medium/big UI/UX project I can make from A-Z fully custom according to specs.
                <br><br>
                Included with API integration and some necessary backend functionalities. Watch a video demonstration of one of my completed Angular projects below 👇
                <br><br>
                PROGRAMMING LANGUAGES: <br>
                ✅ JavaScript (8 years)<br>
                ✅ Angular (6 years) <br>
                <br>
                TECH-STACK: <br>
                ✔️ Angular 8+<br>
                ✔️ TypeScript<br>
                ✔️ ES6 (ES2015)<br>
                ✔️ OOP & Design Patterns <br>
                ✔️ RXJS operators & NGXS state management<br>
                ✔️ API Communication JSON/XML, JWT<br>
             
                <div class="row">
                    <div class="col-lg-4 col-sm-12">
                        <iframe src="https://www.youtube-nocookie.com/embed/edLrNI5T2bU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <iframe src="https://www.youtube-nocookie.com/embed/Bde6ZZhsg0E" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <iframe src="https://www.youtube-nocookie.com/embed/CvLuCqAX4nk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </p>  
            <br><br>
            <a href="https://www.linkedin.com/in/tudortodorescu/" class="btn-read-more" target="_blank">
                <span style="font-family: oswald;">VIEW FULL PORTFOLIO</span>
                <i class="bi bi-arrow-right"></i>
            </a>
            <br><br>
        </div>
    </section>
</main>

<?php include php_root() . 'php/lp-footer.php'; ?>