<section class="section shop" id="shop" aria-label="shop" data-section>
    <div class="container">

        <div class="title-wrapper">
            <h2 class="h2 section-title">Our Bestsellers</h2>

            <a href="prouctsPage.php? id=0" class="btn-link">
                <span class="span">Shop All Products</span>

                <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
            </a>
        </div>

        <ul class="has-scrollbar">
            <?php include 'selectAllProducts.php'; ?>
            <?php
            foreach ($products as $product) : ?>
                <li class="scrollbar-item">
                    <div class="shop-card">

                        <div class="card-banner img-holder" style="--width: 540; --height: 720;">
                            <img src="./admin/img/<?= $product->img ?>" width="540" height="720" loading="lazy" alt="Facial cleanser" class="img-cover">

                            <span class="badge" aria-label="20% off">$<?= $product->offer ?></span>

                            <div class="card-actions">

                                <!-- <button class="action-btn " aria-label="add to cart">
                               <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon> 
                                </button> -->
                                <a href="prouctsPage.php? id=0" class='bx bx-shopping-bag add-cart'></a>
                                <!-- <button class="action-btn" aria-label="add to whishlist">
                                    <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                                </button>

                                <button class="action-btn" aria-label="compare">
                                    <ion-icon name="repeat-outline" aria-hidden="true"></ion-icon>
                                </button> -->

                            </div>
                        </div>

                        <div class="card-content">

                            <div class="price">
                                <del class="del">$<?= $product->salary ?></del>

                                <span class="span">$<?= ($product->salary) - ($product->offer) ?></span>
                            </div>

                            <h3>
                                <a href="prouctsPage.php? id=0" class="card-title"><?= $product->name ?></a>
                            </h3>

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
                            <!-- <div>
                                <a href="./login.php" class="btn btn-primary">buy</a>
                               </div> -->
                        </div>

                    </div>

                </li>
            <?php endforeach; ?>


        </ul>

    </div>
</section>