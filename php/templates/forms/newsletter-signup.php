
<style>
    .waitinglist-agreement {
        font-size: .75rem;
        color: #ccc; 
        max-width: 350px; 
        margin: 0.5rem auto;
        text-align: center;
    }
</style>

<div class="footer-newsletter js_newsletter_signup" 
    style="background: none; opacity: .9; border: 0; padding: 30px 0 0 0;">
    <div class="container" style="background: black;padding: 30px;">
        <div class="row justify-content-center">
            <div class="col-lg-12 text-center js_waiting_top">
                <h4 style="color: var(--primary-color);font-family: 'oswald';letter-spacing: 1px;">
                    NO AVAILABILITY AT THIS TIME
                </h4>
                <p style="color: #ccc; margin-bottom: 0">
                    <strong style="color: white;">
                        Register the waiting list, we'll email <br>
                        you back in the next 3-20 days 👇
                    </strong>
                </p>
            </div>
            <div class="col-lg-6">
                <div 
                    class="alert alert-success d-none js_confirm_message" 
                    role="alert" 
                    style="text-align: center; margin-top: 20px;"
                >
                    <img class="js_gravatar_img d-none" src="" style="width: 100px; margin: 0 auto; display: none !important;" />
                    <div class="row" style=" display: none !important;">&nbsp;</div>
                    <br>
                    <span class="js_name_congrats"></span>
                    <span style="font-size: 1.25rem; font-family: oswald;">To finalize your registration, we've sent you a confirmation link. </span>
                    <br>( if you haven't received it, check SPAM folder also )
                    <br><br>
                </div>
                <form class="js_form">
                    <input type="email" id="inputEmail" name="email" class="is-invalid" placeholder="Your email address..." style="outline: 0;" />
                    <div class="spinner-border js_spinner d-none" style="float: right;"></div>
                    <input type="submit" value="JOIN" class="js_subscribe" onclick="newsletterSignup()" />
                </form>
                <div class="input-group">
                    <input id="formError" class="form-control d-none" />
                    <div class="invalid-feedback d-none">Please provide a valid email address</div>
                    <div class="invalid-feedback d-none">Email address already used as a member.</div>
                    <div class="invalid-feedback d-none">Email address already used for a subscription, you're all set!</div>
                    <div class="invalid-feedback d-none">
                        Something went wrong while trying to register. We are sorry for the inconvenience.
                        <br /><br />
                        Please email us at <a href="mailTo:support@todorescu.com" class="text-decoration-underline color-secondary">support@todorescu.com</a> for manual newsletter subsription.
                    </div>
                </div>
                <!-- <p class="waitinglist-agreement js_waiting_agreement">
                    By joinning the waiting list, you agree to our <a href="<?= root().'terms-of-service' ?>" target="_blank" class="text-decoration-underline">Terms of service</a> and acknowledge our <a href="<?= root().'privacy-policy' ?>" target="_blank" class="text-decoration-underline">Privacy policy</a>
                </p> -->
            </div>
        </div>
    </div>
</div>

<script>
    const newsletterForm = document.querySelector('.js_newsletter_signup')
    const buttonSubmit = newsletterForm.querySelector('input[type="submit"]')

    addEventListener('DOMContentLoaded', () => {
        buttonSubmit.addEventListener('click', e => {
            e.preventDefault()
        })
    })

    async function newsletterSignup() {
        window.location.hash = ''

        toggleElements(newsletterForm, '.js_spinner', '.js_subscribe', true)
        const status = { isValid: true }

        const [
            [inputEmail, email],
            [formError],
        ] = queryInputs(newsletterForm, [
            '#inputEmail',
            '#formError',
        ])

        resetFormInputs(newsletterForm)

        !isValidEmail(email) 
            ? invalidInput(status, formError, 0) 
        : (await Api.get('email_exists', { email: email.toLowerCase()})).valid 
            ? invalidInput(status, formError, 1)
        : (await Api.get('email_exists_newsletter', { email: email.toLowerCase() })).valid
            ? invalidInput(status, formError, 2) 
            : validInput(inputEmail)

        ////

        if (status.isValid === true) {
            const data = {
                email: email.toLowerCase(),
                gravatar_url: await fetchGravatar(email.toLowerCase())
            }

            if (!(await Api.post('newsletter', data)).success) {
                invalidInput(status, formError, 3)
                diableInputs(newsletterForm)
                disableButton('.js_subscribe')
            } else {
                toggleElements(newsletterForm, '.js_confirm_message', '.js_form', true)
                disableButton('.js_subscribe')
                welcomeMessage(newsletterForm, data)
                
                document.querySelector('.js_waiting_top').style.display = 'none'
                document.querySelector('.js_waiting_agreement').style.display = 'none'
            }

            newsletterForm.querySelector('.js_confirm_message').scrollIntoView({block:'center'})
        }

        toggleElements(newsletterForm, '.js_spinner', '.js_subscribe', false)
    }
</script>
