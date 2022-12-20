<?php
    include_once 'office_header.php';

?>
    <div class="office-container">
        <?php 
            include_once 'office_navtop.php'
        ?>
        
        <!-- ================ MAIN =================== -->
        <div class="main-requirements-container">
            <div class="first-main-content-container">
                <div class="form signup">
                    <span class="title"><h2>List of Requirements</h2></span>
                    <?php   
                    // $users = $db->result('student_details'); 
                    ?>
                </div>
                <div class="form signup">
                    <span class="title"><h2>Add new requirements</h2></span>
                    <form action="insert_requirement.php" method="POST">
                        <div class="input-field-container">
                        <div class="input-field sy-sem-select">
                                    <select name="signing_office_id" id="">
                                            <option default>Signing Office</option>
                                            <?php $offices = $db->result('new_signing_offices');?>
                                            <?php foreach($offices as $office):?>
                                            <?php if($office->signing_office_id == $signing_office_id):?>  
                                            <option value="<?= $office->signing_office_id; ?>"><?= $office->office_name; ?></option>
                                            <?php else:?>
                                                <option value="<?= $office->signing_office_id; ?>"><?= $office->office_name; ?></option>
                                            <?php endif;?>
                                            <?php endforeach; ?>
                                    </select>
                                <i class="uil uil-angle-down" id="uil-arrow-down"></i>
                            </div>
                            <div class="input-field sy-sem-select">
                                    <select name="sy_sem_id" id="">
                                            <option default>Select School Year and Sem</option>
                                            <?php $semesters = $db->result('sy_sem','status="Active"');?>
                                            <?php foreach($semesters as $semester):?>
                                            <?php if($semester->sy_sem_id == $sy_sem_id):?>  
                                            <option value="<?= $semester->sy_sem_id; ?>"><?= $semester->school_year_and_sem; ?></option>
                                            <?php else:?>
                                                <option value="<?= $semester->sy_sem_id; ?>"><?= $semester->school_year_and_sem; ?></option>
                                            <?php endif;?>
                                            <?php endforeach; ?>
                                    </select>
                                <i class="uil uil-angle-down" id="uil-arrow-down"></i>
                            </div>
                            <div class="input-field sy-sem-select">
                                    <select name="clearance_type_id" id="">
                                            <option default>Select Clearance Type</option>
                                            <?php $clearances = $db->result('clearance_type');?>
                                            <?php foreach($clearances as $clearance):?>
                                            <?php if($clearance->clearance_type_id == $clearance_type_id):?>  
                                            <option value="<?= $clearance->clearance_type_id; ?>"><?= $clearance->clearance_type_name; ?></option>
                                            <?php else:?>
                                                <option value="<?= $clearance->clearance_type_id; ?>"><?= $clearance->clearance_type_name; ?></option>
                                            <?php endif;?>
                                            <?php endforeach; ?>
                                    </select>
                                <i class="uil uil-angle-down" id="uil-arrow-down"></i>
                            </div>
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
                        </div>
                        <div class="input-field">
                            <textarea name="requirement_details" id="" cols="30" rows="10" required></textarea>
                        </div>
                        <div class="input-field button">
                            <input type="submit" value="Post Requirements">
                        </div>
                    </form>
                </div>

                <button id="register-csv-file-btn"><span class="material-symbols-sharp">upload_file</span>Bulk Upload Via .csv file<span class="material-symbols-sharp">arrow_forward_ios</span></button>
                        <div>
                            <div class="upload-student-csv-container">
                                <form action="bulk_upload.php" method="post" enctype="multipart/form-data" name="upload_csv">
                                    <div class="form-input-file-csv-container">
                                            <label for="input-file">Choose CSV File</label>
                                            <input type="file" name="file" accept=".csv" id="input-file">
                                            <button type="submit" name="import" class="submit-csv-file-button">
                                            
                                            Import
                                                <span class="material-symbols-sharp">file_upload</span>
                                            </button>
                                    </div>
                                </form>
                            </div>
                        </div>
            </div>
            
        </div>

        
    </div>
    
    
    <script src="../assets/js/office_admin_index.js"></script>    

    
</body>
</html>
