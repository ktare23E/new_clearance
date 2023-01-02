<?php
    include_once 'header.php';
    // $users1 = $db->result('office');
    // $users = $db->result('offices');


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

            <h1>Clearance</h1>

            <div class="form-and-table-container">

                <!-- -------------  STUDENT REGISTRATION FORM -------------- -->
                <div class="student-registration">
                    <div class="form signup">
                        <div class="back-button">
                            <a href="clearance.php">
                                <button id="back-button-to-office">
                                <span class="material-symbols-sharp">arrow_back</span>
                            </button>
                            </a>
                            
                        </div>
                        <span class="title">Add New Clearance</span>
        
                        <form action="insert_clearance.php" method="POST">
                            <div class="input-field-container">
                            <div class="input-field sy-sem-select">
                                    <select name="student_id" id="">
                                            <option default>Select Student</option>
                                            <?php $students = $db->result('student','student_status = "Active"');?>
                                            <?php foreach($students as $student):?>
                                            <?php if($student->student_id == $student_id):?>  
                                            <option value="<?= $student->student_id; ?>"><?= $student->student_id; ?></option>
                                            <?php else:?>
                                                <option value="<?= $student->student_id; ?>"><?= $student->student_id; ?></option>
                                            <?php endif;?>
                                            <?php endforeach; ?>
                                    </select>
                                <i class="uil uil-angle-down" id="uil-arrow-down"></i>
                            </div>
                                <div class="input-field">
                                    <label for="">Select School Year and Sem</label>
                                    <select name="sy_sem_id" id="">
                                            <option default>Select School Year and Sem</option>
                                            <?php $semesters = $db->result('sy_sem','status = "Active"');?>
                                            <?php foreach($semesters as $semester):?>
                                            <?php if($semester->sy_sem_id == $sy_sem_id):?>  
                                            <option value="<?= $semester->sy_sem_id; ?>"><?= $semester->school_year_and_sem; ?></option>
                                            <?php else:?>
                                                <option value="<?= $semester->sy_sem_id; ?>"><?= $semester->school_year_and_sem; ?></option>
                                            <?php endif;?>
                                            <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="input-field">
                                    <input type="hidden" name="clearance_status" value="1">
                                </div>
                            </div>
                            <div class="input-field-container">
                                <div class="input-field">
                                    <label for="">Course Name</label>
                                    <select name="course_id" id="">
                                            <option default>Select Course Name</option>
                                            <?php $courses = $db->result('course');?>
                                            <?php foreach($courses as $course):?>
                                            <?php if($course->course_id == $course_id):?>  
                                            <option value="<?= $course->course_id; ?>"><?= $course->course_name; ?></option>
                                            <?php else:?>
                                                <option value="<?= $course->course_id; ?>"><?= $course->course_name; ?></option>
                                            <?php endif;?>
                                            <?php endforeach; ?>
                                    </select>
                                </div>
                                
                                <div class="input-field">
                                    <i class="uil uil-analysis"></i>
                                    <select name="office_id" id="">
                                            <option default="Select Department">Select Department</option>
                                            <?php $offices = $db->result('office','is_department = 1');?>
                                            <?php foreach($offices as $office):?>
                                            <?php if($office->office_id == $office_id):?>  
                                            <option value="<?= $office->office_id; ?>"><?= $office_id->office_name; ?></option>
                                            <?php else:?>
                                                <option value="<?= $office->office_id; ?>"><?= $office->office_name; ?></option>
                                            <?php endif;?>
                                            <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="input-field">
                                            <label for="">Clearance Type</label>
                                            <select name="clearance_type_id" id="">
                                                    <option default>Select Clearance Type</option>
                                                    <?php $clearances = $db->result('clearance_type');?>
                                                    <?php foreach($clearances as $clearance):?>
                                                    <?php if($clearance->clearance_type_id == $clearance_type_id):?>  
                                                    <option value="<?= $clearance->clearance_type_id; ?>" ><?= $clearance->clearance_type_name; ?></option>
                                                    <?php else:?>
                                                        <option value="<?= $clearance->clearance_type_id; ?>"><?= $clearance->clearance_type_name; ?></option>
                                                    <?php endif;?>
                                                    <?php endforeach; ?>
                                            </select>
                                </div>
                                <div class="input-field">
                                    <label for="">Date Created</label>
                                    <input type="date" name="date_created" placeholder="Date Created" required>
                                </div>
                            </div>
                            <div class="input-field button">
                                <input type="submit" id="submit" value="Create Clearance">
                            </div>
                        </form>
                    </div>
                </div>
                <!-- -------------  END OF REGISTRATION -------------- -->
            </div>
            
        </main>
        <!-- ================ END OF MAIN =================== -->

    </div>


    
    <!-- <script src="../assets/js/student-info.js"></script> -->
    
    <script defer src="../assets/js//modal.js"></script>
    <script src="../assets/js/index.js"></script>
    <script defer src="../assets/js/active.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    
</body>
</html>
