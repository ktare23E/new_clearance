<?php
    include_once 'student_header.php';

?>
    <div class="office-container">
        <?php 
            include_once 'student_navtop.php'
        ?>
        
        <!-- ================ MAIN =================== -->
        <div class="office-main-container">
            <div class="first-div-container">
                <div>
                    <h3 style="font-size: 2.5rem;">Students Panel</h3>
                </div>
            </div>

            <div class="student-panel-insights-container">
                <div class="student-insight-container">
                    <div class="upper-insight">
                        <div class="left-logo-insight">
                            <span class="material-symbols-sharp">groups_2  </span>
                        </div>
                        <div class="right-insights">
                            <h3 class="success">Active students</h3>
                            <h2>5,286</h2>
                        </div>
                        
                    </div>
                    <div class="lower-insight">
                        <small>Ajinomoto of sardines</small>
                    </div>
                </div>

                <div class="student-insight-container">
                    <div class="upper-insight">
                        <div class="left-logo-insight">
                            <span class="material-symbols-sharp">groups_2  </span>
                        </div>
                        <div class="right-insights">
                            <h3 class="success">Active students <span class="text-muted">under you</span>  </h3>
                            <h2>5,286</h2>
                        </div>
                        <div class="right-insights">
                            <h3>Insight data 1</h3>
                            <h2>1,234</h2>
                        </div>
                        <div class="right-insights">
                            <h3>Insight data 2</h3>
                            <h2>1,234</h2>
                        </div>
                    </div>
                    <div class="lower-insight">
                        <small>Ajinomoto of sardines</small>
                    </div>
                </div>
            </div>

            <!-- ========================== TABS ========================== -->

            <div class="clearance-tabs-section-container">
                <div class="ul-tabs-container">
                    <ul class="tabs">
                        <li data-tab-target="#continuing" class="active tab">Continuing</li>
                        <li data-tab-target="#graduating" class="tab">Graduating</li>
                        <li data-tab-target="#transfering" class="tab">Transfering</li>
                    </ul>
                </div>
                <div class="tab-content-container">
                    <div class="tab-content">
                        <div id="continuing" data-tab-content class="active">
                            <div class="tab-info-container">
                                <div style="text-align: center;"><h2>Clearance for Continuing Students</h2> </div>
                                <div class="tab-info-insight">
                                    <div class="student-insight-container" style="box-shadow: none;border:2px solid var(--color-light)">
                                        <div class="upper-insight">
                                            <div class="left-logo-insight">
                                                <span class="material-symbols-sharp">groups_2  </span>
                                            </div>
                                            <div class="right-insights">
                                                <h3 class="success">Active students</h3>
                                                <h2>5,286</h2>
                                            </div>
                                            
                                        </div>
                                        <div class="lower-insight">
                                            <small>Ajinomoto of sardines</small>
                                        </div>
                                    </div>

                                    <div class="student-insight-container" style="box-shadow: none;border:2px solid var(--color-light)">
                                        <div class="upper-insight">
                                            <div class="left-logo-insight">
                                                <span class="material-symbols-sharp">groups_2  </span>
                                            </div>
                                            <div class="right-insights">
                                                <h3 class="success">Active students</h3>
                                                <h2>5,286</h2>
                                            </div>
                                            
                                        </div>
                                        <div class="lower-insight">
                                            <small>Ajinomoto of sardines</small>
                                        </div>
                                    </div>

                                    <div class="student-insight-container" style="box-shadow: none;border:2px solid var(--color-light)">
                                        <div class="upper-insight">
                                            <div class="left-logo-insight">
                                                <span class="material-symbols-sharp">groups_2  </span>
                                            </div>
                                            <div class="right-insights">
                                                <h3 class="success">Active students</h3>
                                                <h2>5,286</h2>
                                            </div>
                                            
                                        </div>
                                        <div class="lower-insight">
                                            <small>Ajinomoto of sardines</small>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="clearance-section-container">
                                    <div class="clearance-header-bar-container">
                                        <h3>CLEARANCE INFORMATION</h3>
                                        <div class="clearance-info-table-container">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th>NAME</th>
                                                        <th>COURSE</th>
                                                        <th>YEAR</th>
                                                        <th>STATUS</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th>AL CEDRIC DARIO</th>
                                                        <th>BSIT</th>
                                                        <th>4TH</th>
                                                        <th class="warning">PENDING</th>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="clearance-details-container">
                                        <h3>CLEARANCE DETAILS - SIGNING OFFICES STATUS</h3>
                                        <div class="clearance-details-table-container">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th>SIGNING OFFICE</th>
                                                        <th>STATUS</th>
                                                        <th>DATE SIGNED</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th>CASHIER</th>
                                                        <th class="warning">PENDING</th>
                                                        <th>N/A</th>
                                                    </tr>
                                                    <tr>
                                                        <th>OSA</th>
                                                        <th class="warning">PENDING</th>
                                                        <th>N/A</th>
                                                    </tr>
                                                    <tr>
                                                        <th>LIBRARY</th>
                                                        <th class="success">CLEARED</th>
                                                        <th>11/22/2022</th>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <div class="table-container" style="box-shadow: none;border:2px solid var(--color-light)">
                                    <table id="example1" class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011-04-25</td>
                                                <td>$320,800</td>
                                            </tr>
                                            <tr>
                                                <td>Garrett Winters</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>63</td>
                                                <td>2011-07-25</td>
                                                <td>$170,750</td>
                                            </tr>
                                            
                                            <tr>
                                                <td>Jonas Alexander</td>
                                                <td>Developer</td>
                                                <td>San Francisco</td>
                                                <td>30</td>
                                                <td>2010-07-14</td>
                                                <td>$86,500</td>
                                            </tr>
                                            <tr>
                                                <td>Shad Decker</td>
                                                <td>Regional Director</td>
                                                <td>Edinburgh</td>
                                                <td>51</td>
                                                <td>2008-11-13</td>
                                                <td>$183,000</td>
                                            </tr>
                                            <tr>
                                                <td>Michael Bruce</td>
                                                <td>Javascript Developer</td>
                                                <td>Singapore</td>
                                                <td>29</td>
                                                <td>2011-06-27</td>
                                                <td>$183,000</td>
                                            </tr>
                                            <tr>
                                                <td>Donna Snider</td>
                                                <td>Customer Support</td>
                                                <td>New York</td>
                                                <td>27</td>
                                                <td>2011-01-25</td>
                                                <td>$112,000</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div id="graduating" data-tab-content>
                            <div class="tab-info-container">
                                <div style="text-align: center;"><h2>Clearance for Graduating Students</h2> </div>
                                <div class="tab-info-insight">
                                    <div class="student-insight-container" style="box-shadow: none;border:2px solid var(--color-light)">
                                        <div class="upper-insight">
                                            <div class="left-logo-insight">
                                                <span class="material-symbols-sharp">groups_2  </span>
                                            </div>
                                            <div class="right-insights">
                                                <h3 class="success">Active students</h3>
                                                <h2>5,286</h2>
                                            </div>
                                            
                                        </div>
                                        <div class="lower-insight">
                                            <small>Ajinomoto of sardines</small>
                                        </div>
                                    </div>

                                    <div class="student-insight-container" style="box-shadow: none;border:2px solid var(--color-light)">
                                        <div class="upper-insight">
                                            <div class="left-logo-insight">
                                                <span class="material-symbols-sharp">groups_2  </span>
                                            </div>
                                            <div class="right-insights">
                                                <h3 class="success">Active students</h3>
                                                <h2>5,286</h2>
                                            </div>
                                            
                                        </div>
                                        <div class="lower-insight">
                                            <small>Ajinomoto of sardines</small>
                                        </div>
                                    </div>

                                    <div class="student-insight-container" style="box-shadow: none;border:2px solid var(--color-light)">
                                        <div class="upper-insight">
                                            <div class="left-logo-insight">
                                                <span class="material-symbols-sharp">groups_2  </span>
                                            </div>
                                            <div class="right-insights">
                                                <h3 class="success">Active students</h3>
                                                <h2>5,286</h2>
                                            </div>
                                            
                                        </div>
                                        <div class="lower-insight">
                                            <small>Ajinomoto of sardines</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-container" style="box-shadow: none;border:2px solid var(--color-light)">
                                    <table id="example2" class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011-04-25</td>
                                                <td>$320,800</td>
                                            </tr>
                                            <tr>
                                                <td>Garrett Winters</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>63</td>
                                                <td>2011-07-25</td>
                                                <td>$170,750</td>
                                            </tr>
                                            
                                            <tr>
                                                <td>Jonas Alexander</td>
                                                <td>Developer</td>
                                                <td>San Francisco</td>
                                                <td>30</td>
                                                <td>2010-07-14</td>
                                                <td>$86,500</td>
                                            </tr>
                                            <tr>
                                                <td>Shad Decker</td>
                                                <td>Regional Director</td>
                                                <td>Edinburgh</td>
                                                <td>51</td>
                                                <td>2008-11-13</td>
                                                <td>$183,000</td>
                                            </tr>
                                            <tr>
                                                <td>Michael Bruce</td>
                                                <td>Javascript Developer</td>
                                                <td>Singapore</td>
                                                <td>29</td>
                                                <td>2011-06-27</td>
                                                <td>$183,000</td>
                                            </tr>
                                            <tr>
                                                <td>Donna Snider</td>
                                                <td>Customer Support</td>
                                                <td>New York</td>
                                                <td>27</td>
                                                <td>2011-01-25</td>
                                                <td>$112,000</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div id="transfering" data-tab-content>
                            <div class="tab-info-container">
                                <div style="text-align: center;"><h2>Clearance for Transfering Students</h2> </div>
                                <div class="tab-info-insight">
                                    <div class="student-insight-container" style="box-shadow: none;border:2px solid var(--color-light)">
                                        <div class="upper-insight">
                                            <div class="left-logo-insight">
                                                <span class="material-symbols-sharp">groups_2  </span>
                                            </div>
                                            <div class="right-insights">
                                                <h3 class="success">Active students</h3>
                                                <h2>5,286</h2>
                                            </div>
                                            
                                        </div>
                                        <div class="lower-insight">
                                            <small>Ajinomoto of sardines</small>
                                        </div>
                                    </div>

                                    <div class="student-insight-container" style="box-shadow: none;border:2px solid var(--color-light)">
                                        <div class="upper-insight">
                                            <div class="left-logo-insight">
                                                <span class="material-symbols-sharp">groups_2  </span>
                                            </div>
                                            <div class="right-insights">
                                                <h3 class="success">Active students</h3>
                                                <h2>5,286</h2>
                                            </div>
                                            
                                        </div>
                                        <div class="lower-insight">
                                            <small>Ajinomoto of sardines</small>
                                        </div>
                                    </div>

                                    <div class="student-insight-container" style="box-shadow: none;border:2px solid var(--color-light)">
                                        <div class="upper-insight">
                                            <div class="left-logo-insight">
                                                <span class="material-symbols-sharp">groups_2  </span>
                                            </div>
                                            <div class="right-insights">
                                                <h3 class="success">Active students</h3>
                                                <h2>5,286</h2>
                                            </div>
                                            
                                        </div>
                                        <div class="lower-insight">
                                            <small>Ajinomoto of sardines</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-container" style="box-shadow: none;border:2px solid var(--color-light)">
                                    <table id="example3" class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011-04-25</td>
                                                <td>$320,800</td>
                                            </tr>
                                            <tr>
                                                <td>Garrett Winters</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>63</td>
                                                <td>2011-07-25</td>
                                                <td>$170,750</td>
                                            </tr>
                                            
                                            <tr>
                                                <td>Jonas Alexander</td>
                                                <td>Developer</td>
                                                <td>San Francisco</td>
                                                <td>30</td>
                                                <td>2010-07-14</td>
                                                <td>$86,500</td>
                                            </tr>
                                            <tr>
                                                <td>Shad Decker</td>
                                                <td>Regional Director</td>
                                                <td>Edinburgh</td>
                                                <td>51</td>
                                                <td>2008-11-13</td>
                                                <td>$183,000</td>
                                            </tr>
                                            <tr>
                                                <td>Michael Bruce</td>
                                                <td>Javascript Developer</td>
                                                <td>Singapore</td>
                                                <td>29</td>
                                                <td>2011-06-27</td>
                                                <td>$183,000</td>
                                            </tr>
                                            <tr>
                                                <td>Donna Snider</td>
                                                <td>Customer Support</td>
                                                <td>New York</td>
                                                <td>27</td>
                                                <td>2011-01-25</td>
                                                <td>$112,000</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <div class="student-table-data-container">
                <h2>Lists of students</h2>
                <div class="table-container">
                    <table id="example" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011-04-25</td>
                                <td>$320,800</td>
                            </tr>
                            <tr>
                                <td>Garrett Winters</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>63</td>
                                <td>2011-07-25</td>
                                <td>$170,750</td>
                            </tr>
                            
                            <tr>
                                <td>Jonas Alexander</td>
                                <td>Developer</td>
                                <td>San Francisco</td>
                                <td>30</td>
                                <td>2010-07-14</td>
                                <td>$86,500</td>
                            </tr>
                            <tr>
                                <td>Shad Decker</td>
                                <td>Regional Director</td>
                                <td>Edinburgh</td>
                                <td>51</td>
                                <td>2008-11-13</td>
                                <td>$183,000</td>
                            </tr>
                            <tr>
                                <td>Michael Bruce</td>
                                <td>Javascript Developer</td>
                                <td>Singapore</td>
                                <td>29</td>
                                <td>2011-06-27</td>
                                <td>$183,000</td>
                            </tr>
                            <tr>
                                <td>Donna Snider</td>
                                <td>Customer Support</td>
                                <td>New York</td>
                                <td>27</td>
                                <td>2011-01-25</td>
                                <td>$112,000</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
                
            
        </div>

        
    </div>
    
    <script>
        $(document).ready(function () {
            $('#example').DataTable();
            $('#example1').DataTable();
            $('#example2').DataTable();
            $('#example3').DataTable();
        });
    </script>
    
    <script src="../assets/js/student_index.js"></script>  
    
</body>
</html>
