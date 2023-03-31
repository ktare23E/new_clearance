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

<body style="width: 800px;">
<div>
        <canvas id="myChart"></canvas>
        <?php foreach($departments as $i => $department):
        $sql = "SELECT * FROM view_clearance WHERE clearance_progress_id = $clearance_progress_id AND office_id = '".$department['office_id']."'";
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
                        if($student['clearance_status'] == '1' || $student['clearance_status'] == null) {$num_of_cleared++;}
                        if($student['clearance_status'] === '0') {$number_not_cleared++;}
                    ?>
                        <tr>
                            <td><?= $student['student_first_name'].' '.$student['student_last_name']; ?></td>
                            <td><?=  $student['clearance_status'] == '1' || $student['clearance_status'] == null ? "Cleared": 'Not Cleared'; ?></td>
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
                labels: ['Cleared', 'Not Cleared'],
                datasets: [{
                    label: 'Clearance',
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