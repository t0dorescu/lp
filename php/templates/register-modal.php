<div id="registerModal" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title color-secondary-color">Register your account first</h5>
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
            <span class="input-group-text" id="password-confirm-addon">
              <i class="bi bi-file-lock"></i>
            </span>
            <input 
              id="inputConfirmPassword" 
              type="password" 
              class="form-control" 
              placeholder="Confirm password" 
              aria-label="Confirm password" 
              aria-describedby="password-confirm-"
            />
          </div>
        </div>
        <div class="modal-footer">
          <button 
            type="button" 
            class="btn btn-standard"
            onclick="register()"
          >Register</button>
          <button 
            type="button"
            class="btn btn-secondary"
            data-bs-dismiss="modal"
          >Close</button>
        </div>
      </div>
    </div>
</div>
