<?php
include $_SERVER['DOCUMENT_ROOT']."/api/index.php";

if (!isset($_GET['token'])) {
    redirect_home();
}

$token = escape_get('token');
$email = (new Api())->check_reset_token($token);

if (!$email) {
    redirect_home();
}
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Todorescu.com - Reset password for <?= $email ?></title>
  
  <meta content="" name="description" />
  <meta content="" name="keywords" />

  <!-- Favicons -->
  <link href="assets/img/favicon.jpg" rel="icon">
  <link href="assets/img/apple-touch-icon.jpg" rel="apple-touch-icon">

  <!-- Vendor CSS files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet" />
</head>
<body>
  
<div id="resetPasswordModal" class="modal fade" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" t>
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title color-secondary-color">
          <img src="assets/img/tudor-todorescu.jpg" style="height: 35px; vertical-align: bottom;"> 
          Reset your password
        </h5>
      </div>
      <div class="modal-body">
        <div class="alert alert-success d-none js_confirm_message" role="alert" style="text-align: center;">
          <div class="row">&nbsp;</div>
          <strong>Password successfully changed!</strong> 
          <br>
          You can now go to the main page to login into your members area. 
          <br><br>
          <a href="/?loginEmail=<?= $email ?>" class="text-decoration-underline color-secondary">Click here for login!</a>
        </div>
        <form class="row js_form">
          <div class="input-group mb-3">
            <span class="input-group-text" id="email-addon">
              <i class="bi bi-envelope"></i>
            </span>
            <input 
              id="inputEmail" 
              type="email"
              class="form-control is-valid"
              placeholder="Email address" 
              aria-label="Email address" 
              aria-describedby="email-addon"
              value="<?= $email ?>"
              disabled
            />
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
          <div class="input-group">
            <input id="formError" class="form-control d-none" />
            <div class="invalid-feedback d-none">
              Something went wrong while trying to change your password. We are sorry for the inconvenience. 
              <br /><br />
              Please email us at <a href="mailTo:support@todorescu.com" class="text-decoration-underline color-secondary">support@todorescu.com</a> and we will reset it manually.
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <div class="spinner-border js_spinner d-none"></div>
        <button 
          type="button" 
          class="btn btn-standard js_reset_password"
          onclick="resetPassword()"
        >Reset password</button>
      </div>
    </div>
  </div>
</div>

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/crypto-js/crypto-js.min.js"></script>

<!-- JS Main files -->
<script src="assets/js/utils/utils.js"></script>
<script src="assets/js/utils/validators.js"></script>
<script src="assets/js/utils/forms.js"></script>
<script src="assets/js/services/api.js"></script>

<script>
  const resetPasswordModal = document.querySelector('#resetPasswordModal')
  
  addEventListener('DOMContentLoaded', () => {
    eventInputs(resetPasswordModal)
    populateResetPasswordData()
    openResetPasswordModal()
  })

  function populateResetPasswordData() {
    if (!isDev()) return
    const qsvalue = (val1,val2) => resetPasswordModal.querySelector(val1).value = val2

    qsvalue('#inputPassword', `Parola137*`)
    qsvalue('#inputConfirmPassword', `Parola137*`)
  }

  function openResetPasswordModal() {
    new bootstrap.Modal(resetPasswordModal).show()
  }

  async function resetPassword() {
    toggleElements( resetPasswordModal, '.js_spinner', '.js_reset_password', true)
    const status = { isValid: true }

    const [
      [ inputPassword, password ],
      [ inputConfirmPassword, confirmPassword ],
      [ formError ],
    ] = queryInputs( resetPasswordModal, [
      '#inputPassword',
      '#inputConfirmPassword',
      '#formError',
    ])

    resetFormInputs(resetPasswordModal)
   
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
        token: '<?= $token ?>', 
        password: CryptoJS.MD5( password ).toString()
      }

      if (!(await Api.post( 'reset_password', data)).success) {
        invalidInput(status, formError, 0)
        diableInputs(resetPasswordModal)
        disableButton('.js_reset_password')
      } 
      else {
        toggleElements( resetPasswordModal, '.js_confirm_message', '.js_form', true)
        disableButton('.js_reset_password')
      }
    }
    
    toggleElements( resetPasswordModal, '.js_spinner', '.js_reset_password', false)
  }
  </script>
</body>