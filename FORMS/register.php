<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registretion Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 m-auto my-2 bg-white shadow font-monospace border border-info">
                <p class='text-primary fs-3 fw-bold my-2 text-center'>User Register</p>
                <form action="getdata.php" method="POST">
                     <div class="md-3 p-3">
                         <label for="">User Name</label>
                         <input type="text" name="name" placeholder='Enter user name' class='form-control'>
                     </div>
                     <div class="md-3 p-3">
                         <label for="">User Email</label>
                         <input type="email" name="email" placeholder='Enter user email' class='form-control'>
                     </div>
                     <div class="md-3 p-3">
                         <label for="">User Number</label>
                         <input type="number" name="number" placeholder='Enter user number' class='form-control'>
                     </div>
                     <div class="md-3 p-3">
                         <label for="">User Password</label>
                         <input type="password" name="password" placeholder='Enter user password' class='form-control'>
                     </div>
                     <div class='mb-3'>
                         <button name ="submit" class='w-100 bg-primary fs-4 text-white'>REGISTER</button>
                     </div>
                     <div class='mb-3'>
                         <button class='w-100 bg-danger fs-4 text-white'><a href="userlogin.php" class='text-decoration-none text-white'>LOGIN</a></button>
                     </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>