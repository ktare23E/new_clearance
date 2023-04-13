<?php


$conn = mysqli_connect('localhost', 'root', '', 'clearance');

session_start();
$admin_id = $_SESSION['admin_id'];
$clearance_progress_id = $_POST['clearance_progress_id'];

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
            $sqlCheck = "SELECT * FROM clearance WHERE student_id = '" . $column[1] . "' AND clearance_progress_id = $clearance_progress_id ";
            $result= mysqli_query($conn,$sqlCheck);
            $row = mysqli_fetch_assoc($result);

            $clearance_id = $row['clearance_id'];
            if (mysqli_num_rows($result) > 0) {
                // Clearance already exists, update existing data
                $sqlUpdate = "UPDATE clearance SET clearance_status = '".$column[0]."', student_id = '" . $column[1] . "', clearance_progress_id = '" . $column[2] . "', clearance_type_id = '" . $column[3] . "', course_id = '" . $column[4] . "', office_id = '" . $column[5] . "', date_created = '" . $column[6] . "' WHERE clearance_id = '".$clearance_id."'";
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
                $sqlInsert = "INSERT into clearance (clearance_status, student_id, clearance_progress_id,clearance_type_id, course_id,office_id, date_created) VALUES ('" . $column[0] . "','" . $column[1] . "','" . $column[2] . "','" . $column[3] . "','" . $column[4] . "','" . $column[5] . "', '" . $column[6] . "')";
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
