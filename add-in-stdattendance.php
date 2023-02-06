<?php 
    include_once 'db_conn.php';
    if(isset($_POST['subsattendence']))  
    {
        $date = getSafeValue($conn, $_POST['date']);
        $stdID = getSafeValue($conn, $_POST['stdID']);
        $remark = getSafeValue($conn, $_POST['remark']);
        $time = getSafeValue($conn, $_POST['time']);
        $sqlIns = "INSERT into attendence (date,stdID,remark,time) VALUES('$date','$stdID','$remark','$time')";
        if (mysqli_query($conn,$sqlIns))
        {
            header("Location: sattendence.php");
        }
    }  
 ?>
<!DOCTYPE html>
<html lang="en">
<?php
include('inc/head.php');
?>
<title>In-Time Attendance Entry</title>
<script type="text/javascript">
        $(document).ready(function() {
            $('#stdname').change(function() {
                var sid = $(this).val();
                var data_String = 'sid=' + sid;
                $.get('search.php', data_String, function(result) {

                    $.each(result, function(){
                        document.getElementById('sid').innerHTML = this.stdID;
                        $('#location').val(this.locationName);
                        $('#shift').val(this.time);
                    });
                });
            });
        });
    </script>
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


                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <strong>In-Time Attendance Entry</strong>
                                </div>
                                <div class="card-body">
                                    <form method="POST">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-1 col-form-label">Date</label>
                                            <div class="col-lg-3">
                                                <input type="Date" class="form-control" id="inputEmail3" name="date" placeholder="Date">
                                            </div>


                                            <label class="col-sm-1 col-form-label">Shift</label>
                                            <div class="col-md-3">
                                            <input type="text" class="form-control" id="shift" name="shift" placeholder="Shift...">
                                            </div>    


                                            <label class="col-sm-1 col-form-label">Branch</label>
                                            <div class="col-md-3">
                                            <input type="text" class="form-control" id="location" name="location" placeholder="Branch...">
                                        </div>
   

                                        </div>
                                        <div class="dropdown-divider black"></div>

                                        <table id="table" class="table table-theme v-middle" data-plugin="bootstrapTable" data-toolbar="#toolbar" data-search="true" data-search-align="left" data-show-export="true" data-show-columns="true" data-detail-view="false" data-mobile-responsive="true" data-pagination="true" data-page-list="[10, 25, 50, 100, ALL]">
                                            <thead>
                                                <tr>

                                                    <th>ID</th>
                                                    <th>Employee Name</th>
                                                  
                                                    <th>In Time</th>

                                                    <th>Remarks</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class=" flex">
"
                                                    <td class="flex">
                                                        <div class="item-except  text-sm h-1x">
                                                            <label id="sid" name="stdID">ID</label>
                                                        </div>
                                                    </td>

                                                    <td class="flex">


                                                        <select class="form-control" name="stdname" id="stdname">
                                                            <option hidden disabled selected
                                                            >Choose...</option>
                                                            <?php 
                                                                $sqlEmpname = "SELECT * FROM `student` as s inner join `studentdetails` as sd on sd.stdID = s.stdID ";

                                                                $resEmpname = mysqli_query($conn,$sqlEmpname);

                                                                while ($rowEmpname = mysqli_fetch_assoc($resEmpname))
                                                                {
                                                            ?>
                                                            <option value="<?=$rowEmpname['stdID']?>"><?=$rowEmpname['stdfName']." ".$rowEmpname['stdlName']?></option>
                                                            <?php 
                                                                }
                                                             ?>

                                                        </select>

                                                    </td>
                                                   

                                                    <td class="flex">
                                                        <div class="item-except col-sm-9">
                                                            <input type="time" class="form-control" name="time" placeholder="Date">
                                                        </div>
                                                    </td>
                                                    <td class="flex">
                                                        <div class="item-except col-sm-9">
                                                            <input type="text" class="form-control" placeholder="remark " name="remark" id="remark">
                                                        </div>
                                                    </td>



                                                </tr>


                                            </tbody>

                                        </table>
                                </div>

                                <div class="form-group row">
                                    <div class="col-lg-3">
                                        <button type="submit" class="btn btn-primary mt-1" name="subsattendence">Submit</button>
                                    </div>
                                </div>

                                </form>
                            </div>
                        </div>
                    </div>
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