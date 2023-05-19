<?php
include_once '../connection.php';
include_once 'office_header.php';


if(!isset($_GET['requirement_details'])){
    echo "<h1>There's an error while viewing details.</h1>";
}else{
    $requirement_details = $_GET['requirement_details'];

    // $sql = "SELECT * FROM requirement_view WHERE requirement_details ='".$requirement_details."'";
    // $required_students = $conn->query($sql) or die($conn->error);
    // $row = $required_students->fetch_assoc();

    $required_students = $db->query("SELECT * FROM requirement_view WHERE requirement_details = $requirement_details");

}


?>
<div class="office-container">
    <?php
    include_once 'office_navtop.php'
    ?>

    <!-- ================ MAIN =================== -->
    <div class="main-requirements-container">
        <div class="first-main-content-container">
            <div class="form signup">
                <span class="title">
                    <h2>List of Students required by this requirement: <?php echo $requirement_details ?></h2>
                
                </span>
                <table>
                    <thead>
                        <tr>
                            <th>Student ID</th>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($required_students as $required_student) : ?>
                            <tr>
                                <td><?= $required_student->student_id; ?></td>
                                <td><?= $required_student->student_first_name; ?></td>
                                <td><?= $required_student->student_last_name ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<script src="../assets/js/office_admin_index.js"></script>

</body>

</html>