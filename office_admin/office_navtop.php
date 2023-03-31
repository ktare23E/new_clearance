<?php
    include_once 'dbconfig.php';
    include_once 'office_header.php';
?>

<div class="office-top-container">
    <div class="nav-logo-container">
        <div class="logo-img">
            <img src="../images/nmsc-logo.png" alt="">
            <h2>NMSC <span class="danger">CLEARANCE</span></h2>
        </div>
    </div>
    <div class="nav-middle-container">
        <a href="./office_admin_index.php">
            <span class="material-symbols-sharp">home</span>
            <h3>Home</h3>
        </a>
        <a href="./office_students.php">
            <span class="material-symbols-sharp">account_circle</span>
            <h3>Students</h3>
        </a>
        <a href="./office_clearance.php">
            <span class="material-symbols-sharp">inventory</span>
            <h3>Clearance</h3>
        </a>
        <a href="./office_requirements.php">
            <span class="material-symbols-sharp">receipt_long</span>
            <h3>Requirements</h3>
        </a>
        <a href="office_reports.php">
            <span class="material-symbols-sharp">monitoring</span>
            <h3>Reports</h3>
        </a>
        <a href="../logout.php">
            <span class="material-symbols-sharp">receipt_long</span>
            <h3>Logout</h3>
        </a>
    </div>
    <div class="nav-right-container">
        <div class="theme-toggler">
            <span class="material-symbols-sharp active">light_mode</span>
            <span class="material-symbols-sharp">dark_mode</span>
        </div>
        <div class="profile">
            <div class="info">
                <p>Hello, <b><?php if ($_SESSION['admin_username']){
                    echo $_SESSION['admin_name'];
                } ?></b></p>
                <small class="text-muted">Office Admin of <?= $_SESSION['office_name'];?></small>
            </div>
        </div>
    </div>
</div>




