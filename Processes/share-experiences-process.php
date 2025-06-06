<?php
    require('DBCONNECT.php');

        $image = $_POST['image'];
        $date = $_POST['date'];
        $location = $_POST['location'];
        $comment = $_POST['comment'];
        

        if(empty($date)||empty($location)||empty($comment)){
            echo "Kindly input details!";
        }else{
            $sql = "INSERT INTO experiences (image, date, location, comment) VALUES ('$image','$date','$location','$comment')";

        if(mysqli_query($conn, $sql)){
             header("location: ../Client-Interfaces/experiences-popup.php");
           
        }else{
            header("location: ../Client-Interfaces/experiences-failure-popup.php");
        }

        }


?>
