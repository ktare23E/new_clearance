<?php
    include_once 'dbconfig.php';
    include_once 'office_header.php';
    $order_by = "ASC";
    
    $list_of_clearances = $db->result('requirement_view','status = "Active" AND office_id = '.$_SESSION['office_id'],'requirement_details = "'.$order_by.'"');




    $requirement = $db->result('requirement');

    $conn = mysqli_connect('localhost', 'root', '', 'clearance');

    $office_id = $_SESSION['office_id'];
    $sql = "SELECT * FROM new_signing_offices WHERE office_id = '$office_id'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);

    $office_name = $row['office_name'];

    $query = "SELECT * FROM requirement_view WHERE status = 'Active' AND office_id = '$office_id' ORDER BY requirement_details";

    // echo $query;
    // die();
    $result2 = mysqli_query($conn,$query);
    $row2 = mysqli_fetch_assoc($result2);
    
    // var_dump($row2);
    // die();

    // var_dump($row2);
    // die();



    // $signing_office_id = $row['signing_office_id'];
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
                                                        <th>Clearance Period</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach($row2 as $requirements):?>
                                                    <!-- <?php if($clearance->status == "Active"):?> -->
                                                    <tr>
                                                        <td><?= $requirements['requirement_details']; ?></td>
                                                        <td><?= $requirements['clearance_type_name'];?></td>
                                                        <td><?= $clearance->school_year_and_sem.' '.$clearance->sem_name; ?></td>
                                                        <!-- <td><button data-modal-target="#modal<?= $clearance->requirement_id; ?>" class="update-link" >Edit</button></td> -->
                                                    </tr>
                                                    <!-- <?php endif; ?> -->
                                                    <div class="modal" id="modal<?= $clearance->requirement_id; ?>">
                                                        <div class="modal-header">
                                                            <div class="title">Edit Requirement Details</div>
                                                            <button data-close-button class="close-button">&times;</button>
                                                        </div>
                                                        <div class="form signup">
                                                            <form action="update_requirement.php" method="POST">
                                                                <div class="input-field-container">
                                                                    <input type="hidden" name="requirement_id" value="<?= $clearance->requirement_id; ?>">
                                                                    <!-- <div class="input-field sy-sem-select">
                                                                        <input type="hidden" name="signing_office_id" value="<?= $signing_office_id; ?>">
                                                                    </div> -->
                                                                    <div class="input-field sy-sem-select">
                                                                    <select name="clearance_progress_id" id="">
                                                                            <?php $progression = $db->result('clearance_progress_view','status = "Active"');;?>
                                                                            <?php foreach($progression as $progress):?>
                                                                            <?php if($progress->clearance_progress_id == $clearance_progress_id):?> 
                                                                            <option value="<?= $progress->clearance_progress_id; ?>" selected><?= $progress->school_year_and_sem." ".$progress->sem_name; ?></option>
                                                                            <?php else:?>
                                                                                <option value="<?= $progress->clearance_progress_id; ?>"><?= $progress->school_year_and_sem." ".$progress->sem_name; ?></option>
                                                                            <?php endif;?>
                                                                            <?php endforeach; ?>
                                                                    </select>
                                                                        <i class="uil uil-angle-down" id="uil-arrow-down"></i>
                                                                    </div>
                                                                    <div class="input-field sy-sem-select">
                                                                        <input type="hidden" name="clearance_id" value="<?= $clearance->clearance_id; ?>">
                                                                        <input type="hidden" name="clearance_status" value="0">
                                                                        <select name="clearance_type_id" id="">
                                                                                <?php $clearances = $db->result('clearance_type');;?>
                                                                                <?php foreach($clearances as $clearance_type):?>
                                                                                <?php if($clearance_type->clearance_type_id == $clearance_type_id):?> 
                                                                                <option value="<?= $clearance_type->clearance_type_id; ?>" selected><?= $clearance_type->clearance_type_name; ?></option>
                                                                                <?php else:?>
                                                                                    <option value="<?= $clearance_type->clearance_type_id; ?>"><?= $clearance_type->clearance_type_name; ?></option>
                                                                                <?php endif;?>
                                                                                <?php endforeach; ?>
                                                                        </select>
                                                                        <i class="uil uil-angle-down" id="uil-arrow-down"></i>
                                                                    </div>
                                                                    <div class="input-field sy-sem-select">
                                                                        <input type="text" name="student_id" value="<?= $clearance->student_id; ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="input-field">
                                                                    <textarea placeholder="Description" name="requirement_details" id="" cols="30" rows="10" required><?= $clearance->requirement_details; ?></textarea>
                                                                </div>
                                                                <div class="input-field button">
                                                                    <input type="submit" name="update" value="Edit Requirements">
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <div id="overlay"></div>
                                                <?php endforeach; ?>
                                                </tbody>
                        </table>
                </div>

                <!-- <button id="register-csv-file-btn">
                    <span class="material-symbols-sharp">upload_file</span>
                    Bulk Upload Via .csv file
                    <span class="material-symbols-sharp">arrow_forward_ios</span>
                </button> -->
                
                
            
            </div>
            
        </div>

        
    </div>


    <div class="modal" id="csv-download-modal">
        <div class="modal-header">
            <div class="title">CSV Format Guide and Download File</div>
            <button data-close-button class="close-button">&times;</button>
        </div>
        <div class="requirements-modal-body">
            <div>
                <h3 style="margin-bottom: 5px;">Guide for inputting requirement details</h3>
                <img src="../images/requirement_office_guide.png" alt="">
            </div>
            
            <a style="align-self: flex-end;" class="download-csv" href="../csv/requirements_csv_format.csv" download="Student Requirements">Download CSV Format</a>
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
