<?php
    include_once 'header.php';
    // $users1 = $db->result('office');
    // $users = $db->result('offices');


?>
<style>
    .intro {
    height: 100%;
    }
    .gradient-custom {
    /* fallback for old browsers */
    background: #fa709a;
    /* Chrome 10-25, Safari 5.1-6 */
    background: -webkit-linear-gradient(to bottom right, rgba(250, 112, 154, 1), rgba(254, 225, 64, 1));
    /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    background: linear-gradient(to bottom right, rgba(250, 112, 154, 1), rgba(254, 225, 64, 1))
    }
    /* Change dissabled Button color  */
    #submit:disabled{
    background-color: red;
    opacity:0.5;   
}
    
</style>
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

            <h1>Course</h1>

            <div class="form-and-table-container">

                <!-- -------------  STUDENT REGISTRATION FORM -------------- -->
                <div class="student-registration">
                    <div class="form signup">
                        <div class="back-button">
                            <a href="course.php">
                                <button id="back-button-to-office">
                                <span class="material-symbols-sharp">arrow_back</span>
                            </button>
                            </a>
                            
                        </div>
                        <span class="title">Add New Course</span>
        
                        <form action="insert_course.php" method="POST">
                            <div class="input-field-container">
                                <div class="input-field">
                                <span id="check_office"></span>
                                    <input type="text" name="course_name" placeholder="Course Name"  oninput="checkCourse()" id="course_name" required>
                                    <i class="uil uil-user"></i>
                                </div>
                                <div class="input-field">
                                    <i class="uil uil-bolt"></i>
                                    <select name="course_status" id="">
                                        <option value="Status">Status</option>
                                        <option value="Active">Active</option>
                                        <option value="Inactive">Inactive</option>
                                    </select>
                                </div>
                            </div>
                            <div class="input-field-container">
                                <div class="input-field">
                                    <label for="">Course Description</label>
                                    <textarea style="border-style: 1px solid;" name="course_description" id="" rows="4" cols="50"></textarea>
                                </div>
                                <div class="input-field">
                                    <label for="">Department Name</label>
                                    <select name="department_id" id="">
                                            <?php $departments = $db->result('department');?>
                                            <?php foreach($departments as $department):?>
                                            <?php if($department->department_id == $department_id):?>  
                                            <option value="<?= $department->department_id; ?>" selected><?= $department->department_name; ?></option>
                                            <?php else:?>
                                                <option value="<?= $department->department_id; ?>"><?= $department->department_name; ?></option>
                                            <?php endif;?>
                                            <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="input-field button">
                                <input type="submit" id="submit" value="Create Course">
                            </div>
                        </form>
                    </div>
                </div>
                <!-- -------------  END OF REGISTRATION -------------- -->
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
    <div class="update-modal" id="update-modal">
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
    <div id="overlay-update"></div>

<script>
function checkCourse() {
    
    jQuery.ajax({
    url: "check_course.php",
    data:'course_name='+$("#course_name").val(),
    type: "POST",
    success:function(data){
        $("#check_office").html(data);
    },
    error:function (){}
    });
}
</script>
    
    <!-- <script src="../assets/js/student-info.js"></script> -->
    
    <script defer src="../assets/js//modal.js"></script>
    <script src="../assets/js/index.js"></script>
    <script defer src="../assets/js/active.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    
</body>
</html>
