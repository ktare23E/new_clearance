<?php
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"clearance");

    if(isset($_POST['updateData'])){
        $id = $_POST['update_student_id'];
        $fname = $_POST['update_student_first_name'];
        $lname = $_POST['update_student_last_name'];
        $year = $_POST['update_student_year'];
        $course = $_POST['update_student_course'];
        $username = $_POST['update_student_username'];
        $password = $_POST['update_student_password'];

        $query = "UPDATE student SET student_id = '$id',student_first_name = 'fname',student_last_name = '$lname',student_year = '$year',student_course = '$course',student_username = '$username',student_password = '$password' WHERE student_id = '$id'";
        
        $query_run = mysqli_query($connection,$query);

        if($query_run)
        {
            echo '<script> alert("Data Saved"); </script>';
            header('Location: student.php');
        }
        else
        {
            echo '<script> alert("Data Not Saved"); </script>';
        }
    }
    
    ?>