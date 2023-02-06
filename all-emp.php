<?php 
    include_once 'db_conn.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<?php
include('inc/head.php')
?>
<title>All Employee</title>

<body data-sidebar="dark">
    <div id="layout-wrapper">
        <!-- ############ Aside START-->
        <?php
        include('inc/sidebar.php')
        ?>
        <!-- ############ Aside END-->
        <div id="main" class="layout-column flex">
            <!-- ############ Header START-->
            <?php
            include('inc/header.php')
            ?>
            <!-- ############ Footer END-->
            <!-- ############ Content START-->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">
               <H5>Employee List</H5>
               <a href="employee-master.php" class="btn btn-primary">Add</a>
                    <div id="toolbar">
                        
                    </div>
                    <table id="table" class="table table-theme v-middle" data-plugin="bootstrapTable" data-toolbar="#toolbar" data-search="true" data-search-align="left" data-show-export="true" data-show-columns="true" data-detail-view="false" data-mobile-responsive="true" data-pagination="true" data-page-list="[10, 25, 50, 100, ALL]">
                        <thead>
                            <tr>
                                <th data-sortable="true" data-field="id">ID</th>
                                <th data-sortable="true" data-field="Employee">Employee</th>
                                <th data-sortable="true" data-field="Department">Department</th>
                                <th data-sortable="true" data-field="Designation">Designation</th>
                                <th data-sortable="true" data-field="Shift">Shift</th>
                                <th data-sortable="true" data-field="Code">Code</th>
                                <th data-sortable="true" data-field="Branch">Branch</th>
                                <th data-sortable="true" data-field="Mobile">Mobile</th>
                                <th data-sortable="true" data-field="Basic Salary">Basic Salary</th>
                               
                               
                                <th>Action</th>
                                
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $sqlEmp = "SELECT e.*,dg.designation,d.department,b.branch_name,s.shift from employeemaster as e inner join departmentmaster as d on e.department = d.id inner join designationmaster as dg on e.designation = dg.id inner join shiftmaster as s on e.shift = s.id inner join branchmaster as b on b.id = e.branch ";
                                $resEmp = mysqli_query($conn,$sqlEmp);
                                while ($rowEmp = mysqli_fetch_assoc($resEmp)) {
                             ?>
                            <tr class=" flex" >
                                <td class="flex">      
                                    <div class="item-except text-muted text-sm h-1x">
                                        <?=$rowEmp['id']?>
                                    </div>
                                </td>
                                <td class="flex">      
                                    <div class="item-except text-muted text-sm h-1x">
                                        <?=$rowEmp['firstname']." ". $rowEmp['lastname']?>
                                    </div>
                                </td>
                                <td class="flex">      
                                    <div class="item-except text-muted text-sm h-1x">
                                        <?=$rowEmp['department']?>
                                    </div>
                                </td>
                                <td class="flex">      
                                    <div class="item-except text-muted text-sm h-1x">
                                        <?=$rowEmp['designation']?>
                                    </div>
                                </td>
                                <td class="flex">      
                                    <div class="item-except text-muted text-sm h-1x">
                                        <?=$rowEmp['shift']?> 
                                    </div>
                                </td>
                                <td class="flex">      
                                    <div class="item-except text-muted text-sm h-1x">
                                        <?=$rowEmp['code']?>
                                    </div>
                                </td>
                                <td class="flex">      
                                    <div class="item-except text-muted text-sm h-1x">
                                        <?=$rowEmp['branch_name']?>
                                    </div>
                                </td>
                                <td class="flex">      
                                    <div class="item-except text-muted text-sm h-1x">
                                        <?=$rowEmp['mobilenumber']?>
                                    </div>
                                </td>
                                <td class="flex">      
                                    <div class="item-except text-muted text-sm h-1x">
                                        <?=$rowEmp['basic_pay']?>
                                    </div>
                                </td>
                            
                               
                                <td>
                                    <div class="item-action dropdown">
                                        <a href="#" data-toggle="dropdown" class="text-muted">
                                            <i data-feather="more-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right bg-black" role="menu">
                                            <a class="dropdown-item" href="#">
                                                Edit
                                            </a>
                                            <a class="dropdown-item download" href="delete.php?type=employeemaster&id=<?=$rowEmp['id']?>">
                                                Delete
                                            </a>
                                            <a class="dropdown-item edit">
                                                Print
                                            </a>
                                           
                                            <a class="dropdown-item trash">
                                               more Info
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item trash">
                                               User info 
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                          <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- ############ Main END-->
        </div>
        <!-- ############ Content END-->
        <!-- ############ Footer START-->
        <?php
        include('inc/footer.php')
        ?>
        <!-- ############ Footer END-->
    </div>
    <!-- build:js ../assets/js/site.min.js -->
    <!-- jQuery -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>

        <!-- Required datatable js -->
        <script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
        <script src="assets/libs/jszip/jszip.min.js"></script>
        <script src="assets/libs/pdfmake/build/pdfmake.min.js"></script>
        <script src="assets/libs/pdfmake/build/vfs_fonts.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>

        <!-- Responsive examples -->
        <script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

        <!-- Datatable init js -->
        <script src="assets/js/pages/datatables.init.js"></script>

        <script src="assets/js/app.js"></script> 
    <!-- endbuild -->


</body>

</html>