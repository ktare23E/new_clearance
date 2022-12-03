<?php
    include_once 'student_header.php';

?>
    <div class="office-container">
        <?php 
            include_once 'student_navtop.php'
        ?>
        
        <!-- ================ MAIN =================== -->
        <div class="main-requirements-container">
            <div class="first-main-content-container">
                <div class="form signup">
                    <span class="title"><h2>List of Clearances</h2></span>
                    
                </div>
                <div class="form signup">
                    <span class="title"><h2>Add new requirements</h2></span>
                    <form action="" method="POST">
                        <div class="input-field-container">
                            <div class="input-field sy-sem-select">
                                <select name="student_year" id="year-level-option">
                                    <option value="0" >School year and sem</option>
                                    <option value="1st Year">1st Year</option>
                                    <option value="2nd Year">2nd Year</option>
                                    <option value="3rd Year">3rd Year</option>
                                    <option value="4th Year">4th Year</option>
                                </select>
                                <i class="uil uil-angle-down" id="uil-arrow-down"></i>
                            </div>
                            <div class="input-field sy-sem-select">
                                <select name="student_year" id="year-level-option">
                                    <option value="0" >Clearance Type</option>
                                    <option value="1st Year">Graduating</option>
                                    <option value="2nd Year">Continuing</option>
                                    <option value="3rd Year">Transfering</option>
                                    
                                </select>
                                <i class="uil uil-angle-down" id="uil-arrow-down"></i>
                            </div>
                        </div>
                        <div class="input-field">
                            <textarea name="" id="" cols="30" rows="10" required></textarea>
                        </div>
                        <div class="input-field button">
                            <input type="submit" value="Create Account">
                        </div>
                    </form>
                </div>
            </div>
            
        </div>

        
    </div>
    
    
    <script src="../assets/js/office_admin_index.js"></script>    

    
</body>
</html>
