<?php

$conn = mysqli_connect('localhost','root','','Stage');
$name = $_POST['username'];
$pass = $_POST['password'];

$result = mysqli_query($conn," SELECT * FROM `admin` WHERE username = '$name' AND userpassword = '$pass'");

session_start();

if(mysqli_num_rows($result)){

       $_SESSION['admin'] = $name;

    echo "
       <script>
          alert('Login successfully');
          window.location.href='../mystore.php';
       </script>
    ";
}

else{

    echo "
    <script>
       alert('Invalid username/password');
       window.location.href='login.php';
    </script>
 ";

}



?>