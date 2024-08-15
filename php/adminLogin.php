<?php
if($_GET['username']== 'admin' && $_GET['password']=='admin'){
    session_start();
    $_SESSION['admin'] = 'active';
    echo $_SESSION['admin'];
    header('Location: ../pages/admin.php');
}else{
    header('Location: ../pages/login.php?invalidCredentials=1');

}



?>