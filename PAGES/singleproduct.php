<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>single product details page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../CSS/navbar.css">
    <link rel="stylesheet" href="../CSS/singleproduct.css">
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
                                if(isset($_SESSION['user'])){
                                    echo $_SESSION['user'];
                                }
                            ?>
                        </i>
                    </button>
                    <div class="dropdown-content">
                        <?php
                            if(isset($_SESSION['user'])){               
                                echo "<a href='../FORMS/userout.php'><i class='fa-solid fa-right-from-bracket'></i> logout</a>";
                            } else {
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
            <a href="viewcart.php"><i class="fas fa-bag-shopping"></i></a>
            <i id="menu-bar" class="fas fa-outdent"></i>
        </div>
    </section>


    
    <?php
        include('config.php');
        
        if (isset($_GET['id'])) {
            $productId = $_GET['id'];
            $record = mysqli_query($con, "SELECT * FROM `product` WHERE ID = $productId");
            
            if (mysqli_num_rows($record) > 0) {
                $row = mysqli_fetch_array($record);
                
                echo "
                    <section id='pro-details' class='section-p1'>
                
                        <form action='insertcart.php' method='POST' class='form'>
                            <div class='single-pro-img'>
                                <img src='../PRODUCTS/{$row['Product_Image']}' width='100%' id='Main-Img'>
                            </div>

                            <div class='single-pro-details'>

                                <h6>Home / Product</h6>
                                <h4>{$row['Product_Name']}</h4>
                                <h2>$ {$row['Product_Price']}</h2>
                                <input type='number' name='Product_Quantity' value='1'>
                                <input type='hidden' name='Product_Name' value='{$row['Product_Name']}'>
                                <input type='hidden' name='Product_Price' value='{$row['Product_Price']}'>
                                <input type='hidden' name='Product_Image' value='{$row['Product_Image']}'>
                                <button type='submit' name='addcart'>Add To Cart</button>
                                <h4>Product Details</h4>
                                <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis sunt cumque tempora nobis! Harum porro cum ea asperiores, id non, maxime nesciunt, qui placeat culpa vel et fugiat velit perferendis eveniet aliquam eius aut nulla ullam laborum quas tempore! Totam adipisci veritatis eaque delectus tempore itaque, nihil vitae officiis debitis?</span>
                            </div>
                        </form>
                    </section>
                ";
            } else {
                echo "<p>No product found.</p>";
            }
        } else {
            echo "<p>Product ID not provided.</p>";
        }
        ?>

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
        <img src="../IMG/elogo.png" class="logo">
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
