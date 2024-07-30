<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 m-auto border mt-3" >
                <form action="login-check.php" method="POST">
                    <div class="mb-3 my-2">
                        <p class="text-center fw-bold fs-4 text-danger">Log In</p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="user_name" class="form-control"  placeholder="Enter User Name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password   " name="user_pass" class="form-control"  placeholder="Enter Password">
                    </div>
                    <button name='submit' class='bg-danger fs-4 fw-bold my-2 form-control text-white'>Admin Login</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>