<?php
require_once 'connection.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
        try{
            // echo $_FILE['product_image']['name'];
            // echo $_POST['product_name'];
            $name = $_POST['product_name'];
            $description = $_POST['product_description'];
            $long_desc = $_POST['product_description'];
            $product_category = $_POST['product_category'];
            $price = $_POST['product_price'];
            $stock = $_POST['in_stock'];
            $added = date('y-m-d');
            $image = $_FILES['product_image']['name'];
            $feature = $_POST['feature'];
            $qry = "INSERT INTO tbl_products (product_name, product_description, long_description,product_category,product_price,in_stock,product_added,product_image,feature)  values (?,?,?,?,?,?,?,?,?)" ;
            $statement = $connect->prepare($qry);
            $statement->bind_param('ssssdssss',$name,$description, $long_desc,$product_category,$price,$stock,$added,$image,$feature);
            $statement->execute();
            header("Location: ../pages/admin.php");


        }catch (Exception $e){
            echo $e->getMessage();

        }

    } elseif ($_POST['action'] === 'order') {
        
    }

?>