<?php
    include_once 'header.php';
    
    $conn = mysqli_connect('localhost', 'root', '', 'clearance');


    if(!isset($_GET['edit'])){
        echo "<h1>There's an error while viewing details.</h1>";
    }else{
        $id = $_GET['edit'];
        $sql = "SELECT * FROM office WHERE office_id = '$id'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);

        $office_id = $row['office_id'];
        $office_name = $row['office_name'];
        $office_email = $row['office_email'];
        $office_phone_number = $row['office_phone_number'];
        $office_description = $row['office_description'];
        $office_status = $row['office_status'];
    
        

    

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
                <a href="office.php">
                    <span class="material-symbols-sharp">meeting_room</span>
                    <h3>Office</h3>
                </a>
                <a href="office_account.php">
                    <span class="material-symbols-sharp">meeting_room</span>
                    <h3>Office Account</h3>
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

            <h1>Office</h1>

            <div class="form-and-table-container">

                <!-- -------------  STUDENT REGISTRATION FORM -------------- -->
                <div class="student-registration">
                    <div class="form signup">
                        <div class="back-button action-button-container">
                            <a href="office.php">
                                <button id="back-button-to-student">
                                    <span class="material-symbols-sharp">arrow_back</span>
                                </button>
                            </a>
                        </div>
                        <span class="title">Edit Office Information</span>

                    <form action="update_office.php" method="POST">
                        <div class="input-field-container">
                            <div class="input-field">
                                <input type="hidden" name="office_id" value="<?= $office_id?>">
                                <input type="text" name="office_name" placeholder="Office Name" required value="<?php echo $office_name; ?>">
                                <i class="uil uil-user"></i>
                            </div>
                            <div class="input-field">
                                <input type="email" name="office_email" placeholder="Office Email" required value="<?php echo $office_email; ?>">
                                <i class="uil uil-user"></i>
                            </div>
                        </div>
                        <div class="input-field-container">
                            <div class="input-field">
                                <input type="text" name="office_phone_number" placeholder="Office Phone Number" required value="<?php echo $office_phone_number; ?>">
                                <i class="uil uil-user"></i>
                            </div>
                            <div class="input-field">
                                    <input type="text" placeholder="Office Status" name="office_status" required value="<?= $office_status?>">
                                    <i class="uil uil-envelope icon"></i>
                                </div>
                        </div>
                        <div class="input-field-container">
                            <div class="input-field">
                                <label for="">Office Description</label>
                                <textarea style="border-style: 1px solid;" name="office_description" id="" rows="4" cols="50"><?= $office_description?></textarea>
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


        