<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>

    <?php
    include('mystore.php');
    ?>
    <!-- fetch data from database... -->
    <div class="container text-center mt-5">
        <div class="row">
            <div class="col-md-8 m-auto">
                <?php
                    include("../PAGES/config.php");
                ?>
                <table class="table table-dark table-hover border my-4">
                    <thead>
                        <th>S no.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Number</th>
                        <th>Password</th>
                        <th>Delete</th>
                    </thead>

                    <tbody>
                    <?php
                    $record = mysqli_query($con,"SELECT * FROM `users` ");

                        $i = 0; // Initialize $i here
                        
                        while ($row = mysqli_fetch_array($record)){
                            $i = $i + 1;

                            echo"
                                <tr>
                                    <td>"?><?php echo $i;  ?><?php echo "</td>
                                    <td>$row[Username]</td>
                                    <td>$row[Email]</td>
                                    <td>$row[Number]</td>
                                    <td>$row[Password]</td>
                                    <td><a href='../ADMIN/deleteuser.php? id=$row[ID]' class='btn  btn-danger'>Delete</a></td>
                                </tr>
                            ";
                        }
                        

                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>