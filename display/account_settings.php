<?php
include_once "../config.php";
session_start();
?>

<body>
<link href="../assets/css/dashboard.css" rel="stylesheet"/>

<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-10">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h3 class="card-title mb-0">Account Settings</h3>
                </div>

                <div class="card-body">
                    <?php if (!empty($errors['general'])): ?>
                        <div class="alert alert-danger">
                            <?php echo htmlspecialchars($errors['general']); ?>
                        </div>
                    <?php endif; ?>

                    <form action="../database/account_update.php" method="post">
                        <h5>User Information</h5>
                        <!-- Basic Info -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="first_name" class="form-label">First Name</label>
                                <input type="text"
                                       class="form-control"
                                       id="first_name"
                                       name="first_name"
                                       value="<?php echo htmlspecialchars($_SESSION['name']); ?>">
                            </div>
                            <div class="col-md-6">
                                <label for="last_name" class="form-label">Last Name</label>
                                <input type="text"
                                       class="form-control"
                                       id="last_name"
                                       name="last_name"
                                       value="<?php echo htmlspecialchars($_SESSION['surname']); ?>">
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email"
                                   class="form-control <?php echo !empty($errors['email']) ? 'is-invalid' : ''; ?>"
                                   id="email"
                                   name="email"
                                   value="<?php echo htmlspecialchars($_SESSION['email']) ?>">
                            <?php if (!empty($errors['email'])): ?>
                                <div class="invalid-feedback"><?php echo htmlspecialchars($errors['email']); ?></div>
                            <?php endif; ?>
                        </div>

                        <h5>Password Settings</h5><br/>
                        <!-- Password Change -->
                        <div class="card mb-3">
                            <div class="card-header">
                                Change Password
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="current_password" class="form-label">Current Password</label>
                                    <input type="password"
                                           class="form-control <?php echo !empty($errors['current_password']) ? 'is-invalid' : ''; ?>"
                                           id="current_password"
                                           name="current_password">
                                    <?php if (!empty($errors['current_password'])): ?>
                                        <div class="invalid-feedback"><?php echo htmlspecialchars($errors['current_password']); ?></div>
                                    <?php endif; ?>
                                </div>

                                <div class="mb-3">
                                    <label for="new_password" class="form-label">New Password</label>
                                    <input type="password"
                                           class="form-control <?php echo !empty($errors['new_password']) ? 'is-invalid' : ''; ?>"
                                           id="new_password"
                                           name="new_password">
                                    <?php if (!empty($errors['new_password'])): ?>
                                        <div class="invalid-feedback"><?php echo htmlspecialchars($errors['new_password']); ?></div>
                                    <?php endif; ?>
                                </div>

                                <div class="mb-3">
                                    <label for="confirm_password" class="form-label">Confirm New Password</label>
                                    <input type="password"
                                           class="form-control <?php echo !empty($errors['confirm_password']) ? 'is-invalid' : ''; ?>"
                                           id="confirm_password"
                                           name="confirm_password">
                                    <?php if (!empty($errors['confirm_password'])): ?>
                                        <div class="invalid-feedback"><?php echo htmlspecialchars($errors['confirm_password']); ?></div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="row mb-3">
                            <div class="col-sm-12 d-flex justify-content-center">
                                <button name="_btnUpdateUser" id="_btnUpdateUser" type="submit"
                                        class="btn btn-primary">Save Changes</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>