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
<?php include '../includes/navbar.php' ?>

<body>

    Checkout
    <div class="container d-flex">
        <div class="container ">
            <div class="col-md-8 order-md-1">
                <h4 class="mb-3">Billing address</h4>
                <form class="needs-validation" validate action="../php/placeOrder.php" method="POST">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">First name</label>
                            <input type="text" class="form-control" id="firstName" placeholder="" value="" required>

                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName">Last name</label>
                            <input type="text" class="form-control" id="lastName" placeholder="" value="" required>

                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
                        <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
                    </div>

                    <div class="row">
                        <div class="col-md-5 mb-3">
                            <label for="country">Country</label>
                            <select class="custom-select d-block w-100" id="country" required>
                                <option selected>Canada</option>
                            </select>

                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="state">State</label>
                            <select class="custom-select d-block w-100" id="state" required>
                                <option value="AB" selected>Alberta</option>
                                <option value="BC">British Columbia</option>
                                <option value="MB">Manitoba</option>
                                <option value="NB">New Brunswick</option>
                                <option value="NL">Newfoundland and Labrador</option>
                                <option value="NS">Nova Scotia</option>
                                <option value="ON">Ontario</option>
                                <option value="PE">Prince Edward Island</option>
                                <option value="QC">Quebec</option>
                                <option value="SK">Saskatchewan</option>
                                <option value="NT">Northwest Territories</option>
                                <option value="NU">Nunavut</option>
                                <option value="YT">Yukon</option>
                            </select>

                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="zip">Zip</label>
                            <input type="text" class="form-control" id="zip" placeholder="A1A 1A1" required>

                        </div>
                    </div>


                    <h4 class="mb-3">Payment</h4>

                    <div class="d-block my-3">
                        <div class="custom-control custom-radio">
                            <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked
                                required>
                            <label class="custom-control-label" for="credit">Credit card</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
                            <label class="custom-control-label" for="debit">Debit card</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
                            <label class="custom-control-label" for="paypal">PayPal</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="cc-name">Name on card</label>
                            <input type="text" class="form-control" id="cc-name" placeholder="" required>
                            <small class="text-muted">Full name as displayed on card</small>
                            <div class="invalid-feedback">
                                Name on card is required
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="cc-number">Credit card number</label>
                            <input type="text" class="form-control" id="cc-number" placeholder="16-digit"
                                requiredpattern="\d{13,16}" maxlength="16">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label for="cc-expiration">Expiration</label>
                            <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                            <div class="invalid-feedback">
                                Expiration date required
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="cc-cvv">CVV</label>
                            <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                            <div class="invalid-feedback">
                                Security code required
                            </div>
                        </div>
                    </div>
                    <hr class="mb-4">
                    <button class="btn btn-warning btn-lg btn-block" type="submit">Place Order</button>
                </form>
            </div>
        </div>
        <div class="col-4 bg-light">
            <h4 class="text-center">Your Products</h4>
            <div class="container">
                <div class="container overflow-auto " style="max-height:500px;">
                    <?php
                    if ($products != null) {
                        foreach ($products as $data) {
                            $product_total = $data['quantity'] * $data['product_price'];
                            
                            $cart_total += $product_total;
                            ?>
                            <div class="card mb-3">
                                <div class="card-img-top text-center">
                                    <img src="../assets/images/<?php echo htmlspecialchars($data['product_image']); ?>"
                                        class="img-fluid" alt="<?php echo htmlspecialchars($data['product_name']); ?>"
                                        style="height: 10vh; object-fit: contain;" />
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title"><?php echo htmlspecialchars($data['product_name']); ?></h5>
                                </div>
                            </div>
                            <?php
                        }
                    } else {
                        echo "<p>No products available.</p>";
                    }
                    ?>
                </div>
                <div class="container">

                    <div class="row">
                        <div>
                            <h5 class="text-center  mt-3"><b>Summary</b></h5>
                        </div>
                        <hr>
                        <div class="row">
                            <div class=" text-center" style="padding-left:0;"> Items in cart: <strong>
                                    <?php echo count($products); ?> </strong></div>
                            <div class="text-center"> Total: &dollar; <?php echo $cart_total; ?> </div>
                        </div>
                        <div class="row">
                            <div class="text-center" style="padding-left:0;"> GST(13%) <strong> &dollar;
                                    <?php echo number_format($cart_total * 0.13, 2); ?> </strong></div>
                            <div> </div>
                        </div>
                        <div class="row text-center" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                            <div>TOTAL PRICE</div>
                            <div class="text-right"> &dollar; <strong>
                                    <?php echo number_format($cart_total * 1.13, 2); ?> </strong> </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>



    </div>
    </div>
</body>

</html>