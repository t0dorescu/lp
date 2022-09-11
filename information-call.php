<?php
include $_SERVER['DOCUMENT_ROOT'] . "/api/light.php";

$hidewaitinglist = true;
$showterms = true;

$title = "Schedule Information Call - Todorescu.com";
include php_root() . 'php/lp-header.php';
?>

<style>
    .main-container {
        max-width: 55vw;
    }
    @media (max-width: 768px) {
        .main-container {
            max-width: 95vw; 
        }
    }
</style>
<main id="main">
    <section class="hero" style="padding-bottom: 0;">
        <div class="container main-container" style="opacity: .95;">
            <h1 style="font-family: oswald;color: white;">
                BOOK YOUR TODORESCU WEBDEV METHODOLOGY™<br> INFORMATION CALL BELOW
            </h1>
            <br>
            <span style="font-weight: bold; margin-top: 20px; background: red; color: white; font-size: 1.25rem;line-height: 2rem;">
                WARNING: <br> READ THIS BEFORE YOU BOOK
            </span>
            <br><br>
            <div style="text-align: left;">
                <br>
                <h1 style="font-family: oswald;color: var(--primary-color);">
                    IMPORTANT TO NOTE
                </h1>
                <br>
                <p style="color: white;">
                    ➤ If you are brand new to business or do not have money to invest in a program, PLEASE DO NOT BOOK A CALL AND TAKE UP A SLOT.
                </p>
                <p style="color: white;">
                    ➤ If you do not show up for your booked call and you don’t reschedule, you will NOT get a second chance because we hate people that waste our time.
                </p>
                <p style="color: white;">
                    My team looks forward to talking to you.
                </p>
                <br>
                <h1 style="font-family: oswald;color: var(--primary-color);">
                    THE FOUR AGREEMENTS
                </h1>
                <br>
                <p style="color: white;">
                    ➤ You are serious about getting help and are willing to pay for the help as long as it makes sense to you. 
                </p>
                <p style="color: white;">
                    ➤ To be honest about your situation, and open to new solutions. 
                </p>
                <p style="color: white;">
                    ➤ To show up on time and if you are late or 'no-show', you will not be allowed to re-schedule. 
                </p>
                <p style="color: white;">
                    ➤ To look over the 'pre-call guide' that will arrive in your email inbox right after you book the call.  
                </p>
            </div>
            <br>
            <br>
            <h1 style="font-family: oswald;color: white;">
                IT'S TIME TO BOOK YOUR CALL NOW
            </h1>
            <br>
            <span style="font-weight: bold; margin-top: 20px; background: red; color: white; font-size: 1.25rem;line-height: 2rem;">
                CHOOSE WISELY:<br>
                WE DO NOT RESCHEDULE BOOKED CALLS 
            </span>
            <br><br>
            <p style="color: white;">PS. If our available spots don't work for your timezone, please email us directly at <a href="mailto:support@todorescu.com">support@todorescu.com</a> and we'll coordinate and schedule a time that works.</p>
            <br><br>
            <iframe src="https://calendly.com/todorescu/methodology?embed_domain=todorescu.com&amp;embed_type=Inline" frameborder="0" style="width: 100%; height: 700px;"></iframe>
        </div>
    </section>
</main>

<?php include php_root() . 'php/lp-footer.php'; ?>