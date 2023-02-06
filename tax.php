<?php
session_start();
include_once 'db_conn.php';
$_SESSION['home'] = "";
$_SESSION['inquiry'] = "";
$_SESSION['admisson'] = "";
$_SESSION['location'] = "";
$_SESSION['tax'] = "active";
$sqltax = "SELECT * from tax";
$res = mysqli_query($conn, $sqltax);
if (isset($_POST['subTax'])) {
    $taxName = getSafeValue($conn, $_POST['taxName']);
    $SGST = getSafeValue($conn, $_POST['SGST']);
    $CGST = getSafeValue($conn, $_POST['CGST']);
    $sqlAdd = "INSERT INTO tax (taxName, SGST, CGST) VALUES ('$taxName','$SGST','$CGST')";
    if (mysqli_query($conn, $sqlAdd)) {
        $lastID = encrypt(mysqli_insert_id($conn));
        header("Location: tax.php");
    } else {
        $msg = "creating failed";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<?php
include('inc/head.php')
?>
<title>TAX Rates</title>

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
                        <div id="toolbar">
                        </div>

                        <div id="modal-lg" class="modal fade" data-backdrop="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content ">
                                    <div class="modal-header ">
                                        <div class="modal-title text-md">Modal title</div>
                                        <button class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">

                                    </div>

                                </div>
                                <!-- /.modal-content -->
                            </div>
                        </div>

                        <!--  -->
                        <table id="table" class="table table-theme v-middle" data-plugin="bootstrapTable" data-toolbar="#toolbar" data-search="true" data-search-align="left" data-show-export="true" data-show-columns="true" data-detail-view="false" data-mobile-responsive="true" data-pagination="true" data-page-list="[10, 25, 50, 100, ALL]">
                            <thead>
                                <tr>
                                    <th data-sortable="true" data-field="id">ID</th>
                                    <th data-sortable="true" data-field="Tax Name">Tax Name</th>
                                    <th data-sortable="true" data-field="CGST">CGST</th>
                                    <th data-sortable="true" data-field="SGST">SGST</th>
                                    <th data-sortable="true" data-field="IGST">IGST</th>
                                    <th>Action</th>
                                    <a class="btn btn-primary" href="#" data-bs-toggle="modal" data-bs-target=".add-tax"></i> <span>Add Tax</span></a>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($rowtax = mysqli_fetch_assoc($res)) {
                                ?>
                                    <td><?= $rowtax['taxID'] ?></td>
                                    <td><?= $rowtax['taxName'] ?></td>
                                    <td><?= $rowtax['CGST'] ?></td>
                                    <td><?= $rowtax['SGST'] ?></td>
                                    <td><?= $rowtax['CGST'] + $rowtax['SGST'] ?></td>



                                    <td>
                                        <div class="btn-group" role="group">
                                            <button id="btnGroupVerticalDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action <i class="mdi mdi-chevron-down"></i>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                                                <a class="dropdown-item" href="#">
                                                    Edit
                                                </a>
                                                <a class="dropdown-item" href="delete.php">
                                                    <i data-feather="trash" class="me-25"></i>
                                                    <span>Delete</span>
                                                </a>
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
            <!-- model -->
            <!--  Add tax Modal -->
            <div class="modal modal-actions fade add-tax" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="myLargeModalLabel"></h5>
                            <form class="repeater" enctype="multipart/form-data" method="post" action="">
                                <div data-repeater-list="group-a">
                                    <div data-repeater-item class="row">
                                        <div class="row">

                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label class="form-label">Tax Name</label>
                                                    <input type="name" class="form-control" id="taxName" name="taxName">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label class="form-label">CGST (%)</label>
                                                    <input type="text" onblur="findTotal()" class="form-control" id="CGST" name="CGST" value=0>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label class="form-label">SGST (%)</label>
                                                    <input type="text" onblur="findTotal()" class="form-control" id="SGST" name="SGST" value=0>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label class="form-label">IGST (%)</label>
                                                    <input type="text" class="form-control" id="IGST" name="IGST" value="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary w-md" name="subTax">Add Tax</button>
                            </form>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
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