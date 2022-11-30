<?php

require ('../dbconnect.php');


$office_id    = $_POST['office_id'];
$semester  = $_POST['semester'];
$school_year = $_POST['school_year'];
$admin_id  = $_POST['admin_id'];
$clearance_type_id = $_POST['clearance_type_id'];



$data = array(
    'office_id' => $office_id,
    'semester' => $semester,
    'admin_id' => $admin_id,
    'clearance_type_id' => $clearance_type_id,
    'school_year' => $school_year
);

$insert = $db->insert('signing_office', $data);

if ($db->affected_rows >= 0) {
    header("location: signing_office.php");
} else {
    echo 'Error inserting user account.';
}
