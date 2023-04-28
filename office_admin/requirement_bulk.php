<?php
    

    require ('phpmailer.php');
    include_once 'office_header.php';

    $conn = mysqli_connect('localhost', 'root', '', 'clearance');
    mysqli_select_db($conn, 'clearance');
    

    $is_department = $_SESSION['is_department'];
    $office_id = $_SESSION['office_id'];

    $list_student_id = $_POST['list_student_id'];
    $clearance_progress_id = $_POST['clearance_progress_id'];
    $clearance_status = $_POST['clearance_status'];

    $current_date = date('Y-m-d');
    $requirement_details = $_POST['requirement_details'];

    $emails = array();
    

    foreach($list_student_id as $i => $student_id){

        $query2 = "SELECT * FROM clearance WHERE student_id = '".$student_id."' AND clearance_progress_id = " .$clearance_progress_id;
        $clearance = $conn->query($query2) or die($conn->error);
        $row = $clearance->fetch_assoc();
        $total = $clearance->num_rows;
    
        $clearance_type_id = $row['clearance_type_id'];
        $clearance_id = $row['clearance_id'];

        $sql = "SELECT * FROM signing_office WHERE office_id = '$office_id' AND clearance_progress_id = '$clearance_progress_id' AND clearance_type_id = '$clearance_type_id'";
        $singing_office = $conn->query($sql) or die($conn->error);
    
        if($singing_office->num_rows < 1){
            
            echo "<a href='office_requirements.php'>Back</a><br>";
            echo "You are not signing office for these semester and school year and clearance type that you selected.";
            die();
        }
    
        $row2 = $singing_office->fetch_assoc();
        $signing_office_id = $row2['signing_office_id'];

        // Update the clearance_status field in the clearance table
        $updateQuery = "UPDATE clearance SET clearance_status = '".$clearance_status."' WHERE clearance_id = ".$clearance_id;
        mysqli_query($conn, $updateQuery);


        $data = array(
            'student_id' => $student_id,
            'clearance_progress_id' => $clearance_progress_id,
            'clearance_type_id'=> $clearance_type_id,
            'requirement_details' => $requirement_details,
            'signing_office_id' => $signing_office_id,
        );
        
        
        $insert = $db->insert('requirement', $data);

        $sql = "SELECT * FROM requirement_view WHERE student_id = '$student_id' AND clearance_progress_id = '$clearance_progress_id' AND clearance_type_id = '$clearance_type_id'";

        $result = mysqli_query($conn,$sql);
        $row3 = mysqli_fetch_assoc($result);

        $office_name = $row3['office_name'];
        $student_email = $row3['student_email'];
        $school_year_and_sem = $row3['school_year_and_sem'];
        $sem_name = $row3['sem_name'];

        array_push($emails, $student_email);
        


        
    }
    
    // echo $emails;
    // die();
    


    sendEmail($emails,"Online Clearance System","Your need to submit a $requirement_details to $office_name.");
?>