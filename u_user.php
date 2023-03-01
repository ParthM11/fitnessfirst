<?php
include_once 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php
include('inc/head.php')
?>
<title>User Master</title>

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
                    <H5>User List</H5>
                    <a href="u_user-add.php" class="btn btn-primary">Add</a>
                    <div id="toolbar">

                    </div>
                    <table id="example" class="table table-bordered dt-responsive nowrap w-100" style="width:100%">
                        <thead>
                            <tr>
                                <th data-sortable="true" data-field="id">ID</th>
                                <th data-sortable="true" data-field="owner">User Name</th>
                                <th data-sortable="true" data-field="owner">Email</th>
                                <th data-sortable="true" data-field="owner">Mobile</th>
                                <th data-sortable="true" data-field="owner">Last Login</th>
                                <th data-sortable="true" data-field="owner">User Type</th>

                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sqlCred = "SELECT * from creds as c inner join userrole as ur on c.userRole = ur.userRoleID";
                            $resCred = mysqli_query($conn, $sqlCred);
                            while ($rowCred = mysqli_fetch_assoc($resCred)) {
                            ?>
                                <tr class=" flex">
                                    <td class="flex">
                                        <div class="item-except text-muted text-sm h-1x">
                                            <?= $rowCred['credID'] ?>
                                        </div>
                                    </td>
                                    <td class="flex">
                                        <div class="item-except text-muted text-sm h-1x">
                                            <?= $rowCred['userName'] ?>
                                        </div>
                                    </td>
                                    <td class="flex">
                                        <div class="item-except text-muted text-sm h-1x">
                                            <?= $rowCred['email'] ?>
                                        </div>
                                    </td>
                                    <td class="flex">
                                        <div class="item-except text-muted text-sm h-1x">
                                            <?= $rowCred['phone'] ?>
                                        </div>
                                    </td>
                                    <td class="flex">
                                        <div class="item-except text-muted text-sm h-1x">
                                            Last Login
                                        </div>
                                    </td>
                                    <td class="flex">
                                        <div class="item-except text-muted text-sm h-1x">
                                            <?= $rowCred['userRoleName'] ?>
                                        </div>
                                    </td>





                                    <td>
                                        <div class="item-action dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                                Action <i class="mdi mdi-chevron-down"></i>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#">
                                                    Edit
                                                </a>
                                                <a class="dropdown-item download">
                                                    Delete
                                                </a>



                                            <?php } ?>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

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
    <script>
            $(document).ready(function() {
                $('#example').DataTable({
                    dom: 'Bfrtip',
                    buttons: [
                        
                    ]
                });
            });
    </script>
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