<?php
    $conn = mysqli_connect('localhost', 'root', '', 'clearance');

if(isset($_POST['update'])){
    
    $signing_office_id = $_POST['signing_office_id'];
    $office_id = $_POST['office_id'];
    $sy_sem_id = $_POST['sy_sem_id'];
    $admin_id = $_POST['admin_id'];
    $clearance_type_id = $_POST['clearance_type_id'];
    $sem_id = $_POST['sem_id'];
    


    $sql = "UPDATE signing_office SET office_id = '$office_id',sy_sem_id = '$sy_sem_id',admin_id='$admin_id',clearance_type_id='$clearance_type_id',sem_id = '$sem_id' WHERE signing_office_id = $signing_office_id";

    $result= mysqli_query($conn,$sql);
    if($result){
        header("Location:signing_office.php");
    }else{
        echo "Error Updating";
    }
}

?>