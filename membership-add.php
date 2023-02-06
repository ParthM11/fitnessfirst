<?php
include_once 'db_conn.php';
if (!isset($_POST['subActivity'])) {
    $checkbox1 = "";
    $chk = "";
    $planName = "";
    $activity = "";
    $program = "";
    $time = "";
    $desp = "";
    $session = "";
    $price = "";
}
if (isset($_GET['id'])) {
    $id = decrypt(getSafeValue($conn, ($_GET['id'])));
    $sqlCat = "SELECT * from memberpackage where mempackID = $id";
    $resCat  = mysqli_query($conn, $sqlCat);
    $rowSubCat = mysqli_fetch_assoc($resCat);
    $planName = $rowSubCat['planName'];
    $activity = $rowSubCat['activity'];
    $program = $rowSubCat['program'];
    $time = $rowSubCat['time'];
    $desp = $rowSubCat['desp'];
    $session = $rowSubCat['session'];
    $price = $rowSubCat['price'];
    $sqlmem = "SELECT * from mempackdays where mempackID = $id";
    $resmem  = mysqli_query($conn,$sqlmem);
    $chk = array();
    foreach (mysqli_fetch_assoc($resmem) as $checkbox1) {
        $chk = $checkbox1;
    }
}
if (isset($_POST['subConfirmAdd'])) {
    $planName = getSafeValue($conn, $_POST['planName']);
    $activity = getSafeValue($conn, $_POST['activity']);
    $program = getSafeValue($conn, $_POST['program']);
    $desp = getSafeValue($conn, $_POST['desp']);
    $time = getSafeValue($conn, $_POST['time']);
    $session = getSafeValue($conn, $_POST['session']);
    $price = getSafeValue($conn, $_POST['price']);
    $chk = $_POST['sesDay'];
    $sqlAdd = "INSERT INTO memberpackage (planName,acID,desp,programmeID,timeID,sessions,price) VALUES ('$planName','$activity','$desp','$program','$time','$session','$price')";
    if (mysqli_query($conn, $sqlAdd)) {  
        $last_id = mysqli_insert_id($conn);
        foreach ($chk as $checkbox1) {
            $sqlmember = "INSERT INTO mempackdays (mempackID,dayID) VALUES ('$last_id','$checkbox1')";
            if(mysqli_query($conn,$sqlmember))
            {
                header("Location: membership-pacakage.php");
            }
        }
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
<title>Admission</title>

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

                        <div class="row">
                            <div class="col-md-12">
                                <!-- Bootstrap Validation -->


                                <div class="card">
                                    <div class="card-header">
                                        <strong>Add New Package</strong>
                                    </div>
                                    <div class="card-body">
                                        <form method="post" action="">

                                            <div class="form-group row">


                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="firstName" class="form-label">Plan Name </label>
                                                        <input type="name" name="planName" class="form-control" id="planName">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="program" class="form-label">Activity</label>
                                                    <select id="program" class="form-control" name="activity">
                                                        <option value="" selected disabled hidden>Choose...</option>
                                                        <?php 
                                                            $sqlAc = "SELECT * from activity";
                                                            $resAc = mysqli_query($conn,$sqlAc);
                                                            while ($rowAc = mysqli_fetch_assoc($resAc)) {
                                                        ?>
                                                        <option value="<?=$rowAc['acID']?>"><?=$rowAc['acName']?></option>
                                                        <?php } ?>

                                                    </select>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="program" class="form-label">Programm Taken</label>
                                                        <select id="program" class="form-control" name="program">
                                                            <option value="" selected disabled hidden>Choose...</option>
                                                            <?php
                                                            $sqlProgram = "SELECT * from program";
                                                            $resProg  = mysqli_query($conn, $sqlProgram);
                                                            while ($rowprog = mysqli_fetch_assoc($resProg)) {
                                                            ?>
                                                                <option value="<?= $rowprog['programID'] ?>"><?= $rowprog['programName'] ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="time" class="form-label">Time</label>
                                                        <select id="time" class="form-control" name="time">
                                                            <option value="" selected disabled hidden>Choose...</option>
                                                            <?php
                                                            $sqlTime = "SELECT * from time";
                                                            $resTime  = mysqli_query($conn, $sqlTime);
                                                            while ($rowTime = mysqli_fetch_assoc($resTime)) {
                                                            ?>
                                                                <option value="<?= $rowTime['timeID'] ?>"><?= $rowTime['time'] ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label for="firstName" class="form-label">Description </label>

                                                        <textarea name="desp" class="form-control" id="desp" row="5"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="mb-4">
                                                        <label for="firstName" class="form-label">Session timing </label>
                                                        <input type="checkbox" name="sesDay[]" value="3" class="form-check" id="planName">All Days
                                                        <input type="checkbox" name="sesDay[]" value="11" class="form-check" id="planName">Sunday
                                                        <input type="checkbox" name="sesDay[]" class="form-check" value="5" id="planName">Monday
                                                        <input type="checkbox" name="sesDay[]" class="form-check" value="6" id="planName">Tuesday
                                                        <input type="checkbox" name="sesDay[]" class="form-check" value="7" id="planName">Wednesday
                                                        <input type="checkbox" name="sesDay[]" value="8" class="form-check" id="planName">Thursday
                                                        <input type="checkbox" name="sesDay[]" class="form-check" value="9" id="planName">Friday
                                                        <input type="checkbox" name="sesDay[]" class="form-check" value="10" id="planName">Saturday
                                                    </div> 
                                                </div>

                                            </div>




                                            <h5>Parents Details</h5>
                                            <div class="row">

                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="Session" class="form-label">Sessions</label>
                                                        <input type="number"  class="form-control" id="session" name="session">
                                                    </div>

                                                    
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="Session" class="form-label">Price</label>
                                                        <input type="number"  name="price" class="form-control" id="price">
                                                    </div>

                                                    
                                                </div>

                                            </div>



                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <button type="submit" class="btn btn-success" name="subConfirmAdd">Add Package</button>

                                            </div>
                                        </div>
                                    </div>



                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- /Bootstrap Validation -->

                        </section>
                    </div>
                    </section>
                </div>
            </div>
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
</body>