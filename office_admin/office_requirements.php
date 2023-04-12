<?php
    include_once 'dbconfig.php';
    include_once 'office_header.php';
    $order_by = "ASC";
    
    $list_of_clearances = $db->result('requirement_view','status = "Active" AND office_id = '.$_SESSION['office_id'],'requirement_details = "'.$order_by.'"','10');

    $conn = mysqli_connect('localhost', 'root', '', 'clearance');

    $office_id = $_SESSION['office_id'];
    $sql = "SELECT * FROM new_signing_offices WHERE office_id = '$office_id'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);

    $signing_office_id = $row['signing_office_id'];
?>
    <div class="office-container">
        <?php 
            include_once 'office_navtop.php'
        ?>

        
        <div class="modal" id="modal">
            <div class="modal-header">
                <div class="title">Edit Requirement Details</div>
                <button data-close-button class="close-button">&times;</button>
            </div>
            <div class="form signup">
                <form action="insert_requirement.php" method="POST">
                    <div class="input-field-container">
                        <!-- <div class="input-field sy-sem-select">
                            <input type="hidden" name="signing_office_id" value="<?= $signing_office_id; ?>">
                        </div> -->
                        <div class="input-field sy-sem-select">
                                <select name="clearance_progress_id" id="school_year" required>
                                        <option default>Clearance Period</option>
                                        <?php $semesters = $db->result('clearance_progress_view','status="Active"');?>
                                        <?php foreach($semesters as $semester):?>
                                        <?php if($semester->clearance_progress_id == $clearance_progress_id):?>  
                                        <option value="<?= $semester->clearance_progress_id; ?>"><?= $semester->school_year_and_sem.' '.$semester->sem_name; ?></option>
                                        <?php else:?>
                                            <option value="<?= $semester->clearance_progress_id; ?>"><?= $semester->school_year_and_sem.' '.$semester->sem_name; ?></option>
                                        <?php endif;?>
                                        <?php endforeach; ?>
                                </select>
                            <i class="uil uil-angle-down" id="uil-arrow-down"></i>
                        </div>
                        <div class="input-field sy-sem-select">
                            <input type="hidden" name="clearance_id">
                            <input type="hidden" name="clearance_status" value="0">
                                <select name="clearance_type_id" id="" required>
                                        <option default>Clearance Type</option>
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
                        <textarea placeholder="Description" name="requirement_details" id="" cols="30" rows="10" required></textarea>
                    </div>
                    <div class="input-field button">
                        <input type="submit" name="submit" value="Edit Requirements">
                    </div>
                </form>
            </div>
        </div>
        <div id="overlay"></div>



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
                                                        <th>Clearance Period</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach($list_of_clearances as $clearance):?>
                                                    <?php if($clearance->status == "Active"):?>
                                                    <tr>
                                                        <th><?= $clearance->requirement_details; ?></th>
                                                        <th><?= $clearance->clearance_type_name;?></th>
                                                        <th><?= $clearance->school_year_and_sem.' '.$clearance->sem_name; ?></th>
                                                        <th><button data-modal-target="#modal" class="update-link">Edit</button></th>
                                                    </tr>
                                                    <?php endif; ?>
                                                    <?php endforeach; ?>
                                                </tbody>
                        </table>
                </div>
                <div class="form signup">
                    <span class="title">
                        <h2>Add new requirements</h2>
                        <button id="open-csv" class="open-csv">Bulk Upload Requirements</button>
                        <div class="upload-csv-container">
                            <form action="bulk_upload.php" method="post" enctype="multipart/form-data" name="upload_csv">
                                <div class="form-input-file-csv-container">
                                        <label for="input-file" style="font-size:16px;align-self: center;margin-bottom:10px"><b>Choose CSV File</b></label>
                                        <input type="file" name="file" accept=".csv" id="input-file">
                                        <select name="clearance_progress_id" id="">
                                            <option default>Cl/option>
                                            <?php $semesters = $db->result('clearance_progress_view','status="Active"');?>
                                            <?php foreach($semesters as $semester):?>
                                            <?php if($semester->sy_sem_id == $sy_sem_id):?>  
                                            <option value="<?= $semester->sy_sem_id; ?>"><?= $semester->school_year_and_sem.' '.$semester->sem_name; ?></option>
                                            <?php else:?>
                                                <option value="<?= $semester->sy_sem_id; ?>"><?=$semester->school_year_and_sem.' '.$semester->sem_name; ?></option>
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
                        
                            
                    </span>
                    <form action="insert_requirement.php" method="POST">
                        <div class="input-field-container">
                            <!-- <div class="input-field sy-sem-select">
                                <input type="hidden" name="signing_office_id" value="<?= $signing_office_id; ?>">
                            </div> -->
                            <div class="input-field sy-sem-select">
                                    <select name="clearance_progress_id" id="school_year" required>
                                            <option default>Clearance Period</option>
                                            <?php $semesters = $db->result('clearance_progress_view','status="Active"');?>
                                            <?php foreach($semesters as $semester):?>
                                            <?php if($semester->clearance_progress_id == $clearance_progress_id):?>  
                                            <option value="<?= $semester->clearance_progress_id; ?>"><?= $semester->school_year_and_sem.' '.$semester->sem_name; ?></option>
                                            <?php else:?>
                                                <option value="<?= $semester->clearance_progress_id; ?>"><?= $semester->school_year_and_sem.' '.$semester->sem_name; ?></option>
                                            <?php endif;?>
                                            <?php endforeach; ?>
                                    </select>
                                <i class="uil uil-angle-down" id="uil-arrow-down"></i>
                            </div>
                            <div class="input-field sy-sem-select">
                                <input type="hidden" name="clearance_id">
                                <input type="hidden" name="clearance_status" value="0">
                                    <select name="clearance_type_id" id="" required>
                                            <option default>Clearance Type</option>
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
