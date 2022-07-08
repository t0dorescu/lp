<div id="newsletter" class="footer-newsletter js_newsletter_signup">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 text-center">
                <h4>Newsletter</h4>
                <p>Sign-up for the newsletter to not miss out on the latest tips/tricks. </p>
            </div>
            <div class="col-lg-6">
                <div class="alert alert-success d-none js_confirm_message" role="alert" style="text-align: center;">
                    <img class="js_gravatar_img d-none" src="" style="width: 100px; margin: 0 auto;" />
                    <div class="row">&nbsp;</div>
                    <strong>Congratulations <span class="js_name_congrats"></span>!</strong>
                    <br>
                    You're one step away from getting the good stuff! 🍖
                    <br><br>
                    Please check your email inbox first to confirm your subscription. <strong>(SPAM folder as well)</strong>
                </div>
                <form class="js_form">
                    <input type="email" id="inputEmail" name="email" class="is-invalid" style="outline: 0;" />
                    <div class="spinner-border js_spinner d-none" style="float: right;"></div>
                    <input type="submit" value="Subscribe" class="js_subscribe" onclick="newsletterSignup()" />
                </form>
                <div class="input-group">
                    <input id="formError" class="form-control d-none" />
                    <div class="invalid-feedback d-none">Please provide a valid email address</div>
                    <div class="invalid-feedback d-none">Email address already used as a member. You're already subscribed!</div>
                    <div class="invalid-feedback d-none">Email address already used for newsletter subscription, you're all set!</div>
                    <div class="invalid-feedback d-none">
                        Something went wrong while trying to subscribe. We are sorry for the inconvenience.
                        <br /><br />
                        Please email us at <a href="mailTo:support@todorescu.com" class="text-decoration-underline color-secondary">support@todorescu.com</a> for manual newsletter subsription.
                    </div>
                </div>
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
            }

            newsletterForm.querySelector('.js_confirm_message').scrollIntoView({block:'center'})
        }

        toggleElements(newsletterForm, '.js_spinner', '.js_subscribe', false)
    }
</script>
