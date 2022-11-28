<?php
    include_once 'header.php';
    // $users = $db->result('student');

    
    $conn = mysqli_connect('localhost', 'root', '', 'clearance');

    if($conn->connect_error){
        echo $conn->connect_error;
    }
    
    if(!isset($_GET['details'])){
        echo "<h1>There's an error while viewing details.</h1>";
    }else{
        $id = $_GET['details'];
        $sql = "SELECT * FROM view_clearance WHERE clearance_id = '$id'";
        $students = $conn->query($sql) or die($conn->error);
        $row = $students->fetch_assoc();
    } // dapat sa ubos ni
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
                <div class="clearance-detail-container">
                    <div class="clearance-detail-left">
                        <div class="detail-left-header-title">
                            <div>
                                <h2>Clearance information</h2>
                            </div>
                            <div class="status-title">
                                <h4>Status:</h4>
                                <h3 class="warning">Not Cleared</h3>
                            </div>
                        </div>
                        <div class="detail-left-main-content">
                            <div>
                                <div class="clearance-info-container">
                                    <h3>Owner</h3>
                                    <h4>Petered Pans</h4>
                                </div>
                                <div class="clearance-info-container">
                                    <h3>Course and Year</h3>
                                    <h4>BSIT - 4th Year</h4>
                                </div>
                                <div class="clearance-info-container">
                                    <h3>Department</h3>
                                    <h4>SICT</h4>
                                </div>
                            </div>
                            <div>
                                <div class="clearance-info-container">
                                    <h3>Clearance type</h3>
                                    <h4>Continuing</h4>
                                </div>
                                <div class="clearance-info-container">
                                    <h3>Date created</h3>
                                    <h4>10/29/2022</h4>
                                </div>
                                <div class="clearance-info-container">
                                    <h3>School year -  sem</h3>
                                    <h4>2022 - 2023, 1st sem</h4>
                                </div>
                            </div>
                            <div>
                                <div class="clearance-info-container">
                                    <h3>Status</h3>
                                    <h4>Not cleared</h4>
                                </div>
                                <div class="clearance-info-container">
                                    <h3>Date Cleared</h3>
                                    <h4>N/A</h4>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="clearance-detail-right">
                        <div class="clearance-detail-right-title">
                            <h2>Signing office status</h2>
                        </div>
                        <div class="clearance-detail-right-main-content">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Signing office</th>
                                        <th>Status</th>
                                        <th>Date Cleared</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Signing office 1</td>
                                        <td>Cleared</td>
                                        <td>11/01/2022</td>
                                    </tr>
                                    <tr>
                                        <td>Signing office 2</td>
                                        <td>Not Cleared</td>
                                        <td>N/A</td>
                                    </tr>
                                    <tr>
                                        <td>Signing office 3</td>
                                        <td>Cleared</td>
                                        <td>11/13/2022</td>
                                    </tr>
                                    <tr>
                                        <td>Signing office 4</td>
                                        <td>Not Cleared</td>
                                        <td>N/A</td>
                                    </tr>
                                    <tr>
                                        <td>Signing office 5</td>
                                        <td>Not Cleared</td>
                                        <td>N/A</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            
        </main>
        <!-- ================ END OF MAIN =================== -->

    </div>
        

    
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
