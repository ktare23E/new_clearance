<?php
    include_once 'header.php';
    
    $conn = mysqli_connect('localhost', 'root', '', 'clearance');


    if(!isset($_GET['edit'])){
        echo "<h1>There's an error while viewing details.</h1>";
    }else{
        $id = $_GET['edit'];
        $sql = "SELECT * FROM office_account WHERE office_account_id = '$id'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);

        $office_account_id = $row['office_account_id'];
        $office_account_username = $row['office_account_username'];
        $office_account_password = $row['office_account_password'];


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

            <h1>Office Account</h1>

            <div class="form-and-table-container">

                <!-- -------------  STUDENT REGISTRATION FORM -------------- -->
                <div class="student-registration">
                    <div class="form signup">
                        <div class="back-button action-button-container">
                            <a href="office_account.php">
                                <button id="back-button-to-student">
                                    <span class="material-symbols-sharp">arrow_back</span>
                                </button>
                            </a>
                        </div>
                        <span class="title">Edit Office Account Information</span>

                    <form action="update_office.php" method="POST">
                        <div class="input-field-container">
                            <div class="input-field">
                                <input type="hidden" name="office_account_id" value="<?= $office_id?>">
                                <input type="text" name="office_account_username" placeholder="Office Account Username" required value="<?php echo $office_account_username; ?>">
                                <i class="uil uil-user"></i>
                            </div>
                            <div class="input-field">
                                <input type="email" name="office_account_password" placeholder="Office Password" required value="<?php echo $office_account_password; ?>">
                                <i class="uil uil-user"></i>
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


        