<?php require_once __DIR__."/../config.php"; ?>

<link href="/assets/css/navbar.css" rel="stylesheet"/>
<script src="https://kit.fontawesome.com/cfb4292f71.js" crossorigin="anonymous"></script>

<nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="home.php">Logo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="home.php">
                        <i class="fa-solid fa-house"></i>
                        Home
                    </a>
                </li>
            </ul>
            <form class="d-inline-flex mb-1 mt-1">
                <label id="searchBox">
                    <input  id="searchInput" class="form-control me-2" type="text" placeholder="Search">
                </label>

                <button id="searchBtn" class="btn btn-primary" type="button">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    Search
                </button>
            </form>

            <?php
            if(isset($_SESSION['isLoggedIn']) && !$_SESSION['isLoggedIn'])
            {?>
                    <button name="loginBtn" class="btn btn-success" data-bs-toggle="modal"
                            data-bs-target="#loginForm">
                        <i class="fa-solid fa-right-to-bracket"></i>
                        Login
                    </button>
            <?php
            }
            else
            {
                if (true)
                {?>
                    <button class="btn btn-secondary me-2" data-bs-toggle="modal"
                            data-bs-target="#addProduct">
                        <i class="fa-solid fa-plus"></i>
                        Add Product
                    </button>

                <?php }

                ?>
               <a class="btn btn-secondary" href="dashboard.php" role="button">
                   <i class="fa-solid fa-user"></i>
                   Settings
               </a>

                <a href="../security/logout.php" class="btn btn-danger ms-2" role="button">
                    <i class="fa-solid fa-right-from-bracket"></i>
                Logout
                </a>
            <?php
            }
            ?>

        </div>
    </div>
</nav>