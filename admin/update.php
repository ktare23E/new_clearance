<?php
    $conn = mysqli_connect('localhost', 'root', '', 'clearance');

if(isset($_POST['update'])){
    
    $student_id = $_POST['students_id'];
    $id = $_POST['student_id'];
    $student_first_name    = $_POST['student_first_name'];
    $student_last_name        = $_POST['student_last_name'];
    $student_year   = $_POST['student_year'];
    $student_course   = $_POST['student_course'];
    $student_username   = $_POST['student_username'];
    $student_password        = $_POST['student_password'];

    $sql = "UPDATE student SET student_id = '$id',student_first_name = '$student_first_name',student_last_name = '$student_last_name',student_year='$student_year',student_course='$student_course',student_username='$student_username', student_password='$student_password' WHERE student_id = '$student_id'";

    $result= mysqli_query($conn,$sql);
    if($result){
        header("Location:student.php");
    }else{
        echo "Error Updating";
    }
}

?>