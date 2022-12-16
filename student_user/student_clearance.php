<?php
    include_once 'student_header.php';

?>
    <div class="office-container">
        <?php 
            include_once 'student_navtop.php'
        ?>
        
        <!-- ================ MAIN =================== -->
        <div class="office-main-container">
            <div class="first-div-container">
                <div>
                    <h3 style="font-size: 2.5rem;">Students Panel</h3>
                </div>
            </div>


            <!-- ========================== TABS ========================== -->

            




            <div class="clearance-section-container">
                <div class="clearance-header-bar-container">
                    <h3>CLEARANCE INFORMATION</h3>
                    <div class="clearance-info-table-container">
                        <table>
                            <thead>
                                <tr>
                                    <th>NAME</th>
                                    <th>COURSE</th>
                                    <th>YEAR</th>
                                    <th>STATUS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th><?php if ($_SESSION['student_username']){
                                        echo $_SESSION['student_first_name'].' '.$_SESSION['student_last_name'];
                                        } ?>
                                    </th>
                                    <th><?php if ($_SESSION['student_username']){
                                        echo $_SESSION['student_first_name'];
                                        } ?>
                                    </th>
                                    <th>4TH</th>
                                    <th class="warning">PENDING</th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="clearance-details-container">
                    <h3>CLEARANCE DETAILS - SIGNING OFFICES STATUS</h3>
                    <div class="clearance-details-table-container">
                        <table>
                            <thead>
                                <tr>
                                    <th>SIGNING OFFICE</th>
                                    <th>STATUS</th>
                                    <th>DATE SIGNED</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>CASHIER</th>
                                    <th class="warning">PENDING</th>
                                    <th>N/A</th>
                                </tr>
                                <tr>
                                    <th>OSA</th>
                                    <th class="warning">PENDING</th>
                                    <th>N/A</th>
                                </tr>
                                <tr>
                                    <th>LIBRARY</th>
                                    <th class="success">CLEARED</th>
                                    <th>11/22/2022</th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
    
    <script>
        $(document).ready(function () {
            $('#example').DataTable();
            $('#example1').DataTable();
            $('#example2').DataTable();
            $('#example3').DataTable();
        });
    </script>
    
    <script src="../assets/js/student_index.js"></script>  
    
</body>
</html>
