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
        <?php

        include_once ('../session_page/admin/header.php')
        ?>
        <!-- END PAGE HEAD-->
        <!-- BEGIN PAGE CONTENT BODY -->
            <div class="page-content">
                <div class="container">
                    <div class="alert alert-success alert-dismissable">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Success!</strong> Indicates a successful or positive action.
                    </div>
                    <div class="page-content-inner">
                    <div class="row">
                        <div class="portlet light">
                            <div class="portlet-body form">
                                <!-- BEGIN FORM-->
                                
                                <form action="suggestion_submit.php" id="form_sample_3"
                                      method="post" class="form-horizontal" enctype="multipart/form-data">

                                <div class="form-group">
                                        <label class="col-md-4 control-label">First Name</label>
                                        <div class="col-md-4 inputGroupContainer">
                                            <div class="input-group">
                                                <input  name="first_name" placeholder="First Name" class="form-control"  type="text" required>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Text input-->

                                    <div class="form-group">
                                        <label class="col-md-4 control-label" >Last Name</label>
                                        <div class="col-md-4 inputGroupContainer">
                                            <div class="input-group">
                                                <input name="last_name" placeholder="Last Name" class="form-control"  type="text">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Phone #1</label>
                                        <div class="col-md-4 inputGroupContainer">
                                            <div class="input-group">
                                                <input name="phone1" placeholder="1234567890" class="form-control" type="text">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Attended By</label>
                                        <div class="col-md-4 selectContainer">
                                            <div class="input-group">
                                                <select name="attendedBy" class="form-control selectpicker" >
                                                    <option>Admin</option>
                                                    <option>Person1</option>
                                                    <option>Person2</option>
                                                    <option >Person3</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Reason for no help</label>
                                        <div class="col-md-4 inputGroupContainer">
                                            <div class="input-group">
                                                <textarea class="form-control" name="reason" placeholder="Reason for no help"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Suggestion given to patient</label>
                                        <div class="col-md-4 inputGroupContainer">
                                            <div class="input-group">
                                                <textarea class="form-control" name="suggestion" placeholder="Suggestion given to patient"></textarea>
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
</body>
</html>
<script>
    $(document).ready(function () {
        $('#form_sample_3').validate({
            errorClass: "text-danger",
            errorElement: "span",
            rules: {
                suggestion: {
                    required:true
                },
                reason: "required",
                attendedBy: "required",
                phone1: "required",
                last_name: "required",
                first_name: "required"
            },
            messages: {
                suggestion: {
                    required:"Please enter suggestion."
                },
                reason: "Please enter reason.",
                attendedBy: "Please enter attendedBy.",
                phone1: "Please enter phone.",
                last_name: "Please enter last name.",
                first_name: "Please enter first name."
            },
            submitHandler: function () {
                $('#form_sample_3').submit();
            }
        })
    });
</script>