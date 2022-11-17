<?php

require ('../dbconnect.php');


$office_account_username    = $_POST['office_account_username'];
$office_account_password      = $_POST['office_account_password'];
$office_account_status  = $_POST['office_account_status'];


$data = array(
    'office_account_username' => $office_account_username,
    'office_account_password' => $office_account_password,
    'office_account_status' => $office_account_status,
);

$insert = $db->insert('office_account', $data);

if ($db->affected_rows >= 0) {
    header("location: office_account.php");
} else {
    echo 'Error inserting user account.';
}
