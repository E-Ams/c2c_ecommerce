<?php
include_once "../config.php";
include "navbar.php"
?>
<html lang="en">
<script type="text/javascript" src="../assets/js/ajax.js"></script>
<link rel="stylesheet" type="text/css" href="../assets/css/dashboard.css">

<br/>
<br/>
<br/>
<br/>
<br/>
<body>
<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-lg-2 col-sm-12 col-md-4 me-2 roundedBorder transparentBack" style="border:1px solid #cccccc;">
            <div class="container">
                <div class="row mb-3 mt-3">
                    <div class="col">
                        <button id="accountSettingsBtn" class="btn btn-primary settingsMenu">Account</button>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <button id="productSettingsBtn" class="btn btn-primary settingsMenu">Products</button>
                    </div>
                </div>


                <?php
                session_start();
                $conn = connectDB();

                if ( $_SESSION['isAdmin'] )
                {
                    echo
                    "<div class='row mb-3'>
                        <div class='col'>
                            <button id='allUsers' class='btn btn-primary settingsMenu'>Users</button>
                        </div>
                    </div>";
                }
                ?>
            </div>
        </div>

        <div class="col-lg-9 col-sm-12 col-md-12 roundedBorder transparentBack" style="border:1px solid #cccccc;">
            <div class="container" id="settingsWindow">

            </div>
        </div>
    </div>
</div>
</body>
</html>