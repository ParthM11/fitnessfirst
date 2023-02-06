<!DOCTYPE html>
<html lang="en">
<?php
include('inc/head.php')
?>
<title>Dashboard | TruFit</title>

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

                        <!-- ############ Main START-->
                        <div>
                            <div class="page-hero  " id="page-hero">
                                <div class="padding d-flex">
                                    <div class="page-title">
                                        <p class="text-md text-highlight">Dashboard</p>
                                        <small class="text-muted">Welcome,
                                            <strong>$username</strong>
                                            <br> Date:
                                            <script>
                                                document.write(new Date().getDate())
                                            </script>
                                            /
                                            <script>
                                                document.write(new Date().getMonth()+1)
                                            </script>
                                            /
                                            <script>
                                                document.write(new Date().getFullYear())
                                            </script>

                                        </small>
                                    </div>
                                    <div class="flex"></div>

                                </div>
                            </div>
                            <section>
                                <div class="page-content " id="page-content">
                                    <div class="padding">
                                        <div class="row">
                                            <div class="col-md-12">

                                                <div id="accordion" class="mb-4">
                                                    <div class="card mb-1">
                                                        <div class="card-header no-border" id="headingOne">
                                                            <a href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                                <h5>Daily Update</h5>
                                                            </a>
                                                        </div>
                                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                                            <div class="card-body">
                                                                <table id="table" class="table table-theme v-middle" data-plugin="bootstrapTable" data-toolbar="#toolbar" data-search="true" data-search-align="left" data-show-export="true" data-show-columns="true" data-detail-view="false" data-mobile-responsive="true" data-pagination="true" data-page-list="[10, 25, 50, 100, ALL]">
                                                                    <thead>
                                                                        <tr>
                                                                            <th data-sortable="true" data-field="id">ID</th>
                                                                            <th data-sortable="true" data-field="owner">Name</th>
                                                                            <th data-sortable="true" data-field="Mo. No">Mo. No.</th>
                                                                            <th data-sortable="true" data-field="Update Type">Update Type</th>
                                                                            <th data-sortable="true" data-field="Remark">Remark</th>

                                                                            <th>Action</th>


                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr class=" flex">
                                                                            <td class="flex">
                                                                                <div class="item-except text-muted text-sm h-1x">
                                                                                    01
                                                                                </div>
                                                                            </td>
                                                                            <td class="flex">
                                                                                <div class="item-except text-muted text-sm h-1x">
                                                                                    Parth Maisuriya
                                                                                </div>
                                                                            </td>
                                                                            <td class="flex">
                                                                                <div class="item-except text-muted text-sm h-1x">
                                                                                    <a href="tel:+919638313031">+91 9638313031</a>
                                                                                </div>
                                                                            </td>
                                                                            <td class="flex">
                                                                                <div class="item-except text-muted text-sm h-1x">
                                                                                    <span class="badge  bg-dark ">
                                                                                        Membership Renewal
                                                                                    </span>

                                                                                </div>
                                                                            </td>
                                                                            <td class="flex">
                                                                                <div class="item-except text-muted text-sm h-1x">
                                                                                    Type of membership or something
                                                                                </div>
                                                                            </td>

                                                                            <td>
                                                                                <div class="item-action dropdown">
                                                                                    <a href="#" data-toggle="dropdown" class="text-muted">
                                                                                        <i data-feather="more-vertical"></i>
                                                                                    </a>
                                                                                    <div class="dropdown-menu dropdown-menu-right bg-black" role="menu">
                                                                                        <a class="dropdown-item" href="#">
                                                                                            Update Response
                                                                                        </a>
                                                                                        <a class="dropdown-item download">
                                                                                            Done
                                                                                        </a>

                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr class=" flex">
                                                                            <td class="flex">
                                                                                <div class="item-except text-muted text-sm h-1x">
                                                                                    02
                                                                                </div>
                                                                            </td>
                                                                            <td class="flex">
                                                                                <div class="item-except text-muted text-sm h-1x">
                                                                                    Nency Raja
                                                                                </div>
                                                                            </td>
                                                                            <td class="flex">
                                                                                <div class="item-except text-muted text-sm h-1x">
                                                                                    <a href="tel:+919638313031">+91 7874672769</a>
                                                                                </div>
                                                                            </td>
                                                                            <td class="flex">
                                                                                <div class="item-except text-muted text-sm h-1x">
                                                                                    <span class="badge badge-success text-uppercase">
                                                                                        Birthday
                                                                                    </span>

                                                                                </div>
                                                                            </td>
                                                                            <td class="flex">
                                                                                <div class="item-except text-muted text-sm h-1x">
                                                                                    any comment or blank
                                                                                </div>
                                                                            </td>

                                                                            <td>
                                                                                <div class="item-action dropdown">
                                                                                    <a href="#" data-toggle="dropdown" class="text-muted">
                                                                                        <i data-feather="more-vertical"></i>
                                                                                    </a>
                                                                                    <div class="dropdown-menu dropdown-menu-right bg-black" role="menu">
                                                                                        <a class="dropdown-item" href="#">
                                                                                            Update Response
                                                                                        </a>
                                                                                        <a class="dropdown-item download">
                                                                                            Done
                                                                                        </a>

                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr class=" flex">
                                                                            <td class="flex">
                                                                                <div class="item-except text-muted text-sm h-1x">
                                                                                    03
                                                                                </div>
                                                                            </td>
                                                                            <td class="flex">
                                                                                <div class="item-except text-muted text-sm h-1x">
                                                                                    Keyur Thakkar
                                                                                </div>
                                                                            </td>
                                                                            <td class="flex">
                                                                                <div class="item-except text-muted text-sm h-1x">
                                                                                    <a href="tel:+919638313031">+91 7874836363</a>
                                                                                </div>
                                                                            </td>
                                                                            <td class="flex">
                                                                                <div class="item-except text-muted text-sm h-1x">
                                                                                    <span class="badge badge-warning text-uppercase">
                                                                                        Membership Renewal
                                                                                    </span>

                                                                                </div>
                                                                            </td>
                                                                            <td class="flex">
                                                                                <div class="item-except text-muted text-sm h-1x">
                                                                                    Type of membership or something
                                                                                </div>
                                                                            </td>

                                                                            <td>
                                                                                <div class="item-action dropdown">
                                                                                    <a href="#" data-toggle="dropdown" class="text-muted">
                                                                                        <i data-feather="more-vertical"></i>
                                                                                    </a>
                                                                                    <div class="dropdown-menu dropdown-menu-right bg-black" role="menu">
                                                                                        <a class="dropdown-item" href="#">
                                                                                            Update Response
                                                                                        </a>
                                                                                        <a class="dropdown-item download">
                                                                                            Done
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
                                            </div>

                                        </div>
                                        <div class="row ">
                                            <div class="col-lg-12 col-12">
                                                <div class="row ">
                                                    <!-- Bar Chart - Orders -->
                                                    <div class="col-lg-3 col-md-6 ">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <h6>Members</h6>
                                                                <p class="fw-bolder mb-1">Active</p>
                                                                <p class="fw-bolder mb-1">Inactive</p>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-6 ">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <h6>No. Follow Ups</h6>
                                                                <p class="fw-bolder mb-1">Active</p>
                                                                <p class="fw-bolder mb-1">Inactive</p>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-6 ">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <h6>Today's Enquiry</h6>
                                                                <p class="fw-bolder mb-1">Active</p>
                                                                <p class="fw-bolder mb-1">Inactive</p>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-6 ">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <h6>Today's Attendance</h6>
                                                                <p class="fw-bolder mb-1">Active</p>
                                                                <p class="fw-bolder mb-1">Inactive</p>

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!--/ Bar Chart - Orders -->
                                                    <div class="col-lg-3 col-md-6 ">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <h6>Today's Membership</h6>
                                                                <p class="fw-bolder mb-1">Active</p>
                                                                <p class="fw-bolder mb-1">Inactive</p>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-6 ">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <h6>Renewals</h6>
                                                                <p class="fw-bolder mb-1">Active</p>
                                                                <p class="fw-bolder mb-1">Inactive</p>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-6 ">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <h6>Sales</h6>
                                                                <p class="fw-bolder mb-1">Active</p>
                                                                <p class="fw-bolder mb-1">Inactive</p>

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Line Chart - Profit -->


                                                    <!--/ Line Chart - Profit -->

                                                    <!-- Earnings Card -->

                                                    <!--/ Earnings Card -->
                                                </div>
                                            </div>

                                            <!-- Revenue Report Card -->

                                            <!--/ Revenue Report Card -->
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
            <!-- JAVASCRIPT -->
            <script src="assets/libs/jquery/jquery.min.js"></script>
            <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="assets/libs/metismenu/metisMenu.min.js"></script>
            <script src="assets/libs/simplebar/simplebar.min.js"></script>
            <script src="assets/libs/node-waves/waves.min.js"></script>

            <!-- apexcharts -->
            <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

            <!-- dashboard init -->
            <script src="assets/js/pages/dashboard.init.js"></script>

            <!-- App js -->
            <script src="assets/js/app.js"></script>
</body>

</html>