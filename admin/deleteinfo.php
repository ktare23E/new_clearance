<?php

    $connection = mysqli_connect("localhost", "root","");
    $db = mysqli_select_db($connection, "clearance");

    
        $id = $_POST['student_id'];

        $query = "DELETE FROM `student` WHERE `student_id` = '$id'";
        $query_run = mysqli_query($connection, $query);

        if($query_run){
            echo '<script> alert("Data Deleted"); </script>';
            header("Location: student.php");
        }
        else{
            echo '<script> alert("Data Not Deleted"); </script>';
        }
    
?>