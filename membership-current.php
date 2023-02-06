
<!DOCTYPE html>
<html lang="en">
<?php
include('inc/head.php')
?>
<title>Membership Record</title>

<body class="layout-row">
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
        <!-- .modal -->

        <!-- / .modal -->
        <!-- ############ Content START-->
        <div id="content" class="flex ">
            <!-- ############ Main START-->

            <div class="page-content" id="page-content">
                <div class="padding">
                    <div class="row ">
                        <div class="col-lg-12 col-12">
                            <div class="row ">


                                <div class="col-md-3">
                                    <a href="all-inquiry.php">
                                        <div class="card ">
                                            <div class="card-header bg-primary">
                                                <h6 class="text-white">All Members</h6>
                                            </div>
                                            <div class="card-body ">
                                                <h6 class="fw-bolder mb-1">126</6>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-md-3">
                                    <a href="#">
                                        <div class="card ">
                                            <div class="card-header bg-success">
                                                <h6 class="text-white">Active Members</h6>
                                            </div>
                                            <div class="card-body ">
                                                <h6 class="fw-bolder mb-1">126</6>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-md-3">
                                    <a href="all-inq-lost.php">
                                        <div class="card ">
                                            <div class="card-header bg-secondary">
                                                <h6 class="text-white">Past Interested</h6>
                                            </div>
                                            <div class="card-body ">
                                                <h6 class="fw-bolder mb-1">126</6>
                                            </div>
                                        </div>
                                    </a>
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
                                <th data-sortable="true" data-field="age">Age</th>
                                <th data-sortable="true" data-field="Mobile">Status</th>
                                <th data-sortable="true" data-field="Lead Type">Todays Attendance</th>
                                <th data-sortable="true" data-field="Trial">Customer Service Exicutive</th>
                                <th data-sortable="true" data-field="Location">Location</th>
                                <th>Action</th>
                                <a href="add-inquiry.php" class="btn btn-primary">Add Members</a>

                            </tr>
                        </thead>
                        <tbody>
                           




                        </tbody>
                    </table>
                </div>
            </div>
            <!-- ############ Main END-->
            <div id="modal-lg" class="modal fade" data-backdrop="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content ">
                        <div class="col-md-12">
                            <div class="modal-content ">
                                <div class="modal-header">
                                    <h5 class="modal-title">Follow Up for $clientname</h5>
                                    <button class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <form class="" role="form" action="dashboard.html">

                                        <div class="form-group">

                                            <label>Date</label>
                                            <input type="date" class="form-control" placeholder="Enter email">
                                        </div>

                                        <div class="form-group">
                                            <label>Assign To</label>
                                            <select id="program" class="form-control" name="program" required>
                                                <option value="" selected disabled hidden>Choose...</option>
                                              
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Type</label>
                                            <select id="program" class="form-control" name="program" required>
                                                <option value="" selected disabled hidden>Choose...</option>
                                               
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Task</label>
                                            <input type="text" class="form-control" placeholder="Enter Task">
                                        </div>

                                        <div class="form-group">
                                            <label>Priority</label>
                                            <select id="program" class="form-control" name="program" required>
                                                <option value="" selected disabled hidden>Choose...</option>
                                                <option value="">High</option>
                                                <option value="">Low</option>
                                                <option value="">Med</option>
                                            </select>
                                        </div>


                                        <button type="submit" class="btn btn-primary mb-4">Create</button>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
            </div>
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
    <!-- jQuery -->
    <script src="libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- ajax page -->
    <script src="libs/pjax/pjax.min.js"></script>
    <script src="assets/js/ajax.js"></script>
    <!-- lazyload plugin -->
    <script src="assets/js/lazyload.config.js"></script>
    <script src="assets/js/lazyload.js"></script>
    <script src="assets/js/plugin.js"></script>
    <!-- scrollreveal -->
    <script src="libs/scrollreveal/dist/scrollreveal.min.js"></script>
    <!-- feathericon -->
    <script src="libs/feather-icons/dist/feather.min.js"></script>
    <script src="assets/js/plugins/feathericon.js"></script>
    <!-- theme -->
    <script src="assets/js/theme.js"></script>
    <script src="assets/js/utils.js"></script>
    <!-- endbuild -->


</body>

</html>