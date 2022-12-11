<?php
    $conn = mysqli_connect('localhost', 'root', '', 'clearance');

if(isset($_POST['update'])){
    
    $clearance_id = $_POST['clearance_id'];
    $student_id = $_POST['student_id'];
    $sy_sem_id = $_POST['sy_sem_id'];
    $clearance_status = $_POST['clearance_status'];
    $course_id = $_POST['course_id'];
    $department_id = $_POST['department_id'];
    $clearance_type_id = $_POST['clearance_type_id'];
    $date_created = $_POST['date_created'];

    $sql = "UPDATE clearance SET student_id = '$student_id',sy_sem_id=$sy_sem_id,clearance_status='$clearance_status', course_id = $course_id, department_id = $department_id, clearance_type_id = $clearance_type_id, date_created = $date_created  WHERE clearance_id = $clearance_id";

    $result= mysqli_query($conn,$sql);
    if($result){
        header("Location:clearance.php");
    }else{
        echo "Error Updating";
    }
}

?>