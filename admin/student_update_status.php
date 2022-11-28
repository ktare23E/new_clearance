<?php
    $conn = mysqli_connect('localhost', 'root', '', 'clearance');

    
    $student_id = mysqli_real_escape_string($conn, $_POST['student_id']);
?>