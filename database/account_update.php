<?php

include_once "../config.php";

session_start();

$userName = $_POST['first_name'];
$userSurname = $_POST['last_name'];
$userEmail = $_POST['email'];
$userPass = $_POST['current_password'];
$newPass = $_POST['new_password'];
$confirmPass = $_POST['confirm_password'];
$userID = $_SESSION['userID'];

if( isset($_POST['_btnUpdateUser']) )
{
    $conn = connectDB();

    $query = updateUser( $userName, $userSurname, $userEmail, $userID);

    if (isset($userPass) && isset($newPass) && isset($confirmPass))
    {
        if ( validatePassword( $userPass, $userID) && $newPass === $confirmPass)
        {
            $query = updatePassword( $newPass, $userID );

            if ($query)
            {
                echo '<script>alert( "Password updated successfully.");</script>';
            }
        }
    }

    if ($query)
    {
        header('Location: ../display/dashboard.php');
    }
}

function validatePassword( $pass, $userID ): bool
{
    $conn = connectDB();

    $sql = "SELECT password FROM users WHERE userID = '$userID'";
    $result = $conn->query($sql);

    $conn->close();

    return $result == $pass;
}