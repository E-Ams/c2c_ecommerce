<!DOCTYPE html>

<html lang="en">
<head>
    <title>C2C E-Commerce</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script

    <link href="./assets/css/login.css" rel="stylesheet"/>


</head>
<body class="m-4">

<!-- Navbar -->
<?php include './display/navbar.php' ?>

<!-- Login Modal -->
<?php include './security/login.php' ?>

<!-- Registration Modal -->
<?php include './security/register.php' ?>


<!--TODO: Delete line breaks and fix styling-->
<br/>
<br/>
<br/>
<br/>


<!-- TODO: Create product load function-->

<?php include 'display/feed.php' ?>


</body>
</html>