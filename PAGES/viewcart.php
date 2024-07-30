<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add to cart page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../CSS/navbar.css">
    <link rel="stylesheet" href="../CSS/viewcarts.css">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/responsive.css">

    <style>
        #ImgBanner{
            background-image: url('../IMG/about/banner.png');
            width: 100%;
            height: 40vh;
            background-size: cover;  
        }
        #ImgBanner .BannerText{
            display: flex;
            justify-content: center;
            flex-direction: column;
            text-align: center;
            padding-top: 5rem;
        }
        #ImgBanner h2, p{
            color: rgba(187, 176, 176, 0.89);
        }
    </style>
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
    
    <!-- mid banner section... -->
    <section id="ImgBanner">  
        <div class="BannerText">
            <h2>#Add to cart</h2>
            <p>Leave a message , We love to hear from you</p>
        </div>
    </section>


    <!-- add to cart section.... -->
    
    <section id="cart" class="section-p1">
        <table width="100%";>
            <thead>
                <th>Serial No.</th>
                <th>Product Name</th>
                <th>Product Price</th>
                <th>Product Quantity</th>
                <th>Total Price</th>
                <th>Delete</th>
            </thead>
            <tbody>
            <?php
                        $ptotal = 0;
                        $total = 0;
                        
                        if(isset($_SESSION['cart'])){
                            foreach($_SESSION['cart'] as $key => $value){
                            
                                $ptotal = $value['Product_Price'] * $value['Product_Quantity'];
                                $total += $value['Product_Price'] * $value['Product_Quantity'] ;   // $ptotal = $value['Product_Price'] * $value['Product_Quantity'];

                                echo"
                                    <form action = 'insertcart.php' method = 'POST'>
                                        <tr>
                                            <td>$key</td>
                                            <td><input type='hidden' name='Product_Name' value='$value[Product_Name]'>$value[Product_Name]</td>
                                            <td><input type='hidden' name='Product_Price' value='$value[Product_Price]'>$value[Product_Price]</td>
                                            <td><input type='number' name='Product_Quantity' value='$value[Product_Quantity]'></td>
                                            <td>$ptotal</td>
                                            
                                            <td><button name = 'remove' class = 'btn-danger'>Delete</button></td>
                                            <td><input type='hidden' name ='items' value='$value[Product_Name]'></td>
                                        </tr>
                                    </form>
                                ";
                            };
                        };
                    ?>
            </tbody>
        </table>
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