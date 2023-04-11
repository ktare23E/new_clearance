<?php
    include_once 'office_header.php';


    $conn = mysqli_connect('localhost', 'root', '', 'clearance');

    if($conn->connect_error){
        echo $conn->connect_error;
    }
    
    if(!isset($_GET['details'])){
        echo "<h1>There's an error while viewing details.</h1>";
    }else{
        $id = $_GET['details'];
        $sql = "SELECT * FROM student_details WHERE student_id = '$id'";
        $students = $conn->query($sql) or die($conn->error);
        $row = $students->fetch_assoc();
    }
    
    
?>

    <div class="office-container">
        <?php 
            include_once 'office_navtop.php'
        ?>
        
        <!-- ================ MAIN =================== -->
        <div class="office-main-container">
            <div class="first-div-container">
                <div>
                    <h3 style="font-size: 2rem;">Student Clearances</h3>
                </div>
            </div>

            <div class="table-container">
                        <table id="example" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>School year and sem</th>
                                    <th>Clearance Type</th>
                                    <th>Status</th>
                                    <th>Remarks</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>2020-2021 1st sem</td>
                                    <td>Continuing</td>
                                    <td>Cleared</td>
                                    <td>Done</td>
                                    <td class="primary table-action-container">
                                        <a class="view-link" href="clearance_view.php">View Details</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                
        </div>
    </div>

    
    <script src="../assets/js/office_admin_index.js"></script> 

</body>
</html>
