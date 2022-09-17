<?php
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
            await window.lintrk('track', { conversion_id: 10422769 });
        }, 1000)
    </script>
<?php endif ?>

<style>
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
</style>

<main id="main">
    <section class="hero">
        <div class="container main-container">
            <br><br> 
            <h1>
                We've received your purchase. <br>You'll be granted access to the materials shortly.
            </h1>
            <br><br>
            <a href="https://drive.google.com/drive/folders/1b5W2NlGxai_EH2II4ItFxisrWNa2TwSr?usp=sharing" class="btn-read-more" target="_blank">
                <span style="font-family: oswald;">DOWNLOAD COURSES</span>
                <i class="bi bi-arrow-right"></i>
            </a>
            <br><br>
            <small style="color: red; font-weight: bold;">IMPORTANT: save the link above ☝️</small>
            <br><br><br><br>
            <span class="color-white">
                <strong>Congratulations!</strong> You're now a paid student, you now <br>have access to our support email: <a href="mailto:support@todorescu.com">support@todorescu.com</a>
            </span>
            </h2>
            <br><br><br><br>
        </div>
    </section>
</main>

<?php include php_root() . 'php/lp-footer.php'; ?>