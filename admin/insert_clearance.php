<?php

require ('../dbconnect.php');


$student_id    = $_POST['student_id'];
$sy_sem_id  = $_POST['sy_sem_id'];
$course_id  = $_POST['course_id'];
$office_id = $_POST['office_id'];
$clearance_type_id = $_POST['clearance_type_id'];
$date_created = $_POST['date_created'];
$clearance_status = $_POST['clearance_status'];
$sem_id = $_POST['sem_id'];
$data = array(
    'student_id' => $student_id,
    'sy_sem_id' => $sy_sem_id,
    'course_id' => $course_id,
    'office_id' => $office_id,
    'clearance_type_id'=> $clearance_type_id,
    'date_created' => $date_created,
    'clearance_status' => $clearance_status,
    'sem_id' => $sem_id
);

$insert = $db->insert('clearance', $data);

if ($db->affected_rows >= 0) {
    header("location: clearance.php");
} else {
    echo 'Error inserting user account.';
}
