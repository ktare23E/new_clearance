<?php

require ('../dbconnect.php');


$office_id    = $_POST['office_id'];
$sy_sem_id  = $_POST['sy_sem_id'];
$admin_id  = $_POST['admin_id'];
$clearance_type_id = $_POST['clearance_type_id'];



$data = array(
    'office_id' => $office_id,
    'sy_sem_id' => $sy_sem_id,
    'admin_id' => $admin_id,
    'clearance_type_id' => $clearance_type_id,
);

$insert = $db->insert('signing_office', $data);

if ($db->affected_rows >= 0) {
    header("location: signing_office.php");
} else {
    echo 'Error inserting user account.';
}
