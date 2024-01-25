<!-- modal for header button -->


<div class="modal fade" id="mdl-login" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalToggleLabel">Login here</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="post" id="frm-login" action="login.php">
                <div class="alert alert-danger" id="error-msg" style="display:none;"></div>
                <div class="modal-body mx-5">

                    <div class="inputvalues input-group">
                        <i class="fa fa-user"></i>
                        <input name="username" type="text" placeholder="Username/E-mail" class="form-control"
                            autocomplete="off" required>
                    </div>

                    <div class="inputvalues input-group ">
                        <i class="fa fa-lock"></i>
                        <input name="password" type="password" placeholder="Password" class="form-control" required><br>
                    </div>
                    <span style="cursor:pointer">Forget password</span>
                    <input type="hidden" name="form_name" value="login">
                </div>
                <div class="modal-footer">
                    <button class="btn btn-outline-dark" id="btn-login">Log In</button>
                </div>
            </form>
        </div>
    </div>
</div>