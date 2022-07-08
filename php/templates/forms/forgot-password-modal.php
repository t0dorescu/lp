<div id="forgotPasswordModal" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title color-secondary-color">Forgot password ?</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="alert alert-success d-none js_confirm_message" role="alert" style="text-align: center;">
            <strong>We've generated a reset password link!</strong> 
            <br>
            Check your inbox (SPAM folder as well) to reset your password</strong>
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
            </div>
            <div class="input-group">
              <input id="formError" class="form-control d-none" />
              <div class="invalid-feedback d-none">
                Something went wrong while trying to reset password. We are sorry for the inconvenience. 
                <br /><br />
                Please email us at <a href="mailTo:support@todorescu.com" class="text-decoration-underline color-secondary">support@todorescu.com</a> for manual reset.
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <div class="spinner-border js_spinner d-none"></div>
          <button 
            type="button" 
            class="btn btn-standard js_forgot_password_btn"
            onclick="forgotPassword()"
          >Email me</button>
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
  const forgotPasswordModal = document.querySelector('#forgotPasswordModal')

  addEventListener('DOMContentLoaded', () => {
    eventInputs(forgotPasswordModal)
    populateForgotData()
  })

  function populateForgotData() {
    if (!isDev()) return
    const qsvalue = (val1,val2) => forgotPasswordModal.querySelector(val1).value = val2

    qsvalue('#inputEmail', `tudor.fis@gmail.com`)
  }

  function openForgotPasswordModal() {
    new bootstrap.Modal(forgotPasswordModal).show()
    loginModal.querySelector('.btn-close').click()
  }

  async function forgotPassword() {
    toggleElements( forgotPasswordModal, '.js_spinner', '.js_forgot_password_btn', true)
    const status = { isValid: true }

    const [
      [ inputEmail, email ],
      [ formError ],
    ] = queryInputs( forgotPasswordModal, [
      '#inputEmail',
      '#formError',
    ])

    resetFormInputs(forgotPasswordModal)

    !isValidEmail(email)
      ? invalidInput(status, inputEmail, 0)
    
    : !(await Api.get( 'email_exists', { email: email.toLowerCase() })).valid
      ? invalidInput(status, inputEmail, 1)
      : validInput(inputEmail)

    ////////

    if (status.isValid === true) {
      const data = {
        email: email.toLowerCase(),
      }

      const forgotPassworResponse = await Api.post( 'forgot_password', data)

      if (!forgotPassworResponse.success) {
        invalidInput(status, formError, 0)
        diableInputs(forgotPasswordModal)
        disableButton('.js_forgot_password_btn')
      } 
      else {
        toggleElements( forgotPasswordModal, '.js_confirm_message', '.js_form', true)
        disableButton('.js_forgot_password_btn')
      }
    }

    toggleElements( forgotPasswordModal, '.js_spinner', '.js_forgot_password_btn', false)
  }
</script>
