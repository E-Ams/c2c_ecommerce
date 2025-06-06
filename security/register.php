<div class="modal fade" id="registerForm">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title" id="registerLabel">Registration</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body p-5">
                <form class="mb-3" name="registration" id="regForm" action="security/verify_registration.php" method="post">
                    <label for="_name" class="form-label">Name: </label>
                    <input class="form-control" type="text" id="_name" name="_name" placeholder="Name" required><br/>

                    <label for="_surname" class="form-label">Surname: </label>
                    <input class="form-control" type="text" id="_surname" name="_surname" placeholder="Surname" required><br/>

                    <label for="_email" class="form-label">Email: </label>
                    <input class="form-control" type="email" id="_email" name="_email" placeholder="Email" required/><br/>

                    <label for="_regPass" class="form-label">Password: </label>
                    <input class="form-control" type="password" id="_regPass" name="_regPass" placeholder="Password" required><br/>

                    <label for="_passConfirm" class="form-label">Confirm Password: </label>
                    <input class="form-control" type="password" id="_passConfirm" name="_passConfirm" placeholder="Password" required><br>

                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input" type="checkbox" value="" id="_isSeller" name="_isSeller">
                        <label class="form-check-label" for="_isSeller">
                            Register as seller?
                        </label>
                    </div>


                    <button class="btn btn-success" type="submit" name="_btnRegister" id="_btnRegister">Register</button>
                </form>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button class="btn btn-success" data-bs-target="#loginForm" data-bs-toggle="modal"
                        data-bs-dismiss="modal">Login</button>
            </div>

        </div>
    </div>
</div