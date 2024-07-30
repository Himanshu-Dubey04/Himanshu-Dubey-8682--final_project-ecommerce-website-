<?php

// session start and create for add to cart products.... 
session_start();
// session_destroy();

if(isset($_SESSION['user'])){



if(isset($_POST['addcart'])){
        
                        
        $Product_Name = $_POST['Product_Name'];
        $Product_Price = $_POST['Product_Price'];
        $Product_Quantity = $_POST['Product_Quantity'];

        // session create.
        $_SESSION['cart'][] = array('Product_Name'=>$Product_Name, 'Product_Price'=>$Product_Price, 'Product_Quantity'=>$Product_Quantity);
        print_r( $_SESSION['cart']);

        header('location:viewcart.php');

}

        // remove items....
        if(isset($_POST['remove'])){
                foreach($_SESSION['cart'] as $key => $value){
                        if($value['Product_Name'] === $_POST['items']){
                                unset($_SESSION['cart'][$key]);
                                $_SESSION['cart'] = array_values($_SESSION['cart']);
                                header('location:viewcart.php');
                        }
                }
        }
        else{
                header('location:viewcart.php');
        }
}
else{
        header("location:../Forms/userlogin.php");
}
?>