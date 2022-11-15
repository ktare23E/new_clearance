<?php
    include_once 'header.php';
        $users = $db->result('office');
    // $users = $db->result('offices');
    // $users = $db->result('office_account');

    
?>
    <div class="container-student">
        <!-- sidebar -->
        <aside>
            <div class="top">
                <div class="logo">
                    <img src="../images/logo.png" alt="">
                    <h2>NMSC<span class="danger">CLEARANCE</span> </h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-symbols-sharp">close</span>
                </div>
            </div>

            <div class="sidebar">
                <a href="index.php">
                    <span class="material-symbols-sharp">grid_view</span>
                    <h3>Dashboard</h3>
                </a>
                <a href="student.php">
                    <span class="material-symbols-sharp">person_outline</span>
                    <h3>Student</h3>
                </a>
                <a href="office.php">
                    <span class="material-symbols-sharp">meeting_room</span>
                    <h3>Office</h3>
                </a>
                <a href="/school-year-sem.html">
                    <span class="material-symbols-sharp">calendar_month</span>
                    <h3>School Year and Sem</h3>
                </a>
                <a href="signing-office.html">
                    <span class="material-symbols-sharp">edit_note</span>
                    <h3>Signing Office</h3>
                    <span class="message-count">26</span>
                </a>
                <a href="clearance.html">
                    <span class="material-symbols-sharp">inventory</span>
                    <h3>Clearance</h3>
                </a>
                <a href="/department.html">
                    <span class="material-symbols-sharp">corporate_fare</span>
                    <h3>Department</h3>
                </a>
                <a href="/reports.html">
                    <span class="material-symbols-sharp">report</span>
                    <h3>Reports</h3>
                </a>
                <a href="../logout.php">
                    <span class="material-symbols-sharp">logout</span>
                    <h3>Logout</h3>
                </a>
            </div>
        </aside>
        <!------------------ END OF ASIDE ---------------->

        <main class="main-student">
            <div class="right">
                <div class="top">
                    <button id="menu-btn" class="menu-btn">
                        <span class="material-symbols-sharp">menu</span>
                    </button>
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

            <h1>Office Account</h1>

            <div class="form-and-table-container">
                
                <!-- -------------  TABLE OF STUDENT INFORMATION -------------- -->
                <div class="recent-orders-student">
                    <div class="add-button-container">
                        <div>
                            <a href="office_registration.php">
                                <button id="add-new-student">Add new office</button>
                            </a>
                        </div>
                    </div>

                    <div class="h2-container">
                            <h2>Office List</h2>
                    </div>

                    <table id="example" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>Office Name</th>
                                <th>Office Email</th>
                                <th>Office Phone Number</th>
                                <th>Office Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($users as $user) : ?>
                            <tr>
                                <td><?= $user->office_name; ?></td>
                                <td><?= $user->office_email; ?></td>
                                <td><?= $user->office_phone_number; ?></td>
                                <td><?= $user->office_status; ?></td>
                                <td class="primary table-action-container">
                                    <a href="edit_office_info.php?edit=<?= $user->office_id?>">Update</a>
                                    <a href="office_view.php?details=<?= $user->office_id?>">View Details</a>
                                        <!-- <input type="hidden" name="student_id" value="<?= $user->student_id; ?>"> -->
                                        <!-- <button type="submit" class="danger delete" name="delete" data-id="<?= $user->student_id; ?>">
                                            <span class="material-symbols-outlined">delete</span>
                                        </button> -->
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        <tfoot>
                            <tr>
                                <th>Office Name</th>
                                <th>Office Email</th>
                                <th>Office Phone Number</th>
                                <th>Office Status</th>
                                <th>Actions</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            
        </main>
        <!-- ================ END OF MAIN =================== -->
    </div>
<!-- <script>
            $(document).ready(function(){
                $('.delete').on('click',function(){
                    let student_id = $(this).attr('data-id');
                    Swal.fire({
                        title: 'Are you sure?',
                        text: "You won't be able to revert this!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $.ajax({
                                type: 'post',
                                url: 'deleteinfo.php',
                                data: {student_id:student_id},
                                success: function(response){
                                    if(response === "Deleted"){
                                        Swal.fire(
                                            'Deleted!',
                                            'Your file has been deleted.',
                                            'success'
                                        )
                                    }else{
                                        Swal.fire(
                                            'Error',
                                            'Error deleting data.',
                                            'error'
                                        )
                                    }
                                    
                                    setTimeout(() => { 
                                        location.reload(true);
                                    }, 1000);
                                } 
                            })
                        }
                    })
                })
            })
        </script> -->
    
    <!-- <script src="../assets/js/student-info.js"></script> -->
    
    <script defer src="../assets/js//modal.js"></script>
    <script src="../assets/js/index.js"></script>
    <script defer src="../assets/js/active.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>
</body>
</html>
