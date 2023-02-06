<?php 
    include_once 'db_conn.php';
   
    if(!isset($_POST['subProd']))
    {
        $prodName = "";
        $HSNcode = "";
        $location = "";
        $cat ="";
        $subCat ="";
        $desp ="";
    }
    if(isset($_GET['id']))
    {
        $id = decrypt(getSafeValue($conn,($_GET['id'])));
        $sqlProd = "SELECT * from product as s where s.prodID = $id" ;
        $resProd  = mysqli_query($conn,$sqlProd);
        $rowProd = mysqli_fetch_assoc($resProd);
        $prodName = $rowProd['prodName'];
        $HSNcode = $rowProd['HSNcode'];
        $location = $rowProd['businessLocationID'];
        $cat =$rowProd['catID'];
        $subCat =$rowProd['subCatID'];
        $desp =$rowProd['desp'];
    }

    if(isset($_POST['subProd']))
    {
        
        $prodName = getSafeValue($conn,$_POST['prodName']);
        $HSNcode = getSafeValue($conn,$_POST['HSNcode']);
        $location = getSafeValue($conn,$_POST['location']);
        $cat = getSafeValue($conn,$_POST['cat']);
        $subCat = getSafeValue($conn,$_POST['subCat']);
        $desp = getSafeValue($conn,$_POST['desp']);
        if(isset($_GET['id']))
        {
            $prodID = decrypt(getSafeValue($conn,$_GET['id']));
            $updateProdSql = "UPDATE product SET prodName = '$prodName', HSNcode = '$HSNcode', businessLocationID = '$location', catID = '$cat', subCatID = '$subCat', desp = '$desp' WHERE prodID = $prodID";
            if(mysqli_query($conn,$updateProdSql))
            {
                header("Location: all-product.php");
            }
        }
        else
        {  
            $sqlAdd = "INSERT INTO product (prodName,HSNcode,businessLocationID,catID,subCatID,desp) VALUES ('$prodName','$HSNcode','$location','$cat','$subCat','$desp')";
            if (mysqli_query($conn, $sqlAdd))
            {
                $lastID = encrypt(mysqli_insert_id($conn));
                header("Location: all-product.php");
            }
            else
            {
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

<!-- END: Head-->>
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
                        <div class="col-md-12 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Details</h4>
                                </div>
                                <div class="card-body">
                                    <form class="repeater" enctype="multipart/form-data" method="post" action="">
                                        <div data-repeater-list="group-a">
                                            <div data-repeater-item class="row">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="formrow-name-input" class="form-label">Product Name</label>
                                                            <input type="name" class="form-control" id="prodName" name="prodName" value="<?=$prodName?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="formrow-name-input" class="form-label">HSN Code</label>
                                                            <input type="number" class="form-control" id="HSNcode" name="HSNcode" value="<?=$HSNcode?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="formrow-inputRef" class="form-label">Business Location</label>
                                                            <select id="location" name="location" class="form-select">
                                                                <option value="" selected disabled hidden>Choose...</option>
                                                                <?php 
                                                                    $sqlLocation = "SELECT * from location" ;
                                                                    $resLoc  = mysqli_query($conn,$sqlLocation);
                                                                    while($rowLoc = mysqli_fetch_assoc($resLoc)){
                                                                 ?>
                                                                    <option value="<?= $rowLoc['locationID']?>" <?php echo($location == $rowLoc['locationID']) ? "selected" : '' ;  ?>><?= $rowLoc['locationName']?></option>
                                                                <?php } ?>     
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="formrow-inputRef" class="form-label">Category</label>
                                                            <select id="cat" name="cat" class="form-select">
                                                                 <option value="" selected disabled hidden>Choose...</option>
                                                                <?php 
                                                                    $sqlCat = "SELECT * from category" ;
                                                                    $resCat  = mysqli_query($conn,$sqlCat);
                                                                    while ($rowCat = mysqli_fetch_assoc($resCat)){
                                                                 ?>
                                                                    <option value="<?= $rowCat['catID']?>" <?php echo($cat == $rowCat['catID']) ? "selected" : '' ;  ?> >
                                                                        <?= $rowCat['catName']?></option>
                                                                <?php } ?>     
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="formrow-inputRef" class="form-label">Sub Category</label>
                                                            <select id="subCat" name="subCat" class="form-select">
                                                               <option value="" selected disabled hidden>Choose...</option>
                                                                
                                                            </select>
                                                        </div>
                                                    </div>
                                            
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="formrow-name-input" class="form-label">description</label>
                                                            <input type="text" class="form-control" id="desp" name="desp" value="<?=$desp?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                         <div class="mb-3  ">
                                                            <label for="resume">Product Image</label>
                                                            <input type="file" class="form-control-file" id="prodImg" name="prodImg">
                                                        </div>
                                                    </div>

                                              
                                                    <h4 class="card-title mb-4">Applicable Tax:</h4>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="formrow-inputRef" class="form-label">Select Tax Type</label>
                                                            <select id="" class="form-select">
                                                                <option selected>GST 5%</option>
                                                                <option>GST 8%</option>
                                                               
                                                                
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="formrow-inputRef" class="form-label">Selling Price Tax Type</label>
                                                            <select id="" class="form-select">
                                                                <option selected>Inclusive</option>
                                                                <option>Exclusive</option>
                                                               
                                                                
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <h4 class="card-title mb-4">Selling Price</h4>
                                                    <div class="col-md-3">
                                                        <div class="mb-3">
                                                            <label for="formrow-name-input" class="form-label">Exc. Tax:*</label>
                                                            <input type="number" class="form-control" id="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="mb-3">
                                                            <label for="formrow-name-input" class="form-label">Inc. Tax:*</label>
                                                            <input type="number" class="form-control" id="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="mb-3">
                                                            <label for="formrow-name-input" class="form-label">Margin (%)</label>
                                                            <input type="number" class="form-control" id="">
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="mb-3">
                                                            <label for="formrow-name-input" class="form-label">Selling Price</label>
                                                            <input type="number" class="form-control" id="">
                                                        </div>
                                                    </div>
                                       </div>
                                            </div>
                                        </div>
                                        
                                        <button type="submit" class="btn btn-success w-md" name="subProd">
                                        <?php 
                                            if(isset($_GET['id']))
                                                echo "Edit Product";
                                            else
                                                echo "Add Product";
                                         ?> 
                                        </button>


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

<script type="text/javascript">
    $(document).ready(function () 
    {
        $("#cat").change(function(){
            var catID = $(this).val();
            var subCatID = $(subCat).val();
            console.log(subCatID);
            $.ajax({
                url:"find_sub.php",
                method:"POST",
                data:{catID:catID},
                success:function(data){
                    $("#subCat").html(data);
                }
            });
        });
    });
</script>