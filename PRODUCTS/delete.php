<?php

    echo $id = $_GET['id'];
    include("../PAGES/config.php");

    mysqli_query($con,"DELETE FROM `product` WHERE ID = $id");
    header("location:product.php");

?>