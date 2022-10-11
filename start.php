<?php
include $_SERVER['DOCUMENT_ROOT'] . "/api/light.php";

$hidewaitinglist = true;
$showterms = true;
$hidesocials = true;
$hidemenu = true;
$disabletopmenulink = true;
$hidecookieconset = true;

$title = "START HERE - Todorescu.com";
include php_root() . 'php/lp-header.php';
?>

<?php if (!$isDev) : ?>
    <script>
        setTimeout(async () => {
            await window.lintrk('track', { conversion_id: 10422705 });
        }, 1000)
    </script>
<?php endif ?>

<style>
    h1.title {
        font-family: oswald;
        color: white !important;
    }


    .main-container {
        max-width: 95vw;
        opacity: .95;
        margin-top: 60px;
    }


    h1 span {
        font-family: oswald;
        color: var(--primary-color);
    }

    h3.subtitle {
        font-size: 1.25rem;
        font-family: oswald;
        color: var(--primary-color);
        width: 90%;
        padding: 15px;
        margin: 0 auto;
    }

    .btn-read-more {
        width: auto;
        padding: 30px;
        margin: 30px auto;
        border: 0;
    }

    .btn-read-more>* {
        margin: 5px;
    }

    .btn-read-more span {
        font-size: 1.25rem;
        letter-spacing: 1px;
        font-family: Arial;
        font-weight: 500;
    }

    .optin-img {
        width: 80%;
        height: auto;
        border-radius: 5px;
    }

    h5 {
        font-family: oswald;
        font-size: 1.75rem;
    }

    .input-group input, 
    .input-group span {
        padding: 15px;
    }
    .input-group span i {
        font-size: 1.55rem;
    }

    .optin-agreement {
        font-size: .75rem;
        color: black; 
        max-width: 350px; 
        margin: 0.5rem auto;
        text-align: center;
    }

    @media (max-width: 768px) {
        h1.title {
            font-size: 1.35rem;
        }

        .btn-read-more {
            padding: 15px;
        }

        .btn-read-more span {
            font-size: 1rem;
        }

        h5 {
            font-size: 1.35rem;
        }

        .input-group input, 
        .input-group span {
            padding: 7px 10px;
        }

        .input-group span i {
            font-size: 1.15rem;
        }
    }
</style>

<main id="main">
    <section class="hero pb-0">
        <div class="container main-container">
            <div class="row">
                <div class="col-lg-6 col-12 flex-middle">
                    
                    <h1 class="title" style="color: white;">
                        Learn programming with the<br>
                        TODORESCU METHOD™ and win your first developer
                        job in under 10 weeks
                    </h1>
                    <button class="btn-read-more" onclick="openOptinModal()">
                        <i class="bi bi-envelope"></i>
                        <span style="font-family: oswald;">EMAIL ME THE VIDEO</span>
                    </button>
                </div>
                <div class="col-lg-6 col-12">
                    <img src="<?= root() . 'assets/img/training_3.jpg' ?>" class="optin-img" />
                    <br>
                    <h3 class="subtitle" style="color: var(--primary-color) !important;">
                        Only for those who have a burning ambition for radical career growth 🔥
                    </h3>
                </div>
            </div>
        </div>
    </section>
</main>

<div id="optinModal" class="modal fade" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title color-secondary-color">Yes! Send Me The Video Now</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <form class="row js_form">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="name-addon">
                            <i class="bi bi-person"></i>
                        </span>
                        <input id="inputName" type="text" class="form-control" placeholder="Name" aria-label="Name" aria-describedby="name-addon" autofocus />
                        <div class="invalid-feedback d-none">Please provide a valid name</div>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="email-addon">
                            <i class="bi bi-envelope"></i>
                        </span>
                        <input id="inputEmail" type="email" class="form-control" placeholder="Email address" aria-label="Email address" aria-describedby="email-addon" autofocus />
                        <div class="invalid-feedback d-none">Please provide a valid email address</div>
                    </div>
                    <div class="input-group">
                        <input id="formError" class="form-control d-none" />
                        <div class="invalid-feedback d-none">
                            Something went wrong while trying to opt-in. We are sorry for the inconvenience.
                            <br /><br />
                            Please email us at <a href="mailTo:support@todorescu.com" class="text-decoration-underline color-secondary">support@todorescu.com</a> and we will look into it as soon as possible.
                        </div>
                    </div>
                </form>
                <p class="optin-agreement">
                    By sharing your personal information, you agree to our <a href="<?= root().'terms-of-service' ?>" target="_blank" class="text-decoration-underline">Terms of service</a> and acknowledge our <a href="<?= root().'privacy-policy' ?>" target="_blank" class="text-decoration-underline">Privacy policy</a>
                </p>
                <div class="spinner-border js_spinner d-none"></div>
                <button type="button" class="btn btn-read-more js_optin" style="margin: 0 auto;" onclick="optin()">
                    <i class="bi bi-envelope"></i>
                    <span style="font-family: oswald;">EMAIL ME THE VIDEO</span>
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    const optinModal = document.querySelector('#optinModal')

    addEventListener('DOMContentLoaded', () => {
        populateOptinData()
    })

    function populateOptinData() {
        if (!isDev()) return
        const qsvalue = (val1, val2) => optinModal.querySelector(val1).value = val2

        qsvalue('#inputName', ``)
        qsvalue('#inputEmail', ``)
    }

    async function openOptinModal() {
        <?php if (!$isDev) : ?>
            await window.lintrk('track', { conversion_id: 10422713 });
        <?php endif ?>
        new bootstrap.Modal(optinModal).show()
    }

    async function optin() {
        toggleElements(optinModal, '.js_spinner', '.js_optin', true)
        const status = {
            isValid: true
        }

        const [
            [inputName, name],
            [inputEmail, email],
            [formError],
        ] = queryInputs(optinModal, [
            '#inputName',
            '#inputEmail',
            '#formError',
        ])

        resetFormInputs(optinModal)

        !isValidName(name) ? 
            invalidInput(status, inputName, 0) :
            validInput(inputName)
        
        !isValidEmail(email) ? 
            invalidInput(status, inputEmail, 0) :
            validInput(inputEmail)

        //////////

        if (status.isValid === true) {
            <?php if (!$isDev) : ?>
                await window.lintrk('track', { conversion_id: 10422721 });
            <?php endif ?>

            const data = {
                name: name,
                email: email.toLowerCase()
            }

            const optinResponse = await Api.post( 'optin_vsl', data)

            if (!optinResponse.success) {
                invalidInput(status, formError, 0)
                diableInputs(optinModal)
                document.querySelector('.js_optin').style.display = 'none';
                document.querySelector('.optin-agreement').style.display = 'none';
            } 
            else {
                window.location = 'email-confirmation'
            }
        }
        
        toggleElements(optinModal, '.js_spinner', '.js_optin', false)
    }
</script>

<?php include php_root() . 'php/lp-footer.php'; ?>
