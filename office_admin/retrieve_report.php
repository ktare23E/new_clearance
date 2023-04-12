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

<body style="width: 800px;">
    <div>
        <canvas id="myChart"></canvas>
        <?php foreach($departments as $i => $department):
            $sql = "SELECT * FROM student LEFT JOIN requirement_cleared ON student.`student_id` = requirement_cleared.`student_id` WHERE student.office_id = ".$department['office_id']." ORDER BY is_cleared DESC";
            $result2 = mysqli_query($conn, $sql); 
            $students = array();

            while($row = mysqli_fetch_assoc($result2)) {
                array_push($students,$row);
            }
        ?>
            <h3>List of students <?= $department['office_name'] ?></h3>
            <hr/>
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
                            <td><?=  ['is_cleared'] == 1 || $student['is_cleared'] == null ? "Approved": 'Not Cleared'; ?></td>
                        </tr>
                    <?php endforeach; ?>
                    
                </tbody>
            </table>
        <?php endforeach; ?>
    </div>

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