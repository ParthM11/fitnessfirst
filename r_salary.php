    <!DOCTYPE html>
    <html lang="en">
    <?php
    include('inc/head.php')
    ?>
    <title>Salary Report</title>

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
                                                        <strong>Salary Report</strong>
                                                    </div>
                                                    <div class="card-body">
                                                        <form>
                                                            <div class="form-group row">
                                                                <label for="inputEmail3" class="col-sm-1 col-form-label">Month</label>
                                                                <div class="col-md-2">
                                                                    <select class="form-control">
                                                                        <option>Slelct Month</option>
                                                                    </select>
                                                                </div>

                                                                <label for="inputEmail3" class="col-sm-1 col-form-label">Employee</label>
                                                                <div class="col-md-2">
                                                                    <select class="form-control">
                                                                        <option>Slelct Employee</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        
                                                        
                                                    </div>
                                                </div>


                                                    <button type="submit" class="btn btn-primary mt-1">Generate</button>
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

    </html>