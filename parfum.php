<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home-Page</title>
    <?php
       include 'header.php';
    ?>
</head>
<body>

<div class="container-fluid">
<div class="col-md-12">
 <div class="row">

    
<h1 class="text-warning font-monospace text-center my-3">Parfums</h1>
<?php

include 'config.php';
$record = mysqli_query($conn, "SELECT * FROM product");
while ($row = mysqli_fetch_array($record)){
    $check = $row['Category'];
    if($check === 'Parfum '){

echo "
<div class='col-md-6 col-lg-4 m-auto mb-3 '>
<form action = 'Insertcart.php' method = 'post'>
<div class='card m-auto' style='width: 18rem;'>
  <img src='/stage/admin/product/images/$row[Image]' class='card-img-top'>
  <div class='card-body text-center'>
    <h5 class='card-title text-danger fs-4 fw-bold'>$row[Name] </h5>
    <p class='card-text text-danger fs-4 fw-bold'>$row[Price] DT</p>
    <input type = 'hidden' name = 'Pname' value = '$row[Name]'>
    <input type = 'hidden' name = 'Pprice' value = '$row[Price]'>
    <input type = 'number' name = 'Pquantite' value = ' min='1' max = '20'' placeholder = 'Quantity'>
   <br><br>
    <input type = 'submit' name = 'addCart' class = 'btn btn-warning text-white w-100' value = 'Add to Cart' >
</div>
</div>
</form>
</div>

";
}
}

?>
</div>    
 </div>
</div>

<?php
include 'footer.php';

?>
</body>
</html> 