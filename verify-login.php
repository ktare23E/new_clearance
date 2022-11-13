<?php

require ('dbconnect.php');

$username = $_POST['admin_username'];
$password = $_POST['admin_password'];

$exist = $db->is_exist('admin', "admin_username='$username' AND admin_password='$password'");

session_start();
if ($exist) {
    $_SESSION['isloggedin'] = 1;
    header("location: admin/index.php");
} else {
    header("location: index.php?a=error");
}
