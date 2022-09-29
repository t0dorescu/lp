<?php
die();
include $_SERVER['DOCUMENT_ROOT'] . "/api/light.php";

$hidewaitinglist = true;
$showterms = true;

$title = "We're giving away $43,890. Want some of it ?";
include php_root() . 'php/lp-header.php';
?>

<style>
    h1,
    h2,
    h3 {
        margin: 10px auto;
    }

    h1 {
        font-size: 1.7rem;
    }

    h2 {
        font-weight: 300;
    }

    h3 {
        color: var(--primary-color);
        font-weight: bold;
    }

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
    <section class="hero">
        <div class="container main-container">
            <h1>
                We're giving away $43,890. Want some of it ?
            </h1>
            <br>
            <h2>
                Gonna split it up between <br>21 people over 21 days, <br><b>$1791 + $299 each.</b>
            </h2>
            <br>
            <h3>
                **HERE'S THE DEAL**
            </h3>
            <p class="color-white">
                We truly believe that<br>
                <b>WebDev Employeed Roadmap™</b> is the greatest program ever created, and we want to prove it and have some fun. So we're doing something a little crazy...
                <br><br>
                We're giving away $43,890 in actual value over the next 21 days.
                <br><br>
                Every single day, <br>
                one new person will get:
                <br><br>
                A zoom session with Tudor worth $299 for FREE, 9x of our web-dev courses worth $1791<br><br>
                One new person. Every day. 21 days.
            </p>
            <!-- <h3>
                    **WHY WE ARE DOING THIS**
                </h3>
                <p class="color-white">
                    1. Almost all of you will become advocates after receiving this and spread the word about us better than we can.
                    <br><br>
                    2. Many people will want more help from us and join the "WebDev Employeed Roadmap"
                    <br><br>
                    3. We make $43,890 by first giving $43,890 of value to the market
                    <br><br>
                    4. Helping devs at their start is fulfilling and we get better everytime I do it
                    <br><br>
                    5. This is way more fun than posting a 2 long boring hours of technical content.
                </p>
                <h3>
                    **WHY YOU SHOULD DO THIS**
                </h3>
                <p class="color-white">
                    1. So you don't accidentally waste half of year going down the wrong path.
                    <br><br>
                    2. So you can get inspired and break out of a rut
                    <br><br>
                    3. Personal advice from Tudor is better than going to the spa.
                    <br><br>
                    4. You'd be insane not to
                </p> -->
            <h3>
                **HOW TO QUALIFY**
            </h3>
            <p class="color-white">
                - Are you a human?<br>
                - Need a web developer job?<br>
                - Need a road-map?<br>
                - Need a guiding hand?<br>
                - Stuck and can't figure out why?<br>
                - You are not super annoying?
                <br><br>
                <b>CONGRATULATIONS YOU QUALIFY</b>
                <br><br>
            </p>
            <h3>
                **WHAT TO DO NEXT**
            </h3>
            <p class="color-white">
                Send an email to our address: <a href="mailto:support@todorescu.com" class="text-underline">support@todorescu.com</a>
                <br><br>
                Our team will reply and give you a number between 1 and 21.
                <br><br>
                Your number will give you lifetime access to our entire product suite and a private zoom call with Tudor worth $299 for FREE, to take place on the date that comes with your number.
                <br><br>
                I recommend you ask for your number quickly to avoid being too far down the queue.
                <br><br>
                Lets get you <b>WebDev Employeed</b>!
            </p>
        </div>
    </section>
</main>

<?php include php_root() . 'php/lp-footer.php'; ?>