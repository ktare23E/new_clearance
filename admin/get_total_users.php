<?php
            // Establish a database connection
            $conn = mysqli_connect('localhost', 'root', '', 'clearance');

            // Query the database to get the total number of users
            $query = "SELECT COUNT(*) as total_users FROM student";
            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_assoc($result);

            // Return the total number of users
            echo $row['total_users'];
        ?>