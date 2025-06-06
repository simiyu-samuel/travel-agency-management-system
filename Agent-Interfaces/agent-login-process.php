<?php
require("DBCONNECT.php");
if(!isset($_SESSION)) { 
    session_start(); }


if(isset($_POST['login'])){
    
    $email = $_POST['agent_email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `agents` WHERE `agent_email` ='$email' AND `agent_password` ='$password'";
    $result = mysqli_query($conn, $sql);


    if($row = mysqli_fetch_assoc($result)){
        $password = $row['admin_password'];
        $_SESSION['agent_email'] = $email;
        header("location:..\Agent-Interfaces\agentHome.php");
    }
    else{
        header("location:..\Agent-Interfaces\invalid-login.php");
        
    }
}



?>
