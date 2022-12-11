<?php

    $conn = mysqli_connect('localhost', 'root', '', 'clearance');

    if(isset($_POST['import'])){
        $fileName = $_FILES['file']['tmp_name'];

        if($_FILES['file']['size'] > 0){
            $file = fopen($fileName, "r");

            while(($column = fgetcsv($file,1000,",")) !== FALSE){
                $sqlInsert = "INSERT into requirement (requirement_details, signing_office_id, sy_sem_id) VALUES ('".$column[0]."','".$column[1]."','".$column[2]."')";
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

