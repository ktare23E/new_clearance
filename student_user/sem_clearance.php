<?php
    include_once '../dbconnect.php';
    include_once 'student_header.php';



    if(!isset($_GET['sy_sem_id']) && !isset($_GET['clearance_type_id'])){
        echo "<h1>There's an error while viewing details.</h1>";
    }else{
        $sy_sem_id = $_GET['sy_sem_id'];
        $clearance_type_id = $_GET['clearance_type_id'];
        $list_of_clearances = $db->result('requirement_view','clearance_type_id = '.$clearance_type_id.' AND sy_sem_id = '.$sy_sem_id);
    }
?>
    <div class="office-container">
        <?php 
            include_once 'student_navtop.php';
        ?>
        

                            <div class="clearance-section-container">
                                    <div class="clearance-header-bar-container">
                                        <h3>CLEARANCE INFORMATION</h3>
                                    </div>
                                    <div class="clearance-details-container">
                                        <h3>CLEARANCE DETAILS - SIGNING OFFICES STATUS</h3>
                                        <div class="clearance-details-table-container">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th>SIGNING OFFICE</th>
                                                        <th>Requirement</th>
                                                        <th>STATUS</th>
                                                        <th>DATE SIGNED</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach($list_of_clearances as $clearance):?>
                                                    <tr>
                                                    <td><?= $clearance->office_name;?></td>
                                                    <td><?= $clearance->requirement_details;?></td>
                                                    <td><?= $clearance->is_complied ? 'Approve' : 'Not Cleared';?></td>
                                                    <td><?= $clearance->date_cleared;?></td>
                                                    </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

<script src="../assets/js/student_index.js"></script> 
    
</body>
</html>
    