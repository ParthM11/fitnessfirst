<?php
include_once 'db_conn.php';

if (!isset($_POST['subProgCard'])) {
    $locationID  = "";
    $stdDetailID  = "";
    $sHeight = "";
    $sWeight = "";
    $sBMI = "";
    $sArms = "";
    $sStomach = "";
    $sWaist = "";
    $sThighs = "";
    $sAerobic = "";
    $sAgilityT = "";
    $sAgilityQ = "";
    $sBalance = "";
    $sStandR = "";
    $sStandL = "";
    $sBosuStandR = "";
    $sBosuStandL = "";
    $sJumpR     = "";
    $sJumpL = "";
    $sSitReach = "";
    $sSplit = "";
    $sMinSquat = "";
    $sMinPushup = "";
    $sMinSitup = "";
    $sStandBall = "";
    $sPlank = "";
    $sMinPunch = "";
    $sVerJump = "";
    $sShutRun = "";
    $sBasKick = "";
    $sAdvKick = "";
    $sPunches = "";
    $sBlock = "";
    $sSelfDef = "";
    $sBreaking = "";
    $sTeckFight = "";
    $sPoomsae = "";
    $sFearFight = "";
    $sDicipline = "";
    $sCommunication = "";
    $sConfidence = "";
    $sEnergyLvl = "";
    $sOverImp = "";
}
if (isset($_GET['id'])) {

    $sqlScore = "SELECT * FROM `studentdetails` as s WHERE s.stdDetailID = $id";
    $resScore  = mysqli_query($conn, $sqlScore);
    $rowScore = mysqli_fetch_assoc($resScore);
    $locationID = $rowScore['locationID'];
    $sHeight = $rowScore['sHeight'];
    $sWeight = $rowScore['sWeight'];
    $sBMI = $rowScore['sBMI'];
    $sArms = $rowScore['sArms'];
    $sStomach = $rowScore['sStomach'];
    $sWaist = $rowScore['sWaist'];
    $sThighs = $rowScore['sThighs'];
    $sAerobic = $rowScore['sAerobic'];
    $sAgilityT = $rowScore['sAgilityT'];
    $sAgilityQ = $rowScore['sAgilityQ'];
    $sBalance = $rowScore['sBalance'];
    $sStandR = $rowScore['sStandR'];
    $sStandL = $rowScore['sStandL'];
    $sBosuStandR = $rowScore['sBosuStandR'];
    $sBosuStandL = $rowScore['sBosuStandL'];
    $sJumpR = $rowScore['sJumpR'];
    $sJumpL = $rowScore['sJumpL'];
    $sSitReach = $rowScore['sSitReach'];
    $sSplit = $rowScore['sSplit'];
    $sMinSquat = $rowScore['sMinSquat'];
    $sMinPushup = $rowScore['sMinPushup'];
    $sMinSitup = $rowScore['sMinSitup'];
    $sStandBall = $rowScore['sStandBall'];
    $sPlank = $rowScore['sPlank'];
    $sMinPunch = $rowScore['sMinPunch'];
    $sVerJump = $rowScore['sVerJump'];
    $sShutRun = $rowScore['sShutRun'];
    $sBasKick = $rowScore['sBasKick'];
    $sAdvKick = $rowScore['sAdvKick'];
    $sPunches = $rowScore['sPunches'];
    $sBlock = $rowScore['sBlock'];
    $sSelfDef = $rowScore['sSelfDef'];
    $sBreaking = $rowScore['sBreaking'];
    $sTeckFight = $rowScore['sTeckFight'];
    $sPoomsae = $rowScore['sPoomsae'];
    $sFearFight = $rowScore['sFearFight'];
    $sDicipline = $rowScore['sDicipline'];
    $sCommunication = $rowScore['sCommunication'];
    $sConfidence = $rowScore['sConfidence'];
    $sEnergyLvl = $rowScore['sEnergyLvl'];
    $sOverImp = $rowScore['sOverImp'];
}

if (isset($_POST['subProgCard'])) {

    $locationID = getSafeValue($conn, $_POST['locationID']);
    $stdDetailID = getSafeValue($conn, $_POST['student']);
    $sHeight = getSafeValue($conn, $_POST['sHeight']);
    $sWeight = getSafeValue($conn, $_POST['sWeight']);
    $sBMI = getSafeValue($conn, $_POST['sBMI']);
    $sArms = getSafeValue($conn, $_POST['sArms']);
    $sStomach = getSafeValue($conn, $_POST['sStomach']);
    $sWaist = getSafeValue($conn, $_POST['sWaist']);
    $sThighs = getSafeValue($conn, $_POST['sThighs']);
    $sAerobic = getSafeValue($conn, $_POST['sAerobic']);
    $sAgilityT = getSafeValue($conn, $_POST['sAgilityT']);
    $sAgilityQ = getSafeValue($conn, $_POST['sAgilityQ']);
    $sBalance = getSafeValue($conn, $_POST['sBalance']);
    $sStandR = getSafeValue($conn, $_POST['sStandR']);
    $sStandL = getSafeValue($conn, $_POST['sStandL']);
    $sBosuStandR = getSafeValue($conn, $_POST['sBosuStandR']);
    $sBosuStandL = getSafeValue($conn, $_POST['sBosuStandL']);
    $sJumpR = getSafeValue($conn, $_POST['sJumpR']);
    $sJumpL = getSafeValue($conn, $_POST['sJumpL']);
    $sSitReach = getSafeValue($conn, $_POST['sSitReach']);
    $sSplit = getSafeValue($conn, $_POST['sSplit']);
    $sMinSquat = getSafeValue($conn, $_POST['sMinSquat']);
    $sMinPushup = getSafeValue($conn, $_POST['sMinPushup']);
    $sMinSitup = getSafeValue($conn, $_POST['sMinSitup']);
    $sStandBall = getSafeValue($conn, $_POST['sStandBall']);
    $sPlank = getSafeValue($conn, $_POST['sPlank']);
    $sMinPunch = getSafeValue($conn, $_POST['sMinPunch']);
    $sVerJump = getSafeValue($conn, $_POST['sVerJump']);
    $sShutRun = getSafeValue($conn, $_POST['sShutRun']);
    $sBasKick = getSafeValue($conn, $_POST['sBasKick']);
    $sAdvKick = getSafeValue($conn, $_POST['sAdvKick']);
    $sPunches = getSafeValue($conn, $_POST['sPunches']);
    $sBlock = getSafeValue($conn, $_POST['sBlock']);
    $sSelfDef = getSafeValue($conn, $_POST['sSelfDef']);
    $sBreaking = getSafeValue($conn, $_POST['sBreaking']);
    $sTeckFight = getSafeValue($conn, $_POST['sTeckFight']);
    $sPoomsae = getSafeValue($conn, $_POST['sPoomsae']);
    $sFearFight = getSafeValue($conn, $_POST['sFearFight']);
    $sDicipline = getSafeValue($conn, $_POST['sDicipline']);
    $sCommunication = getSafeValue($conn, $_POST['sCommunication']);
    $sConfidence = getSafeValue($conn, $_POST['sConfidence']);
    $sEnergyLvl = getSafeValue($conn, $_POST['sEnergyLvl']);
    $sOverImp = getSafeValue($conn, $_POST['sOverImp']);
    
        $sqlAdd = "INSERT INTO `scorecard` (`id`,`date`,`locationID`, `stdDetailID`, `sHeight`, `sWeight`, `sBMI`, `sArms`, `sStomach`, `sWaist`, `sThighs`, `sAerobic`, `sAgilityT`, `sAgilityQ`, `sBalance`, `sStandR`, `sStandL`, `sBosuStandR`, `sBosuStandL`, `sJumpR`, `sJumpL`, `sSitReach`, `sSplit`, `sMinSquat`, `sMinPushup`, `sMinSitup`, `sStandBall`, `sPlank`, `sMinPunch`, `sVerJump`, `sShutRun`, `sBasKick`, `sAdvKick`, `sPunches`, `sBlock`, `sSelfDef`, `sBreaking`, `sTeckFight`, `sPoomsae`, `sFearFight`, `sDicipline`, `sCommunication`, `sConfidence`, `sEnergyLvl`, `sOverImp`) 
        VALUES (NULL,CURDATE(), '$locationID', '$stdDetailID', '$sHeight', '$sWeight', '$sBMI', '$sArms', '$sStomach', '$sWaist', '$sThighs', '$sAerobic', '$sAgilityT', '$sAgilityQ', '$sBalance', '$sStandR', '$sStandL', '$sBosuStandR', '$sBosuStandL', '$sJumpR', '$sJumpL', '$sSitReach', '$sSplit', '$sMinSquat', '$sMinPushup', '$sMinSitup', '$sStandBall', '$sPlank', '$sMinPunch', '$sVerJump', '$sShutRun', '$sBasKick', '$sAdvKick', '$sPunches', '$sBlock', '$sSelfDef', '$sBreaking', '$sTeckFight', '$sPoomsae', '$sFearFight', '$sDicipline', '$sCommunication', '$sConfidence', '$sEnergyLvl', '$sOverImp')";;
        if (mysqli_query($conn, $sqlAdd)) {
            $lastID = encrypt(mysqli_insert_id($conn));
            header("Location: scorecard.php");
        } else {
            $msg = "creating failed";
        }

    if (isset($_GET['id'])) 
    {       
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<?php
include('inc/head.php')
?>
<title>Performance</title>

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

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Score Card</strong>
                                    </div>
                                    <div class="card-body">
                                        <form method="post" action="">
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label for="location" class="form-label">Location</label>
                                                    <select id="location" class="form-control" name="locationID">

                                                        <option value="" selected disabled hidden>Choose...</option>
                                                        <?php
                                                        $sqlLocation = "SELECT * from location";
                                                        $resLoc  = mysqli_query($conn, $sqlLocation);
                                                        while ($rowLoc = mysqli_fetch_assoc($resLoc)) {

                                                        ?>
                                                            <option value="<?= $rowLoc['locationID'] ?>" <?= $resLoc == $rowLoc['locationID'] ? "selected" : ''  ?>>
                                                                <?= $rowLoc['locationName'] ?>
                                                            </option>
                                                        <?php } ?>
                                                    </select>
                                                    </select>
                                                </div>
                                            </div>
                                            <h5>Student Details Details</h5>
                                            <div class="form-group row">


                                                <div class="col-md-`1">
                                                    <div class="mb-3">
                                                        <label for="firstName" class="form-label">Student Name</label>
                                                        <select id="student" class="form-control" name="student">

                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="firstName" class="form-label">Gender</label>
                                                        <div class="mb-3">
                                                            <label for="firstName" id="gender" class="form-label">gender</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="firstName" class="form-label">Age</label>
                                                        <div class="mb-3">
                                                            <label for="firstName" id="age" class="form-label">age</label>
                                                        </div>
                                                    </div>
                                                </div>



                                            </div>


                                            <h5>Body Composition</h5>
                                            <div class="row">

                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Height</label>
                                                        <input type="number" name="sHeight" class="form-control" id="sHeight">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Weight</label>
                                                        <input type="number" name="sWeight" class="form-control" id="sWeight">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">BMI N/o/OB</label>
                                                        <input type="number" name="sBMI" class="form-control" id="sBMI">
                                                    </div>
                                                </div>
                                                <h5>Skin Fold</h5>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Armsn</label>
                                                        <input type="number" name="sArms" class="form-control" id="sArms">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Stomach</label>
                                                        <input type="number" name="sStomach" class="form-control" id="sStomach">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Waist</label>
                                                        <input type="number" name="sWaist" class="form-control" id="sWaist">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Thighs</label>
                                                        <input type="number" name="sThighs" class="form-control" id="sThighs">
                                                    </div>
                                                </div>
                                                <h5>Ftiness</h5>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Aerobic (Beep Test)</label>
                                                        <input type="number" name="sAerobic" class="form-control" id="sAerobic">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="email" class="form-label">Agility (T-test)</label>
                                                        <input type="number" name="sAgilityT" class="form-control" id="sAgilityT">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="school" class="form-label">Agility (Quick Feet)</label>
                                                        <input type="number" name="sAgilityQ" class="form-control" id="sAgilityQ">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="school" class="form-label">Balance</label>
                                                        <input type="number" name="sBalance" class="form-control" id="sBalance">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="school" class="form-label">One Leg Standing R</label>
                                                        <input type="number" name="sStandR" class="form-control" id="sStandR">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="school" class="form-label">One Leg Stanging L</label>
                                                        <input type="number" name="sStandL" class="form-control" id="sStandL">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="school" class="form-label">One Leg Bosu Standing R</label>
                                                        <input type="number" name="sBosuStandR" class="form-control" id="sBosuStandR">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="school" class="form-label">One Leg Bosu Standing L</label>
                                                        <input type="number" name="sBosuStandL" class="form-control" id="sBosuStandL">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="school" class="form-label">One Leg Jump R</label>
                                                        <input type="number" name="sJumpR" class="form-control" id="sJumpR">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="school" class="form-label">One Leg Jump L</label>
                                                        <input type="number" name="sJumpL" class="form-control" id="sJumpL">
                                                    </div>
                                                </div>
                                                <h5>Ftiness</h5>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="school" class="form-label">Sit & Reach</label>
                                                        <input type="number" name="sSitReach" class="form-control" id="sSitReach">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="school" class="form-label">180 Split</label>
                                                        <input type="number" name="sSplit" class="form-control" id="sSplit">
                                                    </div>
                                                </div>
                                                <h5>Strength</h5>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="school" class="form-label">1 Min Squat</label>
                                                        <input type="number" name="sMinSquat" class="form-control" id="sMinSquat">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="school" class="form-label">1 Min Pushup</label>
                                                        <input type="number" name="sMinPushup" class="form-control" id="sMinPushup">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="school" class="form-label">1 Min Situp</label>
                                                        <input type="number" name="sMinSitup" class="form-control" id="sMinSitup">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="school" class="form-label">Standing Medicine Ball Throw</label>
                                                        <input type="number" name="sStandBall" class="form-control" id="sStandBall">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="school" class="form-label">Plank</label>
                                                        <input type="number" name="sPlank" class="form-control" id="sPlank">
                                                    </div>
                                                </div>
                                                <h5>Power</h5>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="school" class="form-label">1 Min Punch</label>
                                                        <input type="number" name="sMinPunch" class="form-control" id="sMinPunch">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="school" class="form-label">Vertical Jump</label>
                                                        <input type="number" name="sVerJump" class="form-control" id="sVerJump">
                                                    </div>
                                                </div>
                                                <h5>Endurance</h5>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="school" class="form-label">10 M * 6 Shuttle Run</label>
                                                        <input type="number" name="sShutRun" class="form-control" id="sShutRun">
                                                    </div>
                                                </div>
                                                <h5>Technical</h5>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="school" class="form-label">Basic Kicks</label>
                                                        <input type="number" name="sBasKick" class="form-control" id="sBasKick">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="school" class="form-label">Advacne Kicks</label>
                                                        <input type="number" name="sAdvKick" class="form-control" id="sAdvKick">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="school" class="form-label">Punches</label>
                                                        <input type="number" name="sPunches" class="form-control" id="sPunches">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="school" class="form-label">Blocks</label>
                                                        <input type="number" name="sBlock" class="form-control" id="sBlock">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="school" class="form-label">Self Defense</label>
                                                        <input type="number" name="sSelfDef" class="form-control" id="sSelfDef">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="school" class="form-label">Breaking </label>
                                                        <input type="number" name="sBreaking" class="form-control" id="sBreaking">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="school" class="form-label">Teckwondo Fight</label>
                                                        <input type="number" name="sTeckFight" class="form-control" id="sTeckFight">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="school" class="form-label">Poomsae</label>
                                                        <input type="number" name="sPoomsae" class="form-control" id="sPoomsae">
                                                    </div>
                                                </div>
                                                <h5>Psychological / Behavioruial</h5>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="school" class="form-label">Fear of Fighting</label>
                                                        <input type="number" name="sFearFight" class="form-control" id="sFearFight">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="school" class="form-label">Dicipline</label>
                                                        <input type="number" name="sDicipline" class="form-control" id="sDicipline">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="school" class="form-label">Communication</label>
                                                        <input type="number" name="sCommunication" class="form-control" id="sCommunication">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="school" class="form-label">Confidence</label>
                                                        <input type="number" name="sConfidence" class="form-control" id="sConfidence">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="school" class="form-label">Energy Level</label>
                                                        <input type="number" name="sEnergyLvl" class="form-control" id="sEnergyLvl">
                                                    </div>
                                                </div>
                                                <h5>Over All Improvement</h5>
                                                <div class="col-md-12">
                                                    <div class="mb-3">

                                                        <input type="number" name="sOverImp" class="form-control" id="sOverImp">
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <button type="submit" class="btn btn-success" name="subProgCard">Save Performance</button>

                                                    </div>
                                                </div>
                                            </div>



                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- /Bootstrap Validation -->

                            </section>
                        </div>
                        </section>
                    </div>
                </div>
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
</body>

<script type="text/javascript">
    $(document).ready(function () 
    {
        $("#location").change(function(){
            var locationID = $(this).val();
            $.ajax({
                url:"find_std.php",
                method:"POST",
                data:{locationID:locationID},
                success:function(data){

                    $("#student").html(data);
                }
            });
        });

        $("#student").change(function(){
                 var sid = $(this).val();
                var data_String = 'sid=' + sid;
                $.get('search.php', data_String, function(result) {
                    $.each(result, function(){      
                        document.getElementById('age').innerHTML = this.stdAge;
                        document.getElementById('gender').innerHTML = this.stdGender;
                    });
                });
        });
    });
</script>