<?php

require ('../dbconnect.php');

$school_year = $_POST['school_year'];
$semester = $_POST['semester'];
$status  = $_POST['status'];

$data = array(
    'school_year' => $school_year,
    'semester' => $semester,
    'status' => $status,
);

$insert = $db->insert('sy_sem', $data);

if ($db->affected_rows >= 0) {
    header("location: sy_sem.php");
} else {
    echo 'Error inserting user account.';
}
