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
                    <h1>Clearance</h1>
                    <div class="theme-toggler">
                        <span class="material-symbols-sharp active">light_mode</span>
                        <span class="material-symbols-sharp">dark_mode</span>
                    </div>
                    <div class="profile">
                        <div class="info">
                            <p>Hey, <b>Daniel</b></p>
                            <small class="text-muted">Admin</small>
                        </div>
                        <div class="profile-photo">
                            <img src="../images/profile-1.jpg" alt="">
                        </div>
                    </div>
                </div>
                <!-- ========== END OF TOP ============= -->
    
            </div>

            

            <div class="form-and-table-container">
                
                <!-- -------------  TABLE OF STUDENT INFORMATION -------------- -->
                <div class="insights">
                    <div class="income">
                        <span class="material-symbols-sharp">stacked_line_chart</span>
                        
                        <div class="middle">
                            <div class="left">
                                <h3>Active Clearance</h3>
                                <h1>3,548</h1>
                            </div>
                            <div class="progress">
                                <svg>
                                    <circle cx="38" cy="38" r="36"></circle>
                                </svg>
                                <div class="number">
                                    <p>44%</p>
                                </div>
                            </div>
                        </div>

                        <small class="text-muted">Sy-sem : 2022 - 2023, 1st sem</small>
                    </div>

                    <div class="expenses">
                        <span class="material-symbols-sharp">bar_chart</span>
                        
                        <div class="middle">
                            <div class="left">
                                <h3>Uncleared / Pending</h3>
                                <h1>274</h1>
                            </div>
                            <div class="progress">
                                <svg>
                                    <circle cx="38" cy="38" r="36"></circle>
                                </svg>
                                <div class="number">
                                    <p>62%</p>
                                </div>
                            </div>
                        </div>

                        <small class="text-muted">Sy-sem : 2022 - 2023, 1st sem</small>
                    </div>
                    <!-- -------------  END OF EXPENSES -------------- -->

                    <div class="sales">
                        <span class="material-symbols-sharp">analytics</span>
                        
                        <div class="middle">
                            <div class="left">
                                <h3>Cleared Active</h3>
                                <h1>3,822</h1>
                            </div>
                            <div class="progress">
                                <svg>
                                    <circle cx="38" cy="38" r="36"></circle>
                                </svg>
                                <div class="number">
                                    <p>81%</p>
                                </div>
                            </div>
                        </div>

                        <small class="text-muted">Sy-sem : 2022 - 2023, 1st sem</small>
                    </div>
                    <!-- -------------  END OF SALES -------------- -->

                    

                
                </div>
                <div class="recent-orders-student">
                    <div class="add-button-container">

                        <div class="h2-container">
                                <h2>Clearance list</h2>
                                
                        </div>

                        
                    </div>
                    
                    <table id="example" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <input type="checkbox" id="checkAll" style='
                                    display:block;background-color:black; appearance:auto;
                                    position:absolute;
                                    top:150px;
                                    left:45px;
                                    z-index:10;
                                    '/>
                                <th></th>
                                <th>Student Name</th>
                                <th>Date Created</th>
                                <th>Date Cleared</th>
                                <th>Clearance Type</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                        <tfoot>
                            <tr>
                                <th><input type="checkbox"></th>
                                <th>Student Name</th>
                                <th>Date Created</th>
                                <th>Date Cleared</th>
                                <th>Clearance Type</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            
        </main>
        <!-- ================ END OF MAIN =================== -->

    </div>
        
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
    
    <script defer src="../assets/js//modal.js"></script>
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
