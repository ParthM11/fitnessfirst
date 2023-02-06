<?php
session_start();
include_once 'db_conn.php';

$_SESSION['home'] = "";
$_SESSION['inquiry'] = "";
$_SESSION['admisson'] = "";
$_SESSION['location'] = "";
$_SESSION['tax'] = "";
$_SESSION['hsn'] = "active";
$sqlhsn = "SELECT * from HSNnumber";
$res = mysqli_query($conn, $sqlhsn);
if (isset($_POST['subHSN'])) {
    $HSNcode = getSafeValue($conn, $_POST['HSNcode']);
    $desp = getSafeValue($conn, $_POST['desp']);
    $sqlAdd = "INSERT INTO HSNnumber (HSNcode,desp) VALUES ('$HSNcode','$desp')";
    if (mysqli_query($conn, $sqlAdd)) {
        $lastID = encrypt(mysqli_insert_id($conn));
        header("Location: hsn.php");
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
<title>HSN Master</title>

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



                        <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th data-sortable="true" data-field="id">id</th>
                                    <th data-sortable="true" data-field="HSN Code">HSN Code</th>
                                    <th data-sortable="true" data-field="Description">Description</th>
                                    <th>Action</th>
                                    <a href="hsn-master.php" class="btn btn-primary">Add HSN</a>



                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                while ($rowHSN = mysqli_fetch_assoc($res)) {
                                ?>
                                    <td><?= $rowHSN['HSNID'] ?></td>
                                    <td><?= $rowHSN['HSNcode'] ?></td>
                                    <td><?= $rowHSN['desp'] ?></td>
                                    <td>


                                        <div class="btn-group" role="group">
                                            <button id="btnGroupVerticalDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action <i class="mdi mdi-chevron-down"></i>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target=".edit-category">
                                                    <i data-feather="edit-2" class="me-25"></i>
                                                    <span>Edit</span>
                                                </a>

                                                <a class="dropdown-item" href="#">
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