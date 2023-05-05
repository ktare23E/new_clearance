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
                <button class="create-requirements" data-modal-target="#create-requirements-modal">+ Requirements</button>
            </div>

            <div class="table-container" style="position:relative">
                <table id="example" class="display" style="width:100%; ">
                    <thead>
                        <tr>
                            <th><input type="checkbox" id="checkAll"/></th>
                            <th>Clearance ID</th>
                            <th>School Year and Sem Id</th>
                            <th>Student ID</th>
                            <th>Student First Name</th>
                            <th>Student Last Name</th>
                            <th>Year Level</th>
                            <th>Office Name</th>
                            <th>Course</th>
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
                    <tfoot>
                        <tr>
                            <th><input type="checkbox" id="checkAll"/></th>
                            <th>Clearance ID</th>
                            <th>School Year and Sem Id</th>
                            <th>Student ID</th>
                            <th>Student First Name</th>
                            <th>Student Last Name</th>
                            <th>Year Level</th>
                            <th>Office Name</th>
                            <th>Course</th>
                            <th>School Year</th>
                            <th>Semester</th>
                            <th>Clearance Type</th>
                            <th>Clearance Status</th>
                            <th>Semester Id</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            
        </div>
    </div>
</div>


<div class="modal" id="create-requirements-modal" style="width: 350px;">
    <div class="modal-header">
        <div class="title">Create New Clearance</div>
        <button data-close-button class="close-button">&times;</button>
    </div>
    <div class="requirements-modal-body">
        <div class="input">
            <label for="">Clearance Progress:</label>
            <select name="clearance_progress_id" id="clearance_progress_id">
                                <option default>Select School Year And Sem</option>
                                <?php $school_year = $db->result('clearance_progress_view', 'status = "Active"'); ?>
                                <?php foreach ($school_year as $year) : ?>
                                    <?php if ($year->clearance_progress_id == $clearance_progress_id) : ?>
                                        <option value="<?= $year->clearance_progress_id; ?>"><?= $year->school_year_and_sem . " " . $year->sem_name; ?></option>
                                    <?php else : ?>
                                        <option value="<?= $year->clearance_progress_id; ?>"><?= $year->school_year_and_sem . " " . $year->sem_name; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
        </div>
        <div class="input">
            <label for="">Clearance Type:</label>
            <textarea name="" id="requirement_details" cols="30" rows="10" placeholder="Requirement Description"></textarea>
        </div>
        <button type="submit" class="create-clearance" id="bulk-requirement">Create</button>
    </div>
</div>
<div id="overlay"></div>

<script src="../assets/js/cdn.js"></script>

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

<!-- <script type="text/javascript">
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
</script> -->

<script>
    $(document).ready(function() {
        var table = $('#example').DataTable({
            select: {
                    'style': 'multi'
                },
            'order': [[1, 'asc']],
            lengthMenu: [5, 20, 50, 100, 200, 500],
            processing: true,
            serverSide: true,
            ajax: 'server_clearance.php',
            columnDefs: [
                    {
                        'targets': 0,
                        'checkboxes': {
                            'selectRow': true
                        }
                    },{
                    target: 1,
                    visible: false,
                    searchable: false,
                },
                {
                    target: 2,
                    visible: false,
                },
                {
                    target: 13,
                    visible: false,
                },
                {
                    target: 12,
                    render: function(data, type, row) {
                        return (data == 1 ? 'Cleared' : 'Not Cleared');
                    },
                }
            ],
            
            initComplete: function () {
                this.api()
                    .columns()
                    .every(function () {
                        var column = this;
                        var select = $('<select><option value=""></option></select>')
                            .appendTo($(column.footer()).empty())
                            .on('change', function () {
                                var val = $.fn.dataTable.util.escapeRegex($(this).val());
    
                                column
                                    .search(val , true, false)
                                    .draw();
                            });
    
                        column
                            .data()
                            .unique()
                            .sort()
                            .each(function (d, j) {
                                select.append('<option value="' + d + '">' + d + '</option>');
                            });
                    });
            },
        });
        $(document).on("click", '#bulk-requirement', function(){
                let clearance_progress_id =    $("#clearance_progress_id").val();
                let requirement_details = $("#requirement_details").val();
                let rows_selected = table.column(0).checkboxes.selected();

                // console.log(rows_selected);
                // return

                let list_student_id = [];
                // let list_inputs = $('.row')

                rows_selected.map((elem) => {
                    // console.log($(elem).children("input").prop("student_id"));
                    list_student_id.push($(elem).children("input").attr("student_id"))
                    
                })

                // console.log(list_student_id);
                // return
                $.ajax({
                    url: "requirement_bulk.php",
                    method: "POST",
                    data: {
                        list_student_id:list_student_id,
                        clearance_progress_id:clearance_progress_id,
                        requirement_details:requirement_details,
                        clearance_status: '0'
                    },
                    success: (response) =>{
                        $("#checkAll").prop("checked",false);
                        $('#example').DataTable().ajax.reload();
                        table.columns().checkboxes.deselect(true);
                        
                    }
                })

                location.reload();
            });
    });
</script>



<script>
    try {
        const openModalButtons = document.querySelectorAll('[data-modal-target]')
        const closeModalButtons = document.querySelectorAll('[data-close-button]')
        const overlay = document.getElementById('overlay')

        openModalButtons.forEach(button => {
        button.addEventListener('click', () => {
            const modal = document.querySelector(button.dataset.modalTarget)
            openModal(modal)
            console.log(this);
        })
        })

        overlay.addEventListener('click', () => {
            const modals = document.querySelectorAll('.modal.active')
            modals.forEach(modal => {
                closeModal(modal)
            })
            console.log("overlay clicked");
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
    } catch (error) {
        console.log(error);
    }
</script>

<script src="../assets/js/office_admin_index.js"></script>

</body>

</html>