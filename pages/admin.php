<?php
session_start();
if ($_SESSION['admin'] != 'active') {

    header('location: ../pages/login.php?no_session');
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">


    <title>Admin Page</title>
</head>

<body>


    <!-- Navigation Bar -->
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1">Admin Dashboard</span>
            <form class="d-flex" action="../php/logout.php" method="POST">
                <button class="btn btn-outline-light" type="submit">Logout</button>
            </form>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <form action="../php/adminAPI.php" method="POST">
                    <button class="btn btn-primary btn-lg" type="submit" name="insert">
                        <i class="fa-solid fa-plus"></i> Add Product</button>
                    <button class="btn btn-primary btn-lg ms-2" type="submit" name="view">
                    <i class="fa-solid fa-eye"></i> View All Products</button>
                </form>
            </div>
        </div>
        <div class="row mt-4 d-flex justify-content-center flex-wrap bg-primary">
            <div class="col-md-5 bg-warning m-1 d-flex flex-column justify-content-center align-items-center" style="height:200px">
                <div class="h2"> 6 </div>
                <div class="h5">Total Products</div>
            </div>
            <div class="col-md-5 bg-warning m-1 d-flex flex-column justify-content-center align-items-center" style="height:200px">
                <div class="h2"> 2 </div>
                <div class="h5">Total Categories</div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>



</body>

</html>