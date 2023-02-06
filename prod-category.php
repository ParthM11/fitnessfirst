<?php
include_once 'db_conn.php';
$_SESSION['cat'] = "active";
$sqlCat = "SELECT * from category";
$res = mysqli_query($conn, $sqlCat);
if (!isset($_POST['subCatgory'])) {
    $catName = "";
    $desp = "";
    $subCat = "";
    $arrsubCat = array();
}
if (isset($_GET['id'])) {
    $id = decrypt(getSafeValue($conn, ($_GET['id'])));
    $sqlCat = "SELECT * from category as c inner join subcategory as s on c.catID = s.catID  where c.catID = $id";
    $resCat  = mysqli_query($conn, $sqlCat);
    while ($rowSubCat = mysqli_fetch_assoc($resCat)) {
        $catName = $rowSubCat['catName'];
        $desp = $rowSubCat['desp'];
        $arrsubCat[$rowSubCat['subCatID']] = $rowSubCat['subCatName'];
    }
    $subCat = implode(",", array_values($arrsubCat));
}
if (isset($_POST['subCatgory'])) {
    $catName = getSafeValue($conn, $_POST['catName']);
    $desp = getSafeValue($conn, $_POST['desp']);
    $subCat = $_POST['subCat'];
    $arrsubCat = explode(',', $subCat);
    $sqlAdd = "INSERT INTO category (catName,desp) VALUES ('$catName','$desp')";
    if (mysqli_query($conn, $sqlAdd)) {
        $lastID = (mysqli_insert_id($conn));
        foreach ($arrsubCat as  $value) {
            $sqlSubAdd = "INSERT into subcategory (catID,subCatName) values ('$lastID','$value')";
            mysqli_query($conn, $sqlSubAdd);
        }
        header("Location: prod-category.php");
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
<title>Product Category</title>

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
                        <table id="table" class="table table-theme v-middle" data-plugin="bootstrapTable" data-toolbar="#toolbar" data-search="true" data-search-align="left" data-show-export="true" data-show-columns="true" data-detail-view="false" data-mobile-responsive="true" data-pagination="true" data-page-list="[10, 25, 50, 100, ALL]">
                            <thead>
                                <tr>
                                    <th data-sortable="true" data-field="id">id</th>
                                    <th data-sortable="true" data-field="Category">Category</th>
                                    <th data-sortable="true" data-field="Sub Category">Sub Category</th>
                                    <th data-sortable="true" data-field="description">description</th>
                                    <th>Action</th>
                                    <a href="prod-category-master.php" class="btn btn-primary">Add Category</a>
                                </tr>

                            </thead>
                            <tbody>


                                <tr>

                                    <?php
                                    while ($rowCat = mysqli_fetch_assoc($res)) {
                                    ?>
                                        <td><?= $rowCat['catID'] ?></td>
                                        <td><?= $rowCat['catName'] ?></td>
                                        <td>lol</td>
                                        <td><?= $rowCat['desp'] ?></td>
                                        <td>


                                            <div class="btn-group" role="group">
                                                <button id="btnGroupVerticalDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Action <i class="mdi mdi-chevron-down"></i>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                                                    <a class="dropdown-item" href="prod-category.php?id=<?= encrypt($rowCat['catID']) ?>" data-bs-toggle="modal" data-bs-target=".edit-category">
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