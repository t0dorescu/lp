<div id="registerModal" class="modal fade" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title color-secondary-color">
          <img src="assets/img/tudor-todorescu.jpg" style="height: 35px; vertical-align: bottom;"> 
          Register your account first
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="alert alert-success d-none js_confirm_message" role="alert" style="text-align: center;">
          <img class="js_gravatar_img d-none" src="" style="width: 100px; margin: 0 auto;" />
          <div class="row">&nbsp;</div>
          <strong>Congratulations <span class="js_name_congrats"></span>!</strong> 
          <br>
          You've just registered your account. 
          <br><br>
          Please check your email inbox first to confirm your registration. <strong>(SPAM folder as well)</strong>
        </div>
        <form class="row js_form">
          <div class="input-group mb-3">
            <span class="input-group-text" id="first-name-addon">
              <i class="bi bi-person"></i>
            </span>
            <input 
              id="inputFirstName" 
              type="text"
              class="form-control" 
              placeholder="First name" 
              aria-label="First name" 
              aria-describedby="first-name"
            />
            <div class="invalid-feedback d-none">Please provide a valid first name of at least 2 charcters long</div>
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text" id="last-name-addon">
              <i class="bi bi-person-fill"></i>
            </span>
            <input 
              id="inputLastName" 
              type="text"
              class="form-control" 
              placeholder="Last name" 
              aria-label="Last name" 
              aria-describedby="last-name"
            />
            <div class="invalid-feedback d-none">Please provide a valid last name of at least 2 charcters long</div>
          </div>
          <div class="input-group mb-3 mt-5">
            <span class="input-group-text" id="email-addon">
              <i class="bi bi-envelope"></i>
            </span>
            <input 
              id="inputEmail" 
              type="email"
              class="form-control"
              placeholder="Email address" 
              aria-label="Email address" 
              aria-describedby="email-addon"
            />
            <div class="invalid-feedback d-none">Please provide a valid email address</div>
            <div class="invalid-feedback d-none">Email address already used for an existing account</div>
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text" id="password-addon">
              <i class="bi bi-lock"></i>
            </span>
            <input 
              id="inputPassword" 
              type="password" 
              class="form-control" 
              placeholder="Password" 
              aria-label="Password" 
              aria-describedby="password-addon"
            />
            <div class="invalid-feedback d-none">Password must be at least 8 characters long</div>
            <div class="invalid-feedback d-none">Password must contain at least one uppercase letter, a number and a special character</div>
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text" id="password-confirm-addon">
              <i class="bi bi-lock-fill"></i>
            </span>
            <input 
              id="inputConfirmPassword" 
              type="password" 
              class="form-control" 
              placeholder="Confirm password" 
              aria-label="Confirm password" 
              aria-describedby="password-confirm-"
            />
            <div class="invalid-feedback d-none">Passwords don't match, please verify and try again</div>
          </div>
          <div class="input-group mb-3">
            <p class="text-center" style="font-size: .85rem">
              By signing up, you agree to our <a href="terms-of-service.html" target="_blank" class="text-decoration-underline color-secondary">Terms of service</a> and acknowledge our <a href="privacy-policy.html" target="_blank" class="text-decoration-underline color-secondary">Privacy policy</a>
            </p>
          </div>
          <div class="input-group">
            <input id="formError" class="form-control d-none" />
            <div class="invalid-feedback d-none">
              Something went wrong while trying to register. We are sorry for the inconvenience. 
              <br /><br />
              Please email us at <a href="mailTo:support@todorescu.com" class="text-decoration-underline color-secondary">support@todorescu.com</a> for manual registration.
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <div class="spinner-border js_spinner d-none"></div>
        <button 
          type="button" 
          class="btn btn-standard js_register"
          onclick="register()"
        >Register</button>
        <button 
          type="button"
          class="btn btn-third"
          data-bs-dismiss="modal"
        >Close</button>
      </div>
    </div>
  </div>
</div>

<script>
  const registerModal = document.querySelector('#registerModal')
  
  addEventListener('DOMContentLoaded', () => {
    eventInputs(registerModal)
    populateRegisterData()
  })

  function populateRegisterData() {
    if (!isDev()) return
    const qsvalue = (val1,val2) => registerModal.querySelector(val1).value = val2

    qsvalue('#inputFirstName', `Tudor`)
    qsvalue('#inputLastName', `Todorescu-Crisan`)
    qsvalue('#inputEmail', `tudor.fis@gmail.com`)
    qsvalue('#inputPassword', `Parola137*`)
    qsvalue('#inputConfirmPassword', `Parola137*`)
  }

  function openRegisterModal() {
    new bootstrap.Modal(registerModal).show()
  }
  
  async function register() {
    toggleElements( registerModal, '.js_spinner', '.js_register', true)
    const status = { isValid: true }

    const [
      [ inputFirstName, firstName ],
      [ inputLastName, lastName ],
      [ inputEmail, email ],
      [ inputPassword, password ],
      [ inputConfirmPassword, confirmPassword ],
      [ formError ],
    ] = queryInputs( registerModal, [
      '#inputFirstName',
      '#inputLastName',
      '#inputEmail',
      '#inputPassword',
      '#inputConfirmPassword',
      '#formError',
    ])

    resetFormInputs(registerModal)
   
    !isValidName(firstName)
      ? invalidInput(status, inputFirstName, 0)
      : validInput(inputFirstName)
   
    !isValidName(lastName)
      ? invalidInput(status, inputLastName, 0)
    : validInput(inputLastName)
    
    !isValidEmail(email)
      ? invalidInput(status, inputEmail, 0)
    : (await Api.get( 'email_exists', { email: email.toLowerCase() })).valid
      ? invalidInput(status, inputEmail, 1)
      : validInput(inputEmail)

    password.length < 8
      ? invalidInput(status, inputPassword, 0)
    : !isValidPassword(password)
      ? invalidInput(status, inputPassword, 1)
      : validInput(inputPassword)
    
    confirmPassword.length === 0 
      ? invalidInput(status, inputConfirmPassword)
    : (password !== confirmPassword) 
      ? invalidInput(status, inputConfirmPassword, 0)
      : validInput(inputConfirmPassword)
    
    /////////

    if (status.isValid === true) {
      const data = {
        first_name: firstName,
        last_name: lastName,
        email: email.toLowerCase(), 
        password: CryptoJS.MD5( password ).toString(), 
        plan: localStorage.getItem('plan') || '',
        gravatar_url: await fetchGravatar(email.toLowerCase())
      }

      if (!(await Api.post( 'register', data)).success) {
        invalidInput(status, formError, 0)
        diableInputs(registerModal)
        disableButton('.js_register')
      } 
      else {
        toggleElements( registerModal, '.js_confirm_message', '.js_form', true)
        disableButton('.js_register')
        welcomeMessage(registerModal, data)
      }
    }
    
    toggleElements( registerModal, '.js_spinner', '.js_register', false)
  }

  function welcomeMessage(form, data) {
    if ( data.first_name ) {
      form.querySelector('.js_name_congrats').innerText = data.first_name
    }

    if (data.gravatar_url) {
      const gravatarImg = form.querySelector('.js_gravatar_img')

      gravatarImg.classList.remove('d-none')
      gravatarImg.setAttribute('src', data.gravatar_url)
    }
  }
</script>