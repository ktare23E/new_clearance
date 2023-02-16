<?php
    $conn = mysqli_connect('localhost', 'root', '', 'clearance');

if(isset($_POST['approve'])){

        
    
    
        $requirement_id = $_POST['requirement_id'];
        $signing_office_id = $_POST['signing_office_id'];
        $current_date = date('Y-m-d');

    


    $sql = "UPDATE requirement SET is_complied = '1', date_cleared = '$current_date' WHERE requirement_id = $requirement_id AND signing_office_id = $signing_office_id";

    echo $sql;
    $result= mysqli_query($conn,$sql);
    if($result){
        header("Location:office_clearance.php");
    }else{
        echo "Error Updating";
    }
}

?>