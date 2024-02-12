<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body class="bg-secondary">
    


<div class="container">
    <div class="row">
        <div class="col-md-6 shadow  m-auto bg-white font-monospace p-3 border border-primary mt-3">
 
<form action="login1.php" method="post">
<div class="mb-3">
<p class="text-center fw-bold fs-3 text-warning"> Login</p>
</div>

<div class="mb-3">
  <label class="form-label">Name</label>
  <input type="text" name="username" class="form-control" placeholder="Enter userName">
</div>

<div class="mb-3">
  <label class="form-label">Password</label>
  <input type="password" name="password" class="form-control" placeholder="Enter userPassword">
</div>

<button class="bg-danger fs-4 fw-bold  my-3  form-control text-white"> Login</button>


</form>
</div>
</div>
</div>

</body>
</html>