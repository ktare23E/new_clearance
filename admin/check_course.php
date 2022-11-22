<?php
# create database connection
$connect = mysqli_connect("localhost","root","","clearance");

if(!empty($_POST["course_name"])) {
  $query = "SELECT * FROM course WHERE course_name ='" . $_POST["course_name"] . "'";
    $result = mysqli_query($connect,$query);
    $count = mysqli_num_rows($result);

if(strtoupper(strtolower($count>0))) {
    echo "<span style='color:red'> Sorry Course Name already exists .</span>";
    echo "<script>$('#submit').prop('disabled',true);</script>";
}else{
    echo "<span style='color:green'> Course Name available for Registration .</span>";
    echo "<script>$('#submit').prop('disabled',false);</script>";
}
}
?>