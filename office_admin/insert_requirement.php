<?php

require ('../dbconnect.php');


$signing_office_id    = $_POST['signing_office_id'];
$sy_sem_id  = $_POST['sy_sem_id'];
$clearance_type_id  = $_POST['clearance_type_id'];
$student_id = $_POST['student_id'];
$requirement_details = $_POST['requirement_details'];


$data = array(
    'signing_office_id' => $signing_office_id,
    'sy_sem_id' => $sy_sem_id,
    'clearance_type_id' => $clearance_type_id,
    'student_id' => $student_id,
    'requirement_details' => $requirement_details
);

$insert = $db->insert('requirement', $data);

if ($db->affected_rows >= 0) {
    header("location: office_requirements.php");
} else {
    echo 'Error inserting user account.';
}
