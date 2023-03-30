<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>              
                            <form action="retrieve_report.php" method="post">
                            <select name="clearance_progress_id" id="">
                                            <option default="Select School Year and Sem">Select School Year and Sem</option>
                                            <?php $clearances = $db->result('clearance_progress_view');?>
                                            <?php foreach($clearances as $clearance):?>
                                            <?php if($clearance->clearance_progress_id == $clearance_progress_id):?>  
                                            <option value="<?= $clearance->clearance_progress_id; ?>"><?= $office_id->office_name; ?></option>
                                            <?php else:?>
                                                <option value="<?= $office->office_id; ?>"><?= $office->office_name; ?></option>
                                            <?php endif;?>
                                            <?php endforeach; ?>
                                    </select>
                                <input type="submit" name="submit" value="submit">
                            </form>
</body>
</html>