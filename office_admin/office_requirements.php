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
                    <span class="title"><h2>List of Clearances</h2></span>
                    <?php   
                    // $users = $db->result('student_details'); 

                    ?>
                </div>
                <div class="form signup">
                    <span class="title"><h2>Add new requirements</h2></span>
                    <form action="" method="POST">
                        <div class="input-field-container">
                            <div class="input-field sy-sem-select">
                                    <select name="sy_sem_id" id="">
                                            <option default>Select School Year and Sem</option>
                                            <?php $semesters = $db->result('sy_sem');?>
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
                        </div>
                        <div class="input-field">
                            <textarea name="" id="" cols="30" rows="10" required></textarea>
                        </div>
                        <div class="input-field button">
                            <input type="submit" value="Create Account">
                        </div>
                    </form>
                </div>
            </div>
            
        </div>

        
    </div>
    
    
    <script src="../assets/js/office_admin_index.js"></script>    

    
</body>
</html>
