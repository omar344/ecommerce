<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECommerce-ShoppingCart</title>
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
    <!-- box icons  -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <!-- styles  -->
    <link rel="stylesheet" href="assets2/css/style.css">
</head>

<body>
    <!-- HEADER  -->
    <header>
        <!-- NAV  -->
        <div class="nav container">
            <a href="prouctsPage.php? id=0" class="button1 ">all products</a>
            <!-- CART ICON  -->
            <i class='bx bx-shopping-bag' id="cart-icon"></i>

            <!-- CART  -->
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
                <a href="login.php"><button type="button" class="btn-buy">Buy Now</button></a>
                <!-- CART CLOSE  -->
                <i class='bx bx-x' id="cart-close"></i>
            </div>
        </div>
    </header>


    <!-- SHOP SECTION  -->
    <section class="shop container">
        <h2 class="section-title">Shop Products</h2>

        <!-- CONTENT  -->
        <ul class="shop-content">
            <!-- BOX 1 -->
            <?php include 'select.php'; ?>

            <?php
            foreach ($products as $product) : ?>
                <!-- <li class="scrollbar-item">
                    <div class="shop-card">

                        <div class="card-banner img-holder" style="--width: 540; --height: 720;">
                            <img src="./admin/img/<?= $product->img ?>" width="540" height="720" loading="lazy" alt="Facial cleanser" class="img-cover">

                            <span class="badge" aria-label="20% off">$<?= $product->offer ?></span>

                            <div class="card-actions">

                                <button class="action-btn add-cart" aria-label="add to cart">
                                    <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                                </button>

                                <button class="action-btn" aria-label="add to whishlist">
                                    <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                                </button>

                                <button class="action-btn" aria-label="compare">
                                    <ion-icon name="repeat-outline" aria-hidden="true"></ion-icon>
                                </button>

                            </div>
                        </div>

                        <div class="card-content">

                            <div class="price">
                                <del class="del">$<?= ($product->salary) - ($product->offer) ?></del>

                                <span class="span">$<?= $product->salary ?></span>
                            </div>

                            <h3>
                                <a href="#" class="card-title"><?= $product->name ?></a>
                            </h3>

                            <div class="card-rating">

                                <div class="rating-wrapper" aria-label="5 start rating">
                                    <ion-icon name="star" aria-hidden="true"></ion-icon>
                                    <ion-icon name="star" aria-hidden="true"></ion-icon>
                                    <ion-icon name="star" aria-hidden="true"></ion-icon>
                                    <ion-icon name="star" aria-hidden="true"></ion-icon>
                                    <ion-icon name="star" aria-hidden="true"></ion-icon>
                                </div>

                                <p class="rating-text">5170 reviews</p>

                            </div>

                        </div>

                    </div>

                </li> -->

                <li class="product-box shop-card">
                    <span class="badge" aria-label="20% off">$<?= $product->offer ?></span></div>
                    <div class="card-banner img-holder" style="--width: 540; --height: 720;">
                        <span class="badge" aria-label="20% off">$<?= $product->offer ?></span>

                        <img src="./admin/img/<?= $product->img ?>" alt="" class="product-img img-cover" width="540" height="720">
                    </div>
                    <!-- <img src="./admin/img/<?= $product->img ?>" alt="" class="product-img "> -->
                    <div class="card-content">
                        <h2 class="product-title card-title"><?= $product->name ?></h2>



                        <div class="price"><del class="del">$<?= $product->salary ?></del>
                            <span class="product-price">$<?= ($product->salary) - ($product->offer) ?></span>
                        </div>
                    </div>

                    <i class='bx bx-shopping-bag add-cart'></i>


                    <div class="card-rating">


                        <div class="rating-wrapper" aria-label="5 start rating">
                            <ion-icon name="star" aria-hidden="true"></ion-icon>
                            <ion-icon name="star" aria-hidden="true"></ion-icon>
                            <ion-icon name="star" aria-hidden="true"></ion-icon>
                            <ion-icon name="star" aria-hidden="true"></ion-icon>
                            <ion-icon name="star" aria-hidden="true"></ion-icon>
                        </div>
                        <p class="rating-text">270 reviews</p>
                    </div>
                    </div>








                    </div>

                </li>
            <?php endforeach; ?>

        </ul>
    </section>

    <!-- link js  -->
    <script src="assets2/js/main.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>