<?php
    include_once 'student_header.php';

?>
    <div class="office-container">
        <?php 
            include_once 'student_navtop.php'
        ?>
        
        <!-- ================ MAIN =================== -->
        <div class="office-main-container">
            <div class="first-div-container">
                <div style="width: 100%;"> 
                    <h3 style="font-size: 2.5rem;text-align:center">Profile</h3>
                </div>
            </div>

            <div class="student-profile-container">
                <div class="profile-top-container">
                    <div class="student-image" style="position: relative;">
                        <img src="../admin/uploads/<?php if($_SESSION['student_username']){
                        echo $_SESSION['student_profile'];
                    } ?>" alt="">
                        <div style="position: absolute;
                            bottom: 5px;
                            right: 5px;
                        ">
                            <button class="edit-profile-btn">
                                <span class="material-symbols-sharp">border_color</span>
                            </button>
                        </div>
                    </div>
                    <div class="name-student">
                        <h1 style="font-size: 4rem;font-weight:500;margin-bottom:-15px;"><?php if ($_SESSION['student_username']){
                    echo $_SESSION['student_first_name'].' '.$_SESSION['student_last_name'];} ?></h1>
                        <h3 style="font-size: 1.5rem;" class="text-muted">Student</h3>
                    </div>
                </div>
                <div class="profile-main-info-container">
                    <div class="student-data-container">
                        <h3 class="text-muted">Student id</h3>
                        <h4><?php if($_SESSION['student_username']){
                            echo $_SESSION['student_id'];
                        } ?></h4>
                    </div>
                    <div class="student-data-container">
                        <h3 class="text-muted">Year level</h3>
                        <h4><h4><?php if($_SESSION['student_username']){
                            echo $_SESSION['student_year'];
                        } ?></h4>
                    </div>
                    <div class="student-data-container">
                        <h3 class="text-muted">Course</h3>
                        <h4><h4><?php if($_SESSION['student_username']){
                            echo $_SESSION['course_name'];
                        } ?></h4>
                    </div>
                    <div class="student-data-container">
                        <h3 class="text-muted">Department</h3>
                        <h4><h4><?php if($_SESSION['student_username']){
                            echo $_SESSION['office_name'];
                        } ?></h4>
                    </div>
                    <div class="student-data-container">
                        <h3 class="text-muted">Gender</h3>
                        <h4><h4><?php if($_SESSION['student_username']){
                            echo $_SESSION['student_gender'];
                        } ?></h4>
                    </div>
                    <div class="student-data-container">
                        <h3 class="text-muted">Email</h3>
                        <h4><h4><?php if($_SESSION['student_username']){
                            echo $_SESSION['student_email'];
                        } ?></h4>
                    </div>
                    <div class="student-data-container">
                        <h3 class="text-muted">Username</h3>
                        <h4><h4><?php if($_SESSION['student_username']){
                            echo $_SESSION['student_username'];
                        } ?></h4>
                    </div>
                </div>
                
            </div>

        </div>
    </div>
    
    
    <script src="../assets/js/student_index.js"></script>  
    
</body>
</html>
