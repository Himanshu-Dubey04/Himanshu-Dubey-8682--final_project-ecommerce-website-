<?php

    if(isset($_POST['submit'])){
        
        // mysqli database connection......
        include ('../PAGES/config.php');

        // product data....
        $ProductName = $_POST['pro_name'];
        $ProductPrice = $_POST['pro_price'];
        $ProductImage = $_FILES['pro_img'];
        $ProductCategory = $_POST['pro_cate'];

        // product location....
        $ImageAddress = $_FILES['pro_img']['tmp_name'];
        $ImageName = $_FILES['pro_img']['name'];

        // product image in a folder
        $ImageDestination = "pro-image/".$ImageName;
        move_uploaded_file($ImageAddress, $ImageDestination);

        // insert product query....
        mysqli_query($con,"INSERT INTO `product`( `Product_Name`, `Product_Price`, `Product_Image`, `Product_Category`) VALUES ('$ProductName','$ProductPrice','$ImageDestination','$ProductCategory')");

        header("location:product.php");
    }

?>