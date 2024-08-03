<?php
require_once 'connection.php';
try{
    session_start();
    
    $querry = 'SELECT * from tbl_products' ;
    $data = $connect->query($querry);
    while($row = $data->fetch_assoc()){
        $products[] = $row;
    }
    $_SESSION['products'] = $products;


    



}catch(Exception $e){
echo $e;
}




?>