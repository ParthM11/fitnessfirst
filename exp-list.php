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
                                        <h2 class="content-header-title float-start mb-0">Expenses</h2>

                                    </div>
                                </div>
                            </div>
                            <div class="content-header-right text-md-end col-md-3 col-12">
                                <div class="mb-1 ">
                                    <div class="dropdown">
                                        <a class="btn btn-primary" href="exp-add.php" key="t-adduser"><i class="fas fa-pencil-alt"></i> <span>Add Expenses</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="content-body">

                            <!-- Basic table -->
                            <section id="basic-datatable">
                                <div class="row" id="basic-table">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4 class="card-title">All Expense</h4>
                                            </div>

                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>id</th>
                                                            <th>Date</th>
                                                            <th>Expense Category</th>
                                                            <th>Location </th>
                                                            <th>Payment Status</th>
                                                            <th>Payment Method</th>
                                                            <th>Total Amount</th>
                                                            <th>Remark</th>
                                                            <th>Added By</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>

                                                            <td>id</td>
                                                            <td>22/2/2022 DDMMYYYY</td>
                                                            <td>Fetch From the expense Category</td>
                                                            <td>Lopcation where they add </td>
                                                            <td>Paid, Unpaid</td>
                                                            <td>Payment Method</td>
                                                            <td>₹ 2032</td>
                                                            <td>Some Remarks</td>
                                                            <td>Person who Add</td>
                                                            <td>
                                                                <div class="btn-group" role="group">
                                                                    <button id="btnGroupVerticalDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        Action <i class="mdi mdi-chevron-down"></i>
                                                                    </button>
                                                                    <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">

                                                                        <a class="dropdown-item" data-toggle="modal" data-target="#modal-lg"><i class="bx bx-edit"></i></i>
                                                                            <span>Edit</span>
                                                                        </a>
                                                                       
                                                                        <a class="dropdown-item" data-toggle="modal" data-target="#modal-lg"><i class="bx bx-trash"></i></i>
                                                                            <span>Delete</span>
                                                                        </a>
                                                                    </div>
                                                                </div>

                                                            </td>

                                                        </tr>
                                                      
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal to add new record -->

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