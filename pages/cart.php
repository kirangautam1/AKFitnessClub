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
  <title>Shopping Cart</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="row d-flex justify-content-center ">
  <div class="col-11 ">
    <?php include '../includes/navbar.php'; ?>
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
            if($products != null){
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
              <td><?php echo $data['product_price']?></td>
              <td>
                <form action="../php/updateCart.php" method="POST">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <button type="button" class="btn btn-outline-secondary" onclick="updateQuantity(this, -1)">-</button>
                    </div>
                    <input type="hidden" name="product_id" value="<?php echo $data['product_id']; ?>">
                    <input type="number" name="quantity" class="form-control text-center" value="<?php echo $data['quantity']; ?>" min="1" readonly style="width: 60px;">
                    <div class="input-group-append">
                      <button type="button" class="btn btn-outline-secondary" onclick="updateQuantity(this, 1)">+</button>
                    </div>
                  </div>
                </form>
              </td>
              <td>
                <?php 
                  $product_total = $data['quantity'] * $data['product_price'];
                  echo $product_total;
                  $cart_total += $product_total;
                ?>
              </td>
              <form action="../php/removeCart.php" method="POST">
                <td>
                  <input type="hidden" name="id" value="<?php echo $data['product_id']; ?>">
                  <button class="btn btn-danger" type="submit" value="remove" name="action">Remove</button>
                </td>
              </form>
            </tr>
            <?php
              }
            ?>
            <?php
            }
            ?>
          </tbody>
        </table>
        <?php 
        if($products != null){
        ?>
        <div class="row m-4 summary d-flex flex-column justify-content-center align-items-center ">
          <div class="col-5">          
            <div>
              <h5 class="text-center" ><b>Summary</b></h5>
            </div>
            <hr>
            <div class="row">
              <div class="col" style="padding-left:0;"> Items in cart: <strong>  <?php echo count($products); ?> </strong></div>
              <div class="col text-right"> &dollar; <?php echo $cart_total; ?> </div>            
            </div>
            <div class="row">
              <div class="col" style="padding-left:0;"> GST(13%) <strong>   </strong></div>
              <div class="col text-right"> &dollar; <?php echo number_format($cart_total * 0.13, 2); ?> </div>            
            </div>
            <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
              <div class="col">TOTAL PRICE</div>
              <div class="col text-right"> &dollar; <strong>  <?php echo number_format($cart_total * 1.13, 2); ?> </strong> </div>    
            </div>
            <button class="btn btn-warning ">CHECKOUT</button>
          </div>
        </div>
        <?php
        } else {
          echo '<div class="row d-flex justify-content-center mt-4"><h2 class="text-center"> Your Cart is Empty </h2></div>';
        }
        ?>
      </div>
    </div>
  </div>
  <script>
    function updateQuantity(button, delta) {
      var input = button.parentElement.parentElement.querySelector('input[name="quantity"]');
      var newValue = parseInt(input.value) + delta;
      if (newValue < 1) {
        newValue = 1;
      }
      input.value = newValue;
      input.form.submit();
    }
  </script>
</body>

</html>

