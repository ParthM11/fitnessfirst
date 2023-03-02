<?php
include_once 'db_conn.php';
$_SESSION['prodList'] = "active";
$sqlProd = "SELECT * from Product as p inner JOIN location on p.businessLocationID = locationID inner JOIN category as c on c.catID = p.catID inner JOIN subcategory as sc on sc.subCatID = p.subCatID";
$resProd = mysqli_query($conn, $sqlProd);
?>
<!DOCTYPE html>
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
                    


                            <div class="content-header row">
                                <div class="content-header-left col-md-9 col-12 mb-2">
                                    <div class="row breadcrumbs-top">
                                        <div class="col-12">
                                            <h2 class="content-header-title float-start mb-0">List Product</h2>

                                        </div>
                                    </div>
                                </div>
                                <div class="content-header-right text-md-end col-md-3 col-12">
                                    <div class="mb-1 ">
                                        <div class="dropdown">
                                            <a class="btn btn-primary" href="add-product.php" key="t-adduser"><i class="fas fa-pencil-alt"></i> <span>Add Product</span></a>
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div class="content-body">

                                <!-- Basic table -->


                                <section id="card-navigation">

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card text-center">
                                                <div class="card-header py-2">
                                                    <ul class="nav nav-pills card-header-pills ms-0" id="pills-tab" role="tablist">
                                                        <li class="nav-item">
                                                            <a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">All Product</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Stock Report</a>
                                                        </li>

                                                    </ul>
                                                </div>
                                                <div class="card-body">
                                                    <div class="tab-content" id="pills-tabContent">
                                                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                                            <div class="table-responsive">
                                                               <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Id</th>
                                                                            <th>Product Image</th>
                                                                            <th>Product</th>
                                                                            <th>Business Location</th>
                                                                            <th>Purchase Price</th>
                                                                            <th>Selling Price</th>
                                                                            <th>Current Stock</th>
                                                                            <th>Category</th>
                                                                            <th>HSN</th>
                                                                            <th>Sub Category</th>
                                                                            <th>Decription</th>
                                                                            <th>Action</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>

                                                                            <?php
                                                                            while ($rowProd = mysqli_fetch_assoc($resProd)) {
                                                                            ?>
                                                                                <td><?= $rowProd['prodID'] ?></td>
                                                                                <td>lol</td>
                                                                                <td><?= $rowProd['prodName'] ?></td>
                                                                                <td><?= $rowProd['locationName'] ?></td>
                                                                                <td>100</td>
                                                                                <td>100</td>
                                                                                <td>10</td>
                                                                                <td><?= $rowProd['catName'] ?></td>
                                                                                <td><?= $rowProd['HSNcode'] ?></td>
                                                                                <td><?= $rowProd['subCatName'] ?></td>
                                                                                <td><?= $rowProd['desp'] ?></td>
                                                                                <td>
                                                                                <div class="btn-group" role="group">
                                                                                    <button id="btnGroupVerticalDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                        Action <i class="mdi mdi-chevron-down"></i>
                                                                                    </button>
                                                                                    <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                                                                                        <a class="dropdown-item" href="#">
                                                                                            <i data-feather="eye" class="me-25"></i>
                                                                                            <span>View</span>
                                                                                        </a>

                                                                                        <a class="dropdown-item" href="addproduct.php?id=<?= encrypt($rowProd['prodID']) ?>">
                                                                                            <i data-feather="edit-2" class="me-25"></i>
                                                                                            <span>Edit</span>
                                                                                        </a>

                                                                                        <a class="dropdown-item" href="delete.php?type=<?= encrypt('product') ?>&id=<?= encrypt($rowProd['prodID']) ?>">
                                                                                            <i data-feather="trash" class="me-25"></i>
                                                                                            <span>Delete</span>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>

                                                                                </td>
                                                                        </tr>
                                                                    <?php } ?>
                                                                    </tbody>
                                                                </table>
                                                            </div>


                                                        </div>

                                                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">



                                                            <div class="table-responsive">
                                                                <table class="table">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Id</th>

                                                                            <th>Product</th>
                                                                            <th>HSN</th>
                                                                            <th>Location</th>
                                                                            <th>Unit Price</th>

                                                                            <th>Current Stock</th>
                                                                            <th>Cureent Stock Value(By purchase price)</th>
                                                                            <th>Cureent Stock Value(By Sale price)</th>
                                                                            <th>Potential Profit</th>
                                                                            <th>Unit Sold</th>

                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>

                                                                            <td>Id</td>

                                                                            <td>Product</td>
                                                                            <td>HSN</td>
                                                                            <td>Location</td>
                                                                            <td>Unit Price</td>

                                                                            <td>Current Stock</td>
                                                                            <td>Cureent Stock Value(By purchase price)</td>
                                                                            <td>Cureent Stock Value(By Sale price)</td>
                                                                            <td>Potential Profit</td>
                                                                            <td>Unit Sold</td>


                                                                        </tr>
                                                                        <tr>

                                                                            <td>Id</td>

                                                                            <td>Product</td>
                                                                            <td>HSN</td>
                                                                            <td>Location</td>
                                                                            <td>Unit Price</td>

                                                                            <td>Current Stock</td>
                                                                            <td>Cureent Stock Value(By purchase price)</td>
                                                                            <td>Cureent Stock Value(By Sale price)</td>
                                                                            <td>Potential Profit</td>
                                                                            <td>Unit Sold</td>


                                                                        </tr>
                                                                        <tr>

                                                                            <td>Id</td>

                                                                            <td>Product</td>
                                                                            <td>HSN</td>
                                                                            <td>Location</td>
                                                                            <td>Unit Price</td>

                                                                            <td>Current Stock</td>
                                                                            <td>Cureent Stock Value(By purchase price)</td>
                                                                            <td>Cureent Stock Value(By Sale price)</td>
                                                                            <td>Potential Profit</td>
                                                                            <td>Unit Sold</td>


                                                                        </tr>





                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </section>

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

                    <!-- Required datatable js -->
                    <script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
                    <script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
                    <!-- Buttons examples -->
                    <script src="assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
                    <script src="assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
                    <script src="assets/libs/jszip/jszip.min.js"></script>
                    <script src="assets/libs/pdfmake/build/pdfmake.min.js"></script>
                    <script src="assets/libs/pdfmake/build/vfs_fonts.js"></script>
                    <script src="assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
                    <script src="assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
                    <script src="assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>

                    <!-- Responsive examples -->
                    <script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
                    <script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

                    <!-- Datatable init js -->
                    <script src="assets/js/pages/datatables.init.js"></script>

                    <script src="assets/js/app.js"></script>

</body>
<!-- END: Body-->

</html>
<?php
$_SESSION["prodList"] = "";
?>