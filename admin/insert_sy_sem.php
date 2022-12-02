<?php

require ('../dbconnect.php');

$school_year_and_sem = $_POST['school_year_and_sem'];
$status  = $_POST['status'];

$data = array(
    'school_year_and_sem' => $school_year_and_sem,
    'status' => $status,
);

$insert = $db->insert('sy_sem', $data);

if ($db->affected_rows >= 0) {
    header("location: sy_sem.php");
} else {
    echo 'Error inserting user account.';
}
