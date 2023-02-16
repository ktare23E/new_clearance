<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
</head>
<body>
    <a href="office_requirements.php">Go Back to Office Requirements</a><br>
</body>
</html>
<?php

$conn = mysqli_connect('localhost', 'root', '', 'clearance');

if(isset($_POST['import'])){
    $fileName = $_FILES['file']['tmp_name'];

    if($_FILES['file']['size'] > 0){
        $file = fopen($fileName, "r");

        while(($column = fgetcsv($file,1000,",")) !== FALSE){

            try{
                $query2 = "SELECT * FROM clearance WHERE student_id = '".$column[4]."' AND sy_sem_id = " .$_POST['sy_sem_id2'] ;
                $clearance = $conn->query($query2) or die($conn->error);
                $row = $clearance->fetch_assoc();
                $total = $clearance->num_rows;

                if ($total == 0) {
                    throw new Exception("This student $column[4] doesn't have a clearance yet. Please contact the admin first to create the clearance for this student.</br>");
                }
                
                $sqlUpdate = "UPDATE clearance SET clearance_status = '0' WHERE clearance_id = ".$row['clearance_id'];
                $update = $conn->query($sqlUpdate);
                
                $sqlInsert = "INSERT INTO requirement (requirement_details, signing_office_id, sy_sem_id, sem_id, student_id,clearance_type_id) VALUES ('".$column[0]."','".$column[1]."','".$column[2]."','".$column[3]."','".$column[4]."','".$column[5]."')";
                $result = mysqli_query($conn, $sqlInsert);
            } catch(Exception $e) {
                echo $e->getMessage();
            }

            if(!empty($result)){
                header("Location:office_requirements.php");
            }
        }
    }
}
?>
