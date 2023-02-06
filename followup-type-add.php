<?php
include_once 'db_conn.php';
if (!isset($_POST['subFollowupType']))
{
    $followType = "";
    $desp = "";
}
if (isset($_GET['id'])) {
    $id = decrypt(getSafeValue($conn, ($_GET['id'])));
    $sqlFollowtype = "SELECT * from followuptype where fupTypeID = $id";
    $resFollowType  = mysqli_query($conn, $sqlFollowtype);
    $rowFollowType = mysqli_fetch_assoc($resFollowType);
    $followType = $rowFollowType['followType'];
    $desp = $rowFollowType['desp'];
}
if (isset($_POST['subFollowupType'])) {
    $followType = getSafeValue($conn, $_POST['followType']);
    $desp = getSafeValue($conn, $_POST['desp']);
    $sqlAdd = "INSERT INTO followuptype (followType,desp) VALUES ('$followType','$desp')";
    if (mysqli_query($conn, $sqlAdd)) {
        header("Location: followup.php.php");
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
<title>Followup type</title>

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
                                                    <strong>Activity Type</strong>
                                                </div>
                                                <div class="card-body">
                                                    <form method="post" action="">
                                                        <div class="form-group row">
                                                            <label class="form-label">Follow Up Term</label>

                                                            <div class="col-md-2">
                                                                <input type="name" class="form-control" id="followType" name="followType">
                                                            </div>


                                                            <label class="form-label">Description</label>
                                                            <div class="col-md-2">
                                                                <input type="name" class="form-control" id="desp" name="desp">
                                                            </div>

                                                        </div>

                                                        <button type="submit" class="btn btn-primary mt-1" name="subFollowupType">Add Term</button>
                                                        <a href="followup-type.php" class="btn btn-secondary mt-1">Cancel</a>

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