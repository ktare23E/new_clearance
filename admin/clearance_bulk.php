<?php
    
    require ('../dbconnect.php');
    require ('phpmailer.php');
    $conn = mysqli_connect('localhost', 'root', '', 'clearance');

    
    $list_student_id = $_POST['list_student_id'];
    $clearance_progress_id = $_POST['clearance_progress_id'];
    $clearance_type_id = $_POST['clearance_type_id'];
    $clearance_status = $_POST['clearance_status'];
    $current_date = date('Y-m-d');


    foreach($list_student_id as $i => $student_id){

        $sql = "SELECT * FROM student WHERE student_id = '".$student_id."'";
        $result= mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);

        
        $office_id = $row['office_id'];
        $course_id = $row['course_id'];

        // $sql = "UPDATE student SET student_status = '$status' WHERE student_id = '$student_id'";


        $data = array(
            'student_id' => $student_id,
            'clearance_progress_id' => $clearance_progress_id,
            'course_id' => $course_id,
            'office_id' => $office_id,
            'clearance_type_id'=> $clearance_type_id,
            'date_created' => $current_date,
            'clearance_status' => $clearance_status,
        );
        
        $insert = $db->insert('clearance', $data);

        if ($db->affected_rows >= 0) {
            header("location: clearance.php");
        } else {
            echo 'Error inserting user account.';
        }
        
    }
?>