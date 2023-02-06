<?php
session_start();
include_once 'db_conn.php';
    $id = "";
    $fullName = "";
    $age = "";
    $mobile = "";
    $email = "";
    $location = "";
    $mempack = "";
if(isset($_GET['id']))
{
    $id = getSafeValue($conn, decrypt($_GET['id']));
    $sqlStudent = "SELECT s.*,l.*,sd.*,mp.* from student as s inner join location as l on s.locationID = l.locationID inner join studentdetails as sd on sd.stdID = s.stdID inner join memberpackage as mp on mp.mempackID = sd.mempackID where s.stdID = $id";
    $resStud  = mysqli_query($conn, $sqlStudent);
    $rowStud = mysqli_fetch_assoc($resStud);
    $fullName = $rowStud['stdfName']." ". $rowStud['stdlName'];
    $age = $rowStud['stdAge'];
    $mobile = $rowStud['stdContact'];
    $email = $rowStud['stdEmailID'];
    $location = $rowStud['locationName'];
    $mempack = $rowStud['planName'];
}
?>
<!DOCTYPE html>
<html lang="en">
<?php
include('inc/head.php')
?>
<title>Student Profile</title>

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
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Profile</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Contacts</a></li>
                                            <li class="breadcrumb-item active">Profile</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-xl-4">

                                <!-- end card -->

                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Personal Information</h4>

                                        <div class="table-responsive">
                                            <table class="table table-nowrap mb-0">
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">Full Name :</th>
                                                        <td><?=$fullName?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Mobile :</th>
                                                        <td><a href="tel:+91<?=$mobile?>">+91 <?=$mobile?></a></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">E-mail :</th>
                                                        <td><?=$email?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Location :</th>
                                                        <td><?=$location?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Membership Package :</th>
                                                        <td><?=$mempack?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- end card -->

                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-5">Certificates</h4>
                                        <div class="">
                                            <ul class="verti-timeline list-unstyled">

                                                <li class="event-list">
                                                    <div class="event-timeline-dot">
                                                        <i class="bx bx-right-arrow-circle"></i>
                                                    </div>
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0 me-3">
                                                            <i class="bx bx-code h4 text-primary"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <div>
                                                                <h5 class="font-size-15"><a href="javascript: void(0);" class="text-dark">Certificate Name</a></h5>
                                                                <a href="" class="text-primary" download>Download</a>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </li>

                                            </ul>
                                        </div>

                                    </div>
                                </div>
                                <!-- end card -->
                            </div>

                            <div class="col-xl-8">

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card mini-stats-wid">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="flex-grow-1">
                                                        <p class="text-muted fw-medium mb-2">Present</p>
                                                        <h4 class="mb-0">125</h4>
                                                    </div>

                                                    <div class="flex-shrink-0 align-self-center">
                                                        <div class="mini-stat-icon avatar-sm rounded-circle bg-primary">
                                                            <span class="avatar-title">
                                                                <i class="bx bx-check-circle font-size-24"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card mini-stats-wid">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="flex-grow-1">
                                                        <p class="text-muted fw-medium mb-2">Absent</p>
                                                        <h4 class="mb-0">12</h4>
                                                    </div>

                                                    <div class="flex-shrink-0 align-self-center">
                                                        <div class="avatar-sm mini-stat-icon rounded-circle bg-primary">
                                                            <span class="avatar-title">
                                                                <i class="bx bx-hourglass font-size-24"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card mini-stats-wid">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="flex-grow-1">
                                                        <p class="text-muted fw-medium mb-2">Total Day Since Members</p>
                                                        <h4 class="mb-0">365</h4>
                                                    </div>

                                                    <div class="flex-shrink-0 align-self-center">
                                                        <div class="avatar-sm mini-stat-icon rounded-circle bg-primary">
                                                            <span class="avatar-title">
                                                                <i class="bx bx-package font-size-24"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="card">
                                    <div class="card-body">
                                        <div class="col-md-12">
                                            <div class="card mini-stats-wid">
                                                <div class="card-body">
                                                    <div class="d-flex">
                                                        <div class="flex-grow-1">
                                                            <h4 class="card-title mb-4">Performance</h4>

                                                        </div>

                                                        <div class="flex-shrink-0 align-self-center">


                                                            <a type="button" class="btn btn-success">
                                                                Add Score Card
                                                            </a>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>




                                            <div class="table-responsive">

                                                <table class="table table-nowrap table-hover mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">Date</th>
                                                            <th scope="col">Avg.</th>
                                                            <th scope="col">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php 
                                                            if (isset($_GET['id']))
                                                            {
                                                                $id = getSafeValue($conn, decrypt($_GET['id']));
                                                                $sqlScore = "SELECT * from scorecard where stdDetailID = $id";
                                                                $resScore = mysqli_query($conn,$sqlScore);
                                                                while($rowScore = mysqli_fetch_assoc($resScore)){

                                                            
                                                         ?>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td><?=$rowScore['date']?></td>
                                                            <th scope="col">26%</th>
                                                            <td>
                                                                <a type="button" class="btn btn-success">
                                                                    View
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <?php
                                                                }
                                                            }
                                                          ?>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 2 -->
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Fees</h4>
                                    <div id="toolbar">
                                    </div>
                                    <table id="table" class="table table-theme v-middle" data-plugin="bootstrapTable" data-toolbar="#toolbar" data-search="true" data-search-align="left" data-show-export="true" data-show-columns="true" data-detail-view="false" data-mobile-responsive="true" data-pagination="true" data-page-list="[10, 25, 50, 100, ALL]">

                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Month</th>
                                                <th scope="col">Paid</th>
                                                <th scope="col">Amount</th>
                                                <th scope="col">Total Amount</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>01/01/2023</td>
                                                <td><span class="badge  bg-success">
                                                        Paid
                                                    </span>
                                                    <span class="badge  bg-secondary">
                                                        Unpaid
                                                    </span>
                                                </td>
                                                <td>₹ 2900</td>
                                                <td>₹ 3500</td>
                                                <td>
                                                    <div class="btn-group" role="group">
                                                        <button id="btnGroupVerticalDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Action <i class="mdi mdi-chevron-down"></i>
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                                                            <a class="dropdown-item" href="">
                                                                <i data-feather="edit-2" class="me-25"></i>
                                                                <span>Add Payment</span>
                                                            </a>
                                                            <a class="dropdown-item" href=" ?>">
                                                                <i data-feather="edit-2" class="me-25"></i>
                                                                <span>Edit</span>
                                                            </a>
                                                            <a class="dropdown-item" href="booktrial.php">
                                                                <i data-feather="edit-2" class="me-25"></i>
                                                                <span>Print Invoice</span>
                                                            </a>
                                                            <a class="dropdown-item" href="">
                                                                <i data-feather="trash" class="me-25"></i>
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
                </div>
                <!-- end row -->

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->


        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>
                            document.write(new Date().getFullYear())
                        </script> © Skote.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            Design & Develop by Themesbrand
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- end main content-->

    </div>
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
    <!-- endbuild -->
</body>

</html>