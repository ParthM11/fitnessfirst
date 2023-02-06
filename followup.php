<?php
include_once 'db_conn.php';
$_SESSION['inquiry'] = "active";
?>

<!DOCTYPE html>
<html lang="en">
<?php
include('inc/head.php')
?>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css">
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

                        <table id="table" class="table" >
                            <thead>
                                <tr>
                                    <th data-sortable="true" data-field="id">ID</th>
                                    <th data-sortable="true" data-field="date">Date</th>
                                    <th data-sortable="true" data-field="time">Time</th>
                                    <th data-sortable="true" data-field="fullname">Full Name</th>
                                    <th data-sortable="true" data-field="type">Type</th>
                                    <th data-sortable="true" data-field="Mobile">Mobile</th>
                                    <th data-sortable="true" data-field="Allocated By">Allocate To</th>
                                    <th data-sortable="true" data-field="Scheduled By">Scheduled By</th>
                                    <th data-sortable="true" data-field="Location">Location</th>
                                    <th data-sortable="true" data-field="Remark">Remark</th>
                                    <th>Action</th>
                                    <a href="add-followup.php" class="btn btn-primary">Add</a>

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
                                        <td><?= $row['date'] ?></td>
                                        <td>time</td>
                                        <td class="flex"><?= $row['stdfName'] . " " . $row['stdlName'] ?></td>
                                        <td>
                                            Some Reason
                                        </td>
                                        <td class="flex"><?= $row['stdContact'] ?></td>


                                        <td>
                                            Person Handling this
                                        </td>
                                        <td>admin</td>
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
                                                    <a class="dropdown-item" href="booktrial.php">
                                                        <i data-feather="edit-2" class="me-25"></i>
                                                        <span>Schedule Follow-Up</span>
                                                    </a>
                                                    <a class="dropdown-item" href="booktrial.php">
                                                        <i data-feather="edit-2" class="me-25"></i>
                                                        <span>Book Trial</span>
                                                    </a>
                                                    <a class="dropdown-item" href="admission.php?id=<?= encrypt($row['stdID']) ?>">
                                                        <i data-feather="edit-2" class="me-25"></i>
                                                        <span>Generate Admission</span>
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
            </div>
            <!-- ############ Content END-->
            <!-- ############ Footer START-->
            <?php
            include('inc/footer.php')
            ?>
            <!-- ############ Footer END-->
        </div>




        <script>
            $(document).ready(function() {
                $('#table').DataTable({
                    dom: 'Bfrtip',
                    buttons: [
                        'csv', 'excel', 'pdf', 'print'
                    ]
                });
            });
            $(document).ready(function() {
                $('#myTable').DataTable();
            });
        </script>

        <!-- build:js ../assets/js/site.min.js -->
        <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

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


</body>

</html>