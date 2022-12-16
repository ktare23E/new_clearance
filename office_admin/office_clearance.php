<?php
    include_once 'office_header.php';

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
                $db_connection = mysqli_connect("localhost", "root", "", "clearance");

                $query = "SELECT COUNT(*) FROM student"; 
                $result = mysqli_query($db_connection, $query); 

                $total_users = mysqli_fetch_array($result); 

                mysqli_close($db_connection); 
            ?>

            <div class="student-panel-insights-container">
                <div class="student-insight-container">
                    <div class="upper-insight">
                        <div class="left-logo-insight">
                            <span class="material-symbols-sharp">groups_2  </span>
                        </div>
                        <div class="right-insights">
                            <h3 class="success">Active students</h3>
                            <h2><?= $total_users[0]; ?></h2>
                        </div>
                        
                    </div>
                    <div class="lower-insight">
                        <small>Ajinomoto of sardines</small>
                    </div>
                </div>

                <div class="student-insight-container">
                    <div class="upper-insight">
                        <div class="left-logo-insight">
                            <span class="material-symbols-sharp">groups_2  </span>
                        </div>
                        <div class="right-insights">
                            <h3 class="success">Active students <span class="text-muted">under you</span>  </h3>
                            <h2><?= $total_users[0]; ?></h2>
                        </div>
                        <div class="right-insights">
                            <h3>Insight data 1</h3>
                            <h2>1,234</h2>
                        </div>
                        <div class="right-insights">
                            <h3>Insight data 2</h3>
                            <h2>1,234</h2>
                        </div>
                    </div>
                    <div class="lower-insight">
                        <small>Ajinomoto of sardines</small>
                    </div>
                </div>
            </div>

            <div class="clearance-tabs-section-container">
                <div class="ul-tabs-container">
                    <ul class="tabs">
                        <li data-tab-target="#continuing" class="active tab">Continuing</li>
                        <li data-tab-target="#graduating" class="tab">Graduating</li>
                        <li data-tab-target="#transfering" class="tab">Transfering</li>
                    </ul>
                </div>
            </div>



            <div class="student-table-data-container">
                <h2>Lists of students</h2>
                <div class="table-container">
                <table id="example" class="display" style="width:100%">
                        <thead>
                            <tr>
                                
                                <th></th>
                                <th>Clearance ID</th>
                                <th>Student ID</th>
                                <th>Student First Name</th>
                                <th>Student Last Name</th>
                                <th>School Year and Sem</th>
                                <th>Clearance Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                        <tfoot>
                            <tr>
                                <th><input type="checkbox"></th>
                                <th>Clearance ID</th>
                                <th>Student ID</th>
                                <th>Student First Name</th>
                                <th>Student Last Name</th>
                                <th>School Year and Sem</th>
                                <th>Clearance Status</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
                
            
        </div>

        
    </div>
    
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

    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>
    
    <script src="../assets/js/office_admin_index.js"></script> 
    
</body>
</html>
