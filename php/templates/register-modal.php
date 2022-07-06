<div id="registerModal" class="modal fade" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title color-secondary-color">Register your account first</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="alert alert-success d-none js_confirm_message" role="alert">
          <strong>Congratulations!</strong> You've just registered your account. 
          <br><br>
          Please check your email inbox first to confirm your registration. <strong>(SPAM folder as well)</strong>
        </div>
        <form class="row js_form">
          <div class="input-group mb-3">
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
              <i class="bi bi-lock"></i>
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
    populateData()
  })

  function populateData() {
    registerModal.querySelector('#inputEmail').value = `test@test${Math.random().toFixed(5).slice(2)}.com`
    registerModal.querySelector('#inputPassword').value = `Doasz${Math.random().toFixed(5).slice(2)}&`
    registerModal.querySelector('#inputConfirmPassword').value = registerModal.querySelector('#inputPassword').value
  }

  function openRegisterModal() {
    new bootstrap.Modal(registerModal).show()
  }
  
  async function register() {
    toggleElements( registerModal, '.js_spinner', '.js_register', true)
    const status = { isValid: true }

    const [
      [ inputEmail, email ],
      [ inputPassword, password ],
      [ inputConfirmPassword, confirmPassword ],
      [ formError ],
    ] = queryInputs( registerModal, [
      '#inputEmail',
      '#inputPassword',
      '#inputConfirmPassword',
      '#formError',
    ])

    resetFormInputs(registerModal)
   
    if (!isValidEmail(email)) {
      invalidInput(status, inputEmail, 0)
    }
    else if ((await Api.get( 'emailExists', { email })).valid) {
      invalidInput(status, inputEmail, 1)
    }
    else {
      validInput(inputEmail)
    }

    ////////
    
    if (password.length < 8) {
      invalidInput(status, inputPassword, 0)
    }
    else if (!isValidPassword(password)) {
      invalidInput(status, inputPassword, 1)
    }
    else {
      validInput(inputPassword)
    }
    
    ////////
    
    if ( confirmPassword.length === 0 ) {
      invalidInput(status, inputConfirmPassword)
    }
    else if ( password !== confirmPassword ) {
      invalidInput(status, inputConfirmPassword, 0)
    } 
    else {
      validInput(inputConfirmPassword)
    }
    
    /////////

    if (status.isValid) {
      const data = {
        email: email.toLowerCase(), 
        password: CryptoJS.MD5( password ).toString(), 
        plan: localStorage.getItem('plan') || ''
      }

      if (!(await Api.post( 'register', data)).success) {
        invalidInput(status, formError, 0)
        diableInputs(registerModal)
        disableButton('.js_register')
      } 
      else {
        toggleElements( registerModal, '.js_confirm_message', '.js_form', true)
        disableButton('.js_register')
      }
    }
    
    toggleElements( registerModal, '.js_spinner', '.js_register', false)
  }
</script>