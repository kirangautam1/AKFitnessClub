<?php
require_once 'connection.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['action'] === 'remove') {
        try{            
            $product_id= $_POST['id'];   
            echo $product_id;         
            $qry = "DELETE FROM tbl_cart WHERE product_id = ?" ;
            $statement = $connect->prepare($qry);
            $statement->bind_param('i',$product_id);
            $statement->execute();
            header("Location: ../php/readycart.php");


        }catch (Exception $e){
            echo $e->getMessage();

        }

    } elseif ($_POST['action'] === 'order') {
        
    }
}
?>