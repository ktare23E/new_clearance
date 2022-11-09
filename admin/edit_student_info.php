<?php
    include_once 'header.php';
    
    $conn = mysqli_connect('localhost', 'root', '', 'clearance');


    if(!isset($_GET['edit'])){
        echo "<h1>There's an error while viewing details.</h1>";
    }else{
        $id = $_GET['edit'];
        $sql = "SELECT * FROM student WHERE student_id = '$id'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        $student_id = $row['student_id'];
        $student_fname = $row['student_first_name'];
        $student_lname = $row['student_last_name'];
        $student_year = $row['student_year'];
        $student_course = $row['student_course'];
        $student_username = $row['student_username'];
        $student_password = $row['student_password'];
        

    

?>

<div class="container-student">
        <!-- sidebar -->
        <aside>
            <div class="top">
                <div class="logo">
                    <img src="../images/logo.png" alt="">
                    <h2>NMSC<span class="danger">CLEARANCE</span> </h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-symbols-sharp">close</span>
                </div>
            </div>

            <div class="sidebar">
                <a href="index.php">
                    <span class="material-symbols-sharp">grid_view</span>
                    <h3>Dashboard</h3>
                </a>
                <a href="student.php">
                    <span class="material-symbols-sharp">person_outline</span>
                    <h3>Student</h3>
                </a>
                <a href="/office.html">
                    <span class="material-symbols-sharp">meeting_room</span>
                    <h3>Office</h3>
                </a>
                <a href="/school-year-sem.html">
                    <span class="material-symbols-sharp">calendar_month</span>
                    <h3>School Year and Sem</h3>
                </a>
                <a href="signing-office.html">
                    <span class="material-symbols-sharp">edit_note</span>
                    <h3>Signing Office</h3>
                    <span class="message-count">26</span>
                </a>
                <a href="clearance.html">
                    <span class="material-symbols-sharp">inventory</span>
                    <h3>Clearance</h3>
                </a>
                <a href="/department.html">
                    <span class="material-symbols-sharp">corporate_fare</span>
                    <h3>Department</h3>
                </a>
                <a href="/reports.html">
                    <span class="material-symbols-sharp">report</span>
                    <h3>Reports</h3>
                </a>
                <a href="../logout.php">
                    <span class="material-symbols-sharp">logout</span>
                    <h3>Logout</h3>
                </a>
            </div>
        </aside>
        <!------------------ END OF ASIDE ---------------->

        <main class="main-student">
            <div class="right">
                <div class="top">
                    <button id="menu-btn">
                        <span class="material-symbols-sharp">menu</span>
                    </button>
                    <div class="theme-toggler">
                        <span class="material-symbols-sharp active">light_mode</span>
                        <span class="material-symbols-sharp">dark_mode</span>
                    </div>
                    <div class="profile">
                        <div class="info">
                            <p>Hey, <b>Daniel</b></p>
                            <small class="text-muted">Admin</small>
                        </div>
                        <div class="profile-photo">
                            <img src="../images/profile-1.jpg" alt="">
                        </div>
                    </div>
                </div>
                <!-- ========== END OF TOP ============= -->
    
            </div>

            <h1>Student Account</h1>

            <div class="form-and-table-container">

                <!-- -------------  STUDENT REGISTRATION FORM -------------- -->
                <div class="student-registration">
                    <div class="form signup">
                        <div class="back-button action-button-container">
                            <a href="student.php">
                                <button id="back-button-to-student">
                                    <span class="material-symbols-sharp">arrow_back</span>
                                </button>
                            </a>
                        </div>
                        <span class="title">Edit Student Information</span>

                    <form action="update.php" method="POST">
                        <div class="input-field">
                        <input type="text" placeholder="Student Id" name="student_id" required value="<?php echo $student_id; ?>">
                            <i class="uil uil-keyhole-circle"></i>
                            <input type="hidden" name="students_id" value="<?php echo $student_id; ?>">
                    </div>

                    <div class="input-field-container">
                        <div class="input-field">
                            <input type="text" name="student_first_name" placeholder="First Name" required value="<?php echo $student_fname; ?>">
                            <i class="uil uil-user"></i>
                        </div>
                        <div class="input-field">
                            <input type="text" name="student_last_name" placeholder="Last Name" required value="<?php echo $student_lname; ?>">
                            <i class="uil uil-user"></i>
                        </div>
                    </div>
                    <div class="input-field-container">
                        <div class="input-field">
                            <input type="text" name="student_year" placeholder="Year" required value="<?php echo $student_year; ?>">
                            <i class="uil uil-user"></i>
                        </div>
                        <div class="input-field">
                            <input type="text" name="student_course" placeholder="Course" required value="<?php echo $student_course; ?>">
                            <i class="uil uil-envelope icon"></i>
                        </div>
                    </div>
                    <div class="input-field-container">
                        <div class="input-field">
                            <input type="text" placeholder="Username" name="student_username" value="<?php echo $student_username; ?>" required>
                            <i class="uil uil-envelope icon"></i>
                        </div>
                        <div class="input-field">
                            <input type="password" name="student_password" class="password" placeholder="Create a password" value="<?php echo $student_password; ?>" required>
                            <i class="uil uil-lock icon"></i>
                            <i class="uil uil-eye-slash showHidePw"></i>
                        </div>
                    </div>
                        <div class="input-field button">
                        <input type="submit" name="update" value="Update Account">
                    </div>
                </form>
            </div>
        </div>
                <!-- -------------  END OF REGISTRATION -------------- -->
            </div>
            
        </main>
        <!-- ================ END OF MAIN =================== -->

    </div>

    <?php }?>

    <script defer src="../assets/js//modal.js"></script>
    <script src="../assets/js/index.js"></script>
    <script defer src="../assets/js/active.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</body>
</html>


        