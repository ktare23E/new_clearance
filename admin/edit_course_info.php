<?php
    include_once 'header.php';
    
    $conn = mysqli_connect('localhost', 'root', '', 'clearance');


    if(!isset($_GET['edit'])){
        echo "<h1>There's an error while viewing details.</h1>";
    }else{
        $id = $_GET['edit'];
        $sql = "SELECT * FROM course WHERE course_id = '$id'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);

        $course_id = $row['course_id'];
        $course_name = $row['course_name'];
        $course_description = $row['course_description'];
        $course_status = $row['course_status'];
    
        

    

?>

<div class="container-student">
        <!-- sidebar -->
        <?php
                include_once 'aside.php';
        ?>
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
                            <a href="department.php">
                                <button id="back-button-to-student">
                                    <span class="material-symbols-sharp">arrow_back</span>
                                </button>
                            </a>
                        </div>
                        <span class="title">Edit Course Information</span>

                    <form action="update_course.php" method="POST">
                        <div class="input-field-container">
                            <div class="input-field">
                                <input type="hidden" name="course_id" value="<?= $course_id?>">
                                <input type="text" name="course_name" placeholder="Department Name" required value="<?php echo $course_name; ?>">
                                <i class="uil uil-user"></i>
                            </div>
                            <div class="input-field">
                                    <input type="text" placeholder="Course Status" name="course_status" required value="<?= $course_status?>">
                                    <i class="uil uil-envelope icon"></i>
                                </div>
                        </div>
                        <div class="input-field-container">
                            <div class="input-field">
                                <label for="">Department Description</label>
                                <textarea style="border-style: 1px solid;" name="course_description" id="" rows="4" cols="50"><?= $course_description?></textarea>
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


        