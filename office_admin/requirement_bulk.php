<?php
    

    require ('phpmailer.php');
    require ('../dbconnect.php');

    session_start();
        if (!isset($_SESSION['isOffice'])) {
        header("location: ../index.php");
        exit();
    }


    $conn = mysqli_connect('localhost', 'root', '', 'clearance');
    mysqli_select_db($conn, 'clearance');
    

    $is_department = $_SESSION['is_department'];
    $office_id = $_SESSION['office_id'];

    $list_clearance_id = $_POST['list_clearance_id'];
    $clearance_progress_id = $_POST['clearance_progress_id'];
    $clearance_status = $_POST['clearance_status'];

    $current_date = date('Y-m-d');
    $requirement_details = $_POST['requirement_details'];

    $emails = array();
    

    foreach($list_clearance_id as $i => $clearance_id){

        $query2 = "SELECT * FROM clearance WHERE clearance_id = '".$clearance_id."';";
        $resultclearance = mysqli_query($conn, $query2);
        $row = mysqli_fetch_assoc($resultclearance);
    
        $clearance_type_id = $row['clearance_type_id'];
        $student_id = $row['student_id'];

        if($clearance_progress_id == $row['clearance_progress_id']){
            $sql = "SELECT * FROM signing_office WHERE office_id = '$office_id' AND clearance_progress_id = '$clearance_progress_id' AND clearance_type_id = '$clearance_type_id'";
            $signing_officeresult = mysqli_query($conn, $sql);
            $rowsigningoffice = mysqli_fetch_assoc($signing_officeresult);
    
            if($rowsigningoffice){
                $signing_office_id = $rowsigningoffice['signing_office_id'];
        
                // Update the clearance_status field in the clearance table
                $updateQuery = "UPDATE clearance SET clearance_status = '".$clearance_status."' WHERE clearance_id = '".$clearance_id."';";
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
            }else{
                echo "error";
                die();
            }
        }

        
    
    }
    
    // echo $emails;
    // die();
    


    sendEmail($emails,"Online Clearance System","Your need to submit a $requirement_details to $office_name.");
?>