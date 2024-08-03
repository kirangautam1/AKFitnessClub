<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $product_id = $_POST['product_id'];
  $new_quantity = $_POST['quantity'];

  // Update the session cart
  foreach ($_SESSION['cart_products'] as &$product) {
    if ($product['product_id'] == $product_id) {
      $product['quantity'] = $new_quantity;
      break;
    }
  }

  // Optionally update the cart in the database if needed

  // Redirect back to the cart page
  header('Location: ../pages/cart.php');
  exit();
}
