<?php
session_start();
// require ('dbconnect.php');

$conn = mysqli_connect('localhost', 'root', '', 'clearance');


$student_username = $_POST['student_username'];
$student_password = $_POST['student_password'];


// $student = $db->is_exist('student',"student_username = '$student_username' AND student_password = '$student_password'");

$sql = "SELECT * FROM student WHERE student_username = '$student_username' AND student_password = '$student_password'";
$result = $conn->query($sql);

if($result->num_rows > 0){
    $row = $result->fetch_assoc();
    $_SESSION['student_username'] = $student_username;
    $_SESSION['student_first_name'] = $row['student_first_name'];
    $_SESSION['student_last_name'] = $row['student_last_name'];
    $_SESSION['student_year'] = $row['student_year'];
    $_SESSION['course_name'] = $row['course_name'];
    $_SESSION['department_name'] = $row['department_name'];
    $_SESSION['student_email'] = $row['student_email'];
    $_SESSION['student_gender'] = $row['student_gender'];
    $_SESSION['student_status'] = $row['student_status'];
    $_SESSION['student_profile'] = $row['student_profile'];
    
    $_SESSION['isStudent'] = 1;
    header("location: student_user/student_user_index.php");
}
else {
    header("location: student_login.php?a=error");
}
