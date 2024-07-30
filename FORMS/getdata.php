<?php
// get user data form register.php

$con = mysqli_connect('localhost','root','','ecommerce');

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $password = $_POST['password'];

    $Dup_Email = mysqli_query($con , "SELECT * FROM `users` WHERE Email = '$email' ");
    $Dup_username = mysqli_query($con , "SELECT * FROM `users` WHERE Username = '$name' ");

    if(mysqli_num_rows($Dup_Email)){
        echo "
        <script>
        alert('This email is already taken');
        window.location.href = 'register.php';
        </script>;
        ";
    }
    elseif(mysqli_num_rows($Dup_username)){
        echo "
        <script>
        alert('This username is already taken');
        window.location.href = 'register.php';
        </script>;
        ";
    }
    else{
        mysqli_query($con ,"INSERT INTO `users`(`Username`, `Email`, `Number`, `Password`) VALUES ('$name','$email','$number','$password')");
        echo "
        <script>
        alert('User registered successfully');
        window.location.href = 'userlogin.php';
        </script>;
        ";
    }
}

?>
