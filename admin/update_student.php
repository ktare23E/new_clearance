<?php
    $conn = mysqli_connect('localhost', 'root', '', 'clearance');

if(isset($_POST['update'])){
    
    $student_id = $_POST['students_id'];
    $id = $_POST['student_id'];
    $student_first_name    = $_POST['student_first_name'];
    $student_last_name        = $_POST['student_last_name'];
    $student_year   = $_POST['student_year'];
    $student_email = $_POST['student_email'];
    $student_gender = $_POST['student_gender'];
    $student_status = $_POST['student_status'];
    $course_id   = $_POST['course_id'];
    $student_username   = $_POST['student_username'];
    $student_password        = $_POST['student_password'];
    $department_id = $_POST['department_id'];

    $sql = "UPDATE student SET student_id = '$id',student_first_name = '$student_first_name',student_last_name = '$student_last_name',student_year='$student_year', course_id = $course_id, student_gender = '$student_gender', student_email = '$student_email',student_username='$student_username', student_password='$student_password', student_status = '$student_status', department_id = $department_id WHERE student_id = '$student_id'";

    $result= mysqli_query($conn,$sql);
    if($result){
        header("Location:student.php");
    }else{
        echo "Error Updating";
    }
}

?>