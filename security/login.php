<div class="modal fade" id="loginForm">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Login</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body p-5">
                <form class="mb-3" name="login" id="loginForm" action="security/verify_login.php" method="post">
                    <label for="_email" class="form-label" >Email: </label>
                    <input class="form-control" type="email" id="_email" name="_email" placeholder="Email" required><br/>
                    <label for="_password" class="form-label">Password: </label>
                    <input class="form-control" type="password" id="_password" name="_password" placeholder="Password" required><br/>

                    <button class="btn btn-success" type="submit" name="_btnLogin" id="_btnLogin">Login</button>
                </form>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button name="registerBtn" class="btn btn-primary" data-bs-target="#registerForm"
                        data-bs-toggle="modal" data-bs-dismiss="modal">
                    Register
                </button>
            </div>
        </div>
    </div>
</div