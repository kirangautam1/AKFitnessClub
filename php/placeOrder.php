<?php
require_once 'connection.php';

try {
    $qry = "DELETE FROM tbl_cart";
    $statement = $connect->prepare($qry);
    
    if ($statement->execute()) {
        // Redirect to the home page if the deletion is successful
        header("Location: ../pages/home.php");
        exit(); // Ensure no further code is executed
    } else {
        echo "Error: Could not delete records from tbl_cart.";
    }

} catch (Exception $e) {
    // Display the error message and consider logging it
    echo "An error occurred: " . $e->getMessage();
}
?>
