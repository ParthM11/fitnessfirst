<!DOCTYPE html>
<html lang="en">
<?php
include('inc/head.php');
include('db_conn.php');
?>
<title>Employee master</title>

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

                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h4 class="card-title mb-4">Employee Master (add all employee details below)</h4>

                                                            <div id="">
                                                                <!-- Seller Details -->
                                                                <h3>Employee Details</h3>
                                                                <br>
                                                                
                                                                    <form action="connection.php" method="POST">
                                                                      
                                                                        <div class="form-group row">
                                                                            <div class="col-lg-3">
                                                                                <label  class=" col-form-label">First Name</label>

                                                                                <input type="name" class="form-control" id="firstName" name="firstName"  required>
                                                                            </div>
                                                                            <div class="col-lg-3">
                                                                                <label  class=" col-form-label">Father's Name</label>

                                                                                <input type="name" class="form-control" id="middlename" name="middlename"  required>
                                                                            </div>
                                                                            <div class="col-lg-3">
                                                                                <label  class=" col-form-label">Surname</label>

                                                                                <input type="name" class="form-control" id="lastName" name="lastName"  required>
                                                                            </div>
                                                                            <div class="col-lg-3">
                                                                                <label  class=" col-form-label">Qualification</label>

                                                                                <input type="text" class="form-control" id="qualification" name="qualification">
                                                                            </div>



                                                                            <div class="col-lg-2">
                                                                                <label  class=" col-form-label">Biomatirc Code</label>

                                                                                <input type="number" class="form-control" id="bcode" name="bcode" placeholder="Ex-1001" required>
                                                                            </div>
                                                                            <div class="col-lg-2">
                                                                                <label  class=" col-form-label">TruPay Code</label>

                                                                                <input type="number" class="form-control" id="code" name="code" placeholder="Ex-1001" required> 
                                                                            </div>
                                                                            <div class="col-lg-2">
                                                                                <label  class=" col-form-label">Date oF Birth</label>

                                                                                <input type="date" class="form-control" id="dob" name="dob" placeholder="Ex-1001" required>
                                                                            </div>
                                                                            <div class="col-lg-2">
                                                                                <label  class=" col-form-label">Anniversary Date</label>

                                                                                <input type="date" class="form-control" id="aDate" name="aDate" placeholder="Ex-1001"> 
                                                                            </div>
                                                                            <div class="col-lg-4">
                                                                                <label  class=" col-form-label">Gender & Status</label>

                                                                                <div class="mt-2" id="event-type">
                                                                                    <div class="form-check form-check-inline">
                                                                                        <label class="form-check-label">
                                                                                            <input class="form-check-input" type="radio" name="gender" value="Male"> Male</label>
                                                                                    </div>
                                                                                    <div class="form-check form-check-inline">
                                                                                        <label class="form-check-label">
                                                                                            <input class="form-check-input" type="radio" name="gender" value="Female"> Female</label>
                                                                                    </div>
                                                                                    <div class="form-check form-check-inline">
                                                                                        <label class="form-check-label">
                                                                                            <input class="form-check-input" type="radio" name="status" value="Married"> Married</label>
                                                                                    </div>
                                                                                    <div class="form-check form-check-inline">
                                                                                        <label class="form-check-label">
                                                                                            <input class="form-check-input" type="radio" name="status" value="Single"> Single</label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">




                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="col-lg-2">
                                                                                <label  class=" col-form-label">Aadhar Number</label>

                                                                                <input class="form-control input-mask" id="aadharNumber" name="aadharNumber" data-inputmask="'mask': '9999-9999-9999'">
                                                                            </div>

                                                                            <div class="col-lg-2">
                                                                                <label class="text-muted">Upload Aadhar Card Image File</label>

                                                                                <div class="custom-file">

                                                                                    <input type="file" class="custom-file-input" id="imgadh">


                                                                                </div>
                                                                                <label class="custom-file-label" for="inputGroupFile01">For Aadhar Card</label>
                                                                            </div>
                                                                            <div class="col-lg-2">
                                                                                <label  class=" col-form-label">PAN Number</label>
                                                                                <input class="form-control input-mask" id="panNumber" name="panNumber" data-inputmask="'mask': ' aaaaa-9999-a'">

                                                                            </div>

                                                                            <div class="col-lg-2">
                                                                                <label class="text-muted">Upload Aadhar Card Image File</label>

                                                                                <div class="custom-file">

                                                                                    <input type="file" class="custom-file-input" id="inputGroupFile01">


                                                                                </div>
                                                                                <label class="custom-file-label" for="inputGroupFile01">For Pan Card</label>
                                                                            </div>
                                                                            <div class="col-lg-3">
                                                                                <label class="text-muted">Upload Employee Passport Size Photo</label>

                                                                                <div class="custom-file">

                                                                                    <input type="file" class="custom-file-input" id="inputGroupFile01">


                                                                                </div>
                                                                                <label class="custom-file-label" for="inputGroupFile01">For Employee Photo</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="col-lg-2">
                                                                                <label  class=" col-form-label">Address Line-1</label>
                                                                                <input type="text" class="form-control" id="addressLine_1" name="addressLine_1" >
                                                                            </div>
                                                                            <div class="col-lg-2">
                                                                                <label  class=" col-form-label">Address Line-2</label>
                                                                                <input type="text" class="form-control" id="addressLine_2" name="addressLine_2" >
                                                                            </div>
                                                                            <div class="col-lg-2">
                                                                                <label  class=" col-form-label">Address Line-3</label>
                                                                                <input type="text" class="form-control" id="addressLine_3" name="addressLine_3" >
                                                                            </div>
                                                                            <div class="col-lg-2">
                                                                                <label  class=" col-form-label">City</label>
                                                                                <input type="text" class="form-control" id="tCity" name="tCity" >
                                                                            </div>
                                                                            <div class="col-lg-2">
                                                                                <label  class=" col-form-label">Pincode</label>
                                                                                <input type="text" class="form-control" id="tPin" name="tPin" >
                                                                            </div>
                                                                            <div class="col-lg-2">
                                                                                <label  class=" col-form-label">State</label>
                                                                                <input type="text" class="form-control" id="tState" name="tState" >
                                                                            </div>





                                                                        </div>
                                                                        <div class="form-group row">

                                                                            <div class="col-lg-2">
                                                                                <label  class=" col-form-label">Permanent Address Line-1</label>
                                                                                <input type="text" class="form-control" id="permanentAddressline_1" name="permanentAddressline_1" >
                                                                            </div>
                                                                            <div class="col-lg-2">
                                                                                <label  class=" col-form-label">Permanent Address Line-2</label>
                                                                                <input type="text" class="form-control" id="permanentAddressline_2" name="permanentAddressline_2" >
                                                                            </div>
                                                                            <div class="col-lg-2">
                                                                                <label  class=" col-form-label">Permanent Address Line-3</label>
                                                                                <input type="text" class="form-control" id="permanentAddressline_3" name="permanentAddressline_3" >
                                                                            </div>
                                                                            <div class="col-lg-2">
                                                                                <label  class=" col-form-label">City</label>
                                                                                <input type="text" class="form-control" id="pCity" name="pCity" >
                                                                            </div>
                                                                            <div class="col-lg-2">
                                                                                <label  class=" col-form-label">Pincode</label>
                                                                                <input type="text" class="form-control" id="pPin" name="pPin" >
                                                                            </div>
                                                                            <div class="col-lg-2">
                                                                                <label  class=" col-form-label">State</label>
                                                                                <input type="text" class="form-control" id="pState" name="pState" >
                                                                            </div>



                                                                        </div>
                                                                        <div class="form-group row">

                                                                            <div class="col-lg-3">
                                                                                <label  class=" col-form-label">Email Address</label>

                                                                                <input type="email" class="form-control" id="email" name="email" >
                                                                            </div>

                                                                            <div class="col-lg-2">
                                                                                <label  class=" col-form-label">Mobile Number</label>

                                                                                <input type="number" class="form-control" id="mobileNumber" name="mobileNumber" >
                                                                            </div>
                                                                            <div class="col-lg-2">
                                                                                <label  class=" col-form-label">Phone Number</label>

                                                                                <input type="number" class="form-control" id="phoneNumber" name="phoneNumber" >
                                                                            </div>

                                                                            <div class="col-lg-2">
                                                                                <label  class=" col-form-label">Blood Group</label>

                                                                                <input type="text" class="form-control" id="bGroup" name="bGroup" placeholder="Blood Group">
                                                                            </div>
                                                                           




                                                                        </div>
                                                                
                                                                <br>
                                                                <!-- Company Document -->
                                                                <h3>Company Details</h3>
                                                                <br>
                                                                
                                                              
                                                                    <div class="form-group row">
                                                                        <div class="col-lg-3">
                                                                            <label  class=" col-form-label" id="designation">Designation</label>

                                                                            <select class="form-control" name="designation">
                                                                                <option hidden disabled selected>select designation</option>
                                                                                <?php
                                                                                $sqldesignation = "SELECT * from designationmaster";
                                                                                $resDesignation = mysqli_query($conn, $sqldesignation);
                                                                                while ($rowDesignation = mysqli_fetch_assoc($resDesignation)) {
                                                                                ?>
                                                                                    <option value="<?= $rowDesignation['id'] ?>"><?= $rowDesignation['designation'] ?></option>
                                                                                <?php } ?>
                                                                            </select>
                                                                            </select>
                                                                        </div>

                                                                        <div class="col-lg-3">
                                                                            <label  class=" col-form-label" id="department">Department</label>

                                                                            <select class="form-control" name="department">
                                                                                <option hidden disabled selected>select Department</option>
                                                                                <?php
                                                                                $sqldepartment = "SELECT * from departmentmaster";
                                                                                $resDepartment = mysqli_query($conn, $sqldepartment);
                                                                                while ($rowDepartment = mysqli_fetch_assoc($resDepartment)) {
                                                                                ?>
                                                                                    <option value="<?= $rowDepartment['id'] ?>"><?= $rowDepartment['department'] ?> - <?= $rowDepartment['dCode'] ?></option>
                                                                                <?php } ?>
                                                                            </select>
                                                                        </div>

                                                                        <div class="col-lg-3">
                                                                            <label  class=" col-form-label" id="">Shift</label>

                                                                            <select class="form-control" name="shift">
                                                                                <option hidden disabled selected>select shift</option>
                                                                                <?php
                                                                                $sqlShift = "SELECT * from shiftmaster";
                                                                                $resShft = mysqli_query($conn, $sqlShift);
                                                                                while ($rowShift = mysqli_fetch_assoc($resShft)) {
                                                                                ?>
                                                                                    <option value="<?= $rowShift['id'] ?>"><?= $rowShift['shift'] ?></option>
                                                                                <?php } ?>
                                                                            </select>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <div class="col-lg-3">
                                                                            <label  class=" col-form-label">In-Time</label>

                                                                            <input type="time" class="form-control" id="inTime" name="inTime" >
                                                                        </div>
                                                                        <div class="col-lg-3">
                                                                            <label  class=" col-form-label">Out-Time</label>

                                                                            <input type="time" class="form-control" id="outTime" name="outTime">
                                                                        </div>

                                                                        <div class="col-lg-3">
                                                                            <label  class=" col-form-label">Break In-Time</label>

                                                                            <input type="time" class="form-control" id="breakInTIme" name="breakInTIme" >
                                                                        </div>
                                                                        <div class="col-lg-3">
                                                                            <label  class=" col-form-label">Break Out-Time</label>

                                                                            <input type="time" class="form-control" id="breakOutTIme" name="breakOutTIme" >
                                                                        </div>

                                                                        <div class="col-lg-3">
                                                                            <label  class=" col-form-label">Working Hours</label>

                                                                            <input type="number" class="form-control" id="workingHours" name="workingHours">
                                                                        </div>
                                                                        <div class="col-lg-3">
                                                                            <label  class=" col-form-label" id="branch">Branch</label>

                                                                            <select class="form-control" name="branch">
                                                                                <option hidden disabled selected>select branch</option>
                                                                                <?php
                                                                                $sqlbranch = "SELECT * from branchmaster";
                                                                                $resBranch = mysqli_query($conn, $sqlbranch);
                                                                                while ($rowBranch = mysqli_fetch_assoc($resBranch)) {
                                                                                ?>
                                                                                    <option value="<?= $rowBranch['id'] ?>"><?= $rowBranch['branch_name'] ?></option>
                                                                                <?php } ?>
                                                                            </select>

                                                                        </div>
                                                                        <div class="col-lg-3">
                                                                            <label  class=" col-form-label" id="salaryType">Salary Type</label>
                                                                            <select class="form-control" name="salaryType" id="salaryType">
                                                                                <option hidden disabled selected>select branch</option>
                                                                                <?php
                                                                                $sqltype = "SELECT * from slarytype";
                                                                                $restype = mysqli_query($conn, $sqltype);
                                                                                while ($rowtype = mysqli_fetch_assoc($restype)) {
                                                                                ?>
                                                                                    <option value="<?= $rowtype['id'] ?>"><?= $rowtype['sType'] ?></option>
                                                                                <?php } ?>
                                                                            </select>
                                                                        </div>

                                                                        <div class="col-lg-3">
                                                                            <label  class=" col-form-label">Reference Name</label>

                                                                            <input type="name" class="form-control" id="referenceName" name="referenceName" >
                                                                        </div>
                                                                        <div class="col-lg-3">
                                                                            <label  class=" col-form-label">Reference Numebr</label>

                                                                            <input type="name" class="form-control" id="referenceNumber" name="referenceNumber" >
                                                                        </div>
                                                                        <div class="col-lg-3">
                                                                            <label  class=" col-form-label">Basic Pay</label>

                                                                            <input type="number" class="form-control" id="basicPay" name="basicPay">
                                                                        </div>
                                                                        <div class="col-lg-3">
                                                                            <label  class=" col-form-label">Work Experience</label>

                                                                            <input type="number" class="form-control" id="workExperience" name="workExperience" >
                                                                        </div>
                                                                        <div class="col-lg-3">
                                                                            <label  class=" col-form-label">Emergency Name</label>

                                                                            <input type="name" class="form-control" id="emeName" name="emeName" >
                                                                        </div>
                                                                        <div class="col-lg-3">
                                                                            <label  class=" col-form-label">Emergency No.</label>

                                                                            <input type="number" class="form-control" id="emeNo" name="emeNo" >
                                                                        </div>



                                                                        <div class="col-lg-3">
                                                                            <label  class=" col-form-label">Previous Basic Salary</label>

                                                                            <input type="number" class="form-control" id="pbsalary" name="pbsalary" >
                                                                        </div>

                                                                        <div class="col-lg-3">
                                                                            <label  class=" col-form-label">Reason of Previous Job Leave</label>

                                                                            <input type="text" class="form-control" id="reason" name="reason" >
                                                                        </div>
                                                                        <div class="col-lg-3">
                                                                            <label  class=" col-form-label">Paid Leave</label>

                                                                            <input type="number" class="form-control" id="paidLeave" name="paidLeave" >
                                                                        </div>
                                                                    </div>
                                                                

                                                                <!-- Bank Details -->
                                                                <br>
                                                                <h3>Bank Details</h3>
                                                                <br>
                                                                
                                                               
                                                                    <div>
                                                                        <div class="form-group row">






                                                                            <div class="col-lg-3">
                                                                                <label  class=" col-form-label">Bank Name</label>

                                                                                <input type="text" class="form-control" id="bankName" name="bankName" >
                                                                            </div>
                                                                            <div class="col-lg-3">
                                                                                <label  class=" col-form-label">Bank Branch Name</label>

                                                                                <input type="text" class="form-control" id="branchName" name="branchName" >
                                                                            </div>
                                                                            <div class="col-lg-3">
                                                                                <label  class=" col-form-label">IFSC Code</label>

                                                                                <input type="text" class="form-control" id="ifsc" name="ifsc" >
                                                                            </div>
                                                                            <div class="col-lg-3">
                                                                                <label  class=" col-form-label">Account Number</label>

                                                                                <input type="NUMBER" class="form-control" id="accNumber" name="accNumber" >
                                                                            </div>





                                                                        </div>




                                                                       
                                                                    </div>
                                                                

                                                                
                                                                <button type="submit" class="btn btn-primary mt-1" name="saveEmployee" id="saveEmployee">Save</button>
                                                                        <a href="employee.php" class="btn btn-secondary mt-1">Cancel</a>

                                                                        </form>
                                                                <!-- Confirm Details -->
                                                                
                                                            </div>

                                                        </div>
                                                        <!-- end card body -->
                                                    </div>
                                                    <!-- end card -->
                                                </div>
                                                <!-- end col -->
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
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

    <!-- jquery step -->
    <script src="assets/libs/jquery-steps/build/jquery.steps.min.js"></script>

    <!-- form wizard init -->
    <script src="assets/js/pages/form-wizard.init.js"></script>

    <!-- form mask -->
    <script src="assets/libs/inputmask/min/jquery.inputmask.bundle.min.js"></script>

    <!-- form mask init -->
    <script src="assets/js/pages/form-mask.init.js"></script>

    <script src="assets/js/app.js"></script>
    <!-- endbuild -->
</body>

</html>