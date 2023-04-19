<?php
# create database connection
$connect = mysqli_connect("localhost","root","","clearance");

if(!empty($_POST["school_year_and_sem"])) {
  $query = "SELECT * FROM sy_sem WHERE school_year_and_sem ='" . $_POST["school_year_and_sem"] . "'";
    $result = mysqli_query($connect,$query);
    $count = mysqli_num_rows($result);

if(strtoupper(strtolower($count>0))) {
    echo "<span style='color:red'> Sorry this school year already exists .</span>";
    echo "<script>$('#submit').prop('disabled',true);</script>";
}else{
    echo "<span style='color:green'> School Year available for Registration .</span>";
    echo "<script>$('#submit').prop('disabled',false);</script>";
}
}
?>