<?php
include_once 'db_conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php
include('inc/head.php')
?>
<title>Members</title>

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
                                <div class="col-lg-12 col-12">
                                    <div class="row ">


                                        <div class="col-md-3">
                                            <a href="all-inquiry.php">
                                                <div class="card ">
                                                    <div class="card-header bg-primary">
                                                        <h6 class="text-white">All Members</h6>
                                                    </div>
                                                    <div class="card-body ">
                                                        <h6 class="fw-bolder mb-1">126</h6>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-md-3">
                                            <a href="#">
                                                <div class="card ">
                                                    <div class="card-header bg-success">
                                                        <h6 class="text-white">Active Members</h6>
                                                    </div>
                                                    <div class="card-body ">
                                                        <h6 class="fw-bolder mb-1">126</6>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-md-3">
                                            <a href="all-inq-lost.php">
                                                <div class="card ">
                                                    <div class="card-header bg-secondary">
                                                        <h6 class="text-white">Past Interested</h6>
                                                    </div>
                                                    <div class="card-body ">
                                                        <h6 class="fw-bolder mb-1">126</6>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>



                                    </div>
                                </div>
                            </div>
                            <table class="table table-bordered dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th data-sortable="true" data-field="id">ID</th>
                                        <th data-sortable="true" data-field="fullname">Full Name</th>
                                        <th data-sortable="true" data-field="age">Age</th>
                                        <th data-sortable="true" data-field="Mobile">Status</th>
                                        <th data-sortable="true" data-field="Lead Type">Todays Attendance</th>
                                        <th data-sortable="true" data-field="Trial">Customer Service Exicutive</th>
                                        <th data-sortable="true" data-field="Location">Location</th>
                                        <th>Action</th>
                                        <a href="admission.php" class="btn btn-primary">Add Members</a>

                                    </tr>
                                    <?php
                                    $sqlMember = "SELECT s.*,l.* from student as s inner join location as l on s.locationID = l.locationID inner join studentdetails as sd on sd.stdID = s.stdID order by s.stdID";
                                    $resMember = mysqli_query($conn, $sqlMember);
                                    while ($rowMember = mysqli_fetch_assoc($resMember)) {
                                    ?>
                                        <tr>
                                            <td><?= $rowMember['stdID'] ?></td>
                                            <td><?= $rowMember['stdfName'] ?></td>
                                            <td><?= $rowMember['stdAge'] ?></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><?= $rowMember['locationName'] ?></td>
                                            <td>
                                                <div class="btn-group" role="group">
                                                    <button id="btnGroupVerticalDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Action <i class="mdi mdi-chevron-down"></i>
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">

                                                        <a class="dropdown-item" data-toggle="modal" data-target="#modal-lg"><i class="bx bx-edit"></i></i>
                                                            <span>Edit</span>
                                                        </a>
                                                        <a class="dropdown-item" data-toggle="modal" data-target="#modal-lg" href="profile.php?id=<?= encrypt($rowMember['stdID']) ?>"><i class="bx bx-right-top-arrow-circle" ></i></i>
                                                            <span>View</span>
                                                        </a>
                                                        <a class="dropdown-item" data-toggle="modal" data-target="#modal-lg"><i class="bx bx-trash"></i></i>
                                                            <span>Delete</span>
                                                        </a>




                                                    </div>
                                                </div>

                                            </td>

                                        <tr>
                                        <?php } ?>
                                </thead>
                                <tbody>





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


</body>

</html>