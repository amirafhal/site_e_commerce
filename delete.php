<?php

$Id = $_GET['ID'];
include 'config.php';
mysqli_query($conn,"DELETE FROM product WHERE id = $Id");

header("location:index.php");

?>