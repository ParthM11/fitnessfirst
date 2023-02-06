<!DOCTYPE html>
<html lang="en">
<?php
include('inc/head.php');
include('db_conn.php');
?>
<title>Attendance</title>



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
                        <!-- ############ Main START-->


                        <div class="padding">
                            <H5>Salary Register Detail</H5>
                            <a href="salary-master.php" class="btn btn-primary">Add</a>
                            <div id="toolbar">

                            </div>
                            <table id="table" class="table table-theme v-middle" data-plugin="bootstrapTable" data-toolbar="#toolbar" data-search="true" data-search-align="left" data-show-export="true" data-show-columns="true" data-detail-view="false" data-mobile-responsive="true" data-pagination="true" data-page-list="[10, 25, 50, 100, ALL]">
                                <thead>
                                    <tr>
                                        <th data-sortable="true" data-field="id">ID</th>
                                        <th data-sortable="true" data-field="owner">Date</th>
                                        <th data-sortable="true" data-field="project">Month Name</th>
                                        <th data-field="task"><span class="d-none d-sm-block">Year </span></th>
                                        <th data-field="task"><span class="d-none d-sm-block">Remark </span></th>
                                        <th>Action</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class=" flex">
                                        <td class="flex">
                                            <div class="item-except text-muted text-sm h-1x">
                                                Id
                                            </div>
                                        </td>
                                        <td class="flex">
                                            <div class="item-except text-muted text-sm h-1x">
                                                Date
                                            </div>
                                        </td>
                                        <td class="flex">
                                            <div class="item-except text-muted text-sm h-1x">
                                                Department
                                            </div>
                                        </td>
                                        <td class="flex">
                                            <div class="item-except text-muted text-sm h-1x">
                                                year
                                            </div>
                                        </td>
                                        <td class="flex">
                                            <div class="item-except text-muted text-sm h-1x">
                                                Remark
                                            </div>
                                        </td>

                                        <td>
                                            <div class="btn-group" role="group">
                                                <button id="btnGroupVerticalDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Action <i class="mdi mdi-chevron-down"></i>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">

                                                    <a class="dropdown-item" data-toggle="modal" data-target="#modal-lg"><i class="bx bx-edit"></i></i>
                                                        <span>Edit</span>
                                                    </a>
                                                    <a class="dropdown-item" data-toggle="modal" data-target="#modal-lg"><i class="bx bx-right-top-arrow-circle"></i></i>
                                                        <span>Print</span>
                                                    </a>
                                                    <a class="dropdown-item" data-toggle="modal" data-target="#modal-lg"><i class="bx bx-trash"></i></i>
                                                        <span>Delete</span>
                                                    </a>
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