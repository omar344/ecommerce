<?php
   session_start();
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glowing -</title>

    <!-- 
    - favicon
  -->
    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

    <!-- 
    - custom css link
  -->
    <link rel="stylesheet" href="./assets/css/style.css">

    <!-- 
    - google font link
  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- 
    - preload images
  -->
    <link rel="preload" as="image" href="./assets/images/logo.png">
    <link rel="preload" as="image" href="./assets/images/hero-banner-1.jpg">
    <link rel="preload" as="image" href="./assets/images/hero-banner-2.jpg">
    <link rel="preload" as="image" href="./assets/images/hero-banner-3.jpg">

</head>
<header class="header">

    <div class="alert">
        <div class="container">
            
        <h4><?= (isset($_SESSION['name'])) ? "Hello " . $_SESSION['name'] : ""; ?></h4>

            <a href="./logout.php" class="btn btn-primary" style="color: bisque;">log out</a>
            <p class="alert-text">Free Shipping On All Egypt Orders $50+</p>
        </div>
    </div>

    <div class="header-top" data-header>
        <div class="container">

            <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
                <span class="line line-1"></span>
                <span class="line line-2"></span>
                <span class="line line-3"></span>
            </button>

            <div class="input-wrapper">
                <input type="search" name="search" placeholder="Search product" class="search-field">

                <button class="search-submit" aria-label="search">
                    <ion-icon name="search-outline" aria-hidden="true"></ion-icon>
                </button>
            </div>

            <a href="#" class="logo">
                <img src="./assets/images/el-abaly.jpg" width="179" height="26" alt="Glowing">
            </a>

            <div class="header-actions">

                <button class="header-action-btn" aria-label="user">
                    <ion-icon name="person-outline" aria-hidden="true" aria-hidden="true"></ion-icon>
                </button>

                <button class="header-action-btn" aria-label="favourite item">
                    <ion-icon name="star-outline" aria-hidden="true" aria-hidden="true"></ion-icon>

                    <span class="btn-badge">0</span>
                </button>

                <!-- <button class="header-action-btn" aria-label="cart item">
                    <data class="btn-text" value="0">$0.00</data> -->

                <!-- <ion-icon name="bag-handle-outline" aria-hidden="true" aria-hidden="true"></ion-icon> -->
                <i class='bx bx-shopping-bag' id="cart-icon"></i>
                <!-- <span class="btn-badge">0</span> -->
                </button>
                <div class="cart">
                    <h2 class="cart-title">Your Cart</h2>

                    <!-- CONTENT  -->
                    <div class="cart-content">


                    </div>

                    <!-- TOTAL   -->
                    <div class="total">
                        <div class="total-title">Total</div>
                        <div class="total-price">$0</div>
                    </div>
                    <!-- BUY BUTTON  -->
                    <button type="button" class="btn-buy">Buy Now</button>
                    <!-- CART CLOSE  -->
                    <i class='bx bx-x' id="cart-close"></i>
                </div>

            </div>

            <nav class="navbar">
                <ul class="navbar-list">

                    <li>
                        <a href="#home" class="navbar-link has-after">Home</a>
                    </li>

                    <li>
                        <a href="#collection" class="navbar-link has-after">Collection</a>
                    </li>

                    <li>
                        <a href="#shop" class="navbar-link has-after">Shop</a>
                    </li>

                    <li>
                        <a href="#offer" class="navbar-link has-after">Offer</a>
                    </li>

                    <li>
                        <a href="#blog" class="navbar-link has-after">Blog</a>
                    </li>

                </ul>
            </nav>

        </div>
    </div>

</header>





<!-- 
    - #MOBILE NAVBAR
  -->

<div class="sidebar">
    <div class="mobile-navbar" data-navbar>

        <div class="wrapper">
            <a href="#" class="logo">
                <img src="./assets/images/logo.png" width="179" height="26" alt="Glowing">
            </a>

            <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
                <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
            </button>
        </div>

        <ul class="navbar-list">

            <li>
                <a href="#home" class="navbar-link" data-nav-link>Home</a>
            </li>

            <li>
                <a href="#collection" class="navbar-link" data-nav-link>Collection</a>
            </li>

            <li>
                <a href="#shop" class="navbar-link" data-nav-link>Shop</a>
            </li>

            <li>
                <a href="#offer" class="navbar-link" data-nav-link>Offer</a>
            </li>

            <li>
                <a href="#blog" class="navbar-link" data-nav-link>Blog</a>
            </li>

        </ul>

    </div>

    <div class="overlay" data-nav-toggler data-overlay></div>
</div>

</html>


<!-- <main>
    <article> -->