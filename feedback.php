<?php
include_once 'db_conn.php';
$_SESSION['inquiry'] = "active";
?>

<!DOCTYPE html>
<html lang="en">
<?php
include('inc/head.php')
?>
<title>Feedback</title>

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


                        <div class="padding">
                            <div class="row ">
                                <div class="col-lg-12 col-12">
                                    <div class="row ">


                                        <div class="col-md-3">

                                            <div class="card ">
                                                <div class="card-header bg-primary">
                                                    <h6 class="text-white">Good Feedback</h6>
                                                </div>
                                                <div class="card-body ">
                                                    <h6 class="fw-bolder mb-1">126</6>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-md-3">

                                            <div class="card ">
                                                <div class="card-header bg-success">
                                                    <h6 class="text-white">Bad Feedback</h6>
                                                </div>
                                                <div class="card-body ">
                                                    <h6 class="fw-bolder mb-1">126</6>
                                                </div>
                                            </div>

                                        </div>




                                    </div>
                                </div>
                            </div>
                            <div id="toolbar">
                            </div>
                            <table id="table" class="table table-theme v-middle" data-plugin="bootstrapTable" data-toolbar="#toolbar" data-search="true" data-search-align="left" data-show-export="true" data-show-columns="true" data-detail-view="false" data-mobile-responsive="true" data-pagination="true" data-page-list="[10, 25, 50, 100, ALL]">
                                <thead>
                                    <tr>
                                        <th data-sortable="true" data-field="id">ID</th>
                                        <th data-sortable="true" data-field="fullname">Full Name</th>
                                        <th data-sortable="true" data-field="age">Activity</th>
                                        <th data-sortable="true" data-field="Mobile">Mobile</th>
                                        <th data-sortable="true" data-field="Remark">Type</th>
                                        <th>Action</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sqlIn = "SELECT * FROM `student` as s inner JOIN location as l on s.locationID = l.locationID";
                                    $res = mysqli_query($conn, $sqlIn);
                                    while ($row = mysqli_fetch_assoc($res)) {
                                    ?>
                                        <tr class=" flex">
                                            <td class="flex"><?= $row['stdID'] ?></td>
                                            <td class="flex"><?= $row['stdfName'] . " " . $row['stdlName'] ?></td>
                                            <td>Any </td>
                                            <td class="flex"><a href="tel:<?= $row['stdContact'] ?>"><?= $row['stdContact'] ?></td>

                                            <td>
                                                <span class="badge  bg-success">
                                                    Good
                                                </span>
                                                
                                                <span class="badge  bg-danger ">
                                                    Bad
                                                </span>
                                            </td>
                                            
                                      
                                            <td>
                                                
                                                    <button type="button" class="btn btn-primary">
                                                        View
                                                    </button>
                                                    
                                              
                                            </td>
                                        </tr>
                                    <?php } ?>




                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- ############ Main END-->
                  
                </div>
            </div>
        </div>
        <!-- ############ Content END-->
        <!-- ############ Footer START-->
        <?php
        include('inc/footer.php')
        ?>
        <!-- ############ Footer END-->
    </div>
    <!-- build:js ../assets/js/site.min.js -->

    <!-- JAVASCRIPT -->
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


</body>

</html>