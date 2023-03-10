<?php
    include_once 'dbconfig.php';
    include_once 'office_header.php';
    $order_by = "ASC";
    
    
    $list_of_clearances = $db->result('requirement_view','office_id = '.$_SESSION['office_id'],'requirement_details = "'.$order_by.'"');
    
?>
    <div class="office-container">
        <?php 
            include_once 'office_navtop.php'
        ?>
        
        <!-- ================ MAIN =================== -->
        <div class="main-requirements-container">
            <div class="first-main-content-container">
                <div class="form signup">
                    <span class="title"><h2>List of Requirements of <?= $_SESSION['office_name'];?></h2></span>
                    <table>
                                                <thead>
                                                    <tr>
                                                        <th>Requirements</th>
                                                        <th>Clearance Type</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach($list_of_clearances as $clearance):?>
                                                    <?php if($clearance->status == "Active"):?>
                                                    <tr>
                                                        <th><?= $clearance->requirement_details; ?></th>
                                                        <th><?= $clearance->clearance_type_name;?></th>
                                                    </tr>
                                                    <?php endif; ?>
                                                    <?php endforeach; ?>
                                                        <button type="submit" disabled="true">Click me</button>
                                                </tbody>
                        </table>
                </div>
                <div class="form signup">
                    <span class="title"><h2>Add new requirements</h2></span>
                    <form action="insert_requirement.php" method="POST">
                    <div class="input-field-container">
                        <div class="input-field sy-sem-select">
                            <input type="hidden" name="signing_office_id" >
                            </div>
                            <div class="input-field sy-sem-select">
                                    <select name="sy_sem_id" id="school_year" required>
                                            <option default>Select School Year</option>
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
                                    <select name="sem_id" id="semester">
                                        <option default>Select Semester</option>
                                            <?php $semesters = $db->result('sem');?>
                                            <?php foreach($semesters as $semester):?>
                                            <?php if($semester->sem_id == $sem_id):?>  
                                            <option value="<?= $semester->sem_id; ?>"><?= $semester->sem_name; ?></option>
                                            <?php else:?>
                                                <option value="<?= $semester->sem_id; ?>"><?= $semester->sem_name; ?></option>
                                            <?php endif;?>
                                            <?php endforeach; ?>
                                    </select>
                            </div>
                            <div class="input-field sy-sem-select">
                                <input type="hidden" name="clearance_id">
                                <input type="hidden" name="clearance_status" value="0">
                                    <select name="clearance_type_id" id="" required>
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
                                    <input type="text" name="student_id" placeholder="Student Id" required>
                            </div>
                </div>
                        <div class="input-field">
                            <textarea name="requirement_details" id="" cols="30" rows="10" required></textarea>
                        </div>
                        <div class="input-field button">
                            <input type="submit" name="submit" value="Post Requirements">
                        </div>
                    </form>
                </div>
                <br>
                <h1>Bulk Requirements Via CSV File</h1>

                <button id="register-csv-file-btn"><span class="material-symbols-sharp">upload_file</span>Bulk Upload Via .csv file<span class="material-symbols-sharp">arrow_forward_ios</span></button>
                        <div>
                            <div class="upload-student-csv-container">
                                <form action="bulk_upload.php" method="post" enctype="multipart/form-data" name="upload_csv">
                                    <div class="form-input-file-csv-container">
                                            <label for="input-file">Choose CSV File</label>
                                            <input type="file" name="file" accept=".csv" id="input-file">
                                            <select name="sy_sem_id2" id="">
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

    <script>
        $()
    </script>
        
    <script>
        $('[name="sy_sem_id"]').change(function() {
            $('[name="sy_sem_id2"]').val($('[name="sy_sem_id"]').val())
        })
    </script>

    <script>
        $(document).ready(function(){
            $("#school_year").click(function(){
                $('#semester').c
            })
        })
    </script>

    
</body>
</html>
