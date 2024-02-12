<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
  </head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-6  m-auto border border-primary mt-3">
 
<form action="insert.php" method="post" enctype="multipart/form-data">
<div class="mb-3">
<p class="text-center fw-bold fs-3 text-warning"> Product Detail</p>
</div>

<div class="mb-3">
  <labelclass="form-label">Product Name</label>
  <input type="text" name="Name" class="form-control" placeholder="Enter product name">
</div>

<div class="mb-3">
  <labelclass="form-label">Product Price</label>
  <input type="text" name="Price" class="form-control" placeholder="Enter product price">
</div>

<div class="mb-3">
  <labelclass="form-label"> Add Product Image</label>
  <input type="file" name="Image" class="form-control">
</div>

<div class="mb-3"> 
  <label class="form-label">Select Page Category</label>
  <select class="form-select" name="Pages">
  <option value="Home">Home</option>
  <option value="Deodorant">Deodorant</option>
  <option value="Parfum">Parfum</option>
  <option value="accessoire">accessoire</option>
</select>
</div>

<button name="submit" class="bg-danger fs-4 fw-bold  my-3  form-control text-white"> Upload</button>


</form>
</div>
</div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-10  m-auto">

   
<table class="table border border-warning  table-hover  border my-5">
  <thead  class="bg-dark text-white fs-5 font-monospace  text-center">
    <th>Id</th>
    <th>Name</th>
    <th>Price</th>
    <th>Image</th>
    <th>Category</th>
    <th>Update</th>
    <th>Delete</th>
  </thead>
 

  <tbody class="text-center">

  <?php
include 'config.php';
$record = mysqli_query($conn, "SELECT * FROM product");
while($row = mysqli_fetch_array($record)){
  echo "
  <tr>
  <td>$row[id]</td>
  <td>$row[Name]</td>
  <td>$row[Price]</td>
  <td><img src='/stage/admin/product/images/$row[Image]' height= '150px' width= '200px'></td>
  <td>$row[Category]</td>
  <td><a href='update.php?ID=$row[id]' class='btn btn-warning'>Update</a></td>
  <td><a href='delete.php?ID=$row[id]' class = 'btn btn-danger'>Delete</td>
</tr>
  ";

}

?>
  </tbody>
</table>
</div>
  </div>
</div>

    
</body>
</html>