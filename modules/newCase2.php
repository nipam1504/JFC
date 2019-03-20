<?php
require 'db-config.php';

$sqlmeasureby = "SELECT `user_name` FROM `login_users` WHERE `user_level`='measureby'";
$resultm = $dbconnect->query($sqlmeasureby);
$measurebyArray = array();
while($row = $resultm->fetch_assoc())
{
    array_push($measurebyArray, $row);
}

$sqlmadeby = "SELECT `user_name` FROM `login_users` WHERE `user_level`='madeby'";
$resultm1 = $dbconnect->query($sqlmadeby);
$madebyArray = array();
while($row = $resultm1->fetch_assoc())
{
    array_push($madebyArray, $row);
}

?>
<!DOCTYPE HTML>
<html>
<head>
    <title>BMVSS | Jaipur Foot Center | Artificial Limbs</title>
    <!-- Custom Theme files -->
    <link href="../assets/style/style.css" rel="stylesheet" type="text/css" media="all"/>
    <!-- Custom Theme files -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <!-- JQUERY -->
    <script type="text/javascript" language="javascript" src="../assets/media/js/jquery.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap-theme.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- Bootstrap Dialog -->
    <script src="../assets/bootstrap/js/bootstrap-dialog.js"></script>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap-dialog.css">
    <link rel='stylesheet prefetch' href="../assets/css/custom.css">
    <script type="text/javascript" language="javascript"
            src="https://cdn.jsdelivr.net/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" language="javascript"
            src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>

    <script src="../assets/js/easyResponsiveTabs.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#horizontalTab').easyResponsiveTabs({
                type: 'default', //Types: default, vertical, accordion
                width: 'auto', //auto or any width like 600px
                fit: true   // 100% fit in a container
            });
        });

    </script>


    <!-- Bootstrap modal configuration -->
    <style type='text/css'>
        body.modal-open .modal {
            display: flex !important;
            height: 80%;
        }

        body.modal-open .modal .modal-dialog {
            margin: auto;
        }
    </style>


</head>
<body>
<div class="page-container">
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <!-- BEGIN PAGE HEAD-->
        <div class="page-head">
            <div class="container">
                <!-- BEGIN PAGE TITLE -->
                <!-- END PAGE TITLE -->
            </div>
        </div>
        <!-- END PAGE HEAD-->
        <!-- BEGIN PAGE CONTENT BODY -->
        <div class="page-content">
            <div class="container">
                <!-- BEGIN PAGE BREADCRUMBS -->
                <ul class="page-breadcrumb breadcrumb">
                    <li>
                        <a href="index.php">Home</a>
                        <i class="fa fa-circle"></i>
                    </li>
                    <li>
                        <span>New Case Registration - Part 2</span>
                    </li>
                </ul>
                <!-- END PAGE HEAD-->
                <!-- BEGIN PAGE CONTENT INNER -->

                <div class="page-content-inner">
                    <div class="row">
                        <div class="portlet light">
                            <div class="portlet-body form">
                                <!-- BEGIN FORM-->
                                <?php
                                include_once('SucFailMsg.php');
                                $cuserid = $_SESSION['cuserid'];
                                $caseKey = $_SESSION['case_key'];
                                ?>
                                <div class="alert alert-info" role="alert">Case Key for this case
                                    is: <?php echo $caseKey; ?></div>
                                <div class="alert alert-info" role="alert">Case UserID for this case
                                    is: <?php echo $cuserid; ?></div>
                                <form action="newCase2_Submit.php" id="form_sample_3"
                                      method="post" class="form-horizontal" enctype="multipart/form-data">
                                    <input type="hidden" name="newcaseId" value="caseid">
                                    <input type="hidden" name="caseKey" value=$caseKey>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Aid Recommended</label>
                                        <div class="col-md-4 selectContainer">
                                            <div class="input-group">
                                                <select name="aidRecommand" id="aidrecom" onchange="changetextbox()"
                                                        class="form-control selectpicker">
                                                    <option value="AK">AK-Prosthesis</option>
                                                    <option value="BK">BK-Prosthesis</option>
                                                    <option value="AFO">AFO-Orthosis</option>
                                                    <option value="KAFO">KAFO-Orthosis</option>
                                                    <option value="HKAFO">HKAFO-Orthosis</option>
                                                    <option value="AC">AC-Mobility Support</option>
                                                    <option value="WC">WC-Mobility Support</option>
                                                    <option value="TC">TC-Mobility Support</option>
                                                    <option value="Blind_Stick">Blind Stick-Mobility Support</option>
                                                    <option value="Sewing_Machine">Sewing Machine-Earning Support</option>
                                                    <option value="HA">HA-Hearing Aid</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Lateral Type</label>
                                        <div class="col-md-4">
                                            <div class="radio">
                                                <label>
                                                    <input  id="lateral" type="radio" name="lateral"
                                                           value="uni"/> Unilateral
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input  id="lateral" type="radio" name="lateral"
                                                           value="bi"/> Bilateral
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Side</label>
                                        <div class="col-md-4">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" id="side" name="side" value="left"/> Left
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" id="side" name="side" value="right"/> Right
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Cause of Disability</label>
                                        <div class="col-md-4 selectContainer">
                                            <div class="input-group">
                                                <select name="cause" id="cause" class="form-control selectpicker">
                                                    <option>Amputation</option>
                                                    <option>Non-amputation</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Sub-Cause of disability</label>
                                        <div class="col-md-4 selectContainer">
                                            <div class="input-group">
                                                <select name="subCause" id="subcause" class="form-control selectpicker">
                                                    <option>Diabetes</option>
                                                    <option>Leprosy</option>
                                                    <option>Traumatic / Accident</option>
                                                    <option>Congenital</option>
                                                    <option>Other Disease</option>
                                                    <option>Polio</option>
                                                    <option>Cerebral Palsy</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Measurement By</label>
                                        <div class="col-md-4 selectContainer">
                                            <div class="input-group">
                                                <select name="measurement" id="measureby"
                                                        class="form-control selectpicker">
                                                    <option value=" "> Admin</option>
                                                    <?php
                                                    foreach($measurebyArray as $mb){
                                                        ?>
                                                        <option value=<?php echo $mb['user_name']?>><?php echo $mb['user_name']?></option>
                                                        <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Measurement date</label>
                                        <div class="col-md-4 inputGroupContainer">
                                            <div class="input-group">
                                                <input name="measureDate" id="measuredate" placeholder="Today's date"
                                                       class="form-control" type="date" value="<?php echo date('Y-m-d'); ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Issue date(Suggested)</label>
                                        <div class="col-md-4 inputGroupContainer">
                                            <div class="input-group">
                                                <input name="issueDate" id="issuedate" placeholder="Today's date"
                                                       class="form-control" type="date" value="<?php echo date('Y-m-d'); ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Text input-->

                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Made By</label>
                                        <div class="col-md-4 selectContainer">
                                            <div class="input-group">

                                                <select name="madeBy" id="madeby" class="form-control selectpicker">
                                                    <option value=""> Admin</option>
                                                    <?php
                                                    foreach($madebyArray as $mba){
                                                        ?>
                                                        <option value=<?php echo $mba['user_name']?>><?php echo $mba['user_name']?></option>
                                                        <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Center Master Number</label>
                                        <div class="col-md-4 inputGroupContainer">
                                            <div class="input-group">

                                                <input name="masterNumber" placeholder="Center Master Number"
                                                       class="form-control" type="text" maxlength="15">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">ID Proof Number</label>
                                        <div class="col-md-4 inputGroupContainer">
                                            <div class="input-group">

                                                <input name="idproofnum" placeholder="ID Proof Number"
                                                       class="form-control" type="text" maxlength="15">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Master date</label>
                                        <div class="col-md-4 inputGroupContainer">
                                            <div class="input-group">

                                                <input name="masterDate" placeholder="Master date" class="form-control"
                                                       type="date">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label">OR/PR Number</label>
                                        <div class="col-md-4 inputGroupContainer">
                                            <div class="input-group">

                                                <input name="prNumber" id="prnum" placeholder="B/Numeric / yyyy-yy"
                                                       class="form-control" type="text" maxlength="10">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group" id="aprby" style="display: none">
                                        <label class="col-md-4 control-label">Approved By</label>
                                        <div class="col-md-4 inputGroupContainer">
                                            <div class="input-group">

                                                <input name="approveby" id="approveby" class="form-control" type="text" maxlength="20">
                                            </div>
                                        </div>
                                    </div>


                                    <!-- Success message -->
                                    <!-- Button -->
                                    <div class="form-group">
                                        <label class="col-md-5 control-label"></label>
                                        <div class="col-md-5">
                                            <button type="submit" class="btn green">Submit <span
                                                        class="glyphicon glyphicon-send"></span></button>
                                            <button class="btn default" type="button" onclick="window.history.back()">
                                                Cancel
                                            </button>
                                        </div>
                                    </div>

                                </form>
                                <!-- END FORM-->
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
    function getCity(id) {
        $.ajax({
            url: "getCityAjax.php",
            method: "POST",
            data: {"id": id},
            success: function (result) {
                $("#district").html(result);
            }
        });
    }

    function changetextbox() {
        if (document.getElementById("aidrecom").value === "Sewing_Machine") {
            document.getElementById("lateral").disabled 	= true;
            document.getElementById("side").disabled 		= true;
            document.getElementById("cause").disabled 		= true;
            document.getElementById("subcause").disabled 	= true;
            document.getElementById("measureby").disabled 	= true;
            document.getElementById("madeby").disabled 		= true;
            document.getElementById("measuredate").disabled = true;
            document.getElementById("issuedate").disabled 	= true;
            document.getElementById("prnum").disabled 		= true;
            $('#aprby').show();
        } else {
            document.getElementById("lateral").disabled 	 = false;
            document.getElementById("side").disabled 		 = false;
            document.getElementById("cause").disabled 		 = false;
            document.getElementById("subcause").disabled 	 =false;
            document.getElementById("measureby").disabled 	= false;
            document.getElementById("madeby").disabled 		= false;
            document.getElementById("measuredate").disabled = false;
            document.getElementById("issuedate").disabled 	= false;
            document.getElementById("prnum").disabled 		= false;
            $('#aprby').hide();
        }
    }
</script>


<script>
    $(document).ready(function () {
        $('#form_sample_3').validate({
            errorClass: "text-danger",
            errorElement: "span",
            rules: {
                aidRecommand: {
                    required: true
                },
                masterNumber: "required",
                masterDate: "required",

            },
            messages: {
                aidRecommand: {
                    required: "Please enter aid recommand."
                },
                masterNumber: "Please enter master number.",
                masterDate: "Please enter master date.",

            },
            submitHandler: function () {
                $('#form_sample_3').submit();
            }
        })
    });
</script>