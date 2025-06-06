<?php

include __DIR__ ."/../config.php";

$email = $_POST['_email'];
//$username = $_POST['_regUser'];
$name = $_POST['_name'];
$surname = $_POST['_surname'];
$admin = 0;
$pass = $_POST['_regPass'];
$confirm_Pass = $_POST['_passConfirm'];
//$isSeller = $_POST['_isSeller'];

$isSeller = false;

if( isset($_POST['_isSeller']))
{
    $isSeller = true;
}

if ( isset( $_POST['_btnRegister'] ) )
{
    $name = validate($name);
//    $username = validate($username);
    $surname = validate($surname);
    $email = validate($email);
    $pass = validate($pass);
    $confirm_Pass = validate($confirm_Pass);

    $conn = connectDB();

//    $filename = $_FILES['profileImage']['name'];
//    $tempname = $_FILES['profileImage']['tmp_name'];
//    $ext = pathinfo($filename, PATHINFO_EXTENSION);
//    $dir = "../images/profile/" . $username . "." . $ext;

    if (!empty($name) && !empty($username) && !empty($email)
        && !empty($pass) && !empty($confirm_Pass))
    {
        $queryEmail = "SELECT * FROM USERS WHERE email = '$email'";
        $result = mysqli_query($conn, $queryEmail);

        if (mysqli_num_rows($result) > 0)
        {
            //echo '<script>setTimeout(\"location.href = ../index.php;\", 1500 );</script>';
            header("refresh:0.5; url=../index.php");
            echo '<script>alert("Email already in use\nClick OK to return" )</script>';
        }

        if ($pass != $confirm_Pass)
        {
            header("refresh:0.5; url=../index.php");
            echo '<script>alert("Passwords must match\nClick OK to return" )</script>';
        }

        addUser( $conn,  $email, $name, $surname, $isSeller, $pass );
    }
}

function validate( $data )
{
    $data = trim( $data );
    $data = stripslashes( $data );
    $data = htmlspecialchars( $data );
    return $data;
}
