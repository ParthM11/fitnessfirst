<?php
include_once 'db_conn.php';
if (!isset($_POST['subConfirmAdd'])) {
    $id = "";
    $firstName = "";
    $lastName = "";
    $age = "";
    $gender = "";
    $email = "";
    $school = "";
    $location = "";
}
if (isset($_GET['id'])) {
    $id = getSafeValue($conn, decrypt($_GET['id']));
    $sqlStudent = "SELECT * from student where stdID = $id";
    $resStud  = mysqli_query($conn, $sqlStudent);
    $rowStud = mysqli_fetch_assoc($resStud);
    $firstName = $rowStud['stdfName'];
    $lastName = $rowStud['stdlName'];
    $age = $rowStud['stdAge'];
    $gender = $rowStud['stdGender'];
    $email = $rowStud['stdEmailID'];
    $school = $rowStud['school'];
    $location = $rowStud['locationID'];
    $firstName = $rowStud['stdfName'];
}
if (isset($_POST['subConfirmAdd'])) {

    $firstName = getSafeValue($conn, $_POST['firstName']);
    $lastName = getSafeValue($conn, $_POST['lastName']);
    $age = getSafeValue($conn, $_POST['age']);
    $gender = getSafeValue($conn, $_POST['gender']);
    $email = getSafeValue($conn, $_POST['email']);
    $school = getSafeValue($conn, $_POST['school']);
    $location = getSafeValue($conn, $_POST['location']);
    $remarks = getSafeValue($conn, $_POST['remarks']);
    $fatherName = getSafeValue($conn, $_POST['fatherName']);
    $fatherOccupation = getSafeValue($conn, $_POST['fatherOccupation']);
    $motherName = getSafeValue($conn, $_POST['motherName']);
    $motherOccupation = getSafeValue($conn, $_POST['motherOccupation']);
    $fatherContact = getSafeValue($conn, $_POST['fatherContact']);
    $motherContact = getSafeValue($conn, $_POST['motherContact']);
    $emergencyContactName = getSafeValue($conn, $_POST['emergencyContactName']);
    $emergencyContactNum = getSafeValue($conn, $_POST['emergencyContactNum']);
    $email = getSafeValue($conn, $_POST['email']);
    $school = getSafeValue($conn, $_POST['school']);
    $location = getSafeValue($conn, $_POST['location']);
    $program = getSafeValue($conn, $_POST['program']);
    $day = getSafeValue($conn, $_POST['day']);
    $DOB = getSafeValue($conn, $_POST['DOB']);
    $time = getSafeValue($conn, $_POST['time']);
    $transport = getSafeValue($conn, $_POST['transport']);
    $sqlAdd = "INSERT INTO studentdetails (stdID,DOB,fatherName,motherName,fatherContact,motherContact,emergencyContactName,emergencyContactNum,programID,transportID,fatherOccupation,motherOccupation,dayID,timeID) VALUES ('$id','$DOB','$fatherName','$motherName','$fatherContact','$motherContact','$emergencyContactName','$emergencyContactNum','$program','$transport','$fatherOccupation','$motherOccupation','$day','$time')";
    if (mysqli_query($conn, $sqlAdd)) {
        $lastID = encrypt(mysqli_insert_id($conn));
        header("Location: all-inquiry.php");
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
                                        <strong>Admission Form</strong>
                                    </div>
                                    <div class="card-body">
                                        <form method="post" action="">
                                            <h5>Client Details</h5>
                                            <div class="form-group row">


                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="firstName" class="form-label">First Name</label>
                                                        <input type="name" name="firstName" class="form-control" id="firstName" value="<?= $firstName ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="formrow-name-input" class="form-label">Last Name</label>
                                                        <input type="name" name="lastName" class="form-control" id="lastName" value="<?= $lastName ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">

                                                        <label for="dob" class="form-label">Date Of Birth</label>
                                                        <input type="date" class="form-control" placeholder="dd M, yyyy" data-date-format="dd M, yyyy" data-date-container='#datepicker2' data-provide="datepicker" data-date-autoclose="true" name="DOB">

                                                     
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="formrow-number-input" class="form-label">Age</label>
                                                        <input type="number" class="form-control" id="" name="age" value="<?= $age ?>">
                                                    </div>
                                                </div>

                                            </div>



                                            <div class="mb-3">
                                                <label class="d-block mb-3">Gender :</label>

                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="gender" id="" value="option1" <?php echo ($gender == 'Male') ? "checked" : ''; ?>>
                                                    <label class="form-check-label" for="inlineRadio1">Male</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="gender" id="" value="option2" <?php echo ($gender == 'Female') ? "checked" : ''; ?>>
                                                    <label class="form-check-label" for="inlineRadio2">Female</label>
                                                </div>
                                            </div>
                                            <h5>Parents Details</h5>
                                            <div class="row">

                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="fatherName" class="form-label">Father Name</label>
                                                        <input type="name" name="fatherName" class="form-control" id="fatherName">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="fatherOccupation" class="form-label">Father's Occupation</label>
                                                        <input type="name" name="fatherOccupation" class="form-control" id="fatherOccupation">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="motherName" class="form-label">Mother Name</label>
                                                        <input type="name" name="motherName" class="form-control" id="motherName">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="motherOccupation" class="form-label">Mother's Occupation</label>
                                                        <input type="name" name="motherOccupation" class="form-control" id="motherOccupation">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="fatherContact" class="form-label">Father's Contact Number</label>
                                                        <input type="number" name="fatherContact" class="form-control" id="fatherContact">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="motherContact" class="form-label">Mother's Contact Number</label>
                                                        <input type="number" name="motherContact" class="form-control" id="motherContact">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="emergencyContactName" class="form-label">Emergency Contact Name</label>
                                                        <input type="name" name="emergencyContactName" class="form-control" id="emergencyContactName">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="emergencyContactNum" class="form-label">Emergency Contact Number</label>
                                                        <input type="number" name="emergencyContactNum" class="form-control" id="emergencyContactNum">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="email" class="form-label">Email ID</label>
                                                        <input type="email" name="email" class="form-control" id="email" value="<?= $email ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="school" class="form-label">School/College Name</label>
                                                        <input type="name" name="school" class="form-control" id="school" value="<?= $school ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="location" class="form-label">Location</label>
                                                        <select id="location" class="form-control" name="location">
                                                            <option value="" selected disabled hidden>Choose...</option>
                                                            <?php
                                                            $sqlLocation = "SELECT * from location";
                                                            $resLoc  = mysqli_query($conn, $sqlLocation);
                                                            while ($rowLoc = mysqli_fetch_assoc($resLoc)) {
                                                            ?>
                                                                <option value="<?= $rowLoc['locationID'] ?>" <?php echo ($location == $rowLoc['locationID']) ? "selected" : ''; ?>><?= $rowLoc['locationName'] ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
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
                                            </div>
                                            <h5>Select Batch & Transportation</h5>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="day" class="form-label">Day</label>
                                                        <select id="day" class="form-control" name="day">
                                                            <option value="" selected disabled hidden>Choose...</option>
                                                            <?php
                                                            $sqlDay = "SELECT * from day";
                                                            $resDay  = mysqli_query($conn, $sqlDay);
                                                            while ($rowDay = mysqli_fetch_assoc($resDay)) {
                                                            ?>
                                                                <option value="<?= $rowDay['dayID'] ?>"><?= $rowDay['days'] ?></option>
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
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="transport" class="form-label">Transportation Mode</label>
                                                        <select id="transport" class="form-control" name="transport">
                                                            <option value="" selected disabled hidden>Choose...</option>
                                                            <?php
                                                            $sqlTrans = "SELECT * from transport";
                                                            $resTrans  = mysqli_query($conn, $sqlTrans);
                                                            while ($rowTrans = mysqli_fetch_assoc($resTrans)) {
                                                            ?>
                                                                <option value="<?= $rowTrans['transportID'] ?>"><?= $rowTrans['transportMeans'] ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <h5>Select Batch & Transportation</h5>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="resume">Upload Doc 1</label>
                                                        <input type="file" class="form-control-file" id="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="resume">Upload Doc 2</label>
                                                        <input type="file" class="form-control-file" id="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="resume">Upload Doc 3</label>
                                                        <input type="file" class="form-control-file" id="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="resume">Upload Doc 4</label>
                                                        <input type="file" class="form-control-file" id="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="message">Remarks</label>
                                                        <textarea id="message" class="form-control" name="remarks"></textarea>
                                                    </div>
                                                </div>



                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <button type="submit" class="btn btn-success" name="subConfirmAdd">Book Admission</button>

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