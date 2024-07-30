<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/responsive.css">

    <style>
        /* admin dhashbord styling... */
#dashboard{
  text-align: center;
  margin: 30px 20px;
}
#dashboard h3{
  font-size: 35px;
  margin: 15px 0;
  padding: 10px;
  background-color: bisque;
}
#dashboard a{
  margin: 0px 30px;
  padding: 10px 15px;
  width: 100%;
  text-decoration: none;
  color: aliceblue;
  border-radius: 4px;
  background-color: #dd7e31ea;
}
    </style>

</head>
<body>

    <?php
        session_start();
        if(!$_SESSION['admin']){
            header('location:../FORMS/login.php');
        }
    ?>

    <!-- header section... -->
<section id="header">
        <a href="../PAGES/index.php"><img src="../IMG/elogo.png" class="logo"></a>
        <div>
            <ul id="navbar">
                <li><i class="fa-solid fa-user"><?php echo ($_SESSION['admin']); ?></i></li>
                <li><i class="fa-solid fa-right-from-bracket"><a href="../FORMS/logout.php">LogOut</a></i></li>
                <li><a href="../PAGES/index.php">UserPanel</a></li>
                <li id="shop-bag"><a href="../PAGES/viewcart.php"><i class="fas fa-bag-shopping"></i></a></li>
                
                <a href="#" id="close-menu"><i class="far fa-times"></i></a>
            </ul>
        </div>
        <div id="show-menu">
            <a href="../PAGES/viewcart.php"><i class="fas fa-bag-shopping"></i></a>
            <i id="menu-bar" class="fas fa-outdent"></i>
        </div>
    </section>


    <section id = 'dashboard'>
        <h3>Dash-Board</h3>
        <div class="section-m1">
            <a href="../PRODUCTS/product.php">Add Products</a>
            <a href="../ADMIN/user.php">Users Details</a>
        </div>
        </section>

    <script src="../JS/main.js"></script>

</body>
</html>