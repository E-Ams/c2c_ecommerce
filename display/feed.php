<?php include_once __DIR__ . "/../config.php" ?>

<link href="/assets/css/productCard.css" rel="stylesheet"/>

<div class="products-container">
    <?php

    $conn = connectDB();

    $sql = "SELECT * FROM products";
    $result = $conn->query($sql);

    $count = 0;


    if ($result->num_rows > 0)
    {
        while ($product = $result->fetch_assoc())
        {

            if ($count == 0)
                echo("<div class='row mb-3'>");

            $count++;

            echo("<div class='col col-md-3'>");

            // Include product template for each product
            include 'product_item.php';

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