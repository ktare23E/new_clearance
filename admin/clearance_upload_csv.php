<?php


$conn = mysqli_connect('localhost', 'root', '', 'clearance');

if (isset($_POST['import'])) {
    // Check if the file is a CSV file
    $fileType = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
    if ($fileType != 'csv') {
        echo '<a href="clearance.php">Back</a><br>';
        echo "Error: Please upload a CSV file.";
        return;
    }

    $fileName = $_FILES['file']['tmp_name'];

    if ($_FILES['file']['size'] > 0) {
        $file = fopen($fileName, "r");

        while (($column = fgetcsv($file, 1000, ",")) !== FALSE) {
            // Check if the student already exists
            $sqlCheck = "SELECT * FROM clearance WHERE clearance_id = '" . $column[0] . "'";
            $resultCheck = mysqli_query($conn, $sqlCheck);
            if (mysqli_num_rows($resultCheck) > 0) {
                // Clearance already exists, update existing data
                $sqlUpdate = "UPDATE clearance SET clearance_status = '".$column[0]."', student_id = '" . $column[1] . "', sy_sem_id = '" . $column[2] . "', sem_id = '" . $column[3] . "', clearance_type_id = '" . $column[4] . "', course_id = '" . $column[5] . "', office_id = '" . $column[6] . "', date_created = '" . $column[7] . "' WHERE clearance_id = '" . $column[0] . "'";
                $result = mysqli_query($conn, $sqlUpdate);

                if (!empty($result)) {
                    //echo "CSV File has been successfully Imported.";
                    header("Location:clearance.php");
                } else {
                    echo '<a href="clearance.php">Back</a><br>';
                    echo "Problem in updating existing data.";
                }
            } else {
                // Insert new clearance data
                $sqlInsert = "INSERT into clearance (clearance_status, student_id, sy_sem_id,sem_id,clearance_type_id, course_id,office_id, date_created) VALUES ('" . $column[0] . "','" . $column[1] . "','" . $column[2] . "','" . $column[3] . "','" . $column[4] . "','" . $column[5] . "', '" . $column[6] . "', '" . $column[7] . "')";
                $result = mysqli_query($conn, $sqlInsert);

                if (!empty($result)) {
                    //echo "CSV File has been successfully Imported.";
                    header("Location:clearance.php");
                } else {
                    echo '<a href="clearance.php">Back</a><br>';
                    echo "Problem in Importing CSV File.";
                }
            }
        }
    }
}



?>
