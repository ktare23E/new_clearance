<?php
    include_once 'header.php';
    
    $conn = mysqli_connect('localhost', 'root', '', 'clearance');

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
<div class="student-registration">
        <h1>Student Account</h1>

        <div class="student-registration">
                    <div class="form signup">
                        <span class="title">New Student</span>
        
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


    <script defer src="../assets/js//modal.js"></script>
    <script src="../assets/js/index.js"></script>
    <script defer src="../assets/js/active.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>
</body>
</html>
