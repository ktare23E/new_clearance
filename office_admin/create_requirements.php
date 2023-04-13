<?php
    include_once 'dbconfig.php';
    include_once 'office_header.php';
    $order_by = "ASC";

    $conn = mysqli_connect('localhost', 'root', '', 'clearance');
    $clearance_type_id = $_GET['clearance_type_id'];
    $clearance_progress_id = $_GET['clearance_progress_id'];
    $student_id = $_GET['student_id'];


    if(!isset($_GET['edit'])){
        echo "<h1>There's an error while viewing details.</h1>";
    }else{
        $id = $_GET['edit'];
        $sql = "SELECT * FROM requirement_view WHERE clearance_type_id = '$clearance_type_id' AND clearance_progress_id = '$clearance_progress_id' AND student_id = '".$student_id."'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);

        $requirement_id = $row['requirement_id'];
        $clearance_type_id = $row['clearance_type_id'];
        $clearance_progress_id = $row['clearance_progress_id'];
        $student_id = $row['student_id'];
        $student_first_name = $row['student_first_name'];
        $student_last_name = $row['student_last_name'];

    
    
    $list_of_clearances = $db->result('requirement_view','status = "Active" AND office_id = '.$_SESSION['office_id'],'requirement_details = "'.$order_by.'"','10');

    $requirement = $db->result('requirement');

    $conn = mysqli_connect('localhost', 'root', '', 'clearance');

    $office_id = $_SESSION['office_id'];
    $sql = "SELECT * FROM new_signing_offices WHERE office_id = '$office_id'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);

    $signing_office_id = $row['signing_office_id'];

    }
?>
    <div class="office-container">
        <?php 
            include_once 'office_navtop.php'
        ?>

    
        <!-- ================ MAIN =================== -->
        <div class="main-requirements-container">
            <div class="first-main-content-container">
                
                <div class="form signup">
                    <span class="title">
                        <h2>Add new requirements for <?= $student_first_name.' '.$student_last_name; ?></h2>   
                    </span>
                    <form action="insert_requirement.php" method="POST">
                        <div class="input-field-container">
                            <!-- <div class="input-field sy-sem-select">
                                <input type="hidden" name="signing_office_id" value="<?= $signing_office_id; ?>">
                            </div> -->
                            <div class="input-field sy-sem-select">
                                <select name="clearance_progress_id" id="">
                                            <option default>Select School Year and Sem</option>
                                            <?php $semesters = $db->result('clearance_progress_view','status = "Active"');?>
                                            <?php foreach($semesters as $semester):?>
                                            <?php if($semester->clearance_progress_id == $clearance_progress_id):?>  
                                            <option value="<?= $semester->clearance_progress_id; ?>" selected><?= $semester->school_year_and_sem.' '.$semester->sem_name; ?></option>
                                            <?php else:?>
                                                <option value="<?= $semester->clearance_progress_id; ?>" selected><?=$semester->school_year_and_sem.' '.$semester->sem_name; ?></option>
                                            <?php endif;?>
                                            <?php endforeach; ?>
                                    </select>
                                <i class="uil uil-angle-down" id="uil-arrow-down"></i>
                            </div>
                            <div class="input-field sy-sem-select">
                                <input type="hidden" name="clearance_id">
                                <input type="hidden" name="clearance_status" value="0">
                                <select name="clearance_type_id" id="">
                                            <?php $clearances = $db->result('clearance_type');;?>
                                            <?php foreach($clearances as $clearance):?>
                                            <?php if($clearance->clearance_type_id == $clearance_type_id):?> 
                                            <option value="<?= $clearance->clearance_type_id; ?>" selected><?= $clearance->clearance_type_name; ?></option>
                                            <?php else:?>
                                                <option value="<?= $clearance->clearance_type_id; ?>"><?= $clearance->clearance_type_name; ?></option>
                                            <?php endif;?>
                                            <?php endforeach; ?>
                                    </select>
                                <i class="uil uil-angle-down" id="uil-arrow-down"></i>
                            </div>
                            <div class="input-field sy-sem-select">
                                <input type="text" name="student_id" placeholder="Student Id" value="<?= $student_id; ?>" required>
                            </div>
                        </div>
                        <div class="input-field">
                            <textarea placeholder="Description" name="requirement_details" id="" cols="30" rows="10" required></textarea>
                        </div>
                        <div class="input-field button">
                            <input type="submit" name="submit" value="Post Requirements">
                        </div>
                    </form>
                </div>
                <br>

                <!-- <button id="register-csv-file-btn">
                    <span class="material-symbols-sharp">upload_file</span>
                    Bulk Upload Via .csv file
                    <span class="material-symbols-sharp">arrow_forward_ios</span>
                </button> -->
                
                
            
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
        const openModalButtons = document.querySelectorAll('[data-modal-target]')
        const closeModalButtons = document.querySelectorAll('[data-close-button]')
        const overlay = document.getElementById('overlay')

        openModalButtons.forEach(button => {
        button.addEventListener('click', () => {
            const modal = document.querySelector(button.dataset.modalTarget)
            openModal(modal)
        })
        })

        overlay.addEventListener('click', () => {
        const modals = document.querySelectorAll('.modal.active')
        modals.forEach(modal => {
            closeModal(modal)
        })
        })

        closeModalButtons.forEach(button => {
        button.addEventListener('click', () => {
            const modal = button.closest('.modal')
            closeModal(modal)
        })
        })

        function openModal(modal) {
        if (modal == null) return
        modal.classList.add('active')
        overlay.classList.add('active')
        }

        function closeModal(modal) {
        if (modal == null) return
        modal.classList.remove('active')
        overlay.classList.remove('active')
        }


    </script>

    
</body>
</html>
