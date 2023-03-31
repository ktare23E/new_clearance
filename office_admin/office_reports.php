<?php

        session_start();
                if (!isset($_SESSION['isOffice'])) {
                header("location: ../index.php");
                exit();
        }

include_once '../dbconnect.php';
$office_id = $_SESSION['office_id'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        

</head>

<body
>
        <form action="retrieve_report.php" method="post">
                <div class="input-field">
                        <label for="">Select School Year And Sem</label>
                        <select name="clearance_progress_id" id="" required>
                                <option default>Select School Year And Sem</option>
                                <?php $clearances = $db->result('clearance_progress_view'); ?>
                                <?php foreach ($clearances as $clearance) : ?>
                                        <?php $clearance->clearance_progress_id; ?>
                                        <option value="<?= $clearance->clearance_progress_id; ?>"><?= $clearance->school_year_and_sem . ' ' . $clearance->sem_name; ?></option>
                                <?php endforeach; ?>
                        </select>
                        <!-- <input type="hidden" name="office_id" value="<?= $office_id; ?>"> -->
                </div>
                <input type="submit" name="submit" value="submit">
        </form>
</body>

</html>