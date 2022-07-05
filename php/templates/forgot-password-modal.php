<div id="forgotPasswordModal" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title color-secondary-color">Forgot password ?</h5>
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
        </div>
        <div class="modal-footer">
          <button 
            type="button" 
            class="btn btn-standard"
            onclick="forgotPassword()"
          >Email me</button>
          <button 
            type="button"
            class="btn btn-secondary"
            data-bs-dismiss="modal"
          >Close</button>
        </div>
      </div>
    </div>
</div>
