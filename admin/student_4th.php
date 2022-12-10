<?php

    $conn = mysqli_connect('localhost', 'root', '', 'clearance');

    
    $list_student_id = $_POST['list_student_id'];
    $student_year = $_POST['student_year'];

    foreach($list_student_id as $i => $student_id){

        $sql = "UPDATE student SET student_year = '$student_year' WHERE student_id = '$student_id'";

        $result= mysqli_query($conn,$sql);
        if($result){
            echo "success";
        }else{
            echo "Error";
        }
    }
?>