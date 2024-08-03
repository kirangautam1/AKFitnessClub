<?php
session_start();
$products = $_SESSION['cart_products'];
$cart_total = 0;
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body class="row d-flex justify-content-center ">
  <div class="col-11 ">
    <?php include '../includes/navbar.php' ?>
  </div>
  <div class="row d-flex justify-content-center">
    <div class="col-11 d-flex flex-column justify-content-center align-items-center">
      <div class="container-md m-3 ">
        <h1 class="text-center">Shopping Cart</h1>
      </div>
      <div class="container-md d-flex row">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Products Name and Details</th>
              <th scope="col">Price</th>
              <th scope="col">Quantity</th>
              <th scope="col">Total</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            <?php 
            foreach($products as $data){
            ?>
            <tr>
              <td scope="row" class="d-flex">
                <div class="d-flex">
                  <img src="../assets/images/<?php echo $data['product_image']?>" height="100vh" />
                </div>
                <div class="container-md d-flex">
                  <div class="container-md">   
                    <strong>
                      <?php echo $data['product_name']; ?>
                    </strong>                

                    <div class="container-md">
                      <small>
                      <?php echo $data['product_description']; ?>
                      </small>
                    </div>
                  </div>
                </div>
              </td>
              <td>
              <?php echo $data['product_price']?>
              </td>

              <td>
                <div class="">
                <?php echo $data['quantity']?>
                </div>
              </td>
              <td>
              <?php 
               $product_total = $data['quantity']*$data['product_price'];
               echo $product_total;
               ?>
              <?php 
              $cart_total += $product_total ;
              ?>

              </td>
              <td>
                <button class="btn btn-danger ">Remove</button>

              </td>
            </tr>
            <?php
            }
            ?>

            
          </tbody>
        </table>
        <div class="row m-4 summary d-flex flex-column justify-content-center align-items-center ">
          <div class="col-5">          
          <div>
            <h5 class="text-center" ><b>Summary</b></h5>
          </div>
          <hr>
          <div class="row">
            <div class="col" style="padding-left:0;"> Items in cart: <strong>  <?php echo count($products)?> </strong></div>
            <div class="col text-right"> &dollar; <?php echo $cart_total?> </div>            
          </div>
          <div class="row">
            <div class="col" style="padding-left:0;"> GST(13%) <strong>   </strong></div>
            <div class="col text-right"> &dollar; <?php echo number_format($cart_total*0.13,2)?> </div>            
          </div>
         
          
          <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
            <div class="col">TOTAL PRICE</div>
            <div class="col text-right"> &dollar; <strong>  <?php echo number_format($cart_total*1.13,2)?> </strong> </div>    
          </div>
          <button class="btn btn-warning ">CHECKOUT</button>
          </div>
        </div>
      </div>
      <div class="container-md d-flex">
        <div class="d-flex">
          <img src="../assets/images/whey_protein_powder.jpg" height="100vh" />
        </div>
        <div class="d-flex">
          <img src="../assets/images/whey_protein_powder.jpg" height="100vh" />
        </div>
        <div class="d-flex">
          <img src="../assets/images/whey_protein_powder.jpg" height="100vh" />
        </div>
      </div>
    </div>
  </div>
</body>

</html>