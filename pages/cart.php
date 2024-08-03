<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<div>
<?php include '../includes/navbar.php' ?>
    <div class="container-md mt-3">
        <h1>Shopping Cart</h1>
    </div>
    <div class="container-md d-flex row">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Products Name and Details</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Total</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row" class="d-flex">
        <div class="d-flex">
            <img src="../assets/images/whey_protein_powder.jpg" height="100vh" />
        </div>
        <div class="container-md">
            Product name 
         <div class="container-md">
            Description
         </div>
        </div>
    </th>
      <td>
      $$$$
      </td>
     
      <td>
      <div class="">
            <input type="number" name="quantity" id="quantity" min="1">
        </div>
      </td>
      <td>$$$$</td>
    </tr>
    <tr>
      <th scope="row" class="d-flex">
        <div class="d-flex">
            <img src="../assets/images/whey_protein_powder.jpg" height="100vh" />
        </div>
        <div class="container-md">
            Product name 
        </div>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row" class="d-flex">
        <div class="d-flex">
            <img src="../assets/images/whey_protein_powder.jpg" height="100vh" />
        </div>
        <div class="container-md">
            Product name 
        </div>
    </tr>
  </tbody>
  </table>
<div class="col-md-4 m-4 summary d-flex flex-column justify-content-center ">
                    <div><h5><b>Summary</b></h5></div>
                    <hr>
                    <div class="row">
                        <div class="col" style="padding-left:0;">ITEMS 3</div>
                        <div class="col text-right">&euro; 132.00</div>
                    </div>
                    <form>
                        <p>SHIPPING</p>
                        <select><option class="text-muted">Standard-Delivery- &euro;5.00</option></select>
                        
                    </form>
                    <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                        <div class="col">TOTAL PRICE</div>
                        <div class="col text-right">&euro; 137.00</div>
                    </div>
                    <button class="btn btn-warning ">CHECKOUT</button>
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
</body>
</html>