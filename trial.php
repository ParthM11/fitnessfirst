<?php
include_once 'db_conn.php';
if (!isset($_POST['subConfirmAdd'])) {
    $id = "";
    $firstName = "";
    $trainer = "";
    $contact = "";
    $chkt1 = "";
    $chkt2 = "";
    $chkt3 = "";
    $contact = "";
}
if (isset($_GET['id'])) {
    $id = getSafeValue($conn, decrypt($_GET['id']));
    $sqlStudent = 
    "SELECT * from student where stdID = $id";
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
    $contact = $rowStud['stdContact'];
}
if (isset($_POST['subConfirmAdd'])) {

    $stdID = getSafeValue($conn, $_POST['firstName']);
    $trainer = getSafeValue($conn, $_POST['lastName']);
    $chkt1 = getSafeValue($conn, $_POST['age']);
    $chkt2 = getSafeValue($conn, $_POST['gender']);
    $chkt3 = getSafeValue($conn, $_POST['email']);
    $school = getSafeValue($conn, $_POST['school']);
    $sqlAdd = "INSERT INTO studentdetails (DOB,fatherName,motherName,fatherContact,motherContact,emergencyContactName,emergencyContactNum,programID,transportID,fatherOccupation,motherOccupation,dayID,timeID) VALUES ('$DOB','$fatherName','$motherName','$fatherContact','$motherContact','$emergencyContactName','$emergencyContactNum','$program','$transport','$fatherOccupation','$motherOccupation','$day','$time')";
    if (mysqli_query($conn, $sqlAdd)) {
        $lastID = encrypt(mysqli_insert_id($conn));
        header("Location: inquiry.php");
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
<title>Trial Booking</title>

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
                                        <strong>Trial</strong>
                                    </div>
                                    <div class="card-body">
                                        <form method="post" action="">

                                            <div class="form-group row">


                                                <div class="col-md-3">
                                                    <div class="mb-3">
                                                        <label for="firstName" class="form-label">Full Name</label>
                                                        <input type="name" class="form-control" id="firstName" name="firstName" value="<?= $firstName ?>" required>
                                                    </div>
                                                </div>


                                                <div class="col-md-3">
                                                    <div class="mb-3">
                                                        <label for="contact" class="form-label">Contact Number</label>
                                                        <input type="number" class="form-control" id="contact" name="contact" value="<?= $contact ?>" required>
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <div class="mb-3">
                                                        <label for="contact" class="form-label">Trainer</label>
                                                        <input type="name" class="form-control" id="contact" name="trainer"            value="<?=$trainer ?>" required>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="form-group row">

                                                <div class="col-md-3">
                                                    <div class="mb-3">
                                                        <label for="firstName" class="form-label">Available Trails</label>
                                                        <ul>
                                                            <li><input type="checkbox" class="form-check-input" id="contact" name="chb1" > Trial 1 </li>
                                                            <li><input type="checkbox" class="form-check-input" id="contact" name="chb2" > Trial 2 </li>
                                                            <li><input type="checkbox" class="form-check-input" id="contact" name="chb3" > Trial 3</li>
                                                        </ul>

                                                    </div>
                                                </div>


                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">

                                                    <button type="submit" class="btn btn-success " name="subBooktrial">Book Trial </button>
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