<?php
include_once '../config.php';
?>

<link href="../assets/css/dashboard.css" rel="stylesheet"/>

<body>
<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-sm-12 col-xs-1">
            <div class="list-group user-list">
                <li class="list-group-item">
                    <div class="row justify-content-center user-list-head">
                        <div class="col col-2 user-list-col">User ID</div>
                        <div class="col col-2 user-list-col">First Name</div>
                        <div class="col col-2 user-list-col">Last Name</div>
                        <div class="col col-2 user-list-col">Action</div>
                    </div>
                </li>
                <?php
                session_start();
                $conn = connectDB();

                $sql = "SELECT * FROM users";
                $result = $conn->query($sql);

                if ($result->num_rows > 0)
                {
                    while($user = $result->fetch_assoc())
                    {
                        if ($user['userID'] != $_SESSION['userID'])
                        {
                            include 'userListItem.php';
                        }
                    }
                }
                else
                {
                    echo "No users found";
                }


                $conn->close();
                ?>
            </div>
        </div>
    </div>
</div>

</body>