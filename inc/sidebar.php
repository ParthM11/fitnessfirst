<?php 
    session_start();
    include_once 'db_conn.php';
    if(isset($_SESSION['roleID']))
    {
        $roleID = $_SESSION['roleID'];
        $roleArr = array();
        $i = 0;
        $sqlChkPer = "SELECT * from permissionmanager where roleID = $roleID";
        $resChkPer = mysqli_query($conn,$sqlChkPer);
        while($rowChkPer = mysqli_fetch_assoc($resChkPer))
        {
            $roleArr[$i] = $rowChkPer['perID'];
            $i = $i + 1;
        }
    }
    else
    {
        header("Location: login.php");
    }
 ?>
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-menu">Menu</li>

                <li>
                    <a href="index.php" class="waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span key="t-dashboards">Dashboards</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-grid-alt"></i>
                        <span key="t-dashboards">Main</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <?php 
                            if(in_array(12,$roleArr))
                            {
                     ?>
                        <li>
                            <a href="all-inquiry.php" class="">
                                <span class="nav-text">Inquiry</span>
                            </a>
                        </li>
                        <?php 
                            }
                         ?>
                        <?php 
                            if(in_array(13,$roleArr))
                            {
                        ?>
                        <li>
                            <a href="trial.php" class="">
                                <span class="nav-text">Trial Booking</span>
                            </a>
                        </li>
                        <?php } ?>
                        <?php 
                            if(in_array(14,$roleArr))
                            {
                        ?>
                        <li>
                            <a href="admission.php" class="">
                                <span class="nav-text">Admission</span>
                            </a>
                        </li>
                    <?php } ?>

                    </ul>
                </li>
                <?php 
                    if(in_array(14,$roleArr))
                    {
                ?>
                <li>
                    <a href="followup.php" class="waves-effect">
                        <i class="bx bx-phone-outgoing"></i>
                        <span key="t-dashboards">Followup</span>
                    </a>
                </li>
                <?php } ?>
                <?php 
                    if(in_array(10,$roleArr) || in_array(1,$roleArr))
                    {
                ?>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-plus-medical"></i>
                        <span key="t-dashboards">Attendance</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <?php } ?>
                        <?php 
                            if(in_array(10,$roleArr))
                            {
                        ?>
                        <li>
                            <a href="stdattendance.php">
                                <span class="nav-text">Student Attendance</span>
                            </a>
                        </li>
                        <?php } ?>
                        <?php 
                            if(in_array(1,$roleArr))
                            {
                        ?>
                        <li>
                            <a href="empattendance.php" class="">
                                <span class="nav-text">Employee Attendance</span>
                            </a>
                        </li>
                        <?php } ?>

                    </ul>
                </li>
                <?php 
                    if(in_array(16,$roleArr))
                    {
                ?>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-briefcase-alt"></i>
                        <span key="t-dashboards">Products</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="all-product.php" class="">
                                <span class="nav-text">List Product</span>
                            </a>
                        </li>
                        <li>
                            <a href="add-product.php" class="">
                                <span class="nav-text">Add Products</span>
                            </a>
                        </li>
                        <li>
                            <a href="prod-category.php" class="">
                                <span class="nav-text">Category</span>
                            </a>
                        </li>
                        <li>
                            <a href="all-hsn.php" class="">
                                <span class="nav-text">HSN Master</span>
                            </a>
                        </li>

                    </ul>
                </li>
                <?php } ?>

                <?php 
                    if(in_array(17,$roleArr))
                    {
                ?>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-dumbbell"></i>
                        <span key="t-dashboards">Members</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="all-members.php" class="">
                                <span class="nav-text">All Members</span>
                            </a>
                        </li>
                        <?php 
                            if(in_array(18,$roleArr))
                            {
                        ?>
                        <li>
                            <a href="membership-pacakage.php" class="">
                                <span class="nav-text">Membership Pacakage</span>
                            </a>
                        </li>
                    <?php } ?>
                        <!-- <li>
                            <a href="membership-current.php" class="">
                                <span class="nav-text">Current Membership</span>
                            </a>
                        </li> -->
                    </ul>
                </li>
            <?php } ?>
                <li>
                    <a href="scorecard.php" class="waves-effect">
                        <i class="bx bx-analyse"></i>
                        <span key="t-dashboards">Performance Card</span>
                    </a>
                </li>
                <?php 
                    if(in_array(4,$roleArr))
                    {
                ?>
                <li>
                    <a href="salarayregister.php" class="waves-effect">
                        <i class="bx bx-calendar-alt"></i>
                        <span key="t-dashboards">Salary</span>
                    </a>
                </li>
                <?php } ?>
                <?php 
                    if(in_array(19,$roleArr))
                    {
                ?>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-package"></i>
                        <span key="t-dashboards">Purchase</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">


                        <li>
                            <a href="purchase-all.php" class="">
                                <span class="nav-text">All Purchase</span>
                            </a>
                        </li>
                        <li>
                            <a href="purchase.php" class="waves-effect">
                                <span key="t-dashboards">Add Purchase</span>
                            </a>
                        </li>
                    </ul>
                </li>
            <?php } ?>
            <?php 
                if(in_array(20,$roleArr))
                {
            ?>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-cart-alt"></i>
                        <span key="t-dashboards">Sales</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">


                    <li>
                            <a href="sales-all.php" class="">
                                <span class="nav-text">All Sales</span>
                            </a>
                        </li>
                        <li>

                            <a href="sales.php" class="waves-effect">
                               
                                <span key="t-dashboards">Add Sales</span>
                            </a>
                        </li>
                    </ul>
                </li>
            <?php } ?>
            <?php 
                if(in_array(21,$roleArr))
                {
            ?>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-rupee"></i>
                        <span key="t-dashboards">Expenses</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="exp-list.php" class="">
                                <span class="nav-text">List Expenses</span>
                            </a>
                        </li>
                        <li>
                            <a href="exp-add.php" class="">
                                <span class="nav-text">Add Expenses</span>
                            </a>
                        </li>
                        <li>
                            <a href="exp-category.php" class="">
                                <span class="nav-text">Expense Category</span>
                            </a>
                        </li>
                    </ul>
                </li>
            <?php } ?>
            <?php 
                if(in_array(3,$roleArr))
                {
            ?>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-calendar-check"></i>
                        <span key="t-dashboards">Report</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="r_performamce.php" class="">
                                <span class="nav-text">Performance Report</span>
                            </a>
                        </li>
                        <li>
                            <a href="r_attendance.php" class="">
                                <span class="nav-text">Attendance Report</span>
                            </a>
                        </li>
                        <li>
                            <a href="r_sales.php" class="">
                                <span class="nav-text">Sales Report</span>
                            </a>
                        </li>
                        <li>
                            <a href="r_membership.php" class="">
                                <span class="nav-text">Membership Report</span>
                            </a>
                        </li>
                        <li>
                            <a href="r_spayment.php" class="">
                                <span class="nav-text">Sell Payment Report</span>
                            </a>
                        </li>
                        <li>
                            <a href="r_expenses.php" class="">
                                <span class="nav-text">Expenses Report</span>
                            </a>
                        </li>
                        <li>
                            <a href="r_salary.php" class="">
                                <span class="nav-text">Salary Report Report</span>
                            </a>
                        </li>
                    </ul>
                </li>
            <?php } ?>
            <?php 
                if(in_array(8,$roleArr))
                {
            ?>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-git-pull-request"></i>
                        <span key="t-dashboards">Utility</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="all-emp.php" class="">
                                <span class="nav-text">Staff</span>
                            </a>
                        </li>
                        <li>
                            <a href="u_user.php" class="">
                                <span class="nav-text">User</span>
                            </a>
                        </li>
                        <li>
                            <a href="role.php" class="">
                                <span class="nav-text">Roles</span>
                            </a>
                        </li>

                        <li>
                            <a href="branch.php" class="">
                                <span class="nav-text">Branch Master</span>
                            </a>
                        </li>
                        <li>
                            <a href="tax.php" class="">
                                <span class="nav-text">TAX Rates</span>
                            </a>
                        </li>
                      
                        <li>
                            <a href="feedback.php" class="">
                                <span class="nav-text">Feedback System</span>
                            </a>
                        </li>

                    </ul>
                </li>
            <?php } ?>
            <?php 
                if(in_array(9,$roleArr))
                {
            ?>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-server"></i>
                        <span key="t-dashboards">Modules</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="activity-type.php" class="">
                                <span class="nav-text">Activity</span>
                            </a>
                        </li>
                        <li>
                            <a href="followup-type.php" class="">
                                <span class="nav-text">Followup Types</span>
                            </a>
                        </li>
                        <li>
                            <a href="designation.php" class="">
                                <span class="nav-text">Designation</span>
                            </a>
                        </li>
                    </ul>
                </li>
            <?php } ?>
            </ul>
        </div>
    </div>
</div>