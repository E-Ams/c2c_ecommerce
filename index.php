<?php include 'config.php';

makeSession();
//session_start();
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <title>C2C E-Commerce</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link href="./assets/css/login.css" rel="stylesheet"/>

    <script src="https://kit.fontawesome.com/cfb4292f71.js" crossorigin="anonymous"></script>


</head>
<body class="m-4">

<!-- Login Modal -->
<?php include_once './security/login.php' ?>

<!-- Registration Modal -->
<?php include_once './security/register.php' ?>


<!-- Load Home Feed -->
<?php include 'display/home.php' ?>


</body>
</html>