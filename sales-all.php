<!DOCTYPE html>
<html lang="en">
<?php
include('inc/head.php')
?>
<title>All Sales</title>

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
                        <H5>All Sales</H5>
                        <a href="addsales.php" class="btn btn-primary">Add Sales</a>
                        <br>
                        <div id="toolbar">

                        </div>
                        <table id="table" class="table table-theme v-middle" data-plugin="bootstrapTable" data-toolbar="#toolbar" data-search="true" data-search-align="left" data-show-export="true" data-show-columns="true" data-detail-view="false" data-mobile-responsive="true" data-pagination="true" data-page-list="[10, 25, 50, 100, ALL]">
                            <thead>
                                <tr>
                                    <th>Action</th>
                                    <th data-sortable="true" data-field="id">Invoice No.</th>
                                    <th data-sortable="true" data-field="id">Date</th>
                                    <th data-sortable="true" data-field="customername">Customer Name</th>
                                    <th data-sortable="true" data-field="totalitems">Total Items</th>
                                    <th data-sortable="true" data-field="paymentstatus">Payment Status</th>
                                    <th data-sortable="true" data-field="totalamount">Total Amount</th>
                                    <th data-sortable="true" data-field="totalpaid">Total Paid</th>
                                    <th data-sortable="true" data-field="selldue">Sell Due</th>


                                </tr>
                            </thead>
                            <tbody>
                                <tr class=" flex">

                                    <td>
                                        <div class="btn-group" role="group">
                                            <button id="btnGroupVerticalDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action <i class="mdi mdi-chevron-down"></i>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">

                                                <a class="dropdown-item" data-toggle="modal" data-target="#modal-lg"><i class="bx bx-edit"></i></i>
                                                    <span>Edit</span>
                                                </a>
                                                <a class="dropdown-item" data-toggle="modal" data-target="#modal-lg"><i class="bx bx-right-top-arrow-circle"></i></i>
                                                    <span>View</span>
                                                </a>
                                                <a class="dropdown-item" data-toggle="modal" data-target="#modal-lg"><i class="bx bx-trash"></i></i>
                                                    <span>Delete</span>
                                                </a>
                                            </div>
                                        </div>

                                    </td>
                                    <td class="flex">
                                        <div class="item-except text-muted text-sm h-1x">
                                            01
                                        </div>
                                    </td>
                                    <td class="flex">
                                        <div class="item-except text-muted text-sm h-1x">
                                            20/12/2022
                                        </div>
                                    </td>
                                    <td class="flex">
                                        <div class="item-except text-muted text-sm h-1x">
                                            Parth Maisuriya
                                        </div>
                                    </td>
                                    <td class="flex">
                                        <div class="item-except text-muted text-sm h-1x">
                                            108
                                        </div>
                                    </td>

                                    <td class="flex">
                                        <div class="item-except text-muted text-sm h-1x">
                                            <a href="" class="badge badge-primary text-uppercase">Paid</a>
                                        </div>
                                        <div class="item-except text-muted text-sm h-1x">
                                            <a href="" class="badge badge-danger text-uppercase">Unpaid</a>
                                        </div>
                                        <div class="item-except text-muted text-sm h-1x">
                                            <a href="" class="badge badge-secondary text-uppercase">Partial</a>
                                        </div>
                                    </td>
                                    <td class="flex">
                                        <div class="item-except text-muted text-sm h-1x">
                                            ₹1000
                                        </div>
                                    </td>
                                    <td class="flex">
                                        <div class="item-except text-muted text-sm h-1x">
                                            ₹500
                                        </div>
                                    </td>
                                    <td class="flex">
                                        <div class="item-except text-muted text-sm h-1x">
                                            ₹500
                                        </div>
                                    </td>



                                </tr>

                            </tbody>
                        </table>
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
        <!-- endbuild -->
        <!-- endbuild -->


</body>

</html>