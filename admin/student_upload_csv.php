<?php

    $conn = mysqli_connect('localhost', 'root', '', 'clearance');

        if(isset($_POST['import'])){
            // Check if the file is a CSV file
            $fileType = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
            if($fileType != 'csv') {
            echo "Error: Please upload a CSV file.";
            return;
            }
        
            $fileName = $_FILES['file']['tmp_name'];
        
            if($_FILES['file']['size'] > 0){
            $file = fopen($fileName, "r");
        
            while(($column = fgetcsv($file,1000,",")) !== FALSE){
                // Check if the student already exists
                $sqlCheck = "SELECT * FROM student WHERE student_id = '" . $column[0] . "'";
                $resultCheck = mysqli_query($conn, $sqlCheck);
                if(mysqli_num_rows($resultCheck) > 0) {
                // Student already exists
                echo '<a href="student.php">Go back</a><br>';
                echo "Error: Student with ID " . $column[0] . " already exists in the database.";
                return;
                }
        
                $sqlInsert = "INSERT into student (student_id, student_first_name, student_last_name,student_year, course_id, office_id, student_gender,student_email, student_username, student_password,student_status) VALUES ('".$column[0]."','".$column[1]."','".$column[2]."','".$column[3]."','".$column[4]."','".$column[5]."', '".$column[6]."', '".$column[7]."', '".$column[8]."', '".$column[9]."','".$column[10]."')";
                $result = mysqli_query($conn, $sqlInsert);
        
                if(!empty($result)){
                //echo "CSV File has been successfully Imported.";
                header("Location:student.php");
                }else{
                echo "Problem in Importing CSV File.";
                }
            }
        }
    }
    ?>

