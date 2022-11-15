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
        $sql = "SELECT * FROM office WHERE office_id = '$id'";
        $students = $conn->query($sql) or die($conn->error);
        $row = $students->fetch_assoc();
    
?>
    <div class="container-student">
        <!-- sidebar -->
        <aside>
            <div class="top">
                <div class="logo">
                    <img src="../images/logo.png" alt="">
                    <h2>NMSC<span class="warning">CLEARANCE</span> </h2>
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
                <a href="office.php">
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
                    <button id="menu-btn" class="menu-btn">
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
            

            <div class="student-view-top">
                
                <div class="action-button-container">
                    <a href="office.php">
                        <button id="back-button-to-student">
                            <span class="material-symbols-sharp">arrow_back</span>
                        </button>
                    </a>
                    <button onclick="location.href = 'edit_office_info.php?edit=<?= $row['office_id'];?>';" class="edit-profile-button" id="edit-profile-button">
                        <span class="material-symbols-sharp">edit</span>
                        <h3>Edit Profile</h3>
                    </button>
                </div>
                <h1><span><?= $row['office_name']; ?></span><span>&nbsp;</span></h1>
                <div class="icons-course-year-container">
                    <span class="material-symbols-sharp">person_outline</span>
                    <!-- <h2><span><?= $row['student_course'];?>&nbsp;-</span><span>&nbsp;<?= $row['student_year'];?></span></h2> -->
                </div>
                
            </div>
            

            <div class="form-and-table-container">

                <!-- -------------  STUDENT REGISTRATION FORM -------------- -->
                <div class="student-registration">
                    <div class="student-view-profile-container">
                        <div class="student-view-profile-img-container">
                            <img src="../images/dp.png" alt="">
                        </div>

                        <div class="student-view-profile-info-container">
                            <div class="student-info-name-container">
                                <div class="icon-label-container">
                                    <span class="material-symbols-sharp">badge</span>
                                    <h2 class="label">Office Id :</h2><span>&emsp;&nbsp;&nbsp;</span>
                                </div>
                                
                                <h2><?php echo $row['office_id']?></h2>
                            </div>
                            <div class="student-info-name-container">
                                <div class="icon-label-container">
                                    <span class="material-symbols-sharp">person_outline</span>
                                    <h2 class="label">Office Name :</h2><span class="removable-span">&emsp;&emsp;&emsp;&emsp;&emsp;</span>
                                </div>
                                
                                <h2><span><?= $row['office_name']; ?></span></h2>
                            </div>
                            <div class="student-info-name-container">
                                <div class="icon-label-container">
                                    <span class="material-symbols-sharp">contact_mail</span>
                                    <h2 class="label">Office Email :</h2><span>&emsp;&nbsp;</span>
                                </div>
                                
                                <h2><span><?= $row['office_email'] ?></span></h2>
                            </div>
                            <div class="student-info-name-container">
                                <div class="icon-label-container">
                                    <span class="material-symbols-sharp">menu_book</span>
                                <h2 class="label">Phone Number :</h2><span class="removable-span">&emsp;&emsp;&emsp;&emsp;</span>
                                </div>
                                
                                <h2><span><?= $row['office_phone_number'];?></span></h2>
                            </div>
                            <div class="student-info-name-container">
                                <div class="icon-label-container">
                                    <span class="material-symbols-sharp">timeline</span>
                                    <h2 class="label">Office Status :</h2><span class="removable-span">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</span>
                                </div>
                                
                                <h2><span><?= $row['office_status'];?></span></h2>
                            </div>
                            <div class="student-info-name-container">
                                <div class="icon-label-container">
                                    <span class="material-symbols-sharp">corporate_fare</span>
                                    <h2 class="label">Office Description :</h2><span class="removable-span">&emsp;&emsp;</span>
                                </div>
                                
                                <h2><span><?= $row['office_description']?></span></h2>
                            </div>
                            <div class="student-info-name-container clearance-status-btn-container">
                                <button id="clearance-status-button">Clearance Status</button>
                            </div>
                            
                        </div>
                    </div>  
                </div>
                <!-- -------------  END OF REGISTRATION -------------- -->
            </div>
            
        </main>
        <!-- ================ END OF MAIN =================== -->
    </div>

    <?php  }?>
    
    <script defer src="../assets/js//modal.js"></script>
    <script src="../assets/js/index.js"></script>
    <script defer src="../assets/js/active.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    
</body>
</html>
