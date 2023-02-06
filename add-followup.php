<?php
include_once 'db_conn.php';

if (!isset($_POST['subFollowup'])) {
    $id = "";
    $date = "";
    $type = "";
    $task = "";
    $priority = "";
}
if (isset($_GET['id'])) {
    $id = decrypt(getSafeValue($conn, ($_GET['id'])));
    // $sqlFollow = "SELECT * from followup as f where f.stdID = $id";
    // $resFollow  = mysqli_query($conn, $sqlFollow);
    // $rowFollow= mysqli_fetch_assoc($resFollow);
    // $date = $rowFollow['date'];
    // $type = $rowFollow['type'];
    // $task = $rowFollow['task'];
    // $priority = $rowFollow['priority'];
}

if (isset($_POST['subFollowup'])) {

    $date = getSafeValue($conn, $_POST['date']);
    $type = getSafeValue($conn, $_POST['type']);
    $task = getSafeValue($conn, $_POST['task']);
    $priority = getSafeValue($conn, $_POST['priority']);
    $stdID = getSafeValue($conn, $_POST['stdID']);
    if (isset($_GET['id'])) {
        $fupID = decrypt(getSafeValue($conn, $_GET['id']));
        $updateProdSql = "UPDATE product SET prodName = '$prodName', HSNcode = '$HSNcode', businessLocationID = '$location', catID = '$cat', subCatID = '$subCat', desp = '$desp' WHERE prodID = $prodID";
        if (mysqli_query($conn, $updateProdSql)) {
            header("Location: all-product.php");
        }
    } else {
        $sqlAdd = "INSERT INTO followup (`date`,stdID,type,task,priority) VALUES ('$date','$stdID','$type','$task','$priority')";
        if (mysqli_query($conn, $sqlAdd)) {
            $lastID = encrypt(mysqli_insert_id($conn));
            header("Location: followup.php");
        } else {
            $msg = "creating failed";
        }
    }
}
?>

<!--  -->

<!--  -->
<!DOCTYPE html>
<html class="loading semi-dark-layout" lang="en" data-layout="semi-dark-layout" data-textdirection="ltr">
<!-- BEGIN: Head-->
<?php
include('./inc/head.php')
?>
<?php
include('./inc/header.php')
?>

<!-- END: Head-->
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
<!-- BEGIN: Body-->

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
                        <!-- Validation -->
                        <section class="bs-validation">
                            <div class="row">
                                <!-- Bootstrap Validation -->
                                <div class="col-md-6 col-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">Details</h4>
                                        </div>
                                        <div class="card-body">
                                            <form  action="add-followup.php" method="POST">

                                                <div class="form-group">

                                                    <label>Date</label>
                                                    <input type="date" class="form-control" placeholder="Enter email" name="date">
                                                </div>

                                                <div class="form-group">
                                                    <label>Assign To</label>
                                                    <select id="program" class="form-control" name="program" >
                                                        <option value="" selected disabled hidden>Choose...</option>

                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label>Type</label>
                                                    <select id="program" class="form-control" name="type" required>
                                                        <option value="" selected disabled hidden>Choose...</option>
                                                        <?php 
                                                            $sqlType = "SELECT * from followuptype";
                                                            $resType = mysqli_query($conn,$sqlType);
                                                            while($rowType = mysqli_fetch_assoc($resType)){
                                                         ?>
                                                         <option value="<?=$rowType['fuptypeID']?>"><?=$rowType['followType']?></option>
                                                     <?php } ?>

                                                    </select>
                                                </div>
                                                <input type="hidden" class="form-control" placeholder="Enter Task" name="stdID"
                                                value="<?=$id?>">
                                                <div class="form-group">
                                                    <label>Task</label>
                                                    <input type="text" class="form-control" placeholder="Enter Task" name="task">
                                                </div>

                                                <div class="form-group">
                                                    <label>Priority</label>
                                                    <select id="program" class="form-control" name="priority" required>
                                                        <option value="" selected disabled hidden>Choose...</option>
                                                        <option value="High">High</option>
                                                        <option value="Low">Low</option>
                                                        <option value="Med">Med</option>
                                                    </select>
                                                </div>


                                                <button type="submit" class="btn btn-primary mb-4" name="subFollowup">Create</button>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Bootstrap Validation -->

                        </section>
                        <!-- /Validation -->

                    </div>
                </div>
            </div>
            <!-- END: Content-->

            <div class="sidenav-overlay"></div>
            <div class="drag-target"></div>

            <!-- BEGIN: Footer-->
            <?php
            include('./inc/footer.php')
            ?>

            <!-- END: Footer-->


            <!-- BEGIN: Vendor JS-->

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
</body>
<!-- END: Body-->

</html>
<?php
$_SESSION["prodAdd"] = "";
?>
<script type="text/javascript">
    $(document).ready(function() {
        $("#cat").change(function() {
            var catID = $(this).val();
            var subCatID = $(subCat).val();
            console.log(subCatID);
            $.ajax({
                url: "find_sub.php",
                method: "POST",
                data: {
                    catID: catID
                },
                success: function(data) {
                    $("#subCat").html(data);
                }
            });
        });
    });
</script>