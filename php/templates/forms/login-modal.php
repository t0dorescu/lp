<div id="loginModal" class="modal fade" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title color-secondary-color">Login members</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="input-group mb-3">
            <img src="assets/img/tt-small.jpg" style="width: 100px;margin: 10px auto;" />
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
                style="padding: 10px;"
                autofocus
              />
              <div class="invalid-feedback d-none">Please provide a valid email address</div>
              <div class="invalid-feedback d-none">Email address doesn't appear to be registered</div>
              <div class="invalid-feedback d-none">
                Your membership is deactivated, please contact <a href="mailTo:support@todorescu.com" class="text-decoration-underline color-secondary">support@todorescu.com</a> for more information
              </div>
              <div class="invalid-feedback d-none">You haven't activated your membership yet. Please go to your inbox (or SPAM folder) and follow the instructions, then come back for login.</div>
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
                style="padding: 10px;"
              />
              <div class="invalid-feedback d-none">Please enter your password here</div>
              <div class="invalid-feedback d-none">Invalid password for your membership, try again</div>
            </div>
            <div class="input-group mb-3 js_forgot_password">
              <a 
                class="text-decoration-underline color-secondary"
                onclick="openForgotPasswordModal()"
                style="font-size: .9rem;"
              >Forgot password ?</a>            
            </div>
            <div class="input-group">
              <input id="formError" class="form-control d-none" />
              <div class="invalid-feedback d-none">
                Something went wrong while trying to login. We are sorry for the inconvenience. 
                <br /><br />
                Please email us at <a href="mailTo:support@todorescu.com" class="text-decoration-underline color-secondary">support@todorescu.com</a> and we will look into it as soon as possible.
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <div class="spinner-border js_spinner d-none"></div>
          <button 
            type="button" 
            class="btn btn-standard js_login"
            onclick="login()"
          >Sign-in</button>
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
  const loginModal = document.querySelector('#loginModal')

  addEventListener('DOMContentLoaded', () => {
    eventInputs(loginModal)
    populateLoginData()
    
    const loginEmail = String((new URLSearchParams(window.location.search)).get('loginEmail') || '')?.toLowerCase()
    
    if (loginEmail) {
      openLoginModal()
      loginModal.querySelector('#inputEmail').value = loginEmail
    }
  })

  function populateLoginData() {
    if (!isDev()) return
    const qsvalue = (val1,val2) => loginModal.querySelector(val1).value = val2

    qsvalue('#inputEmail', `tudor.fis@gmail.com`)
    qsvalue('#inputPassword', `Parola137*`)
  }
  
  function openLoginModal() {
    new bootstrap.Modal(loginModal).show()
  }

  async function login() {
    toggleElements( loginModal, '.js_spinner', '.js_login', true)
    const status = { isValid: true }
    
    const [
      [ inputEmail, email ],
      [ inputPassword, password ],
      [ formError ],
    ] = queryInputs( loginModal, [
      '#inputEmail',
      '#inputPassword',
      '#formError',
    ])

    resetFormInputs(loginModal)
    await Api.get( 'update_member_status', { email: email.toLowerCase() })

    !isValidEmail(email)
      ? invalidInput(status, inputEmail, 0)
    
    : !(await Api.get( 'email_exists', { email: email.toLowerCase() })).valid
      ? invalidInput(status, inputEmail, 1)
    
    : (await Api.get( 'email_deactivated', { email: email.toLowerCase() })).valid
      ? invalidInput(status, inputEmail, 2)
    
    : (await Api.get( 'email_inactive', { email: email.toLowerCase() })).valid
      ? invalidInput(status, inputEmail, 3)
      : validInput(inputEmail)

    if ( status.isValid ) {
      password.length === 0
        ? invalidInput(status, inputPassword, 0)
      
      : !(await Api.get( 'check_login', { email: email.toLowerCase(), password: CryptoJS.MD5( password ).toString()})).valid
        ? invalidInput(status, inputPassword, 1)
        : validInput(inputPassword)
    }
    
    ////////

    if (status.isValid === true) {
      const data = {
        email: email.toLowerCase(),
        password: CryptoJS.MD5( password ).toString(),
        user_agent: navigator.userAgent
      }

      const loginResponse = await Api.post( 'login', data)
      if (!loginResponse.success) {
        invalidInput(status, formError, 0)
        diableInputs(loginModal)
        disableButton('.js_login')
        loginModal.querySelector('.js_forgot_password').classList.add('d-none')
      } 
      else {
        updateSessionToken(loginResponse.token)
        window.location = 'membership'
      }
    }

    toggleElements( loginModal, '.js_spinner', '.js_login', false)
  }
</script>