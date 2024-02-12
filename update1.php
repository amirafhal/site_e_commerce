  <!-- PHP update code -->

  <?php
    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $product_name = $_POST['Name'];
        $product_price = $_POST['Price'];
        $product_Category = $_POST['Pages'];

        // Traitement de l'image
        $image_name = $_FILES['Image']['name'];

        include 'config.php';
        mysqli_query($conn, "UPDATE `product` SET `Name`='$product_name',`Price`='$product_price',`Image`='$image_name',`Category`='$product_Category' WHERE id = '$id'");

        header("location:index.php");
    }
    ?>
