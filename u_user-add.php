<?php
include_once 'db_conn.php';
session_start();
    if(isset($_SESSION['roleID']))
    {
        $roleID = $_SESSION['roleID'];
        $roleArr = array();
        $i = 0;
        $sqlChkPer = "SELECT * from permissionmanager where roleID = $roleID";
        $resChkPer = mysqli_query($conn,$sqlChkPer);
        while($rowChkPer = mysqli_fetch_assoc($resChkPer))
        {
            $roleArr[$i] = $rowChkPer['perID'];
            $i = $i + 1;
        }
        if(!in_array(11,$roleArr))
        {
            header("Location: index.php");
        }
        $roleID = $_SESSION['roleID'];
        if($roleID != 1)
        {
            $location = $_SESSION['locationID'];
        }
    }
    else
    {
        header("Location: login.php");
    }
if(isset($_POST['subUser']))
{
    $userName = $_POST['userName'];
    $userRole = $_POST['userRole'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $status = $_POST['status'];
    $phone = $_POST['phone'];
    $location = $_POST['location'];
    
    $sqlCredIns = "INSERT INTO `creds` (`userName`, `userEmail`, `password`, `phone`, `roleID`,`status`,`locationID`) VALUES ('$userName','$email','$password','$phone','$userRole','$status','$location')";
    echo $sqlCredIns;
    if(mysqli_query($conn,$sqlCredIns))
        header("Location: u_user.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<?php
include('inc/head.php')
?>
<title>User Master</title>

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
                                                <strong>User Master</strong>
                                            </div>
                                            <div class="card-body">
                                                <form action="" method="POST">
                                                    <div class="form-group row">
                                                        <label for="inputEmail3" class="col-sm-1 col-form-label">User Name</label>
                                                        <div class="col-md-2">
                                                            <input type="text" name="userName" class="form-control" id="inputEmail3" placeholder="Enter City Name">
                                                        </div>

                                                        <label for="inputEmail3" class="col-sm-1 col-form-label">Password</label>
                                                        <div class="col-md-2">
                                                            <input type="password" name="password" class="form-control" id="inputEmail3" placeholder="Enter City Name">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputEmail3" class="col-sm-1 col-form-label">Email</label>
                                                        <div class="col-md-2">
                                                            <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Enter City Name">
                                                        </div>

                                                        <label for="inputEmail3" class="col-sm-1 col-form-label">Mobile Number</label>
                                                        <div class="col-md-2">
                                                            <input type="number" name="phone" class="form-control" id="inputEmail3" placeholder="Enter City Name">
                                                        </div>                                                                           <label for="inputEmail3" class="col-sm-1 col-form-label">Role Type</label>
                                                        <div class="col-md-2">
                                                            <?php
                                                                $sqlAtds = "SELECT * from roles ";
                                                                $resAtds = mysqli_query($conn, $sqlAtds);
                                                            ?>
                                                            <select class="form-control" name="userRole">
                                                                <option disabled selected hidden>Select Role</option>
                                                                <?php
                                                                while ($rowUserTypes = mysqli_fetch_assoc($resAtds)) {
                                                                ?>
                                                                    <option value="<?= $rowUserTypes['roleID'] ?>"><?= $rowUserTypes['role'] ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>

                                                        <label for="inputEmail3" class="col-sm-1 col-form-label">Status</label>
                                                        <div class="col-md-2">
                                                            <select class="form-control" name="status">
                                                                <option value="1">Active</option>
                                                                <option value="2">inactive</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputEmail3" class="col-sm-1 col-form-label">Location</label>
                                                        <div class="col-md-2">
                                                            <?php
                                                            $sqlBranch = "SELECT * from location ";
                                                            $resBranch = mysqli_query($conn, $sqlBranch);
                                                            ?>
                                                            <select class="form-control" name="location">
                                                                <option disabled selected hidden>Select Location</option>
                                                                <?php
                                                                while ($rowBranch = mysqli_fetch_assoc($resBranch)) {
                                                                ?>
                                                                    <option value="<?= $rowBranch['locationID'] ?>"><?= $rowBranch['locationName'] ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>


                                            </div>
                                        </div>


                                        <button type="submit" class="btn btn-primary mt-1" name="subUser">Generate</button>
                                        <button type="" class="btn btn-secondary mt-1">Cancel</button>
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