<?php
require('inc/essentials.php');
adminLogin();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Panel - Dashboard</title>
    <?php require('inc/links.php'); ?>
</head>

<body class="bg-light">

    <?php require('inc/header.php'); ?>
    <div class="d-flex h-100">
        <div class="col-lg-2 bg-dark border-top border-3 border-secondary vh-100" id="dashboard-menu">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container-fluid flex-lg-column align-items-stretch">
                    <h4 class="mt-2 text-light">ADMIN PANEL</h4>
                    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse"
                        data-bs-target="#adminDropdown" aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse flex-column mt-2 align-items-stretch" id="adminDropdown">
                        <ul class="nav nav-pills flex-column">
                            <li class="nav-item ">
                                <a class="nav-link text-white" href="dashboard.php">Dashboard</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link text-white" href="rooms.php">Rooms</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link text-white" href="features_facilities.php">Features & Facilities</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link text-white" href="user_queries.php">User Queries</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link text-white" href="carousel.php">Carousel</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link text-white" href="setting.php">Settings</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <div class="col-lg-10 ms-auto p-4 overflow-hidden" id="main-content">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellendus unde, quos illum animi,
            deserunt
            quasi
            numquam quas veniam, eum beatae expedita eaque praesentium voluptate. Culpa nisi placeat facilis
            dolores
            eaque.
            Consequatur excepturi autem ducimus laudantium asperiores, recusandae ea expedita earum quam
            voluptate,
            assumenda
            id nesciunt reprehenderit fugit quo numquam harum perferendis facere esse maxime commodi fuga. Quod
            omnis placeat,
            possimus saepe inventore quae non eaque quasi expedita architecto adipisci minus, reiciendis
            perferendis
            dolore at
            harum, fugit ab debitis. Cum tempore tempora maiores accusantium doloribus in, perspiciatis
            assumenda.
            Repellendus
            dolorum aspernatur magni quo reiciendis veniam expedita eaque explicabo eius laudantium voluptatum
            necessitatibus
            magnam dolores facere, dignissimos atque voluptas iure modi error soluta tempora ipsam. A
            accusantium
            consequatur
            veniam possimus cupiditate doloremque modi perspiciatis tempora, deserunt ut et facere sit
            voluptates
            explicabo
            neque iste assumenda minima! Laboriosam ex aperiam sunt iure! Ad repellat ab cum laboriosam adipisci
            fugit amet
            quos! Quisquam excepturi qui debitis nesciunt accusantium autem laudantium minus repellendus. Aut,
            ex
            provident
            consequuntur voluptas laudantium delectus architecto? Maxime cupiditate vel eligendi ratione
            laboriosam
            ipsa
            nostrum necessitatibus beatae aperiam a accusantium doloremque, sunt quae minus nobis quos assumenda
            ipsum
            aspernatur labore voluptate, obcaecati sapiente repellendus officia! Id odit nisi facilis. Eos,

        </div>
    </div>

    <?php require('inc/scripts.php'); ?>
</body>

</html>