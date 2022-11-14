<?php

    $conn = mysqli_connect('localhost', 'root', '', 'clearance');

    if(isset($_POST['import'])){
        $fileName = $_FILES['file']['tmp_name'];

        if($_FILES['file']['size'] > 0){
            $file = fopen($fileName, "r");

            while(($column = fgetcsv($file,1000,",")) !== FALSE){
                $sqlInsert = "INSERT into student (student_id, student_first_name, student_last_name,student_year, student_course, student_username, student_password) VALUES ('".$column[0]."','".$column[1]."','".$column[2]."','".$column[3]."','".$column[4]."','".$column[5]."', '".$column[6]."')";
                $result = mysqli_query($conn, $sqlInsert);

                if(!empty($result)){
                    // echo "CSV File has been successfully Imported.";
                    header("Location:student.php");
                }else{
                    echo "Problem in Importing CSV File.";
                }
            }
        }
    }
?>

