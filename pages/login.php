<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Login</title>
</head>
<body class="d-flex flex-column justify-content-center align-items-center ">
  <div class="h2 mt-5">Admin Login</div>
    <div class="col-md-5  mt-5 border p-3">
    <form action="../php/adminLogin.php" mthod="POST">
  <!-- Email input -->
  <div data-mdb-input-init class="form-outline mb-4 ">
    <input type="text" name="username" class="form-control" />
    <label class="form-label" for="usename">Username</label>
  </div>

  <!-- Password input -->
  <div data-mdb-input-init class="form-outline mb-4">
    <input type="password" name="password" id="password" class="form-control" />
    <label class="form-label" for="password">Password</label>
  </div>

  <!-- 2 column grid layout for inline styling -->
  
<div class="d-flex justify-content-center">
    <button  type="sumbit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">Sign in</button>

</div>
</form>
    </div>
    
</body>
</html>