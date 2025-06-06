<?php
include __DIR__ ."/../config.php";

$userEmail = $_POST['_email'];
$userPass = $_POST['_password'];

//$userEmail = "test@test.com";
//$userPass = "test1234";

if ( isset( $userEmail) && isset( $userPass ) )
{
    $userEmail = validate( $userEmail );
    $userPass = validate( $userPass );

    if ( !empty( $userEmail ) && !empty( $userPass ) )
    {
        $conn = connectDB();

        $query = "SELECT * FROM USERS WHERE email = '$userEmail' && password = '$userPass'";
        $result = mysqli_query( $conn, $query );

        $temp = false;

        if( mysqli_num_rows( $result ) > 0 )
        {
            session_start();
            $user_data = mysqli_fetch_assoc($result);
            $_SESSION['valid'] = true;
            $_SESSION['timeout'] = time();
            $_SESSION['userID'] = $user_data['userID'];
            $_SESSION['email'] = $userEmail;
            $_SESSION['name'] = $user_data['name'];
            $_SESSION['surname'] = $user_data['surname'];
            $_SESSION['isSeller'] = $user_data['isSeller'];
            $_SESSION['isAdmin'] = $user_data['isAdmin'];

            if ($user_data['isAdmin'] == 1)
                $_SESSION['admin'] = "Yes";
            else
                $_SESSION['admin'] = "No";

            $temp = true;
        }

        if( $temp )
        {
            echo "Welcome, {$_SESSION['name']} {$_SESSION['surname']}!";
            $_SESSION['isLoggedIn'] = true;
            $GLOBALS['loginStatus'] = true;

            //TODO: Add home page
            header( "refresh:1.5; url=../display/home.php" );
        }
        else
        {
            header( "refresh:0.5; url=../index.php" );
            echo '<script>alert("Email or Password is incorrect.\nClick OK to return" )</script>';
            exit();
        }
    }
    else
        echo "Empty fields";
}
else
    echo "failed";

function validate( $data )
{
    $data = trim( $data );
    $data = stripslashes( $data );
    $data = htmlspecialchars( $data );
    return $data;
}

//checkLogin( $conn );

?>