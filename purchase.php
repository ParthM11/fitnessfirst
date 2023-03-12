<?php 
    include_once 'db_conn.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<?php
include('inc/head.php')
?>
<title>Add Purchase</title>

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
                                                    <strong>Purchase Bill</strong>
                                                </div>
                                                <div class="card-body">
                                                   
                                                    <form>

                                                        <h6 class="form-group row">Suppliers Details</h6>
                                                        <div class="dropdown-divider"></div>
                                                        <div class="form-group row">
                                                            <br>
                                                            <label for="" class="col-sm-1 col-form-label">Supplier Name</label>
                                                            <div class="form-group col-md-2">

                                                                <select id="select2-ajax" class="form-control" data-placeholder="Search a repo">
                                                                </select>

                                                            </div>

                                                            <label for="" class="col-sm-2 col-form-label">Business Location</label>
                                                            <div class="col-md-2">
                                                                <select class="form-control">
                                                                    <option>Slelct Location</option>
                                                                </select>
                                                            </div>
                                                            <label for="" class="col-sm-1 col-form-label"> Purchase Date</label>
                                                            <div class="col-md-2">
                                                                <input type="date" class="form-control" id="" placeholder="">
                                                            </div>

                                                        </div>
                                                        <div class="dropdown-divider"></div>
                                                        <h6 class="form-group row">Product Details</h6>
                                                        <div class="dropdown-divider"></div>
                                                        <div class="form-group row">
                                                            <label for="" class=" col-form-label">Search Item</label>
                                                            <div class="col-md-2">
                                                                <input type="text" class="form-control no-border no-shadow no-bg typeahead" placeholder="Search Items..." data-plugin="typeahead" data-api="assets/api/menu.json">
                                                            </div>
                                                        <div class="dropdown-divider"></div>

                                                            <table id="table" class="table table-theme v-middle">
                                                                <thead>
                                                                    <tr>
                                                                        <th data-sortable="true" data-field="Product">Product</th>
                                                                        <th data-sortable="true" data-field="qty">Purchase Quantity</th>
                                                                        <th data-sortable="true" data-field="unitprice">Purchase Price(BD)</th>
                                                                        <th data-sortable="true" data-field="discount">Discount</th>
                                                                        <th data-sortable="true" data-field="unitprice">Purchase Price(AD)</th>
                                                                        <th data-sortable="true" data-field="subtotal">Purchase Subtotal</th>
                                                                        
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr class=" flex">
                                                                        <td class="flex">
                                                                            <div>
                                                                                Product Name
                                                                            </div>
                                                                        </td>


                                                                        <td class="flex">
                                                                            <div>
                                                                                <input type="number" class="form-control col-md-4" id="" placeholder="">
                                                                            </div>
                                                                        </td>
                                                                        <td class="flex">
                                                                            <div>
                                                                                <input type="number" class="form-control col-md-4" id="" placeholder="">
                                                                            </div>
                                                                        </td>
                                                                        <td class="flex">
                                                                            <div>
                                                                                <input type="number" class="form-control col-md-4" id="" placeholder="">
                                                                            </div>
                                                                        </td>
                                                                        <td class="flex">
                                                                            <div>
                                                                                Subtotal Amount
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <h6 class="form-group row">Payment Details</h6>
                                                        <div class="form-group row">
                                                            <br>
                                                            <label for="" class="col-sm-2 col-form-label">Amount Paying</label>
                                                            <div class="form-group col-md-2">
                                                                <input type="number" class="form-control" id="" placeholder="">
                                                            </div>
                                                            <label for="" class="col-sm-2 col-form-label">Payment Method</label>
                                                            <div class="col-md-2">
                                                                <select class="form-control">
                                                                    <option>Slelct Location</option>
                                                                </select>
                                                            </div>
                                                            <label for="" class="col-sm-1 col-form-label"> Paid On</label>
                                                            <div class="col-md-2">
                                                                <input type="date" class="form-control" id="" placeholder="">
                                                            </div>

                                                        </div>




                                                        <button type="submit" class="btn btn-primary mt-1">Add</button>
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