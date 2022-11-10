<?php
    include_once 'header.php';
    $users = $db->result('student');

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
                <a href="#">
                    <span class="material-symbols-sharp">person_outline</span>
                    <h3>Student</h3>
                </a>
                <a href="/office.html">
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
                    <button id="menu-btn">
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

            <h1>Student Account</h1>

            <div class="form-and-table-container">
                
                <!-- -------------  TABLE OF STUDENT INFORMATION -------------- -->
                <div class="recent-orders-student">
                    <div class="add-button-container">
                        <div>
                            <a href="student_registration.php">
                                <button id="add-new-student">Add new student</button>
                            </a>
                        </div>
                        <div class="upload-student-csv-container">
                            <label for="" class="label-csv">Register Via .csv file</label>
                            <form action="upload_csv.php" method="post" enctype="multipart/form-data" name="upload_csv">
                                <div class="form-input-file-csv-container">
                                        <label for="input-file">Choose CSV File</label>
                                        <input type="file" name="file" accept=".csv" id="input-file">
                                        <button type="submit" name="import" class="submit-csv-file-button">
                                            Import
                                            <span class="material-symbols-sharp">file_upload</span>
                                            
                                        </button>
                                </div>
                            </form>
                        </div>

                    </div>
                    <div class="h2-container">
                            <h2>Students List</h2>
                    </div>

                    <table id="example" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>Student ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Year</th>
                                <th>Course</th>
                                <th>Username</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($users as $user) : ?>
                            <tr>
                                <td class="student-id"><?= $user->student_id; ?></td>
                                <td><?= $user->student_first_name; ?></td>
                                <td><?= $user->student_last_name; ?></td>
                                <td><?= $user->student_year; ?></td>
                                <td><?= $user->student_course;?></td>
                                <td><?= $user->student_username; ?></td>
                                <td class="primary">
                                    <a href="edit_student_info.php?edit=<?= $user->student_id?>">Update</a>
                                    <a href="student_view.php?details=<?= $user->student_id?>">View Details</a>
                                        <!-- <input type="hidden" name="student_id" value="<?= $user->student_id; ?>"> -->
                                        <!-- <button type="submit" class="danger delete" name="delete" data-id="<?= $user->student_id; ?>">
                                            <span class="material-symbols-outlined">delete</span>
                                        </button> -->
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        <tfoot>
                            <tr>
                                <th>Student ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Year</th>
                                <th>Course</th>
                                <th>Username</th>
                                <th>Actions</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            
        </main>
        <!-- ================ END OF MAIN =================== -->

    </div>

    
    <!-- =========== MODAL ============ -->

    <!-- <button data-modal-target="#modal">Open Modal</button> -->
    <div class="modal" id="modal">
        <!-- <div class="modal-header">
            <div class="title">Example Modal</div>
            
        </div>
        <div class="modal-body">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quod alias ut illo doloremque eum ipsum obcaecati distinctio debitis reiciendis quae quia soluta totam doloribus quos nesciunt necessitatibus, consectetur quisquam accusamus ex, dolorum, dicta vel? Nostrum voluptatem totam, molestiae rem at ad autem dolor ex aperiam. Amet assumenda eos architecto, dolor placeat deserunt voluptatibus tenetur sint officiis perferendis atque! Voluptatem maxime eius eum dolorem dolor exercitationem quis iusto totam! Repudiandae nobis nesciunt sequi iure! Eligendi, eius libero. Ex, repellat sapiente!
        </div> -->
        <div class="modal-container">
            <div class="modal-info-container-header">
                <button data-close-button class="close-button">
                    <span class="material-symbols-sharp">close</span>
                </button>
            </div>
            <div class="modal-info-container">
                <img src="../images/profile-5.jpg" alt="">
            </div>
            <div class="modal-info-container name-info"> 
                <div class="first-name">Vhen&nbsp;</div>
                <div class="last-name">Tong Great</div>
            </div>
            <div class="modal-info-container">
                <div class="course">BSIT -&nbsp;</div>
                <div class="year">4th year</div>
            </div>
            <div class="modal-info-container name-info"> 
                <div class="email">vhentong.great@nmsc.edu.ph</div>
            </div>
            <div class="buttons modal-info-container">
                <button class="edit-button" id="modal-edit-button">Edit Info</button>
                <button class="delete-button">Delete</button>
            </div>
        </div>
        
    </div>
    <div id="overlay"></div>
    <!-- =========== UPDATE MODAL ============ -->

    <!-- <button id="open-update-modal">Open Modal</button> -->
    <!-- <div class="update-modal" id="update-modal">
        <div class="update-modal-container">
            <div class="modal-info-container-header">
                <button class="close-button" id="update-modal-close-button">
                    <span class="material-symbols-sharp">close</span>
                </button>
            </div>
            <div class="student-registration">
                <div class="form signup">
                    <span class="title">Update Student Information</span>
                    
                    <form action="update.php" action="POST">

                            <div class="input-field">
                                    <input type="text" placeholder="Student Id" id="update_student_id" name="update_student_id" required>
                                    <i class="uil uil-keyhole-circle"></i>
                            </div>
                        
                            <div class="input-field">
                                <input type="text" placeholder="First Name" name="update_fname" id="update_fname" required>
                                <i class="uil uil-user"></i>
                            </div>
                            <div class="input-field">
                                <input type="text" placeholder="Last Name" name="update_lname" id="update_lname" required>
                                <i class="uil uil-user"></i>
                            </div>
                        
                        
                            <div class="input-field">
                                <input type="text" placeholder="Year" name="update_year" id="update_year" required>
                                <i class="uil uil-user"></i>
                            </div>
                            <div class="input-field">
                                <input type="text" placeholder="Course" name="update_course" id="update_course" required>
                                <i class="uil uil-envelope icon"></i>
                            </div>
                        
                        
                            <div class="input-field">
                                <input type="text" placeholder="Username" name="update_username" id="update_username" required>
                                <i class="uil uil-envelope icon"></i>
                            </div>
                            <div class="input-field">
                                <input type="text" class="password" name="update_password" id="update_password" placeholder="Create a password" required>
                                <i class="uil uil-lock icon"></i>
                                <i class="uil uil-eye-slash showHidePw"></i>
                            </div>
                        
                        <div class="input-field button">
                            <input type="submit" name="updateData"  value="Update Account">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
    <div id="overlay-update"></div> -->


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
