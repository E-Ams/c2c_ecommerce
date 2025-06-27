<?php include_once "../config.php"; ?>

<link href="/assets/css/productCard.css" rel="stylesheet"/>


<body>
<link href="../assets/css/dashboard.css" rel="stylesheet"/>

<div class="container mt-5 ">
    <div class="row justify-content-center">
        <div class="col-lg-12 col-md-10 col-sm-6 col-xs-1">
            <div class="products-container">
                <?php

                session_start();
                $conn = connectDB();

                $sql = "SELECT * FROM products WHERE sellerID = '$_SESSION[userID]'";
                $result = $conn->query($sql);

                $count = 0;

                if ($result->num_rows > 0)
                {
                    while ($product = $result->fetch_assoc())
                    {

                        if ($count == 0)
                            echo("<div class='row mb-3'>");

                        $count++;

                        echo("<div class='col col-md-5 col-sm-12 mb-1'>");

                        // Include product template for each product
                        include 'seller_item.php';

                        if ($count == 4)
                        {
                            echo("</div>");
                            $count = 0;
                        }

                        echo("</div>");
                    }
                }
                else
                {
                    echo "<p>No products found</p>";
                }

                $conn->close();
                ?>
            </div>
        </div>
    </div>
</div>
</body>

