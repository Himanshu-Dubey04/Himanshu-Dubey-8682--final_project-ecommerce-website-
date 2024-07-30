<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   
</head>
<body>
   <?php
        include("../PAGES/config.php");
            if(isset($_GET['id'])) {
                $id = $_GET['id'];
                $record = mysqli_query($con, "SELECT * FROM `product` WHERE ID = $id ");
                $data = mysqli_fetch_array($record);
            }
    ?>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 m-auto border mt-3" >
                <form action="update.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3 my-2">
                        <p class="text-center fw-bold fs-4 text-danger">Update Products</p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Product Name</label>
                        <input type="text" value= "<?php echo $data['Product_Name'] ?>" name="pro_name" class="form-control"  placeholder="product name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Product Price</label>
                        <input type="number" value= "<?php echo $data['Product_Price'] ?>" name="pro_price" class="form-control"  placeholder="product price">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Add Product Img</label>
                        <input type="file" name="pro_img" class="form-control" >
                        <img src="<?php echo $data['Product_Image'] ?>" alt="" style="height:100px;" class='mt-2'>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Select Category</label>
                        <select class="form-select" name="pro_cate">
                        <option value="Home" <?php if(isset($data['Product_Category']) && $data['Product_Category'] == 'Home') echo 'selected'; ?>>Home</option>
                        <option value="Mobile" <?php if(isset($data['Product_Category']) && $data['Product_Category'] == 'Mobile') echo 'selected'; ?>>Mobile</option>
                        <option value="Bag" <?php if(isset($data['Product_Category']) && $data['Product_Category'] == 'Bag') echo 'selected'; ?>>Bag</option>
                        <option value="Laptop" <?php if(isset($data['Product_Category']) && $data['Product_Category'] == 'Laptop') echo 'selected'; ?>>Laptop</option>
                    </select>
                    </div>
                    <input type = "hidden" name ='Id' value = "<?php echo $data['ID'] ?> " >
                    <button name = "update" class='bg-success fs-4 fw-bold my-2 form-control text-white'>Update</button>
                </form>
            </div>
        </div>
    </div>
    
    <?php
      

    //    <!-- product update.... -->
      

          if(isset($_POST['update'])){

            // mysqli database connection......
            $id = $_POST['Id'];

            $con = mysqli_connect('localhost','root','','ecommerce');
        

        // product data....
        $ProductName = $_POST['pro_name'];
        $ProductPrice = $_POST['pro_price'];
        $ProductImage = $_FILES['pro_img'];
        $ProductCategory = $_POST['pro_cate'];

        // product location....
        $ImageAddress = $_FILES['pro_img']['tmp_name'];
        $ImageName = $_FILES['pro_img']['name'];

        // product image in a folder
        $ImageDestination = "pro-image/".$ImageName;
        move_uploaded_file($ImageAddress, $ImageDestination);


            //   include("location:../PAGES/config.php");
              mysqli_query($con,"UPDATE `product` SET `Product_Name`='$ProductName',`Product_Price`='$ProductPrice',`Product_Image`='$ImageDestination',`Product_Category`='$ProductCategory' WHERE ID = $id");

              header("location:product.php");
            }


  ?>
   
</body>
</html>