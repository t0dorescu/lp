<?php
die();
include $_SERVER['DOCUMENT_ROOT'] . "/api/light.php";

$hidewaitinglist = true;
$showterms = false;
$hidemenu = true;
$hidesocials = true;
$disabletopmenulink = true;
$hidecookieconset = true;

$title = "Purchase confirmation - Todorescu.com";
include php_root() . 'php/lp-header.php';
?>

<?php if (!$isDev) : ?>
    <script>
        setTimeout(async () => {
            await window.lintrk('track', { conversion_id: 10525985 });
        }, 1000)
    </script>
<?php endif ?>

<style>
    .main-container {
        max-width: 50vw;
    }

    h1 {
        font-family: oswald;
        color: white !important;
    }

    h2 {
        font-family: oswald;
        color: var(--primary-color) !important;
    }

    .footer {
        display: none !important;
    }

    .warning-span {
        font-weight: bold;
        margin-top: 20px;
        background: black;
        color: red;
        font-size: 1.5rem;
        font-family: oswald;
    }

    @media (max-width: 768px) {
        .main-container {
            max-width: 95vw;
        }
    }
</style>

<main id="main">
    <section class="hero">
        <div class="container main-container">
            <br>
            <h1>
                Purchase completed. You'll be granted access shortly.
            </h1>
            <br><br>
            <a href="https://drive.google.com/drive/folders/1IyCdqrqIMa_wkkB8zg6ARwzUx2we6Yt5?usp=sharing" class="btn-read-more" target="_blank">
                <span style="font-family: oswald;">DOWNLOAD</span>
                <i class="bi bi-arrow-right"></i>
            </a>
            <br><br>
            <small style="color: red; font-weight: bold;">IMPORTANT: save the link above ☝️</small>
            <br><br><br><br>
            <span class="color-white">
                <strong>Congratulations!</strong> You're now a paid student, you now have access to our support email: <a href="mailto:support@todorescu.com">support@todorescu.com</a>
            </span>
            <br><br>
        </div>
    </section>
</main>

<?php include php_root() . 'php/lp-footer.php'; ?>