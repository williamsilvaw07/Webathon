<?php
/**
 * The header for the theme
 */





?>
<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title>Webathon</title>

    <meta name="Webathon" content="Test Project">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/style.css">




    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
</head>

<body>

    <header>

        <a href="index.html"><img class="logo" src="<?php echo get_template_directory_uri() ?>/Pictures/Webathon_logo.png" alt="Webathon logo"></a>


        <!-- navbar -->
        <div class="navbar">
            <ul class="nav-list">
                <li class="nav-list-item"><a href="#" class="nav-link">About us </a></li>

                <li class="nav-list-item">
                    <a href="#" class="nav-link">Products</a>
                </li>
                <li class="nav-list-item"><a href="#" class="nav-link">Careers</a></li>


                <li class="nav-list-item">
                    <a href="#" class="nav-link">Contact Me</a>
                </li>
            </ul>

        </div>






        <!--  hamburger menu -->
        <div class="container">
            <nav class="nav-bar">
                <div class="toggle-menu">
                    <div class="line line1"></div>
                    <div class="line line2"></div>
                    <div class="line line3"></div>
                </div>
                <ul class="nav-list">
                    <li class="nav-list-item"><a href="#" class="nav-link">About us </a></li>

                    <li class="nav-list-item">
                        <a href="#" class="nav-link">Products</a>
                    </li>
                    <li class="nav-list-item"><a href="#" class="nav-link">Careers</a></li>


                    <li class="nav-list-item">
                        <a href="#" class="nav-link">Contact Me</a>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- end -->



    </header>




    ?>
