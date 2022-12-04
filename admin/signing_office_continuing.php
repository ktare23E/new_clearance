<?php
    include_once 'header.php';

        $users = $db->result('new_signing_offices','clearance_type_id = 4');
    
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

            <h1>Signing Offices</h1>

            <div class="form-and-table-container">
                
                <!-- -------------  TABLE OF STUDENT INFORMATION -------------- -->
                <div class="recent-orders-student">
                    <div class="add-button-container">
                        <div>
                            <a href="signing_office_registration.php">
                                <button id="add-new-student">
                                <i class="uis uis-airplay"></i> New Signing Office</button>
                            </a>
                        </div>
                    </div>
                    <div class="add-button-container">
                        <div>
                            <a href="signing_office.php">
                                <button id="add-new-student">
                                <i class="uis uis-airplay"></i>All Clearance Type</button>
                            </a>
                        </div>
                    </div>
                    <div class="add-button-container">
                        <div>
                            <a href="signing_office_graduating.php">
                                <button id="add-new-student">
                                <i class="uis uis-airplay"></i>Graduating</button>
                            </a>
                        </div>
                    </div>
                    <div class="add-button-container">
                        <div>
                            <a href="signing_office_continuing.php">
                                <button id="add-new-student">
                                <i class="uis uis-airplay"></i>Continuing</button>
                            </a>
                        </div>
                    </div>
                    <div class="add-button-container">
                        <div>
                            <a href="signing_office_transferring.php">
                                <button id="add-new-student">
                                <i class="uis uis-airplay"></i>Transferring</button>
                            </a>
                        </div>
                    </div>

                    <div class="h2-container">
                            <h2>Signing Offices List</h2>
                    </div>

                    <table id="example" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>Office Name</th>
                                <th>School Year and Sem</th>
                                <th>Admin Name</th>
                                <th>Clearance Type</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($users as $user) : ?>
                            <tr>
                                <td><?= $user->office_name; ?></td>
                                <td><?= $user->school_year_and_sem; ?></td>
                                <td><?= $user->admin_name; ?></td>
                                <td><?= $user->clearance_type_name; ?></td>
                                <td class="primary table-action-container">
                                    <a href="edit_signing_office_info.php?edit=<?= $user->signing_office_id;?>">Update</a>
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
                                <th>School Year and Sem</th>
                                <th>Admin Name</th>
                                <th>Clearance Type</th>
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
