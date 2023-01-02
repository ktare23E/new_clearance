<?php

// require ('../dbconnect.php');


// $signing_office_id    = $_POST['signing_office_id'];
// $sy_sem_id  = $_POST['sy_sem_id'];
// $clearance_type_id  = $_POST['clearance_type_id'];
// $student_id = $_POST['student_id'];
// $requirement_details = $_POST['requirement_details'];


// $data = array(
//     'signing_office_id' => $signing_office_id,
//     'sy_sem_id' => $sy_sem_id,
//     'clearance_type_id' => $clearance_type_id,
//     'student_id' => $student_id,
//     'requirement_details' => $requirement_details
// );

// $insert = $db->insert('requirement', $data);

// if ($db->affected_rows >= 0) {
//     header("location: office_requirements.php");
// } else {
//     echo 'Error inserting user account.';
// }

$conn = mysqli_connect('localhost', 'root', '', 'clearance');
mysqli_select_db($conn, 'clearance');


if(isset($_POST['submit'])){
    $signing_office_id    = $_POST['signing_office_id'];
    $sy_sem_id  = $_POST['sy_sem_id'];
    $clearance_type_id  = $_POST['clearance_type_id'];
    $student_id = $_POST['student_id'];
    $requirement_details = $_POST['requirement_details'];

    //update clearance status
    $clearance_id = $_POST['clearance_id'];
    $clearance_status = $_POST['clearance_status'];

    $sql = "UPDATE clearance SET clearance_status = 0 WHERE clearance_id = '$clearance_id'";

    if(mysqli_query($conn, $sql)){
        header("location: office_requirements.php");
    } else {
        echo 'Error inserting user account.';
    }

    $sql = "INSERT INTO requirement (signing_office_id, sy_sem_id, clearance_type_id, student_id, requirement_details) VALUES ('$signing_office_id', '$sy_sem_id', '$clearance_type_id', '$student_id', '$requirement_details')";

    if(mysqli_query($conn, $sql)){
        header("location: office_requirements.php");
    } else {
        echo 'Error inserting user account.';
    }

}