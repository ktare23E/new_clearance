<?php
    $conn = mysqli_connect('localhost', 'root', '', 'clearance');

if(isset($_POST['update'])){
    
    $sy_sem_id = $_POST['sy_sem_id'];
    $school_year = $_POST['school_year'];
    $semester = $_POST['semester'];
    $status = $_POST['status'];
    


    $sql = "UPDATE sy_sem SET school_year = '$school_year', semester = '$semester',status='$status' WHERE sy_sem_id = $sy_sem_id";

    $result= mysqli_query($conn,$sql);
    if($result){
        header("Location:sy_sem.php");
    }else{
        echo "Error Updating";
    }
}

?>