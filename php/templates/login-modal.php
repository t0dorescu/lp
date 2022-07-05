<div id="loginModal" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title color-secondary-color">Login to membership area</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
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
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text" id="password-addon">
              <i class="bi bi-file-lock"></i>
            </span>
            <input 
              id="inputPassword" 
              type="password" 
              class="form-control" 
              placeholder="Password" 
              aria-label="Password" 
              aria-describedby="password-addon"
            />
          </div>
          <div class="input-group mb-3">
            <a 
              class="btn-forgot-password"
              onclick="openForgotPasswordModal()"
            >Forgot password ?</a>            
          </div>
        </div>
        <div class="modal-footer">
          <button 
            type="button" 
            class="btn btn-standard"
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

  function openLoginModal() {
    new bootstrap.Modal(loginModal).show()
  }

  function login() {
    console.log('login')
  }
</script>