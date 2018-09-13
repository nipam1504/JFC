<!DOCTYPE HTML>
<html>
<head>
<title>BMVSS | Jaipur Foot Center | Artificial Limbs</title>
<!-- Custom Theme files -->
<link href="../assets/style/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 

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
    <script type="text/javascript" language="javascript" src="https://cdn.jsdelivr.net/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>

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
								$caseKey = substr($_SESSION['camp_name'],0,3).date('dmy').(rand(99999, 999999));
                                ?>
								<div class="alert alert-info" role="alert">Case Key for this case is: <?php echo $caseKey;?></div>

                                <form action="newCase2_Submit.php" id="form_sample_3"
                                      method="post" class="form-horizontal" enctype="multipart/form-data">
                                    <input type="hidden" name="newcaseId" value="caseid">
                                    <input type="hidden" name="caseKey" value=$caseKey>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Aid Recommended</label>
                                        <div class="col-md-4 selectContainer">
                                            <div class="input-group">
                                                <select name="aidRecommand" class="form-control selectpicker" >
                                                    <option value="" >Aid type</option>
                                                    <option>Prosthesis</option>
                                                    <option>Orthosis</option>
                                                    <option >Earning Support</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Lateral Type</label>
                                        <div class="col-md-4">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="lateral" value="uni" /> Unilateral
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="lateral" value="bi" /> Bilateral
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Side</label>
                                        <div class="col-md-4">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="side" value="left" /> Left
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="side" value="right" /> Right
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Cause of Disability</label>
                                        <div class="col-md-4 selectContainer">
                                            <div class="input-group">
                                                <select name="cause" class="form-control selectpicker" >
                                                    <option value=" " > </option>
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
                                                <select name="subCause" class="form-control selectpicker" >
                                                    <option value=" " > </option>
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
                                                <select name="measurement" class="form-control selectpicker" >
                                                    <option value=" " > Admin</option>
                                                    <option>Staff1</option>
                                                    <option>Staff2</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label" >Measurement date</label>
                                        <div class="col-md-4 inputGroupContainer">
                                            <div class="input-group">
                                                <input name="measureDate" placeholder="Today's date" class="form-control"  type="date">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label" >Issue date(Suggested)</label>
                                        <div class="col-md-4 inputGroupContainer">
                                            <div class="input-group">
                                                <input name="issueDate" placeholder="Today's date" class="form-control"  type="date">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Text input-->

                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Made By</label>
                                        <div class="col-md-4 selectContainer">
                                            <div class="input-group">

                                                <select name="madeBy" class="form-control selectpicker" >
                                                    <option value=" " > Admin</option>
                                                    <option>Staff1</option>
                                                    <option>Staff2</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" >Center Master Number</label>
                                        <div class="col-md-4 inputGroupContainer">
                                            <div class="input-group">

                                                <input name="masterNumber" placeholder="Center Master Number" class="form-control"  type="text">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label" >Master date</label>
                                        <div class="col-md-4 inputGroupContainer">
                                            <div class="input-group">

                                                <input name="masterDate" placeholder="Master date" class="form-control"  type="date">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label" >OR/PR Number</label>
                                        <div class="col-md-4 inputGroupContainer">
                                            <div class="input-group">

                                                <input name="prNumber" placeholder="B/Numeric / yyyy-yy" class="form-control"  type="text">
                                            </div>
                                        </div>
                                    </div>


                                    <!-- Success message -->
                                    <!-- Button -->
                                    <div class="form-group">
                                        <label class="col-md-5 control-label"></label>
                                        <div class="col-md-5">
                                            <button type="submit" class="btn green" >Submit <span class="glyphicon glyphicon-send"></span></button>
                                            <button class="btn default" type="button" onclick="window.history.back()">Cancel</button>
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

<script>
    $(document).ready(function () {
        $('#form_sample_3').validate({
            errorClass: "text-danger",
            errorElement: "span",
            rules: {
                aidRecommand: {
                    required:true
                },
                lateral: "required",
                side: "required",
                cause: "required",
                subCause: "required",
                measurement: "required",
                issueDate: "required",
                madeBy: "required",
                masterNumber: "required",
                masterDate: "required",
                prNumber: "required"
            },
            messages: {
                aidRecommand: {
                    required:"Please enter aid recommand."
                },
                lateral: "Please enter lateral.",
                side: "Please enter side.",
                cause: "Please enter cause.",
                subCause: "Please enter sub cause.",
                measurement: "Please enter measurement.",
                issueDate: "Please enter issue date.",
                madeBy: "Please enter made by.",
                masterNumber: "Please enter master number.",
                masterDate: "Please enter master date.",
                prNumber: "Please enter PR Number."
            },
            submitHandler: function () {
                $('#form_sample_3').submit();
            }
        })
    });
</script>