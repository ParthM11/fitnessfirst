<?php 
    include_once 'db_conn.php';
    $_SESSION['expensAdd'] = "active";
    if(isset($_POST['subProd']))
    {
        $prodName = getSafeValue($conn,$_POST['prodName']);
        $HSNcode = getSafeValue($conn,$_POST['HSNcode']);
        $location = getSafeValue($conn,$_POST['location']);
        $cat = getSafeValue($conn,$_POST['cat']);
        $subCat = getSafeValue($conn,$_POST['subCat']);
        $desp = getSafeValue($conn,$_POST['desp']);
        $sqlAdd = "INSERT INTO product (prodName,HSNcode,businessLocationID,catID,subCatID,desp) VALUES ('$prodName','$HSNcode','$location','$cat','$subCat','$desp')";
        if(mysqli_query($conn, $sqlAdd))
        {
            header("Location: listproduct.php");
        }
    }
?><!DOCTYPE html>
<html class="loading semi-dark-layout" lang="en" data-layout="semi-dark-layout" data-textdirection="ltr">
<!-- BEGIN: Head-->
<?php
include('inc/head.php')
?>


<!-- END: Head-->

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
    <!-- BEGIN: Content-->
    
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">Add Expense</h2>

                        </div>
                    </div>
                </div>
               
            </div>
            <div class="content-body">
                <!-- Validation -->
                <section class="bs-validation">
                    <div class="row">
                        <!-- Bootstrap Validation -->
                        <div class="col-md-12 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Details</h4>
                                </div>
                                <div class="card-body">
                                    <form class="repeater" enctype="multipart/form-data">
                                        <div data-repeater-list="group-a">
                                            <div data-repeater-item class="row">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="formrow-inputRef" class="form-label">Business Location</label>
                                                            <select id="" class="form-select">
                                                                <option selected>Choose...</option>
                                                                <option>Vesu</option>
                                                                <option>Katargam</option>
                                                                <option>Adajan</option>
                                                                
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="formrow-inputRef" class="form-label">Expense Category</label>
                                                            <select id="" class="form-select">
                                                                <option selected>Choose...</option>
                                                                <option>Breakfast</option>
                                                                <option>Clothing</option>
                                                                <option>Something</option>
                                                                
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="formrow-inputRef" class="form-label">Sub Expense Category</label>
                                                            <select id="" class="form-select">
                                                                <option selected>Choose...</option>
                                                                
                                                                
                                                            </select>
                                                        </div>
                                                    </div> -->
                                                    <div class="col-md-6">
                                                        <div class="mb-3" id="datepicker2">

                                                            <label for="formrow-firstname-input" class="form-label">Expense Date</label>
                                                            <input type="date" class="form-control" placeholder="dd M, yyyy" >

                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="formrow-name-input" class="form-label">Total Amount</label>
                                                            <input type="number" class="form-control" id="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="formrow-name-input" class="form-label">Remarks</label>
                                                            <input type="text" class="form-control" id="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                         <div class="mb-3  ">
                                                            <label for="resume">Upload Document</label>
                                                            <input type="file" class="form-control-file" id="">
                                                        </div>
                                                    </div>

                                                    
                                                <h4 class="card-title mb-4">Payment Details</h4>

                                                <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="formrow-name-input" class="form-label">Total Amount</label>
                                                            <input type="number" class="form-control" id="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                        <label for="formrow-firstname-input" class="form-label">Paid On</label>
                                                            <input type="date" class="form-control" placeholder="dd M, yyyy" >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="formrow-inputRef" class="form-label">Payment Category</label>
                                                            <select id="" class="form-select">
                                                                <option selected>Choose...</option>
                                                                <option>Cash</option>
                                                                <option>Card</option>
                                                                <option>UPI</option>
                                                                <option>Bank Transfer</option>
                                                                
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="formrow-name-input" class="form-label">Payment Remarks</label>
                                                            <input type="text" class="form-control" id="">
                                                        </div>
                                                    </div>
                                       </div>
                                            </div>
                                        </div>
                                        
                                        <button type="submit" class="btn btn-success w-md">Add Expense</button>


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
    include('inc/footer.php')
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
    $_SESSION['expensAdd'] = "";
 ?>