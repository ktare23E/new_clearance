<?php

require ('../dbconnect.php');

$student_id = $_POST['student_id'];
$student_first_name    = $_POST['student_first_name'];
$student_last_name        = $_POST['student_last_name'];
$student_year   = $_POST['student_year'];
$student_email = $_POST['student_email'];
$student_gender = $_POST['student_gender'];
$student_status = $_POST['student_status'];
$course_id  = $_POST['course_id'];
$department_id  = $_POST['department_id'];
$student_username   = $_POST['student_username'];
$student_password        = $_POST['student_password'];

$data = array(
    'student_id' => $student_id,
    'student_first_name' => $student_first_name,
    'student_last_name' => $student_last_name,
    'student_year' => $student_year,
    'student_email' => $student_email,
    'student_gender' => $student_gender,
    'student_status' => $student_status,
    'course_id' => $course_id,
    'department_id' => $department_id,
    'student_username' => $student_username,
    'student_password' => $student_password
);

$insert = $db->insert('student', $data);

if ($db->affected_rows >= 0) {
    header("location: student.php");
} else {
    echo 'Error inserting user account.';
}
