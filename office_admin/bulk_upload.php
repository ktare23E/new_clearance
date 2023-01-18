<?php

    $conn = mysqli_connect('localhost', 'root', '', 'clearance');

    if(isset($_POST['import'])){
        $fileName = $_FILES['file']['tmp_name'];

        if($_FILES['file']['size'] > 0){
            $file = fopen($fileName, "r");
            
            // $clearance_status = $_POST['clearance_status'];
            // $query2 = "SELECT * FROM clearance WHERE student_id = '".$student_id."' AND sy_sem_id = " .$sy_sem_id;
            // $clearance = $conn->query($query2) or die($conn->error);
            // $row = $clearance->fetch_assoc();
            // $total = $clearance->num_rows;

            while(($column = fgetcsv($file,1000,",")) !== FALSE){
                // $sqlUpdate = "UPDATE clearance SET clearance_status = '".$clearance_status."' WHERE clearance_id = ".$row['clearance_id'];
                $sqlInsert = "INSERT into requirement (requirement_details, signing_office_id, sy_sem_id,student_id,clearance_type_id) VALUES ('".$column[0]."','".$column[1]."','".$column[2]."','".$column[3]."','".$column[4]."')";
                $result = mysqli_query($conn, $sqlInsert);
            
            

            if(!empty($result)){
                // echo "CSV File has been successfully Imported.";
                header("Location:office_requirements.php");
            }else{
                echo "Problem in Importing CSV File.";
            }
        }
    }
}
?>