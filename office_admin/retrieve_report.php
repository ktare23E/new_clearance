<?php


include_once 'office_header.php';
$conn = mysqli_connect('localhost', 'root', '', 'clearance');
$is_department = $_SESSION['is_department'];
$office_id = $_SESSION['office_id'];

if (isset($_POST['submit'])) {
    $clearance_progress_id = $_POST['clearance_progress_id'];
    // $office_id = $_POST['office_id'];

    // $query = "SELECT * FROM view_clearance WHERE clearance_progress_id = $clearance_progress_id";
    // $result = mysqli_query($conn, $query);
    // $row = mysqli_fetch_assoc($result);

        if($_SESSION['is_department'] === 1) {
            $query = "SELECT * FROM office WHERE is_department = 1 AND office_id = $office_id";
        } else {
            $query = "SELECT * FROM office WHERE is_department = 1";
        }

        $query2 = "SELECT * FROM clearance_progress_view WHERE clearance_progress_id = $clearance_progress_id";
        $result2 = mysqli_query($conn, $query2);
        $row2 = mysqli_fetch_assoc($result2);

        $school_year_and_sem = $row2['school_year_and_sem'];  
        $sem_name = $row2['sem_name'];


        
        $result = mysqli_query($conn, $query);
        $departments = array();
        
        while($row = mysqli_fetch_assoc($result)) {
            array_push($departments,$row);
        }
        
        // print_r($departments);
        // die();

        $num_of_cleared = 0;
        $number_not_cleared = 0;
}

?>

    <div class="reports-page-body">
        <div class="reports-main-container">
            <h1 style="text-align: center;">CLEARANCE REPORTS</h1>
            <h1 style="text-align: center;margin-top:-20px"><?= $school_year_and_sem.' '.$sem_name; ?></h1>
            <button id="print-reports-button">Print Reports</button>
            <div class="canvas-container">
                <canvas id="myChart"></canvas>
            </div>
            <div class="reports-tables-container">
                <?php foreach($departments as $i => $department):
                    $sql = "SELECT * FROM student LEFT JOIN requirement_cleared ON student.`student_id` = requirement_cleared.`student_id` WHERE student.office_id = ".$department['office_id']." ORDER BY is_cleared DESC";
                    $result2 = mysqli_query($conn, $sql); 
                    $students = array();

                    while($row = mysqli_fetch_assoc($result2)) {
                        array_push($students,$row);
                    }
                ?>
                    <div class="report-table-container">
                        <h3 class="text-muted">List of students of </h3>
                        <h3><?= $department['office_name'] ?></h3>
                        <table style="width: 100%;">
                            <thead>
                                <th>Student Name</th>
                                <th>Status</th>
                            </thead>
                            <tbody>
                
                                <?php foreach($students as $student): 
                                    if($student['is_cleared'] == 1 || $student['is_cleared'] == null) {$num_of_cleared++;}
                                    if($student['is_cleared'] === 0) {$number_not_cleared++;}
                                ?>
                                    <tr>
                                        <td><?= $student['student_first_name'].' '.$student['student_last_name']; ?></td>
                                        <td class="overall-clearance-status"><?=  ['is_cleared'] == 1 || $student['is_cleared'] == null ? "Approved": 'Not Cleared'; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                                
                            </tbody>
                        </table>
                    </div>
                    

                <?php endforeach; ?>
            </div>
            
        </div>
    </div>

    
    <script src="../assets/js/office_admin_index.js"></script>

    <script>
        document.querySelector("#print-reports-button").addEventListener("click", function() {
            window.print()
        })


    </script>

    <script>
        const ctx = document.getElementById('myChart');

        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Approved', 'Not Cleared'],
                datasets: [{
                    label: 'Requirement Complied',
                    data: [<?= $num_of_cleared; ?>, <?= $number_not_cleared?>],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>



</body>

</html>