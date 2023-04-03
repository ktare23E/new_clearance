<?php
    include_once 'header.php';
    // $users = $db->result('student_details');

    
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
                    <h1>Student Account</h1>
                    <div class="theme-toggler">
                        <span class="material-symbols-sharp active">light_mode</span>
                        <span class="material-symbols-sharp">dark_mode</span>
                    </div>
                    <div class="profile">
                        <div class="info">
                            <p>Hey, <b>World</b></p>
                            <small class="text-muted">Admin</small>
                        </div>
                        <div class="profile-photo">
                            <img src="../images/profile-1.jpg" alt="">
                        </div>
                    </div>
                </div>
                
    
            </div>

            

            
                
                <!-- -------------  TABLE OF STUDENT INFORMATION -------------- -->
                <div class="recent-orders-student">
                    <div class="add-button-container">

                        <div class="h2-container">
                                <h2>Students List</h2>
                        </div>

                        <div class="new-student-buttons" style="display:flex;flex-direction:row;gap:5px;justify-content:space-between;">
                            <div>
                                <a href="student_registration.php">
                                    <button id="add-new-student"><span class="material-symbols-sharp">add</span>Student</button>
                                </a>
                            </div>
                            <button id="register-csv-file-btn"><span class="material-symbols-sharp">upload_file</span>Register Via .csv file<span class="material-symbols-sharp">arrow_forward_ios</span></button>
                            <div>
                                <div class="upload-student-csv-container">
                                    <form action="student_upload_csv.php" method="post" enctype="multipart/form-data" name="upload_csv">
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
                    
                    <div class="update-container">
                        <div class="table-container">
                            <table id="example" class="display">
                                <thead>
                                    <div class="bulk-options-div">
                                        <button id="bulk-options"><span class="material-symbols-sharp">more_horiz</span></button>
                                    </div>
                                    <tr>
                                        <th><input type="checkbox" id="checkAll"/></th>
                                        <th>Student ID</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Year</th>
                                        <th>Course</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                </tbody>
                            </table>
                        </div>

                        <div class="bulk-actions-container">
                            <h3 style="text-align: center;">Bulk Update</h3>
                            <button id="close-bulk-options-button">
                                <span class="material-symbols-sharp">close</span>
                            </button>
                            <div class="bulk-action">
                                <button type="button" id="active" >Set as Active</button>
                            </div>
                            <div class="bulk-action">
                                <button type="button" id="inactive" onclick="">Set as Inactive</button>
                            </div>
                            <div class="bulk-action">
                                <button type="button" id="1st_year">Set as 1st Year</button>
                            </div>
                            <div class="bulk-action">
                                <button type="button" id="2nd_year">Set as 2nd Year</button>
                            </div>
                            <div class="bulk-action">
                                <button type="button" id="3rd_year">Set as 3rd Year</button>
                            </div>
                            <div class="bulk-action">
                                <button type="button" id="4th_year">Set as 4th Year</button>
                            </div>
                        </div>    
                        
                    </div>
                    
                </div>
            
            
        </main>
        <!-- ================ END OF MAIN =================== -->

    </div>
        
    <script>
        //jquery onclick event for update button
        $(document).on("click", '#active', function(){
            let list_student_id = [];
            let list_inputs = $('.row')
            list_inputs.map((index,elem,arr) => {
                let is_check = $(elem).prop("checked")
                if(is_check == true ){
                    list_student_id.push($(elem).attr("student_id"))
                }
            });
            console.log(list_student_id);
            $.ajax({
                url: "student_update_status.php",
                method: "POST",
                data: {
                    list_student_id:list_student_id,
                    status:'Active'
                },
                success: (response) =>{
                    $("#checkAll").prop("checked",false);
                    $('#example').DataTable().ajax.reload();
                }
            })
        });
    </script>

        <script>
            //jquery onclick event for update button
            $(document).on("click", '#inactive', function(){
                let list_student_id = [];
                let list_inputs = $('.row')
                list_inputs.map((index,elem,arr) => {
                    let is_check = $(elem).prop("checked")
                    if(is_check == true ){
                        list_student_id.push($(elem).attr("student_id"))
                    }
                });
                console.log(list_student_id);
                $.ajax({
                    url: "student_inactive_status.php",
                    method: "POST",
                    data: {
                        list_student_id:list_student_id,
                        status:'Inactive'
                    },
                    success: (response) =>{
                        $("#checkAll").prop("checked",false);
                        $('#example').DataTable().ajax.reload();
                        
                    }
                })
            });

        </script>
        

<script>
        //jquery onclick event for update button
        $(document).on("click", '#1st_year', function(){
            let list_student_id = [];
            let list_inputs = $('.row')
            list_inputs.map((index,elem,arr) => {
                let is_check = $(elem).prop("checked")
                if(is_check == true ){
                    list_student_id.push($(elem).attr("student_id"))
                }
            });
            console.log(list_student_id);
            $.ajax({
                url: "student_1st.php",
                method: "POST",
                data: {
                    list_student_id:list_student_id,
                    student_year:'1st Year'
                },
                success: (response) =>{
                    $("#checkAll").prop("checked",false);
                    $('#example').DataTable().ajax.reload();
                }
            })
        });
    </script>

<script>
        //jquery onclick event for update button
        $(document).on("click", '#2nd_year', function(){
            let list_student_id = [];
            let list_inputs = $('.row')
            list_inputs.map((index,elem,arr) => {
                let is_check = $(elem).prop("checked")
                if(is_check == true ){
                    list_student_id.push($(elem).attr("student_id"))
                }
            });
            console.log(list_student_id);
            $.ajax({
                url: "student_2nd.php",
                method: "POST",
                data: {
                    list_student_id:list_student_id,
                    student_year:'2nd Year'
                },
                success: (response) =>{
                    $("#checkAll").prop("checked",false);
                    $('#example').DataTable().ajax.reload();
                }
            })
        });
    </script>

<script>
        //jquery onclick event for update button
        $(document).on("click", '#3rd_year', function(){
            let list_student_id = [];
            let list_inputs = $('.row')
            list_inputs.map((index,elem,arr) => {
                let is_check = $(elem).prop("checked")
                if(is_check == true ){
                    list_student_id.push($(elem).attr("student_id"))
                }
            });
            console.log(list_student_id);
            $.ajax({
                url: "student_2nd.php",
                method: "POST",
                data: {
                    list_student_id:list_student_id,
                    student_year:'3rd Year'
                },
                success: (response) =>{
                    $("#checkAll").prop("checked",false);
                    $('#example').DataTable().ajax.reload();
                }
            })
        });
    </script>

<script>
        //jquery onclick event for update button
        $(document).on("click", '#4th_year', function(){
            let list_student_id = [];
            let list_inputs = $('.row')
            list_inputs.map((index,elem,arr) => {
                let is_check = $(elem).prop("checked")
                if(is_check == true ){
                    list_student_id.push($(elem).attr("student_id"))
                }
            });
            console.log(list_student_id);
            $.ajax({
                url: "student_2nd.php",
                method: "POST",
                data: {
                    list_student_id:list_student_id,
                    student_year:'4th Year'
                },
                success: (response) =>{
                    $("#checkAll").prop("checked",false);
                    $('#example').DataTable().ajax.reload();
                }
            })
        });
    </script>

<script>
            $(document).ready(function(){
                $("#register-csv-file-btn").click(function(){
                    if($("#register-csv-file-btn span:nth-child(2)").html() == "arrow_forward_ios"){
                        $("#register-csv-file-btn span:nth-child(2)").html("arrow_back_ios")
                    }else {
                        $("#register-csv-file-btn span:nth-child(2)").html("arrow_forward_ios")
                    }
                    
                    $(".upload-student-csv-container").slideToggle(200)
                })
            })
</script>

        <script type="text/javascript">
            $(document).ready(function(){
                // Check/Uncheck ALl
                $('#checkAll').change(function(){
                    if($(this).is(':checked')){
                        $('input[name="update[]"]').prop('checked',true);
                    }else{
                        $('input[name="update[]"]').each(function(){
                            $(this).prop('checked',false);
                        }); 
                    }
                });
                // Checkbox click
                $('input[name="update[]"]').click(function(){
                    var total_checkboxes = $('input[name="update[]"]').length;
                    var total_checkboxes_checked = $('input[name="update[]"]:checked').length;
                    if(total_checkboxes_checked == total_checkboxes){
                        $('#checkAll').prop('checked',true);
                    }else{
                        $('#checkAll').prop('checked',false);
                    }
                });
            }); 
        </script>

    <script>
            $(document).ready(function () {
            $('#example').DataTable({
                "scrollX": true,
                "columnDefs": [
                    { "bSortable": false, "aTargets": [ 0 ] }
                ],
                processing: true,
                serverSide: true,
                ajax: 'server_processing.php',
                drawCallback:  () => {
                    $('.delete').on('click',function(){
                        let student_id = $(this).attr('data-id');
                        Swal.fire({
                            title: 'Are you sure?',
                            text: "You won't be able to revert this!",
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Yes, delete it!'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                $.ajax({
                                    type: 'post',
                                    url: 'deleteinfo.php',
                                    data: {student_id:student_id},
                                    success: function(response){
                                        if(response === "Deleted"){
                                            Swal.fire(
                                                'Deleted!',
                                                'Your file has been deleted.',
                                                'success'
                                            )
                                        }else{
                                            Swal.fire(
                                                'Error',
                                                'Error deleting data.',
                                                'error'
                                            )
                                        }
                                        
                                        setTimeout(() => { 
                                            location.reload(true);
                                        }, 1000);
                                    } 
                                })
                            }
                        })
                    })
                },
            });
        });
    </script>
    
    <!-- <script src="../assets/js/student-info.js"></script> -->
    
    <!-- <script defer src="../assets/js//modal.js"></script> -->
    <script src="../assets/js/index.js"></script>
    <script defer src="../assets/js/active.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- <script src="../assets/js/update.js"></script> -->

    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>
</body>
</html>
