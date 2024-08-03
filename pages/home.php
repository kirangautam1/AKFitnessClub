<?php
session_start();
$products = $_SESSION['products'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <?php include '../includes/navbar.php' ?>

    <!-- Category Starts -->
    <div class="container-md d-flex justify-content-center mt-2">
        <h2> Feature Products</h2>
    </div>
    <div class="container-md d-flex flex-wrap justify-content-center">
        <!-- This is card -->
         <?php 
         foreach ($products as $data) {
            if ($data['feature'] == 'featured') {
            ?>
        <div class="card m-2" style="width: 18rem;">
            <img src="../assets/images/<?php echo $data['product_image']   ?> " class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"> <?php echo $data['product_name']?></h5>
                <p class="card-text">Price: <strong> $ <?php echo $data['product_price']?> /-</strong></p>
                <a href="../php/productInfo.php?id=<?php echo $data['product_id'] ?>" class="btn btn-primary">View Products</a>
            </div>
        </div>
    <?php 
            }
        }
        ?>
    </div>
    <!-- category Ends -->

    <!-- Category Starts -->

    <div class="container-md d-flex justify-content-center mt-2 ">
        <h2> Recently Added</h2>
    </div>
    <div class="container-md d-flex flex-wrap justify-content-center">
        <!-- This is card -->
         <?php 
         foreach ($products as $data) {
            if ($data['feature'] == 'recently added') {
            ?>
        <div class="card m-2" style="width: 18rem;">
            <img src="../assets/images/<?php echo $data['product_image']?> " class="card-img-top height-50"  alt="...">
            <div class="card-body">
                <h5 class="card-title"> <?php echo $data['product_name']?></h5>
                <p class="card-text">Price: <strong><?php echo $data['product_price']?></strong></p>
                <a href="../php/productInfo.php?id=<?php echo $data['product_id'] ?>" class="btn btn-primary">View Products</a>
            </div>
        </div>
    <?php 
            }
        }
        ?>
    </div>
    <!-- category Ends -->

    <!-- Category Starts -->
    <div class="container-md d-flex justify-content-center mt-2">
        <h2> Protiens</h2>
    </div>
    <div class="container-md d-flex flex-wrap justify-content-center">
        <!-- This is card -->
         <?php 
         foreach ($products as $data) {
            if ($data['product_category'] == 'protein') {
            ?>
        <div class="card m-2" style="width: 18rem;">
            <img src="../assets/images/<?php echo $data['product_image']?> " class="card-img-top height-50"  alt="...">
            <div class="card-body">
                <h5 class="card-title"> <?php echo $data['product_name']?></h5>
                <p class="card-text">Price: <strong> $ <?php echo $data['product_price']?> /-</strong></p>
                <a href="../php/productInfo.php?id=<?php echo $data['product_id'] ?>" class="btn btn-primary">View Products</a>
            </div>
        </div>
    <?php 
            }
        }
        ?>
    </div>
    <!-- category Ends -->

    <!-- Category Starts -->
    <div class="container-md d-flex justify-content-center mt-2">
        <h2> Creatine</h2>
    </div>
    <div class="container-md d-flex flex-wrap justify-content-center">
        <!-- This is card -->
         <?php 
         foreach ($products as $data) {
            if ($data['product_category'] == 'creatine') {
            ?>
        <div class="card m-2" style="width: 18rem;">
            <img src="../assets/images/<?php echo $data['product_image']?> " class="card-img-top height-50"  alt="...">
            <div class="card-body">
                <h5 class="card-title"> <?php echo $data['product_name']?></h5>
                <p class="card-text">Price: <strong><?php echo $data['product_price']?></strong></p>
                <a href="../php/productInfo.php?id=<?php echo $data['product_id'] ?>" class="btn btn-primary">View Products</a>
            </div>
        </div>
    <?php 
            }
        }
        ?>
    </div>
    <!-- category Ends -->

    <!-- Category Starts -->
    <div class="container-md d-flex justify-content-center mt-2">
        <h2> Gym Equipment</h2>
    </div>
    <div class="container-md d-flex flex-wrap justify-content-center">
        <!-- This is card -->
         <?php 
         foreach ($products as $data) {
            if ($data['product_category'] == 'equipment') {
            ?>
        <div class="card m-2" style="width: 18rem;">
            <img src="../assets/images/<?php echo $data['product_image']?> " class="card-img-top height-50"  alt="...">
            <div class="card-body">
                <h5 class="card-title"> <?php echo $data['product_name']?></h5>
                <p class="card-text">Price: <strong><?php echo $data['product_price']?></strong></p>
                <a href="../php/productInfo.php?id=<?php echo $data['product_id'] ?>" class="btn btn-primary">View Products</a>
            </div>
        </div>
    <?php 
            }
        }
        ?>
    </div>
    <!-- category Ends -->

    <!-- Category Starts -->
    <div class="container-md d-flex justify-content-center mt-2">
        <h2> Accessories </h2>
    </div>
    <div class="container-md d-flex flex-wrap justify-content-center">
        <!-- This is card -->
         <?php 
         foreach ($products as $data) {
            if ($data['product_category'] == 'accessories') {
            ?>
        <div class="card m-2" style="width: 18rem;">
            <img src="../assets/images/<?php echo $data['product_image']?> " class="card-img-top height-50"  alt="...">
            <div class="card-body">
                <h5 class="card-title"> <?php echo $data['product_name']?></h5>
                <p class="card-text">Price: <strong><?php echo $data['product_price']?></strong></p>
                <a href="../php/productInfo.php?id=<?php echo $data['product_id'] ?>" class="btn btn-primary">View Products</a>
            </div>
        </div>
    <?php 
            }
        }
        ?>
    </div>
    <!-- category Ends -->




    

    
</body>
</html>