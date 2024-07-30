<?php

// get data from userlogin.php

$Name = $_POST['name'];
$Password = $_POST['password'];

$con = mysqli_connect('localhost','root','','ecommerce');

$result = mysqli_query($con, "SELECT * FROM `users` WHERE (Username = '$Name' OR Email = '$Name') AND Password = '$Password'");

session_start();

if(mysqli_num_rows($result)){

    $_SESSION['user'] = $Name;
    echo "
    <script>
    alert('Successfully login');
    window.location.href = '../PAGES/index.php';
    </script>
    ";
}
else{
    echo "
    <script>;
    alert('something went wrong');
    window.location.href = 'userlogin.php';
    </script>;
    ";
}

?>