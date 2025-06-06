<?php
include_once "../config.php";
include "navbar.php"
?>

<script type="text/javascript" src="../assets/js/user_settings.js"></script>
<link rel="stylesheet" type="text/css" href="../assets/css/dashboard.css">

<br/>
<br/>
<br/>
<br/>
<br/>

<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-2" style="border:1px solid #cccccc;">
            <div class="container">
                <div class="row mb-3 mt-3">
                    <div class="col">
                        <button id="accountSettingsBtn" class="btn btn-primary settingsMenu">Account</button>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <button id="productSettingsBtn" class="btn btn-secondary settingsMenu">Products</button>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <button  class="btn btn-warning settingsMenu">Random Button</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-10" style="border:1px solid #cccccc;">
            <div class="container" id="settingsWindow">

            </div>
        </div>
    </div>
</div>




