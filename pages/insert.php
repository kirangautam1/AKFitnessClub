<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1">Admin Dashboard</span>
            <form class="d-flex" action="../pages/admin.php" method="POST">
                <button class="btn btn-primary" type="submit">Return</button>
            </form>
        </div>
    </nav>
    <div class="container mt-5">
        <h1 class="mb-4">Add Product</h1>
        <form action="../php/insert_product.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="product_name" class="form-label">Product Name</label>
                <input type="text" class="form-control" id="product_name" name="product_name" required>
            </div>

            <div class="mb-3">
                <label for="product_description" class="form-label">Product Description</label>
                <input type="text" class="form-control" id="product_description" name="product_description" required>
            </div>

            <div class="mb-3">
                <label for="long_description" class="form-label">Long Description</label>
                <textarea class="form-control" id="long_description" name="long_description" rows="5" required></textarea>
            </div>

            <div class="mb-3">
                <label for="product_category" class="form-label">Product Category</label>
                <input type="text" class="form-control" id="product_category" name="product_category" required>
            </div>

            <div class="mb-3">
                <label for="product_price" class="form-label">Product Price</label>
                <input type="number" step="0.01" class="form-control" id="product_price" name="product_price" required>
            </div>

            <div class="mb-3">
                <label for="in_stock" class="form-label">In Stock</label>
                <input type="number" class="form-control" id="in_stock" name="in_stock" required>
            </div>


            <div class="mb-3">
                <label for="product_image" class="form-label">Product Image</label>
                <input type="file" class="form-control" id="product_image" name="product_image" required>
            </div>

            <div class="mb-3">
                <label for="feature" class="form-label">Keywords</label>
                <input type="text" class="form-control"  name="feature" required>                
            </div>

            <button type="submit" class="btn btn-primary"><i class="fas fa-plus"></i> Add Product</button>
        </form>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
