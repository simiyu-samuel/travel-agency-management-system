<?php
require("DBCONNECT.php");
session_start();

/*$email = $_POST['admin_email'];
$password = $_POST['password'];


$sql = "select *from admin where admin_email = '$email' and admin_password = '$password'";  
$result = mysqli_query($conn, $sql);  
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
$count = mysqli_num_rows($result);  
  
if($count == 1){  
    echo "<h1><center> Login successful </center></h1>";  
}  
else{  
    echo "<h1> Login failed. Invalid username or password.</h1>";  
} */



if(isset($_POST['login'])){
    $email = $_POST['admin_email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `admins` WHERE `admin_email` ='$email' AND `admin_password` ='$password'";
    $result = mysqli_query($conn, $sql);


    if($row = mysqli_fetch_assoc($result)){
        $password = $row['admin_password'];
        $_SESSION['admin_email'] = $email;
        header("location:..\Admin-Interface\Admin_test.php");
    }
    else{
        header("location:..\Admin-Interface\admin-login.php?&&&incorrect details");
    }
}



?>
