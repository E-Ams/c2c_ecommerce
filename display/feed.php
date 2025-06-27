<?php include_once __DIR__ . "/../config.php" ?>

<link href="/assets/css/productCard.css" rel="stylesheet"/>

<div class="products-container">
    <?php

    if ( session_status() !== PHP_SESSION_ACTIVE )
    {
        session_start();
    }

    $conn = connectDB();
    $result = getAllProduct();

    $count = 0;
    if ($result->num_rows > 0)
    {
        while ($product = $result->fetch_assoc())
        {

            if ($count == 0)
                echo("<div class='row mb-3'>");

            $count++;

            echo("<div class='col col-lg-2 col-md-3 col-sm-4 col-xs-6 '>");

            // Include product template for each product
            include 'product_item.php';

            if ($count == 6)
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