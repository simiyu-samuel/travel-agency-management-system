<?php
require("DBCONNECT.php");
session_start();

/*if ( !isset($_POST['client_email'], $_POST['password']) ) {
	exit('Please fill both the username and password fields!');
}*/

if (isset($_POST['register-button'])){

$client_email = $_POST['client_email'];
$password = $_POST['password'];

$sql = "SELECT * FROM `clients` WHERE `client_email` = '$client_email'AND `password` = '$password' ";
$result = mysqli_query($conn, $sql);

/*if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $_SESSION['client_email']=$row['client_email'];
        $_SESSION['password']=$row['password'];


        if ($row['password'] == 'password') {
            
            header('Location:../Client-Interfaces/client-dashboard-home.php');

            //echo "LOGIN SUCCESSFUL";
        }
    }
}else{
    echo "incorrect Credentials!";
}*/

if($row = mysqli_fetch_assoc($result)){
    $password = $row['password'];
    $_SESSION['client_email'] = $client_email;
    header('Location:../Index/index2.php');
}else{
    header('Location:../Client-Interfaces/login-failure-popup.php');
}

}

?>
