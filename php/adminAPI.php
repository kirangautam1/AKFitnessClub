<?php

if ($_SERVER['REQUEST_METHOD']== 'POST'){
    if (isset($_POST['insert']) ){        
        header('location: ../pages/insert.php');
        exit();
}
}
?>