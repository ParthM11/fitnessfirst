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
                  
                            <div class="row row-sm sr">
                                <div class="col-md-12 col-lg-12">
                                    <div class="row row-sm">


                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <strong>Product Category</strong>
                                                </div>
                                                <div class="card-body">
                                                    <form method="post">
                                                        <div class="form-group row">
                                                            <label class="form-label">Category Name</label>

                                                            <div class="col-md-2">
                                                                <input type="name" class="form-control" id="catName" name="catName">
                                                            </div>

                                                            <label class="form-label">Sub Category</label>
                                                            <div class="col-md-2">
                                                                <input type="name" class="form-control" id="subCat" name="subCat">
                                                            </div>

                                                            <label class="form-label">Description</label>
                                                            <div class="col-md-2">
                                                                <input type="name" class="form-control" id="desp" name="desp">
                                                            </div>

                                                        </div>

                                                        <button type="submit" class="btn btn-primary w-md" name="subCatgory">Add Category</button>
                                                        <a href="prod-category.php" class="btn btn-secondary mt-1">Cancel</a>

                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </section>
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

        <script src="assets/libs/select2/js/select2.min.js"></script>
        <script src="assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
        <script src="assets/libs/spectrum-colorpicker2/spectrum.min.js"></script>
        <script src="assets/libs/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
        <script src="assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
        <script src="assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
        <script src="assets/libs/@chenfengyuan/datepicker/datepicker.min.js"></script>

        <!-- form advanced init -->
        <script src="assets/js/pages/form-advanced.init.js"></script>

        <script src="assets/js/app.js"></script>
        <!-- endbuild -->
</body>

</html>