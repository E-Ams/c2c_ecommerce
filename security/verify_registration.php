<?php

include __DIR__ ."/../config.php";

$email = $_POST['_email'];
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

    if ( !empty( $email ) && !empty( $name ) && !empty($surname) && !empty( $pass ) && !empty( $confirm_Pass ) )
    {
        $name = validate($name);
//    $username = validate($username);
        $surname = validate($surname);
        $email = validate($email);
        $pass = validate($pass);
        $confirm_Pass = validate($confirm_Pass);

        $hashed = password_hash($pass, PASSWORD_DEFAULT, ['cost' => 15]);

        $conn = connectDB();

        $queryEmail = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($conn, $queryEmail);

        if (mysqli_num_rows($result) > 0)
        {
            header("refresh:0.5; url=../index.php");
            echo '<script>alert("Email already in use\nClick OK to return" )</script>';
            exit();
        }

        else if ($pass != $confirm_Pass)
        {
            header("refresh:0.5; url=../index.php");
            echo '<script>alert("Passwords must match\nClick OK to return" )</script>';
            exit();
        }

        else if (addUser($email, $name, $surname, $isSeller, $hashed))
        {
            header("refresh:0.5; url=../index.php");
            echo '<script>alert( "User registered successfully\nClick OK to log in");</script>';
        }
    }
}

function validate( $data ): string
{
    $data = trim( $data );
    $data = stripslashes( $data );
    $data = htmlspecialchars( $data );
    return $data;
}
