<?php
die();
include $_SERVER['DOCUMENT_ROOT'] . "/api/light.php";

$hidewaitinglist = true;
$showterms = true;

$title = "Vue.js/Vue3 industry insider interview about the roadmap Radu took, then landed his first mid-level position";
include php_root() . 'php/lp-header.php';
?>

<style>
    h1 {
        font-size: 1.5rem;
        font-family: oswald;
        color: white !important;
    }

    h2 {
        color: var(--primary-color) !important;
    }

    iframe {
        border: 5px solid white;
        border-radius: 10px;
    }

    @media (max-width: 768px) {
        h1 {
            font-size: 1.25rem;
        }
        h2 {
            font-size: 1.1rem;
        }
    }
    
</style>
<main id="main">
    <section class="hero">
        <div class="container main-container">
            <div class="row">
                <div class="col-lg-6 col-12 flex-middle">
                    <h1>
                        Vue.js/Vue3 industry insider interview about the roadmap Radu took, then landed his first mid-level position
                    </h1>
                    <br>
                    <h2>
                        Radu landed his first mid-level Vue only project using this method. Find out how in this exclusive interview
                        <br><br>
                    </h2>
                </div>
                <div class="col-lg-6 col-12">
                    <iframe src="https://www.youtube-nocookie.com/embed/XmFg7XcBvtg?modestbranding=1&autohide=1&showinfo=0&controls=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include php_root() . 'php/lp-footer.php'; ?>