<!DOCTYPE html>
<html lang="en">
    <?php
    include('inc/head.php')
    ?>
     <title>Data Import</title>
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
            <!-- ############ Content START-->
            <div id="content" class="flex ">
                <!-- ############ Main START-->
                <div>
                    
                <section>
                    <div class="page-content " id="page-content">
                        <div class="padding">
                            <div class="row row-sm sr">
                                <div class="col-md-12 col-lg-12">
                                    <div class="row row-sm">
                                       
                                       
                                    <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong>Billing form</strong>
                                        </div>
                                        <div class="card-body">
                                            <form>
                                                <div class="form-row">
                                                    <div class="form-group col-md-3">
                                                        <label class="text-muted">From Date</label>
                                                        <input type='date' class="form-control mb-3" data-plugin="datepicker" data-option="{todayBtn: 'linked'}">
                                                    </div>
                                                    <div class="form-group col-md-3 ">
                                                        <label class="text-muted">To Date</label>
                                                        <input type='date' class="form-control mb-3" data-plugin="datepicker" data-option="{todayBtn: 'linked'}">
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-3">
                                                    <label class="text-muted">Import Type</label>
                                                    
                                                        <select class="form-control">
                                                            <option>Choose...</option>
                                                        </select>
                                                    </div>
                                                  
                                                </div>
                                                <div class="form-row">
                                                   
                                                    <div class="form-group col-md-3">
                                                    <label class="text-muted">Upload file</label>
                                                
                                                     <div class="custom-file">
                                                   
                                                    <input type="file" class="custom-file-input" id="inputGroupFile01">
                                                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>

                                                </div>
                                                   
                                                </div>
                                                <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                   
                                                </div>
                                               
                                            </div>
                                                </div>
                                              
                                 
        
                                                <button type="submit" class="btn btn-primary ">Import</button>
                                                <button type="submit" class="btn btn-secondary ">Cancel</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>                                    </div>
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
        <script src="./libs/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="./libs/popper.js/dist/umd/popper.min.js"></script>
        <script src="./libs/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- ajax page -->
        <script src="./libs/pjax/pjax.min.js"></script>
        <script src="./assets/js/ajax.js"></script>
        <!-- lazyload plugin -->
        <script src="./assets/js/lazyload.config.js"></script>
        <script src="./assets/js/lazyload.js"></script>
        <script src="./assets/js/plugin.js"></script>
        <!-- scrollreveal -->
        <script src="./libs/scrollreveal/dist/scrollreveal.min.js"></script>
        <!-- feathericon -->
        <script src="./libs/feather-icons/dist/feather.min.js"></script>
        <script src="./assets/js/plugins/feathericon.js"></script>
        <!-- theme -->
        <script src="./assets/js/theme.js"></script>
        <script src="./assets/js/utils.js"></script>
        <!-- endbuild -->
    </body>
</html>