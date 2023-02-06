<?php
include_once 'db_conn.php';
$_SESSION['inquiry'] = "active";
// if(!isset($_SESSION['userID']))
// {
//      header("Location: login.php"); 
// }
$msg = '';
if (isset($_GET['error']) && $_GET['error'] != '') {
    $msg = $_GET['error'];
}
if (!isset($_POST['subInq']) or !isset($_POST['subBooktrial']) or !isset($_POST['subConfirmAdd'])) {
    $firstName = "";
    $lastName = "";
    $age = "";
    $contact = "";
    $gender = "";
    $email = "";
    $school = "";
    $location = "";
    $reference = "";
    $remarks = "";
    $program = "";
    $priority = "";
}
if (isset($_GET['id'])) {
    $id = decrypt(getSafeValue($conn, ($_GET['id'])));
    $sqlInquiry = "SELECT * from student as s where s.stdID = $id";
    $resInq  = mysqli_query($conn, $sqlInquiry);
    $rowInq = mysqli_fetch_assoc($resInq);
    $firstName = $rowInq['stdfName'];
    $lastName = $rowInq['stdlName'];
    $age = $rowInq['stdAge'];
    $contact = $rowInq['stdContact'];
    $gender = $rowInq['stdGender'];
    $email = $rowInq['stdEmailID'];
    $school = $rowInq['school'];
    $location = $rowInq['locationID'];
    $reference = $rowInq['refID'];
    $remarks = $rowInq['remarks'];
    $program = $rowInq['programInterestedIN'];
    $priority = $rowInq['priority'];
}

if (isset($_POST['subInq']) or isset($_POST['subBooktrial']) or isset($_POST['subConfirmAdd'])) {
    if (!isset($_POST['gender'])) {
        $msg = "Please select Gender";
    } else {
        $firstName = getSafeValue($conn, $_POST['firstName']);
        $lastName = getSafeValue($conn, $_POST['lastName']);
        $age = getSafeValue($conn, $_POST['age']);
        $contact = getSafeValue($conn, $_POST['contact']);
        $gender = getSafeValue($conn, $_POST['gender']);
        $email = getSafeValue($conn, $_POST['email']);
        $school = getSafeValue($conn, $_POST['school']);
        $location = getSafeValue($conn, $_POST['location']);
        $reference = getSafeValue($conn, $_POST['reference']);
        $remarks = getSafeValue($conn, $_POST['remarks']);
        $program = getSafeValue($conn, $_POST['program']);
        $priority = getSafeValue($conn, $_POST['priority']);
        if (isset($_GET['id'])) {
            $stdID = decrypt(getSafeValue($conn, $_GET['id']));
            $updateStdSql = "UPDATE student SET stdfName = '$firstName', stdlName = '$lastName', stdAge = '$age', stdGender = '$gender', stdContact = '$contact', stdEmailID = '$email', school = '$school', locationID = '$location', refID = '$reference', programInterestedIN = '$program', remarks = '$remarks',priority = '$priority' WHERE stdID = $stdID";
            if (mysqli_query($conn, $updateStdSql)) {
                header("Location: inquiry.php");
            }
        } else {
            $sqlAdd = "INSERT INTO student (stdfName,stdlName,stdAge,stdGender,stdContact,stdEmailID,school,locationID,refID,remarks,programInterestedIN,priority) VALUES ('$firstName','$lastName','$age','$gender','$contact','$email','$school','$location','$reference','$remarks','$program','$priority')";
            if (mysqli_query($conn, $sqlAdd)) {
                $lastID = encrypt(mysqli_insert_id($conn));
                if (isset($_POST['subBooktrial']))
                    header("Location: booktrial.php?id=$lastID");
                if (isset($_POST['subConfirmAdd']))
                    header("Location: admission.php?id=$lastID");
            } else {
                $msg = "creating failed";
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<?php
include('inc/head.php')
?>
<title>Add Inquiry</title>

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
                        <!-- ############ Main START-->
                        <div>


                            <div class="row">
                                <div class="col-md-12">
                                    <!-- Bootstrap Validation -->


                                    <div class="card">
                                        <div class="card-header">
                                            <strong>Inquiry Form</strong>
                                        </div>
                                        <div class="card-body">
                                            <form method="post" action="">

                                                <div class="form-group row">


                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="firstName" class="form-label">First Name</label>
                                                            <input type="name" class="form-control" id="firstName" name="firstName" value="<?= $firstName ?>" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="lastName" class="form-label">Last Name</label>
                                                            <input type="name" class="form-control" id="lastName" name="lastName" value="<?= $lastName ?>" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="age" class="form-label">Age</label>
                                                            <input type="number" class="form-control" id="age" name="age" value="<?= $age ?>" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="contact" class="form-label">Contact Number</label>
                                                            <input type="number" class="form-control" id="contact" name="contact" value="<?= $contact ?>" required>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="mb-3">
                                                    <label class="d-block mb-3">Gender :</label>

                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="gender" id="gender" value="Male" <?php echo ($gender == 'Male') ? "checked" : ''; ?>>
                                                        <label class="form-check-label" for="gender">Male</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="gender" id="gender" value="Female" <?php echo ($gender == 'Female') ? "checked" : ''; ?>>
                                                        <label class="form-check-label" for="gender">Female</label>
                                                    </div>
                                                </div>
                                                <div class="row">

                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="email" class="form-label">Email ID</label>
                                                            <input type="name" class="form-control" id="email" name="email" value="<?= $email ?>" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="school" class="form-label">School/College Name</label>
                                                            <input type="name" class="form-control" id="school" name="school" value="<?= $school ?>" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="location" class="form-label">Location</label>
                                                            <select id="location" class="form-control" name="location" required>
                                                                <option value="" selected disabled hidden>Choose...</option>
                                                                <?php
                                                                $sqlLocation = "SELECT * from location";
                                                                $resLoc  = mysqli_query($conn, $sqlLocation);
                                                                while ($rowLoc = mysqli_fetch_assoc($resLoc)) {

                                                                ?>
                                                                    <option value="<?= $rowLoc['locationID'] ?>" <?= $location == $rowLoc['locationID'] ? "selected" : ''  ?>>
                                                                        <?= $rowLoc['locationName'] ?>
                                                                    </option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="reference" class="form-label">Reference By</label>
                                                            <select id="reference" class="form-control" name="reference" required>
                                                                <option value="" selected disabled hidden>Choose...</option>
                                                                <?php
                                                                $sqlRef = "SELECT * from reference";
                                                                $resRef  = mysqli_query($conn, $sqlRef);
                                                                while ($rowRef = mysqli_fetch_assoc($resRef)) {
                                                                ?>
                                                                    <option value="<?= $rowRef['refID'] ?>" <?php echo ($reference == $rowRef['refID']) ? "selected" : ''; ?>>
                                                                        <?= $rowRef['reference'] ?>

                                                                    </option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="program" class="form-label">Programme Interested in</label>
                                                            <select id="program" class="form-control" name="program" required>
                                                                <option value="" selected disabled hidden>Choose...</option>
                                                                <?php
                                                                $sqlPro = "SELECT * from program";
                                                                $resPro  = mysqli_query($conn, $sqlPro);
                                                                while ($rowPro = mysqli_fetch_assoc($resPro)) {
                                                                ?>
                                                                    <option value="<?= $rowPro['programID'] ?>" <?php echo ($program == $rowPro['programID']) ? "selected" : ''; ?>><?= $rowPro['programName'] ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="program" class="form-label">Handled By</label>
                                                            <select id="handleby" class="form-control" name="handleby" required>
                                                                <option value="" selected disabled hidden>Choose...</option>
                                                                <option value="">Employee name</option>
                                                                <option value="">Admin name</option>


                                                            </select>
                                                        </div>
                                                    </div>


                                                </div>



                                                <div class="form-group row">

                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="program" class="form-label">Type</label>
                                                            <select id="priority" class="form-control" name="priority" required>
                                                                <option value="" selected disabled hidden>Choose...</option>
                                                                <option value="High">High</option>
                                                                <option value="Low">Low</option>
                                                                <option value="Med">Med</option>


                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="remarks">Remarks</label>
                                                            <textarea id="remarks" class="form-control" name="remarks"><?= $remarks ?></textarea>
                                                        </div>
                                                    </div>
                                                </div>




                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <button type="submit" class="btn btn-success " name="subInq" value="Submit">Submit</button>
                                                        <button type="submit" class="btn btn-primary " name="subBooktrial">Book Trial </button>
                                                        <button type="submit" class="btn btn-primary" name="subConfirmAdd">Confirm Addmission</button>
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
                <!-- endbuild -->
</body>