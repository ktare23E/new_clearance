<?php


include_once 'header.php';
$conn = mysqli_connect('localhost', 'root', '', 'clearance');

if (isset($_POST['submit'])) {
    $clearance_progress_id = $_POST['clearance_progress_id'];

    // $query = "SELECT * FROM view_clearance WHERE clearance_progress_id = $clearance_progress_id";
    // $result = mysqli_query($conn, $query);
    // $row = mysqli_fetch_assoc($result);

    $query = "SELECT * FROM office WHERE is_department = 1";
    $result = mysqli_query($conn, $query);
    $departments = array();
    
    while($row = mysqli_fetch_assoc($result)) {
        array_push($departments,$row);
    }
    

    $num_of_cleared = 0;
    $number_not_cleared = 0;

}

?>
<div class="reports-page-body">
    <div class="reports-main-container">
        <h1 style="text-align: center;">CLEARANCE REPORTS</h1>
        <h1 style="text-align: center;">2020-2022 - 1st semester</h1>
        <div class="canvas-container">
            <canvas id="myChart"></canvas>
        </div>
        <div class="reports-tables-container">
            <?php foreach($departments as $i => $department):
                $sql = "SELECT * FROM view_clearance WHERE clearance_progress_id = $clearance_progress_id AND office_id = '".$department['office_id']."'";
                $result2 = mysqli_query($conn, $sql); 
                $students = array();

                while($row = mysqli_fetch_assoc($result2)) {
                    array_push($students,$row);
                }
            ?>
                <div class="report-table-container">
                    <h3 class="text-muted">List of students of </h3>
                    <h3><?= $department['office_name'] ?></h3>
                    <table>
                        <thead>
                            <th>Student Name</th>
                            <th>Status</th>
                        </thead>
                        <tbody>
                            <?php foreach($students as $student): 
                                if($student['clearance_status'] == '1' || $student['clearance_status'] == null) {$num_of_cleared++;}
                                if($student['clearance_status'] === '0') {$number_not_cleared++;}
                            ?>
                                <tr>
                                    <td><?= $student['student_first_name'].' '.$student['student_last_name']; ?></td>
                                    <td class="overall-clearance-status" ><?=  $student['clearance_status'] == '1' || $student['clearance_status'] == null ? "Cleared": 'Not Cleared'; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                

            <?php endforeach; ?>
        </div>
        
    </div>
</div>
    




    <script>
        const ctx = document.getElementById('myChart');

        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Cleared', 'Not Cleared'],
                datasets: [{
                    label: 'Clearance',
                    data: [<?= $num_of_cleared; ?>, <?= $number_not_cleared?>],
                    borderWidth: 1,
                    backgroundColor: ['rgb(2, 114, 2)', 'rgb(211, 5, 5)']
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
<script src="../assets/js/index.js"></script>
</body>

</html>