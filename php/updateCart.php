<?php
require_once('connection.php');
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize input
    $product_id = intval($_POST['product_id']);
    $new_quantity = intval($_POST['quantity']);

    // Update the session cart
    foreach ($_SESSION['cart_products'] as &$product) {
        if ($product['product_id'] == $product_id) {
            $product['quantity'] = $new_quantity;
            break;
        }
    }

    // Update the cart in the database
    $qry = "UPDATE tbl_cart SET quantity = ? WHERE product_id = ?";
    $statement = $connect->prepare($qry);
    $statement->bind_param('ii', $new_quantity, $product_id);
    if($statement->execute()){
      header('Location:../pages/cart.php');
    }

   
    $statement->close();
    
    // Close the database connection if necessary
    $connect->close();

    exit();
}
?>
