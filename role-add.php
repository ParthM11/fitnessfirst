<?php 
    include_once 'db_conn.php';
    if(isset($_POST['subNewRole']))
    {
        $roleName = $_POST['roleName'];
        $sqlInsRole = "INSERT into userrole values (NULL,'$roleName')";
        echo $sqlInsRole;
        if(mysqli_query($conn,$sqlInsRole))
        {
            $lastID = mysqli_insert_id($conn);
            if(isset($_POST['role']))
            {
                $roleChk = $_POST['role'];
                $chk = "";
                foreach ($roleChk as $chk)
                {
                    $sqlInsPerm = "INSERT into permissionmanager values (NULL,'$lastID','$chk')";
                    if(!mysqli_query($conn,$sqlInsPerm))
                    {
                        echo $sqlInsPerm;
                    }
                }
                header("Location: index.php");
            }
        }
    }
 ?>
<!DOCTYPE html>
<html lang="en">
<?php
include('inc/head.php')
?>
<title>Role Master</title>

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
                                                    <strong>Role Master</strong>
                                                </div>
                                                <div class="card-body">
                                                    <form action="" method="POST">
                                                        <div class="form-group row">
                                                            <label for="inputEmail3" class="col-sm-1 col-form-label">Role Name</label>
                                                            <div class="col-md-2">
                                                                <input type="text" class="form-control" id="roleName" name="roleName" placeholder="Enter Role Name">
                                                            </div>

                                                           
                                                        </div>
                                                          <div class="form-group row">
                                                            
                                                            <div class="col-md-2">
                                                                <table class="table table-bordered">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Page Name</th>
                                                                        <th>Permission</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                    <?php 
                                                                        $sqlPer = "SELECT * from permisson";
                                                                        $resPer = mysqli_query($conn,$sqlPer);
                                                                        while ($rowPer = mysqli_fetch_assoc($resPer)) {
                                                                     ?>
                                                                        <td><?=$rowPer['perName']?></td>

                                                                        <td>
                                                                        <input type="checkbox"  id="role[]" name="role[]" value="<?=$rowPer['perID']?>">Add<br>
                                                                        <input type="checkbox"  id="role[]" name="role[]" value="<?=$rowPer['perID']?>">Edit<br>
                                                                        <input type="checkbox" name="" id="">Delete
                                                                        </td>

                                                                    </tr>
                                                                    <?php }?>
                                                                </tbody>
                                                              
                                                                 
                                                             
                                                            </table>
                                                            </div>

                                                           
                                                        </div>
                                                       



                                                </div>
                                            </div>


                                            <button type="submit" class="btn btn-primary mt-1" name="subNewRole">Generate</button>
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