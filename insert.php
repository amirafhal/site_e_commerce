<?php


if(isset($_POST['submit'])){
    include 'config.php';

    $product_name = $_POST['Name'];
    $product_price = $_POST['Price'];
    $product_Category = $_POST['Pages'];

    // Traitement de l'image
    $image_name = $_FILES['Image']['name'];
 

    mysqli_query($conn," INSERT INTO `product`(`Name`, `Price`, `Image`, `Category`) VALUES (' $product_name','$product_price','$image_name','$product_Category ')");
    header("location:index.php");
}

?>



