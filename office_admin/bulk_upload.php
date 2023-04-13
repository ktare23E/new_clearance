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

session_start();

if(isset($_POST['import'])){
    $fileName = $_FILES['file']['tmp_name'];

    if($_FILES['file']['size'] > 0){
        $file = fopen($fileName, "r");

        while(($column = fgetcsv($file,1000,",")) !== FALSE){

            try{

                $office_id = $_SESSION['office_id'];
                $clearance_progress_id = $_POST['clearance_progress_id'];

                $query2 = "SELECT * FROM view_clearance WHERE student_id = '".$column[1]."' AND clearance_progress_id = $clearance_progress_id";
                $clearance = $conn->query($query2) or die($conn->error);
                $row = $clearance->fetch_assoc();
                $total = $clearance->num_rows;

                $school_year_and_sem = $row['school_year_and_sem'];
                $sem_name = $row['sem_name'];
                $clearance_id = $row['clearance_id'];
                
                // echo $query2;
                // die();

                if ($total == 0) {
                    throw new Exception("This student $column[1] doesn't have a clearance yet for $school_year_and_sem $sem_name.</br>");
                }

                $sql = "SELECT * FROM signing_office WHERE office_id = '$office_id' AND clearance_progress_id = '$clearance_progress_id'";
                $singing_office = $conn->query($sql) or die($conn->error);
            
                if($singing_office->num_rows < 1){
                    
                    echo "<a href='office_requirements.php'>Back</a><br>";
                    echo "You are not signing office for these semester and school year that you selected.";
                    die();
                }
            
                $row2 = $singing_office->fetch_assoc();
                $signing_office_id = $row2['signing_office_id'];

                $sql3 = "SELECT * FROM clearance WHERE student_id = '".$column[1]."' AND clearance_progress_id = " .$clearance_progress_id . " AND clearance_type_id = '".$column[2]."'";
                $clearance_exist = $conn->query($sql3) or die($conn->error);
            
                if($clearance_exist->num_rows < 1){
                    echo "<a href='office_requirements.php'>Back</a><br>";
                    echo "This student '".$column[1]."' has no clearance for these school year and semester and clearance type that you've been selected.";
                    // die();
                }
            
                
                $sqlUpdate = "UPDATE clearance SET clearance_status = '0' WHERE clearance_id = $clearance_id AND clearance_progress_id = $clearance_progress_id AND clearance_type_id = '".$column[2]."'";

            

                $update = $conn->query($sqlUpdate);

                $sqlView = "SELECT * FROM signing_office WHERE office_id = $office_id";
                $signing_office = $conn->query($sqlView) or die($conn->error);
                $row3 = $signing_office->fetch_assoc();

                $signing_office_id = $row3['signing_office_id'];
                
                $sqlInsert = "INSERT INTO requirement (requirement_details, student_id,clearance_type_id,signing_office_id,clearance_progress_id) VALUES ('".$column[0]."','".$column[1]."','".$column[2]."','".$signing_office_id."','".$clearance_progress_id."')";
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
