<?php
include_once 'db_conn.php';
$_SESSION['inquiry'] = "active";
?>

<!DOCTYPE html>
<html lang="en">
<?php
include('inc/head.php')
?>
<title>Inquiry</title>

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


                        <div class="padding">
                            <div class="row ">

                            </div>
                            <div id="toolbar">
                            </div>
                            <table id="table" class="table table-theme v-middle" data-plugin="bootstrapTable" data-toolbar="#toolbar" data-search="true" data-search-align="left" data-show-export="true" data-show-columns="true" data-detail-view="false" data-mobile-responsive="true" data-pagination="true" data-page-list="[10, 25, 50, 100, ALL]">
                                <thead>
                                    <tr>
                                        <th data-sortable="true" data-field="id">ID</th>
                                        <th data-sortable="true" data-field="fullname">Full Name</th>
                                        <th data-sortable="true" data-field="age">Age</th>
                                        <th data-sortable="true" data-field="Mobile">Mobile</th>
                                        <th data-sortable="true" data-field="Lead Type">Member Since</th>


                                        <th data-sortable="true" data-field="Handled By">Handled By</th>
                                        <th data-sortable="true" data-field="Location">Location</th>

                                        <th data-sortable="true" data-field="Remark">Remark</th>
                                        <th>Action</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sqlIn = "SELECT * FROM `student` as s inner JOIN location as l on s.locationID = l.locationID";
                                    $res = mysqli_query($conn, $sqlIn);
                                    while ($row = mysqli_fetch_assoc($res)) {
                                    ?>
                                        <tr class=" flex">
                                            <td class="flex"><?= $row['stdID'] ?></td>
                                            <td class="flex"><?= $row['stdfName'] . " " . $row['stdlName'] ?></td>
                                            <td class="flex"><?= $row['stdAge'] ?></td>
                                            <td class="flex"><?= $row['stdContact'] ?></td>

                                            <td>
                                                <span class="badge  bg-success ">
                                                    Date
                                                </span>

                                            </td>

                                            <td>Person Handaling This</td>
                                            <td class="flex"><?= $row['locationName'] ?></td>

                                            <td><?= $row['remarks'] ?></td>
                                            <td>
                                                <div class="btn-group" role="group">
                                                    <button id="btnGroupVerticalDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Action <i class="mdi mdi-chevron-down"></i>
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                                                        <a class="dropdown-item" href="addinquiry.php?id=<?= encrypt($row['stdID']) ?>">
                                                            <i data-feather="edit-2" class="me-25"></i>
                                                            <span>Edit</span>
                                                        </a>

                                                        <a class="dropdown-item" href="addinquiry.php?id=<?= encrypt($row['stdID']) ?>">
                                                            <i data-feather="edit-2" class="me-25"></i>
                                                            <span>View</span>
                                                        </a>
                                                        <a class="dropdown-item" href="delete.php?type=<?= encrypt('student') ?>&id=<?= encrypt($row['stdID']) ?>">
                                                            <i data-feather="trash" class="me-25"></i>
                                                            <span>Delete</span>
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
                    <div id="modal-lg" class="modal fade" data-backdrop="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content ">
                                <div class="col-md-12">
                                    <div class="modal-content ">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Follow Up for $clientname</h5>
                                            <button class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="" role="form" action="dashboard.html">

                                                <div class="form-group">

                                                    <label>Date</label>
                                                    <input type="date" class="form-control" placeholder="Enter email">
                                                </div>

                                                <div class="form-group">
                                                    <label>Assign To</label>
                                                    <select id="program" class="form-control" name="program" required>
                                                        <option value="" selected disabled hidden>Choose...</option>

                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label>Type</label>
                                                    <select id="program" class="form-control" name="program" required>
                                                        <option value="" selected disabled hidden>Choose...</option>

                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label>Task</label>
                                                    <input type="text" class="form-control" placeholder="Enter Task">
                                                </div>

                                                <div class="form-group">
                                                    <label>Priority</label>
                                                    <select id="program" class="form-control" name="program" required>
                                                        <option value="" selected disabled hidden>Choose...</option>
                                                        <option value="">High</option>
                                                        <option value="">Low</option>
                                                        <option value="">Med</option>
                                                    </select>
                                                </div>


                                                <button type="submit" class="btn btn-primary mb-4">Create</button>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ############ Content END-->
        <!-- ############ Footer START-->
        <?php
        include('inc/footer.php')
        ?>
        <!-- ############ Footer END-->
    </div>
    <!-- build:js ../assets/js/site.min.js -->

    <!-- JAVASCRIPT -->
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