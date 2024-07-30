<?php

    include("../PAGES/config.php");

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        mysqli_query($con, "DELETE FROM `users` WHERE ID = $id");
        echo"
        <script>
        alert('User Deleted');
        header('location:user.php');
        </script>
        ";
        header("Location:../ADMIN/user.php");
        
        
    }

?>