<?php
    include_once 'db_conn.php'; 
    if(isset($_POST['subBranch']))
    {
        $branchName = $_POST['branchName'];
        $addressL1 = $_POST['addressL1'];
        $addressL2 = $_POST['addressL1'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $country = $_POST['country'];
        $printName = $_POST['printName'];
        
        $branchMaster= "INSERT INTO `location` (`locationName`, `addline1`,`addline2`, `city`, `state`, `country`, `printname`) VALUES ('$branchName','$addressL1','$addressL2','$city','$state','$country','$printName')";
        echo $branchMaster;
         if(mysqli_query($conn,$branchMaster))
            header("Location: branch.php");
    }
 ?>
<!DOCTYPE html>
<html lang="en">
<?php
include('inc/head.php')
?>
<title>Branch Master</title>

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
                                                    <strong>Branch Master</strong>
                                                </div>
                                                <div class="card-body">
                                                    <form method="post" action="">
                                                        <div class="form-group row">
                                                            <label for="inputEmail3" class="col-sm-1 col-form-label">Branch Name</label>
                                                            <div class="col-md-2">
                                                                <input type="text" class="form-control" id="inputEmail3" placeholder="Enter Branch Name" name="branchName">
                                                            </div>


                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputEmail3" class="col-sm-1 col-form-label">Address Line 1</label>
                                                            <div class="col-md-2">
                                                                <input type="text" class="form-control" id="inputEmail3" placeholder="Enter Address" name="addressL1">
                                                            </div>
                                                            <label for="inputEmail3" class="col-sm-1 col-form-label">Address Line 2</label>
                                                            <div class="col-md-2">
                                                                <input type="text" class="form-control" id="inputEmail3" placeholder="Enter Address" name="addressL2">
                                                            </div>
                                                            <label for="inputEmail3" class="col-sm-1 col-form-label">City</label>
                                                             <div class="col-md-2">
                                                                <input type="text" class="form-control" id="inputEmail3" placeholder="Enter City" name="city">
                                                            </div>
                                                            <label for="inputEmail3" class="col-sm-1 col-form-label">State</label>
                                                             <div class="col-md-2">
                                                                <input type="text" class="form-control" id="inputEmail3" placeholder="Enter State     " name="state">
                                                            </div>
                                                            <label for="inputEmail3" class="col-sm-1 col-form-label">Country</label>
                                                            <div class="col-md-2">
                                                                <input type="text" class="form-control" id="inputEmail3" placeholder="Enter Country     " name="country">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputEmail3" class="col-sm-1 col-form-label">Print Name</label>
                                                            <div class="col-md-2">
                                                                <input type="text" class="form-control" id="inputEmail3" placeholder="Enter Print name" name="printName">
                                                            </div>
                                                            <label for="inputEmail3" class="col-sm-1 col-form-label">Active</label>
                                                            <div class="col-md-2">
                                                                <select class="form-control" name="active">
                                                                    <option value="1">Yes</option>
                                                                    <option value="0">No</option>
                                                                </select>
                                                            </div>

                                                        </div>


                                                        <button type="submit" class="btn btn-primary mt-1" name="subBranch">Save</button>
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