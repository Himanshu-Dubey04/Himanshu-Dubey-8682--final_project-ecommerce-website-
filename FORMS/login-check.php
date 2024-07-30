
<?php
    
// get data from login.php 

include('../PAGES/config.php');

// store userdata from login.php...
$AdminName = $_POST['user_name'];
$AdminPass = $_POST['user_pass'];

$check_data = mysqli_query($con,"SELECT * FROM `admin` WHERE User_Name = '$AdminName' AND User_Pass = '$AdminPass'");

// session start....
session_start();

// check data is present or not ....
    if(mysqli_num_rows($check_data)){

        // session creat....
        $_SESSION['admin'] = $AdminName;

    echo "
        <script>
            alert('Login Successfully');
            window.location.href='../ADMIN/mystore.php'
        </script>
    ";
}
else{
    echo "
    <script>
        alert('Invalid Username and Password')
        window.location.href='login.php'
    </script>
    ";
}






?>