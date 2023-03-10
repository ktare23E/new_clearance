<?php
    include_once 'header.php';
    // $users = $db->result('student_details');

    
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
                    <h1>Student Clearance</h1>
                    <div class="theme-toggler">
                        <span class="material-symbols-sharp active">light_mode</span>
                        <span class="material-symbols-sharp">dark_mode</span>
                    </div>
                    <div class="profile">
                        <div class="info">
                            <p>Hey, <b>World</b></p>
                            <small class="text-muted">Admin</small>
                        </div>
                        <div class="profile-photo">
                            <img src="../images/profile-1.jpg" alt="">
                        </div>
                    </div>
                </div>
                
    
            </div>

            

            
                
                <!-- -------------  TABLE OF STUDENT INFORMATION -------------- -->
                <div class="recent-orders-student">
                    <div class="add-button-container">

                        <div class="h2-container">
                            <h3>Clearance of</h3>
                            <h2>AL CEDRIC DARIO</h2>
                        </div>
                        
                    </div>
                    
                    <div class="table-container">
                            <table id="example" class="display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>School year and sem</th>
                                        <th>Clearance Type</th>
                                        <th>Status</th>
                                        <th>Remarks</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>2019-2222</td>
                                        <td>Gradwaiting</td>
                                        <td>Cleared</td>
                                        <td>Done</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    
                </div>
            
            
        </main>
        <!-- ================ END OF MAIN =================== -->

    </div>
        

        









<script>
            $(document).ready(function(){
                $("#register-csv-file-btn").click(function(){
                    if($("#register-csv-file-btn span:nth-child(2)").html() == "arrow_forward_ios"){
                        $("#register-csv-file-btn span:nth-child(2)").html("arrow_back_ios")
                    }else {
                        $("#register-csv-file-btn span:nth-child(2)").html("arrow_forward_ios")
                    }
                    
                    $(".upload-student-csv-container").slideToggle(200)
                })
            })
</script>

        <script type="text/javascript">
            $(document).ready(function(){
                // Check/Uncheck ALl
                $('#checkAll').change(function(){
                    if($(this).is(':checked')){
                        $('input[name="update[]"]').prop('checked',true);
                    }else{
                        $('input[name="update[]"]').each(function(){
                            $(this).prop('checked',false);
                        }); 
                    }
                });
                // Checkbox click
                $('input[name="update[]"]').click(function(){
                    var total_checkboxes = $('input[name="update[]"]').length;
                    var total_checkboxes_checked = $('input[name="update[]"]:checked').length;
                    if(total_checkboxes_checked == total_checkboxes){
                        $('#checkAll').prop('checked',true);
                    }else{
                        $('#checkAll').prop('checked',false);
                    }
                });
            }); 
        </script>
</body>
</html>
