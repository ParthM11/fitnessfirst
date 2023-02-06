<?php
session_start();
include_once 'db_conn.php';
if (isset($_SESSION['userID'])) {
    header("Location: index.php");
}
$msg = '';
if (isset($_GET['error']) && $_GET['error'] != '') {
    $msg = $_GET['error'];
}
if (isset($_POST['subLogin'])) {
    $userName = getSafeValue($conn, $_POST['userName']);
    $pass = getSafeValue($conn, $_POST['password']);
    $sql = "SELECT * from creds as c inner join roles as r on c.roleID = r.roleID where userName = '$userName' AND password = '$pass' ";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['role'] = $row['role'];
        $_SESSION['userID'] = $row['userID'];
        if ($row['role'] == 'admin')
            header("Location: index.php");
        else
            header("Location: index.php");
    } else {
        $msg = "invalid email/password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<?php
include('inc/head.php')
?>

<body data-sidebar="dark">

<center>

    <div class="col-md-12 bg-primary">
        <div class="p-3 p-md-5 d-flex flex-column h-100">
            <h4 class="mb-3 text-white">TruFit</h4>
            <div class="text-white">Fitness Application made <span style="font-weight: 600;">by YOGI IT SOLUTION LLP</span></div>
            <div class="d-flex flex align-items-center justify-content-center">
            </div>
           
        </div>
    </div>
    <div class="col-md-6">
        <div id="content-body">
            <div class="p-3 p-md-5">
                <h5>Welcome back</h5>
                <p>
                    <small class="text-muted">Login to manage your account</small>
                </p>
                <form class="auth-login-form mt-2" action="" method="POST">
                    <div class="mb-1">
                        <label for="login-name" class="form-label">User Name</label>
                        <input type="text" class="form-control" id="userName" name="userName" placeholder="admin" aria-describedby="login-name" tabindex="1" autofocus />
                    </div>

                    <div class="mb-1">
                        <div class="d-flex justify-content-between">
                            <label class="form-label" for="login-password">Password</label>
                            <a href="">
                                <small>Forgot Password?</small>
                            </a>
                        </div>
                        <div class="input-group input-group-merge form-password-toggle">
                            <input type="password" class="form-control form-control-merge" id="password" name="password" tabindex="2" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="login-password" />
                            <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                        </div>
                    </div>
                    <div class="mb-1">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="remember-me" tabindex="3" />
                            <label class="form-check-label" for="remember-me"> Remember Me </label>
                        </div>
                    </div>
                    <button name="subLogin" type="submit" class="btn btn-primary w-100" tabindex="4">Sign in</button>
                </form>
            </div>
        </div>
    </div>
    </div>
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

</center>
    <!-- endbuild -->
</body>

</html>