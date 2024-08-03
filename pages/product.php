<?php
session_start();
$data = $_SESSION['current_product'];

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
<body class="row d-flex justify-content-center ">
    <div class="col-11">
        <?php include '../includes/navbar.php' ?>
    </div>

    <div class="col-11 mt-3">   
    <div class="conatainer-md d-flex mt-3 ">
        <div class="container-md d-flex flex-column justify-content-center align-items-center">
            <div class="d-flex">
                <img src="../assets/images/<?php echo $data['product_image']?>" height="500vh" />
            </div>
            <div class=""> 
                <div class="h2"> 
                    <?php echo $data['product_name']?>
                </div>
            </div>
        </div>
        <div class="container-md">
            <div class="container-md d-flex justify-content-center">
                <h2 > <?php echo $data['product_description']?> </h2>
            </div>
            <div class="container-md col-6 d-flex justify-content-end font-2">
                <h5> <small class = "text-muted" >In stock <?php echo $data['in_stock']?> </small></h5>
            </div>
            <div class="container-md">
            </div>
            <div class="container-md">
                <h4 class="d-flex justify-content-center"> <strong> $ <?php echo $data['product_price']?> </strong></h4>
            </div>
            <div class="container-md">
                <p class="text-justify"> 
                <?php echo $data['long_description']?>
                </p>
            </div>
            <div class="container-md">
                Category : 
                <button class="btn btn-light" disabled > <?php echo $data['product_category']?></button>
            </div>
            <form action="../php/addCart.php" method="POST">

                <div class="container-md mt-3">
                    <div class="row">
                        <div class="col-2">
                            Quantity
                        </div>
                        <div class="col-4">
                            <input type="number" name="quantity" id="quantity" min="1" required>
                            <input type="hidden" name="id" id="quantity" value="<?php echo $data['product_id'] ?>  ">
                        </div>
                    </div>
                </div>
                <div class="container-md d-flex mt-3 ">
                    <button class="btn btn-primary m-2" type="submit"  name="action" value="cart">Add to cart</button>
                    <button class="btn btn-warning m-2" type="submit" name="action" value="order"> Order</button>
                </div>
                </div>
            </form>
    </div>
   

    </div>
</body>
</html>