<?php
    include_once 'header.php';
    // $users = $db->result('student');

    
    $conn = mysqli_connect('localhost', 'root', '', 'clearance');

    if($conn->connect_error){
        echo $conn->connect_error;
    }
    
    if(!isset($_GET['details'])){
        echo "<h1>There's an error while viewing details.</h1>";
    }else{
        $id = $_GET['details'];
        $sql = "SELECT * FROM view_clearance WHERE clearance_id = '$id'";
        $students = $conn->query($sql) or die($conn->error);
        $row = $students->fetch_assoc();
    } // dapat sa ubos ni
?>