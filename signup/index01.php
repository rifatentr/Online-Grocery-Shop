<!--Login-->



<?php

$host = "localhost";
$email = "root";
$password = "";
$db = "info";

mysqli_connect($host, $email, $password, $db);


if (isset($_POST['email'])) {

    $uname = $_POST['email'];
    $password = $_POST['password'];

    $sql = "select * from login where email='" . $uname . "'AND password='" . $password . "' limit 1";

    $result = mysql_query($sql);

    if (mysql_num_rows($result) == 1) {
        echo " You Have Successfully Logged in";
        exit();
    } else {
        echo " You Have Entered Incorrect Password";
        exit();
    }
}
?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Grocery Website </title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <!-- header section starts  -->

    <header class="header">

        <a href="#" class="logo"> <i class="fas fa-shopping-basket"></i> BUBT SUPER MARKET</a>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#features">features</a>
            <!-- <a href="#products">products</a> -->
            <a href="#categories">categories</a>
            <!-- <a href="#review">review</a> -->
            <a href="#blogs">blogs</a>
        </nav>

        <div class="icons">
            <div class="fas fa-bars" id="menu-btn"></div>
            <div class="fas fa-search" id="search-btn"></div>
            <!-- <div class="fas fa-shopping-cart" id="cart-btn"></div> -->
            <a class="btn btn-primary" href="../index.php" role="button">Logout</a>
            <!-- <div class="fas fa-user" id="login-btn" action="signup/index.php"> -->

            <!-- <a href="signup/index.php"> -->
        </div>
        </div>

        <form action="" class="search-form">
            <input type="search" id="search-box" placeholder="search here...">
            <label for="search-box" class="fas fa-search"></label>
        </form>

        <!-- <div class="shopping-cart">
            <div class="box">
                <i class="fas fa-trash"></i>
                <img src="image/cart-img-1.png" alt="">
                <div class="content">
                    <h3>watermelon</h3>
                    <span class="price">$4.99/-</span>
                    <span class="quantity">qty : 1</span>
                </div>
            </div>
            <div class="box">
                <i class="fas fa-trash"></i>
                <img src="image/cart-img-2.png" alt="">
                <div class="content">
                    <h3>onion</h3>
                    <span class="price">$4.99/-</span>
                    <span class="quantity">qty : 1</span>
                </div>
            </div>
            <div class="box">
                <i class="fas fa-trash"></i>
                <img src="image/cart-img-3.png" alt="">
                <div class="content">
                    <h3>chicken</h3>
                    <span class="price">$4.99/-</span>
                    <span class="quantity">qty : 1</span>
                </div>
            </div>
            <div class="total"> total : $19.69/- </div>
            <a href="#" class="btn">checkout</a>
        </div> -->

        <!-- Log in -->

        <!-- <form method="$POST" action="signup/index.php" class="login-form">
            <!-- <h3>login now</h3>
            <input type="email" placeholder="your email" class="box" name="email">
            <input type="password" placeholder="your password" class="box name="password">
            <p>forget your password <a href="#">click here</a></p>
            <p>don't have an account <a href="#">create now</a></p>
            <!-- <input type="submit" value="login now" class="btn" name="submit"> -->
        <!-- </form>  -->

    </header>

    <!-- header section ends -->

    <!-- home section starts  -->

    <section class="home" id="home">

        <div class="content">
            <h3>fresh and <span>organic</span> products for you</h3>
        </div>

    </section>

    <!-- home section ends -->

    <!-- features section starts  -->

    <section class="features" id="features">

        <h1 class="heading"> our <span>features</span> </h1>





        <div class="box-container">

            <div class="box">
                <img src="image/feature-img-1.png" alt="">
                <h3>fresh and organic</h3>
                <!-- <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum!</p> -->
                <!-- <a href="#" class="btn">read more</a> -->
            </div>

            <div class="box">
                <img src="image/feature-img-2.png" alt="">
                <h3>free delivery</h3>
                <!-- <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum!</p> -->
                <!-- <a href="#" class="btn">read more</a> -->
            </div>

            <div class="box">
                <img src="image/feature-img-3.png" alt="">
                <h3>easy payments</h3>
                <!-- <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum!</p> -->
                <!-- <a href="#" class="btn">read more</a> -->
            </div>



        </div>

    </section>

    <!-- features section ends -->



    <!-- products section starts  -->

    <section class="features" id="features">

        <h1 class="heading">Some Of Our <span>Products</span> </h1>






        <div class="box-container">

            <div class="box">

                <img src="image/product-1.png" alt="">
                <h3>fresh orange</h3>
                <div class="price">
                    <p width="200" height="120">Tk 200</p>
                </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>

                <!--link -->
                <!-- <a href="#" class="btn">add to cart</a> -->

            </div>

            <div class="box">
                <img src="image/product-2.png" alt="">
                <h3>fresh onion</h3>
                <div class="price">
                    <p width="200" height="120">Tk 75</p>
                </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>

                <!--link -->
                <!-- <a href="#" class="btn">add to cart</a> -->

            </div>

            <div class="box">
                <img src="image/product-3.png" alt="">
                <h3>fresh meat</h3>
                <div class="price">
                    <p width="200" height="120">Tk 500</p>
                </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <!-- <a href="#" class="btn">add to cart</a> -->
            </div>

            <div class="box">
                <img src="image/product-4.png" alt="">
                <h3>fresh cabbage</h3>
                <div class="price">
                    <p width="200" height="120">Tk 55</p>
                </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <!-- <a href="#" class="btn">add to cart</a> -->
            </div>



            <div class="box">
                <img src="image/product-5.png" alt="">
                <h3>fresh potato</h3>
                <div class="price">
                    <p width="200" height="120">Tk 40</p>
                </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <!-- <a href="#" class="btn">add to cart</a> -->
            </div>
            <div class="box">
                <img src="image/product-6.png" alt="">
                <h3>fresh avocado</h3>
                <div class="price">
                    <p width="200" height="120">Tk 160</p>
                </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <!-- <a href="#" class="btn">add to cart</a> -->
            </div>

            <div class="box">
                <img src="image/product-7.png" alt="">
                <h3>fresh carrot</h3>
                <div class="price">
                    <p width="200" height="120">Tk 75</p>
                </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <!-- <a href="#" class="btn">add to cart</a> -->
            </div>

            <div class="box">
                <img src="image/product-8.png" alt="">
                <h3>green lemon</h3>
                <div class="price">
                    <p width="200" height="120">Tk 80</p>
                </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <!-- <a href="#" class="btn">add to cart</a> -->
            </div>

            <div class="box">
                <img src="image/extra1.jpg" alt="">
                <h3>cumcumber</h3>
                <div class="price">
                    <p width="200" height="120">Tk 90</p>
                </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <!-- <a href="#" class="btn">add to cart</a> -->
            </div>


            <div class="box">
                <img src="image/f1.jpg" alt="">
                <h3>Fresh Fish</h3>
                <div class="price">
                    <p width="200" height="120">Tk 600</p>
                </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <!-- <a href="#" class="btn">add to cart</a> -->
            </div>


        </div>



    </section>

    <!-- products section ends -->

    <!-- categories section starts  -->

    <section class="categories" id="categories">

        <!-- <h1 class="heading"> product <span>categories</span> </h1> -->

        <div class="box-container">

            <div class="box">
                <img src="image/cat-1.png" alt="">
                <h3>Online Grocery</h3>
                <p>upto 45% off</p>
                <a href="index.php" class="btn">shop now</a>
            </div>



        </div>

    </section>



    <!-- review section ends -->

    <!-- blogs section starts  -->

    <section class="blogs" id="blogs">

        <h1 class="heading"> our <span>blogs</span> </h1>

        <div class="box-container">

            <div class="box">
                <img src="image/blog-1.jpg" alt="">
                <div class="content">
                    <div class="icons">
                        <a href="#"> <i class="fas fa-user"></i> by user </a>
                        <a href="#"> <i class="fas fa-calendar"></i> 1st may, 2021 </a>
                    </div>
                    <h3>fresh and organic vegitables and fruits</h3>
                    <p></p>
                    <a href="https://blog.bostonorganics.com/" class="btn">read more</a>
                </div>
            </div>

            <div class="box">
                <img src="image/blog-2.jpg" alt="">
                <div class="content">
                    <div class="icons">
                        <a href="#"> <i class="fas fa-user"></i> by user </a>
                        <a href="#"> <i class="fas fa-calendar"></i> 1st may, 2021 </a>
                    </div>
                    <h3>fresh and organic vegitables and fruits</h3>

                    <a href="https://freshorganic.gi/category/blog/" class="btn">read more</a>
                </div>
            </div>

            <div class="box">
                <img src="image/blog-3.jpg" alt="">
                <div class="content">
                    <div class="icons">
                        <a href="#"> <i class="fas fa-user"></i> by user </a>
                        <a href="#"> <i class="fas fa-calendar"></i> 1st may, 2021 </a>
                    </div>
                    <h3>fresh and organic vegitables and fruits</h3>

                    <a href="https://www.greenov-techna.com/en/garden/expert/organic-vegetable-garden" class="btn">read more</a>
                </div>
            </div>

        </div>

    </section>

    <!-- blogs section ends -->

    <!-- footer section starts  -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3> BUBT SUPERMARKET <i class="fas fa-shopping-basket"></i> </h3>
                <p>Thank You For Visting Us</p>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#" class="links"> <i class="fas fa-phone"></i> 0182653232312 </a>
                <a href="#" class="links"> <i class="fas fa-phone"></i> 013546464 </a>
                <a href="#" class="links"> <i class="fas fa-envelope"></i> tanvirmia@gmail.com </a>
                <a href="#" class="links"> <i class="fas fa-map-marker-alt"></i> Mirpur,Dhaka </a>
            </div>

            <div class="box">
                <h3>quick links</h3>
                <a href="#" class="links"> <i class="fas fa-arrow-right"></i> home </a>
                <a href="#" class="links"> <i class="fas fa-arrow-right"></i> features </a>
                <a href="#" class="links"> <i class="fas fa-arrow-right"></i> products </a>
                <a href="#" class="links"> <i class="fas fa-arrow-right"></i> blogs </a>
            </div>

        </div>

        <div class="credit"> created by <span> Tanvir,Rifat,Naim </span> | all rights reserved </div>

    </section>

    <!-- footer section ends -->















    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>