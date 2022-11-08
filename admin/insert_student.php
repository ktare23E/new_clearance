<?php

require ('../dbconnect.php');

$student_id = $_POST['student_id'];
$student_first_name    = $_POST['student_first_name'];
$student_last_name        = $_POST['student_last_name'];
$student_year   = $_POST['student_year'];
$student_course   = $_POST['student_course'];
$student_username   = $_POST['student_username'];
$student_password        = $_POST['student_password'];

$data = array(
    'student_id' => $student_id,
    'student_first_name' => $student_first_name,
    'student_last_name' => $student_last_name,
    'student_year' => $student_year,
    'student_course' => $student_course,
    'student_username' => $student_username,
    'student_password' => $student_password
);

$insert = $db->insert('student', $data);

if ($db->affected_rows >= 0) {
    header("location: student.php");
} else {
    echo 'Error inserting user account.';
}
