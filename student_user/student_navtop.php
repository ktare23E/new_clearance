<?php
    include_once 'dbconfig.php';
    require_once 'student_header.php';

    
?>

<div class="office-top-container">
    <div class="nav-logo-container">
        <div class="logo-img">
            <img src="../images/nmsc-logo.png" alt="">
            <h2>NMSC <span class="danger">CLEARANCE</span></h2>
        </div>
    </div>
    
    <div class="nav-right-container">
        <div class="nav-middle-container">
            <a href="./student_user_index.php">
                <span class="material-symbols-sharp">home</span>
                <h3>Home</h3>
            </a>
            <a href="./student_clearance.php">
                <span class="material-symbols-sharp">inventory</span>
                <h3>Clearance</h3>
            </a>
            <a href="../student_login.php">
                <span class="material-symbols-sharp">receipt_long</span>
                <h3>Logout</h3>
            </a>
        </div>
        <div class="theme-toggler">
            <span class="material-symbols-sharp active">light_mode</span>
            <span class="material-symbols-sharp">dark_mode</span>
        </div>
        <a href="student_profile.php">
            <div class="profile">
                <div class="info">
                    <p>Hello, <b><?php if($_SESSION['student_first_name'] == 'Phoebe' && $_SESSION['student_last_name'] == 'Ladua') {
                        echo 'I love you'.' '. $_SESSION['student_first_name'];
                    }elseif ($_SESSION['student_username']){
                        echo $_SESSION['student_first_name'];
                    } ?></b></p>
                    <small class="text-muted">Student</small>
                </div>
                <div class="profile-photo">
                    <img src="../admin/uploads/<?php if($_SESSION['student_username']){
                        echo $_SESSION['student_profile'];
                    } ?>" alt="">
                </div>
            </div>
        </a>
        
    </div>
</div>




