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
    
    $query2 = "SELECT * FROM clearance WHERE student_id = '".$student_id."' AND sy_sem_id = " .$sy_sem_id;
    $clearance = $conn->query($query2) or die($conn->error);
    $row = $clearance->fetch_assoc();
    $total = $clearance->num_rows;

    // echo $query2;
    // echo print_r($row);
    if($total < 1){
        header("location: office_requirements.php");
        die();
        echo "This student has no clearance for this semester.";
    }

    // Get the clearance_id and clearance_status values from the form
    $clearance_status = $_POST['clearance_status'];
    
    // Update the clearance_status field in the clearance table
    $updateQuery = "UPDATE clearance SET clearance_status = '".$clearance_status."' WHERE clearance_id = ".$row['clearance_id'];
    // mysqli_query($conn, $updateQuery);

    echo $updateQuery;
    
    // Insert a new requirement into the requirement table
    $insertQuery = "INSERT INTO requirement (signing_office_id, sy_sem_id, clearance_type_id, student_id, requirement_details)
                    VALUES ('$signing_office_id', '$sy_sem_id', '$clearance_type_id', '$student_id', '$requirement_details')";
    mysqli_query($conn, $insertQuery);
    
    if(mysqli_query($conn, $updateQuery)){
        header("location: office_requirements.php");
    } else {
        echo 'Error inserting user account.';
    }
    
}