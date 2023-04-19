<?php
    include_once 'office_header.php';
    $db_connection = mysqli_connect("localhost", "root", "", "clearance");

    $id = isset($_GET['clearance_type_id']) == true ? $_GET['clearance_type_id'] : '';

    $office_id = $_SESSION['office_id'];
    $query = "SELECT * FROM office WHERE office_id = '$office_id'";
    $result = mysqli_query($db_connection, $query);
    $row = mysqli_fetch_array($result);

    // var_dump($row);

    $is_department = $row['is_department'];


?>
<div class="office-container">
    <?php
    include_once 'office_navtop.php'
    ?>

    <!-- ================ MAIN =================== -->
    <div class="office-main-container">
        <div class="first-div-container">
            <div>
                <h3 style="font-size: 2.5rem;">Clearance Panel</h3>
            </div>
        </div>
        <?php 
                if($_SESSION['office_id'] == $office_id && $is_department == 1){
                    $query = "SELECT COUNT(*) FROM view_clearance WHERE office_id = '$office_id'"; 
                    $result = mysqli_query($db_connection, $query); 
    
                    $total_users = mysqli_fetch_array($result); 
                    
                    
                    mysqli_close($db_connection); 
                }else{
                    $query = "SELECT COUNT(*) FROM view_clearance"; 
                    $result = mysqli_query($db_connection, $query); 
    
                    $total_users = mysqli_fetch_array($result); 
                }

                // $query = "SELECT * FROM requirement_view WHERE office = '$office_id'";
                // echo $query;
            ?>

        <div class="student-panel-insights-container">
            <div class="student-insight-container">
                <div class="upper-insight">
                    <div class="left-logo-insight">
                        <span class="material-symbols-sharp">groups_2 </span>
                    </div>
                    <div class="right-insights">
                        <h3 class="success">Number of students clearance that assigned for you.</h3>
                        <h2><?= $total_users[0]; ?></h2>
                    </div>
                </div>
                <div class="lower-insight">
                    <small>Ajinomoto of sardines</small>
                </div>
            </div>
        </div>

        <!-- <div class="clearance-tabs-section-container">
            <div class="ul-tabs-container">
                <ul class="tabs">
                    <li data-tab-target="#continuing" class="active tab">Continuing</li>
                    <li data-tab-target="#graduating" class="tab">Graduating</li>
                    <li data-tab-target="#transfering" class="tab">Transfering</li>
                </ul>
            </div>
        </div> -->

        <div class="recent-orders-student">

            <div class="clearance-table-title">
                <div class="h2-container">
                    <h2>Clearance list</h2>
                </div>
                <!-- <div class="bulk-actions-container">
                    <h3 style="text-align: center;">Bulk Update:</h3>
                    <button type="button" id="active">Approve</button>
                </div> -->
                
                    <!-- <div>
                        <label for="">Filter via Clearance Type</label>
                        <select name="clearance_type_id" id="clearance_type">
                                <option default>Select Clearance</option>
                                <option value="">All</option>
                                <?php $signings = $db->result('clearance_type');?>
                                <?php foreach($signings as $signing):?>
                                <?php if($signing->clearance_type_id == $clearance_type_id):?>  
                                <option value="<?= $signing->clearance_type_id; ?>"><?= $signing->clearance_type_name; ?></option>
                                <?php else:?>
                                    <option value="<?= $signing->clearance_type_id; ?>"><?= $signing->clearance_type_name; ?></option>
                                <?php endif;?>
                                <?php endforeach; ?>
                        </select>
                    </div> -->
            </div>

            <div class="table-container" style="position:relative">
                <table id="example" class="display" style="width:100%; ">
                    <thead>
                        <tr>
                            <div class="contain-check">
                                    <input type="checkbox" id="checkAll" style='
                                        display:block;background-color:black; appearance:auto;
                                    ' />
                                </div>
                            <th>
                                
                            </th>
                            <th>Clearance ID</th>
                            <th>School Year and Sem Id</th>
                            <th>Student ID</th>
                            <th>Student First Name</th>
                            <th>Student Last Name</th>
                            <th>School Year</th>
                            <th>Semester</th>
                            <th>Clearance Type</th>
                            <th>Clearance Status</th>
                            <th>Semester Id</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>
</div>

<script>
    //jquery onclick event for update button
    $(document).on("click", '#active', function() {
        let requirement_id = [];
        let list_inputs = $('.row')
        list_inputs.map((index, elem, arr) => {
            let is_check = $(elem).prop("checked")
            if (is_check == true) {
                requirement_id.push($(elem).attr("requirement_id"))
            }
        });
        console.log(requirement_id);
        $.ajax({
            url: "student_update_clearance_status.php",
            method: "POST",
            data: {
                requirement_id: requirement_id,
                is_complied: 'Approve'
            },
            success: (response) => {
                $("#checkAll").prop("checked", false);
                $('#example').DataTable().ajax.reload();
            }
        })
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        // Check/Uncheck ALl
        $('#checkAll').change(function() {
            if ($(this).is(':checked')) {
                $('input[name="update[]"]').prop('checked', true);
            } else {
                $('input[name="update[]"]').each(function() {
                    $(this).prop('checked', false);
                });
            }
        });
        // Checkbox click
        $('input[name="update[]"]').click(function() {
            var total_checkboxes = $('input[name="update[]"]').length;
            var total_checkboxes_checked = $('input[name="update[]"]:checked').length;
            if (total_checkboxes_checked == total_checkboxes) {
                $('#checkAll').prop('checked', true);
            } else {
                $('#checkAll').prop('checked', false);
            }
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('#example').DataTable({
            processing: true,
            serverSide: true,
            ajax: 'server_clearance.php',
            columnDefs: [{
                    target: 1,
                    visible: false,
                    searchable: false,
                },
                {
                    target: 2,
                    visible: false,
                },
                {
                    target: 10,
                    visible: false,
                },
                {
                    target: 9,
                    render: function(data, type, row) {
                        return (data == 1 ? 'Cleared' : 'Not Cleared');
                    },
                }
            ]
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>

<script src="../assets/js/office_admin_index.js"></script>

</body>

</html>