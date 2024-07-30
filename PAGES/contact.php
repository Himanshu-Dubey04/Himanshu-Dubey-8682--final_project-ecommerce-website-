<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../CSS/navbar.css">
    <link rel="stylesheet" href="../CSS/contact.css">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/responsive.css">
</head>
<body>
    
    <!-- header section.... -->
    <section id="header">
        <a href="index.php"><img src="../IMG/elogo.png" class="logo"></a>
        <div>
            <ul id="navbar">
                <li><a class="active" href="index.php">Home</a></li>
                <div class="dropdown">
                    <button class="dropbtn">
                        <a href="shop.php">Shop</a>
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                      <a href="mobile.php">Mobile</a>
                      <a href="bag.php">Bag</a>
                      <a href="laptop.php">Laptop</a>
                    </div>
                </div>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li id="shop-bag"><a href="viewcart.php"><i class="fas fa-bag-shopping"></i></a></li>
                
                
                <div class="dropdown">
                    <button class="dropbtn">
                        <i class="fa fa-caret-down">
                             <!-- PHP code section for user session -->
                             <?php
                                    session_start();
                                    if($user = isset($_SESSION['user']) ? $_SESSION['user'] : ""){
                                        echo $user;
                                    }
                                    
                                    // $user = isset($_SESSION['user']) ? $_SESSION['user'] : ""; // Check if 'user' key is set
                            ?>
                        </i>
                    </button>
                    <div class="dropdown-content">
                        <?php
                            // Check if 'user' key is set
                            if(isset($_SESSION['user'])){               
                                echo "<a href='../FORMS/userout.php'><i class='fa-solid fa-right-from-bracket'></i> logout</a>";
                            }
                            else {
                                echo "<a href='../FORMS/userlogin.php'><i class='fa-solid fa-right-from-bracket'></i> login</a>";
                            }
                        ?>
                        <a href="../ADMIN/mystore.php"><i class="fa-solid fa-user"></i> admin</a>
                    </div>
                </div>
                <a href="#" id="close-menu"><i class="far fa-times"></i></a>
            </ul>
        </div>
        <div id="show-menu">
            <a href="cart.html"><i class="fas fa-bag-shopping"></i></a>
            <i id="menu-bar" class="fas fa-outdent"></i>
        </div>
    </section>

    <!-- contact us header section.... -->
    <section id="ImgBanner">  
        <div class="BannerText">
            <h2>#Contact Me</h2>
            <p>Leave a message , We love to hear from you</p>
        </div>
    </section>

    <!-- contact me section.... -->
    <section id="contact" class="section-p1">
        <div class="contact-details">
            <span>GET IN TOUCH</span>
            <h2>Visit one of our agency location or contat us today</h2>
            <h3>Head Office</h3>
            <div>
                <li>
                    <i class="fal fa-map"></i>
                    <p>56 Glassford street glassgow g1 1ul New York</p>
                </li>
                <li>
                    <i class="far fa-envelope"></i>
                    <p>contact @example.com</p>
                </li>
                <li>
                    <i class="fas fa-phone-alt"></i>
                    <p>contact +91 9874563310</p>
                </li>
                <li>
                    <i class="far fa-clock"></i>
                    <p>Monday to Saturday : 9:00am to 8:00pm</p>
                </li>
            </div>
        </div>
        <div class="form-details"> 
            <form action="#">
                <span>LEAVE A MESSAGE</span>
                <h2>We love to hear from you</h2>
                <input type="text" placeholder="Your Name">
                <input type="text" placeholder="E-mail">
                <input type="text" placeholder="Subject">
                <textarea name="" id="" cols="30" rows="10" placeholder="Your Messages"></textarea>
                <button>Submit</button>
            </form>
        </div>

    </section>
   
    <!-- Newsletter section.... -->
    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sign Up For Newsletters</h4>
            <p>Get Email update about our latest shop and <span>special offers...!</span></p>
        </div>
        <div class="sign-up-box">
            <input type="email" placeholder="Your email address">
            <button>Sign Up</button>
        </div>
    </section>

    <!-- footer section.... -->
    <footer class="section-p1">
        <div class="col">
            <img class="logo" src="../IMG/elogo.png" alt="">
            <h4>Contact</h4>
            <p><strong>Address :</strong> Uttam Nagar West</p>
            <p><strong>Phone :</strong> +91 954123658 , +91 9874125630</p>
            <p><strong>Hours :</strong> 10:00 - 18:00 Mon-sat</p>
            <div class="follow">
                <h4>Follow us</h4>
                <div class="icon">
                    <i class="fab fa-facebook"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-youtube"></i>
                </div>
            </div>
        </div>
        <div class="col">
            <h4>About</h4>
            <a href="#">About Us</a>
            <a href="#">Delivery Information</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Conditions</a>
            <a href="#">Contact Us</a>
        </div>
        <div class="col">
            <h4>My Account</h4>
            <a href="#">Sign In</a>
            <a href="#">Veiw Cart</a>
            <a href="#">My Wishlist</a>
            <a href="#">Track My Order</a>
            <a href="#">Help</a>
        </div>
        <div class="col install">
            <h4>Install App</h4>
            <p>From App Stroe or Google Play</p>
            <div class="row">
                <img src="../IMG/pay/app.jpg" alt="">
                <img src="../IMG/pay/play.jpg" alt="">
            </div>
            <p>Secured Payment Gateways</p>
            <img src="../IMG/pay/pay.png" alt="">
        </div>

        <div class="copyright">
            <p>@ 2024, Him4n__ etc - HTML CSS JS Ecommerce Template</p>
        </div>
    </footer>


    <script src="../JS/main.js"></script>
</body>
</html>