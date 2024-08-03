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
    <div class="conatainer-md d-flex mt-3 ">
        <div class="container-md bg-primary d-flex justify-content-center">
            <div class="d-flex">
                <img src="../assets/images/whey_protein_powder.jpg" height="500vh" />
            </div>
        </div>
        <div class="container-md">
            <div class="container-md d-flex justify-content-center">
                <h2 > Product Name </h2>
            </div>
            <div class="container-md d-flex justify-content-end font-2">
                <h5> <small class = "text-muted" >In stock </small></h5>
            </div>
            <div class="container-md">
            </div>
            <div class="container-md">
                <h5 class="d-flex justify-content-center">Price</h5>
            </div>
            <div class="container-md">
                <p class="text-justify"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident alias, 
                    in suscipit voluptate inventore deserunt dolorem asperiores voluptatem quasi? 
                    Repellat eos molestias mollitia laborum sequi dignissimos ex illum amet eligendi?
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam, aliquam quia maxime ea dignissimos libero ab voluptates labore impedit possimus adipisci corporis? Minus exercitationem, expedita adipisci accusamus nesciunt nostrum asperiores!
                </p>
            </div>
            <div class="container-md">
                Category : 
            </div>
            <form action="" method="POST">

                <div class="container-md mt-3">
                    <div class="row">
                        <div class="col-2">
                            Quantity
                        </div>
                        <div class="col-4">
                            <input type="number" name="quantity" id="quantity" min="1">
                        </div>
                    </div>
                </div>
                <div class="container-md d-flex mt-3 ">
                    <button class="btn btn-primary m-2" type="submit">Add to cart</button>
                    <button class="btn btn-warning m-2" type="submit"> Order</button>
                </div>
                </div>
            </form>
    </div>
   

    
</body>
</html>