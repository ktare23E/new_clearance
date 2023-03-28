<?php
    $conn = mysqli_connect('localhost', 'root', '', 'clearance');

if(isset($_POST['approve'])){

        
    
    
        $requirement_id = $_POST['requirement_id'];
        $signing_office_id = $_POST['signing_office_id'];
        $current_date = date('Y-m-d');
        $clearance_progress_id = $_POST['clearance_progress_id'];
        $student_id = $_POST['student_id'];
        $clearance_id = $_POST['clearance_id'];
    


        $sql = "UPDATE requirement SET is_complied = '1', date_cleared = '$current_date' WHERE requirement_id = $requirement_id AND signing_office_id = $signing_office_id";

        echo $sql;
        $result= mysqli_query($conn,$sql);
        if($result){
            header("Location:office_clearance.php");
        }else{
            echo "Error Updating";
        }

        $query = "SELECT * requirements WHERE clearance_progress_id = $clearance_progress_id AND student_id = $student_id AND is_complied = '0'";
        $result = mysqli_query($conn,$query);

        if(mysqli_num_rows($result) < 1 ){
            $update = "UPDATE clearance SET clearance_status = '1', date_cleared = '$current_date' WHERE clearance_id = $clearance_id";
        }
}


?>