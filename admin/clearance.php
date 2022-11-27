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
                <div style="margin-top: 20px;">
                    <button id="show-clearance-insights">
                        <span class="material-symbols-sharp">show_chart</span>
                        Show Clearance Insights
                    </button>
                </div>
                <div id="clearance-insights">
                <div class="insights">
                    <div class="income">
                        <div style="
                            display:flex;
                            gap:5px;
                            align-items:center
                        ">
                            <span class="material-symbols-sharp">stacked_line_chart</span>
                            <h3>Active Clearance</h3>
                        </div>
                        
                        
                        <div class="middle">
                            <div class="left">
                                <h4 class="text-muted">Continuing:</h4>
                                <h1>3,548</h1>
                            </div>
                            <div class="left">
                                <h4 class="text-muted">Transfering:</h4>
                                <h1>3,548</h1>
                            </div>
                            <div class="left">
                                <h4 class="text-muted">Graduating:</h4>
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
                        <div style="
                            display:flex;
                            gap:5px;
                            align-items:center
                        ">
                            <span style="background: var(--color-warning)" class="material-symbols-sharp">bar_chart</span>
                            <h3>Uncleared / Pending</h3>
                        </div>
                        
                        
                        <div class="middle">
                            <div class="left">
                                <h4 class="text-muted">Continuing:</h4>
                                <h1>3,548</h1>
                            </div>
                            <div class="left">
                                <h4 class="text-muted">Transfering:</h4>
                                <h1>3,548</h1>
                            </div>
                            <div class="left">
                                <h4 class="text-muted">Graduating:</h4>
                                <h1>3,548</h1>
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
                        <div style="
                            display:flex;
                            gap:5px;
                            align-items:center
                        ">
                            <span class="material-symbols-sharp">analytics</span>  
                            <h3>Cleared Active</h3>
                        </div>
                        
                        
                        <div class="middle">
                            <div class="left">
                                <h4 class="text-muted">Continuing:</h4>
                                <h1>3,548</h1>
                            </div>
                            <div class="left">
                                <h4 class="text-muted">Transfering:</h4>
                                <h1>3,548</h1>
                            </div>
                            <div class="left">
                                <h4 class="text-muted">Graduating:</h4>
                                <h1>3,548</h1>
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
                </div>
                

                

                <br>
                <div class="recent-orders-student">
                    <div class="insights info">
                        <div class="income">
                            <div style="
                                display:flex;
                                gap:5px;
                                align-items:center
                            ">
                                <span class="material-symbols-sharp" style="background-color: var(--color-primary-variant);">account_circle</span>
                                <h3>Clearance Details</h3>
                            </div>
                            
                            <div class="clearance-detail">
                                <div class="left first-left">

                                    <div class="left">
                                        <h4 class="text-muted">Owner:</h4>
                                        <h1>Peter Pans</h1>
                                    </div>

                                    <div class="left">
                                        <h4 class="text-muted">Clearance type:</h4>
                                        <h1>Graduating</h1>
                                    </div>

                                    <div class="left">
                                        <h4 class="text-muted">School Year:</h4>
                                        <h1>2022 - 2023</h1>
                                    </div>

                                    <div class="left">
                                        <h4 class="text-muted">Semester:</h4>
                                        <h1>1st Semester</h1>
                                    </div>
                                    
                                    <div class="left">
                                        <h4 class="text-muted">Date Created:</h4>
                                        <h1>11/22/2022</h1>
                                    </div>
                                    <div class="left">
                                        <h4 class="text-muted">Date Cleared:</h4>
                                        <h1>12/13/2022</h1>
                                    </div>
                                    <div class="left">
                                        <h4 class="text-muted">Status:</h4>
                                        <h1 class="warning">Pending</h1>
                                    </div>
                                    
                                </div>

                                <div class="left">
                                    <div class="clearance-detail-status-header">
                                        <h2>Clearance signing office status</h2>
                                    </div>
                                    <div class="clearance-detail-status-table-container">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>Signing Office</th>
                                                    <th>Status</th>
                                                    <th>Date cleared</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Cashier</td>
                                                    <td>Not Cleared</td>
                                                    <td>N/A</td>
                                                </tr>
                                                <tr>
                                                    <td>OSA</td>
                                                    <td>Cleared</td>
                                                    <td>11/28/2022</td>
                                                </tr>
                                                <tr>
                                                    <td>SCC</td>
                                                    <td>Not Cleared</td>
                                                    <td>N/A</td>
                                                </tr>
                                                <tr>
                                                    <td>Department Office</td>
                                                    <td>Cleared</td>
                                                    <td>11/25/2022</td>
                                                </tr>
                                                <tr>
                                                    <td>Registrat</td>
                                                    <td>Not Cleared</td>
                                                    <td>N/A</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    
                                </div>


                                
                            </div>

                            <small class="text-muted">Youtube Channel : codingwithKristian</small>
                        </div>
                    </div>

                    <div class="add-button-container">

                        <div class="h2-container">
                                <h2>Clearance list</h2>
                                
                        </div>

                        <input type="checkbox" id="checkAll" style='
                                    display:block;background-color:black; appearance:auto;
                                    position:absolute;
                                    top:100px;
                                    left:40px;
                                    z-index:10;
                                    '/>
                    </div>
                    
                    <table id="example" class="display" style="width:100%">
                        <thead>
                            <tr>
                                
                                <th></th>
                                <th>Student ID</th>
                                <th>Student First Name</th>
                                <th>Student Last Name</th>
                                <th>School Year</th>
                                <th>Semester</th>
                                <th>Clearance Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                        <tfoot>
                            <tr>
                                <th><input type="checkbox"></th>
                                <th>Student ID</th>
                                <th>Student First Name</th>
                                <th>Student Last Name</th>
                                <th>School Year</th>
                                <th>Semester</th>
                                <th>Clearance Status</th>
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
                ajax: 'server_clearance.php',
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

            $("#show-clearance-insights").click(function(){
                $("#clearance-insights").slideToggle()
            })
            

            
        });


    </script>
</body>
</html>
