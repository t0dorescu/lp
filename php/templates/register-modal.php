<div id="registerModal" class="modal fade" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title color-secondary-color">Register your account first</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form class="row">
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
  

  function openRegisterModal() {
    new bootstrap.Modal(registerModal).show()
  }
  
  async function register() {
    registerModal.querySelector('.js_spinner').classList.remove('d-none')
    registerModal.querySelector('.js_register').classList.add('d-none')
    
    let isValid = true

    const inputEmail = registerModal.querySelector('#inputEmail')
    const inputPassword = registerModal.querySelector('#inputPassword')
    const inputConfirmPassword = registerModal.querySelector('#inputConfirmPassword')

    const email = inputEmail.trim()
    const password = inputPassword.trim()
    const confirmPassword = inputConfirmPassword.trim()

    ;[ ...registerModal.querySelectorAll('.invalid-feedback')].forEach( element => element.classList.add('d-none') )
    ;[ ...registerModal.querySelectorAll('.form-control')].forEach( element => element.classList.remove('is-invalid','is-valid') )

    if (!isValidEmail(email)) {
      isValid = false
      inputEmail.classList.add('is-invalid')
      inputEmail.parentElement.querySelectorAll('.invalid-feedback')[0].classList.remove('d-none')
    }
    else if ((await (await fetch(`https://todorescu.com/lp/api/?method=emailExists&email=${email}`)).json()).emailExists) {
      isValid = false
      inputEmail.classList.add('is-invalid')
      inputEmail.parentElement.querySelectorAll('.invalid-feedback')[1].classList.remove('d-none')
    }
    else {
      inputEmail.classList.add('is-valid')
    }

    if (password.length < 8) {
      isValid = false
      inputPassword.classList.add('is-invalid')
      inputPassword.parentElement.querySelectorAll('.invalid-feedback')[0].classList.remove('d-none')
    }
    else if (!isValidPassword(password)) {
      isValid = false
      inputPassword.classList.add('is-invalid')
      inputPassword.parentElement.querySelectorAll('.invalid-feedback')[1].classList.remove('d-none')
    }
    else {
      inputPassword.classList.add('is-valid')
    }

    if ( confirmPassword.length > 0 && password !== confirmPassword ) {
      isValid = false
      inputConfirmPassword.classList.add('is-invalid')
      inputConfirmPassword.parentElement.querySelectorAll('.invalid-feedback')[0].classList.remove('d-none')
    } 
    else {
      inputConfirmPassword.classList.add('is-valid')
    }
    

    registerModal.querySelector('.js_spinner').classList.add('d-none')
    registerModal.querySelector('.js_register').classList.remove('d-none')
  }
</script>