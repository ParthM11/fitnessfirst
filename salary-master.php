<?php 
    include_once 'db_conn.php';
 ?>
 <!DOCTYPE html>
<html lang="en">
<?php
include('inc/head.php')
?>
<title>Salary Register</title>
 <script type="text/javascript">
        $(document).ready(function() {
            $('#emp').change(function() {
                var sid = $(this).val();
                var data_String = 'sid=' + sid;
                $.get('searchSalary.php', data_String, function(result) {

                    $.each(result, function(){
                        document.getElementById('empID').innerHTML = this.id;
                        $('#shifttxt').val(this.shift);
                        $('#adAmnt').val(this.adAmnt);
                        document.getElementById('empCode').innerHTML = this.code;
                        document.getElementById('designation').innerHTML = this.designation;
                        document.getElementById('basePay').innerHTML = this.basic_pay;
                        document.getElementById('pDays').innerHTML = this.presnet_days;
                        document.getElementById('aDays').innerHTML = this.absent_days;
                        document.getElementById('netAmnt').innerHTML  = this.net_salary;
                        document.getElementById('salary').innerHTML = this.salary;
                        document.getElementById('upad').innerHTML = this.upad;

                    });
                });
            });

            $("#adAmntNxt").change(function(){
              document.getElementById('netAmnt').innerHTML = parseInt(document.getElementById('netAmnt').innerHTML) + parseInt($('#adAmntNxt').val());
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
                        <div class="padding">
                            <div class="row row-sm sr">
                                <div class="col-md-12 col-lg-12">
                                    <div class="row row-sm">


                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <strong>Salary Entry Master</strong>
                                                </div>
                                                <div class="card-body">
                                                    <form action="connection.php" method="POST">
                                                        <div class="form-group row">
                                                            <label for="inputEmail3" class="col-sm-1 col-form-label" id="">Date</label>
                                                            <div class="col-lg-3">
                                                                <input type="Date" class="form-control" id="" placeholder="Date" name="date">
                                                            </div>
                                                            <label class="col-sm-1 col-form-label">Shift</label>
                                                            <div class="col-md-3">
                                                                <input type="text" name="" id="shifttxt" disabled>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-1 col-form-label" id="submitYear">Year</label>
                                                            <div class="col-md-2">
                                                                <select class="form-control" name="year">
                                                                    <option hidden disabled selected>Choose...</option>
                                                                    <option value="2022">2022</option>
                                                                    <option value="2023">2023</option>
                                                                    <option value="2024">2024</option>
                                                                    <option value="2025">2025</option>
                                                                    <option value="2026">2026</option>
                                                                </select>
                                                            </div>
                                                            <label class="col-sm-1 col-form-label" id="submitMonth">Month</label>
                                                            <div class="col-md-2">
                                                                <select class="form-control" name="month">
                                                                    <option>Choose...</option>
                                                                    <option value="1">January</option>
                                                                    <option value="2">February</option>
                                                                    <option value="3">March</option>
                                                                    <option value="4">April</option>
                                                                    <option value="5">May</option>
                                                                    <option value="6">June</option>
                                                                    <option value="7">July</option>
                                                                    <option value="8">August</option>
                                                                    <option value="9">September</option>
                                                                    <option value="10">October</option>
                                                                    <option value="11">November</option>
                                                                    <option value="12">December</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">


                                                        </div>

                                                        <div class="">
                                                            <div class="card">
                                                                <div class="b-b">
                                                                    <div class="nav-active-border b-success top">
                                                                        <ul class="nav" id="myTab" role="tablist">
                                                                            <li class="nav-item">
                                                                                <a class="nav-link active" id="emp-tab" data-toggle="tab" href="#home4" role="tab" aria-controls="home" aria-selected="true">Employee Details</a>
                                                                            </li>
                                                                           

                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-content p-3">
                                                                    <div class="tab-pane fade show active" id="home4" role="tabpanel" aria-labelledby="emp-tab">
                                                                        <table id="table" class="table table-theme v-middle" data-plugin="bootstrapTable" data-toolbar="#toolbar" data-search="true" data-search-align="left" data-show-export="true" data-show-columns="true" data-detail-view="false" data-mobile-responsive="true" data-pagination="true" data-page-list="[10, 25, 50, 100, ALL]">
                                                                            <thead>
                                                                                <tr>
                                                                            
                                                                                    <th data-sortable="true">ID</th>
                                                                                    <th data-sortable="true">Employee</th>
                                                                                    <th data-sortable="true">Designation</th>
                                                                                    <th data-sortable="true">Present Days</th>
                                                                                    <th data-sortable="true">Absent Days</th>
                                                                                    <th data-sortable="true">Basic Pay</th>
                                                                                    <th data-sortable="true">Salary</th>
                                                                                    <th data-sortable="true">Net Amount</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr class=" flex">

                                                                                   
                                                                                    <td class="flex">
                                                                                        <div class="item-except  text-sm h-1x">
                                                                                            <label id="empID">ID</label>
                                                                                        </div>
                                                                                    </td>
                                                                                    
                                                                                    <td class="flex">
                                                                                        <div class="item-except  text-sm ">
                                                                                        <select class="form-control col-md-12" id="emp" name="emp">
                                                                                                <option hidden disabled selected>select Employee</option>
                                                                                                <?php 
                                                                                                    $sqlEmp = "SELECT * from employeemaster";
                                                                                                    $resEmp = mysqli_query($conn,$sqlEmp);
                                                                                                    while ($rowEmp = mysqli_fetch_assoc($resEmp)) {
                                                                                                 ?>
                                                                                                 <option value="<?=$rowEmp['id']?>">
                                                                                                    <?=$rowEmp['firstname']?></option>
                                                                                                <?php } ?>
                                                                                            </select>
                                                                                        </div>
                                                                                    </td>
                                                                                  
                                                                          
                                                                                 
                                                                                    
                                                                                    <td class="flex">
                                                                                        <div class="item-except  text-sm h-1x">
                                                                                            <label id="designation">designation</label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td class="flex">
                                                                                        <div class="item-except ">
                                                                                            <label id="pDays">p Days</label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td class="flex">
                                                                                        <div class="item-except col-sm-9">
                                                                                            <label id="aDays">a days</label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td class="flex">
                                                                                        <div class="item-except col-sm-9">
                                                                                           <label id="basePay">₹Basic Pay</label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td class="flex">
                                                                                        <div class="item-except  text-sm h-1x">
                                                                                            <label id="salary">₹salary</label>
                                                                                        </div>
                                                                                    </td>
                                                                                   
                                                                                   
                                                                                    <td class="flex">
                                                                                        <div class="item-except col-sm-9">
                                                                                           <label id="netAmnt">₹ net amount</label>
                                                                                        </div>
                                                                                    </td>
                                                                                  



                                                                                </tr>

                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                   

                                                                </div>
                                                            </div>
                                                        </div>

                                                        <button type="submit" class="btn btn-primary mt-1" name="subSalary" id="subSalary">Submit</button>
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
    <!-- endbuild -->
</body>

</html>