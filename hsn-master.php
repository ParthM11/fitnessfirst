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
        header("Location: hsn-master.php");
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
                        <div class="padding">
                            <div class="row row-sm sr">
                                <div class="col-md-12 col-lg-12">
                                    <div class="row row-sm">


                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <strong>HSN Master</strong>
                                                </div>
                                                <div class="card-body">
                                                    <form method="post">
                                                        <div class="form-group row">
                                                            <label class="form-label">HSN Code</label>

                                                            <div class="col-md-2">
                                                                <input type="number" class="form-control" id="HSNcode" name="HSNcode">
                                                            </div>
                                                            <label class="form-label">HSN Description</label>

                                                            <div class="col-md-2">
                                                                <input type="text" class="form-control" id="desp" name="desp">
                                                            </div>

                                                        </div>

                                                        <button type="submit" class="btn btn-primary mt-1" name="subHSN" href="all-hsn.php">Save HSN</button>
                                                        <a href="all-hsn.php" type="" class="btn btn-secondary mt-1">Cancel</a>

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