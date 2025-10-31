<?php include('partials-front/menu.php'); ?>

    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search text-center">
        <div class="container">
            
            <form action="<?php echo SITEURL; ?>food-search.php" method="POST">
                <input type="search" name="search" placeholder="Search for Food.." required>
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->

    <!-- CAtegories Section Starts Here -->
    <section class="categories">
        <div class="container">
            <h2 class="text-center">Explore Foods</h2>

            <a href="category-foods.php">
            <div class="box-3 float-container">
                <img src="images/ayynet.jpg" alt="shiro" class="img-responsive img-curve">

                <h3 class="float-text text-white">Shiro</h3>
            </div>
            </a>

            <a href="#">
            <div class="box-3 float-container">
                <img src="images/pasta.jpg" alt="pasta" class="img-responsive img-curve">

                <h3 class="float-text text-white">Pasta</h3>
            </div>
            </a>

            <a href="#">
            <div class="box-3 float-container">
                <img src="images/doro wot.jpg" alt="doro wot" class="img-responsive img-curve">

                <h3 class="float-text text-white">Doror wot</h3>
            </div>
            </a>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Categories Section Ends Here -->

    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Food Menu</h2>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/mocorino.jpg" alt="mocorino" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Moccorino</h4>
                    <p class="food-price">40ETB</p>
                    <p class="food-detail">
                        Made with Ethiopian  Sauce, and organice vegetables.
                    </p>
                    <br>

                    <a href="order.php" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/mm.jpg" alt="shekla tibs" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Smoky Tibs</h4>
                    <p class="food-price">150ETB</p>
                    <p class="food-detail">
                        Made with Ethiopian flesh, and organice vegetables.
                    </p>
                    <br>

                    <a href="order.php" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/ts.jpg" alt="tegabino" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Tegabino</h4>
                    <p class="food-price">50ETB</p>
                    <p class="food-detail">
                        Made with Ethiopian Sauce, Chicken, and organice vegetables.
                    </p>
                    <br>

                    <a href="order.php" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/pap.jpg" alt="ayeb, kitifo" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>tizta Meskel </h4>
                    <p class="food-price">150ETB</p>
                    <p class="food-detail">
                        Made with Ethiopian cheese, beef, and organice vegetables.
                    </p>
                    <br>

                    <a href="order.php" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/iconic.jpg" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Ayynet</h4>
                    <p class="food-price">50ETB</p>
                    <p class="food-detail">
                        Made with Sauce and organice vegetables.
                    </p>
                    <br>

                    <a href="order.php" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/kitfo.jpg" alt="Chicke Hawain Momo" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>kitfo be kocho</h4>
                    <p class="food-price">150ETB</p>
                    <p class="food-detail">
                        Made with Ethiopian beef and bread.
                    </p>
                    <br>

                    <a href="order.php" class="btn btn-primary">Order Now</a>
                </div>
            </div>


            <div class="clearfix"></div>

            

        </div>

        <p class="text-center">
            <a href="foods.php">See All Foods</a>
        </p>
    </section>
    <!-- fOOD Menu Section Ends Here -->
<?php include('partials-front/footer.php'); ?>
  