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
    <div class="container-md">
        <!-- This is card -->
         <?php 
         foreach ($products as $data) {
            if ($data['keyword'] == 'featured') {
            ?>
        <div class="card mt-2" style="width: 18rem;">
            <img src="../assets/images/<?php echo $data['product_image']   ?> " class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"> <?php echo $data['product_name']?></h5>
                <p class="card-text">Price: <strong><?php echo $data['product_price']?></strong></p>
                <a href="../php/productInfo.php?id=<?php echo $data['product_id']   ?>" class="btn btn-primary">View Products</a>
            </div>
        </div>
    </div>
    <!-- category Ends -->

    <div class="container-md d-flex justify-content-center mt-2">
        <h2> Recently Added</h2>
    </div>
    <div class="container-md">
        <!-- This is card -->
        <div class="card mt-2" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>

    <!-- Category Starts -->
    <div class="container-md d-flex justify-content-center mt-2">
        <h2> Protien Products</h2>
    </div>
    <div class="container-md">
        <!-- This is card -->
        <div class="card mt-2" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
    <!-- category Ends -->
    

    
</body>
</html>