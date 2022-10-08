<?php
include $_SERVER['DOCUMENT_ROOT'] . "/api/light.php";

$hidewaitinglist = true;
$showterms = true;
$hidecookieconset = true;
$hidemenu = true;
$hidesocials = true;
$disabletopmenulink = true;
$hidecookieconset = true;

$title = "Book my information call - Todorescu.com";
include php_root() . 'php/lp-header.php';
?>

<?php if (!$isDev) : ?>
    <script>
        setTimeout(async () => {
            await window.lintrk('track', { conversion_id: 10422737 });
        }, 1000)
    </script>
<?php endif ?>

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

    iframe {
        width: 100%;
        height: 700px;
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
            <h1>
                BOOK YOUR TODORESCU METHOD™<br> INFORMATION CALL BELOW
            </h1>
            <br>
            <span class="warning-span">
                WARNING: <br> READ THIS BEFORE YOU BOOK
            </span>
            <br><br>
            <div class="text-left">
                <br>
                <h1 class="subtitle">
                    IMPORTANT TO NOTE
                </h1>
                <br>
                <p class="color-white">
                    ➤ If you do not have money to invest in a program, PLEASE DO NOT BOOK A CALL AND TAKE UP A SLOT.
                </p>
                <p class="color-white">
                    ➤ If you do not show up for your booked call and you don’t reschedule, you will NOT get a second chance because we hate people that waste our time.
                </p>
                <p class="color-white">
                    My team looks forward to talking to you.
                </p>
                <br>
                <h1 class="subtitle">
                    THE FOUR AGREEMENTS
                </h1>
                <br>
                <p class="color-white">
                    ➤ You are serious about getting help and are willing to pay for the help as long as it makes sense to you.
                </p>
                <p class="color-white">
                    ➤ To be honest about your situation, and open to new solutions.
                </p>
                <p class="color-white">
                    ➤ To show up on time and if you are late or 'no-show', you will not be allowed to re-schedule.
                </p>
                <p class="color-white">
                    ➤ To look over the 'pre-call guide' that will arrive in your email inbox right after you book the call.
                </p>
            </div>
            <br>
            <br>
            <h1>
                IT'S TIME TO BOOK YOUR CALL NOW
            </h1>
            <br>
            <span class="warning-span">
                CHOOSE WISELY:<br>
                WE DO NOT RESCHEDULE BOOKED CALLS
            </span>
            <br><br>
            <p class="color-white">PS. If our available spots don't work for your timezone, please email us directly at <a href="mailto:support@todorescu.com">support@todorescu.com</a> and we'll coordinate and schedule a time that works.</p>
            <br>
            <iframe src="https://calendly.com/todorescu/method?embed_domain=todorescu.com&amp;embed_type=Inline" frameborder="0"></iframe>
        </div>
    </section>
</main>

<?php include php_root() . 'php/lp-footer.php'; ?>