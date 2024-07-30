<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <?php
        include('../ADMIN/mystore.php');
    ?>


    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 m-auto border mt-3" >
                <form action="insert-pro.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3 my-2">
                        <p class="text-center fw-bold fs-4 text-danger">Products Details</p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Product Name</label>
                        <input type="text" name="pro_name" class="form-control"  placeholder="product name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Product Price</label>
                        <input type="number" name="pro_price" class="form-control"  placeholder="product price">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Add Product Img</label>
                        <input type="file" name="pro_img" class="form-control" >
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Select Category</label>
                        <select class="form-select" name="pro_cate">
                            <option value="Home">Home</option>
                            <option value="Mobile">Mobile</option>
                            <option value="Bag">Bag</option>
                            <option value="Laptop">Laptop</option>
                        </select>
                    </div>
                    <button name="submit" class='bg-success fs-4 fw-bold my-2 form-control text-white'>Uplode</button>
                </form>
            </div>
        </div>
    </div>
    
    
    <!-- fetch data from database... -->
    <div class="container text-center mt-5">
        <div class="row">
            <div class="col-md-8 m-auto">
                <table class="table table-dark table-hover border my-4">
                    <thead>
                        <th>ID</th>
                        <th>Product Name</th>
                        <th>Product Price</th>
                        <th>Image</th>
                        <th>Category</th>
                        <th>Delete</th>
                        <th>Update</th>
                    </thead>

                    <tbody>

                    <?php
                        include('../PAGES/config.php');
                        $SelectQuery = mysqli_query($con,"SELECT * FROM `product` ");
                        $i = 0; // Initialize $i here

                        while($row = mysqli_fetch_array($SelectQuery)){
                            $i = $i + 1;
                            echo"
                                <tr>
                                    <td>"?><?php echo $i;  ?><?php echo "</td>
                                    <td>$row[Product_Name]</td>
                                    <td>$row[Product_Price]</td>
                                    <td><img src='$row[Product_Image]' width='100px'></td>
                                    <td>$row[Product_Category]</td>
                                    <td><a href='delete.php? id=$row[ID]' class='btn  btn-danger'>Delete</a></td>
                                    <td><a href='update.php? id=$row[ID]' class='btn btn-success'>Update</a></td>
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