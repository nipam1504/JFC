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
                            <span>Add Member</span>
                        </li>
                    </ul>
                <!-- END PAGE BREADCRUMBS -->
                <!-- BEGIN PAGE CONTENT INNER -->

                <div class="page-content-inner">
                    <div class="row">
                        <div class="portlet light">
                            <div class="portlet-body form">
                                <!-- BEGIN FORM-->
                                
                                <form action="addMember_Submit.php" id="form_sample_3"
                                      method="post" class="form-horizontal" enctype="multipart/form-data">

                                    <?php
                                    include_once('SucFailMsg.php');
                                    ?>
                                    <!-- Text input-->

                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Name</label>
                                        <div class="col-md-4 inputGroupContainer">
                                            <div class="input-group">

                                                <input  name="member_name" placeholder="Member Name" class="form-control"  type="text">
                                            </div>
                                        </div>
                                    </div>
 <!-- Text input-->

                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Member Role</label>
                                        <div class="col-md-4 selectContainer">
                                            <div class="input-group">
                                                <select name="member_role" id="member_role" onchange="changetextbox()" class="form-control selectpicker" >
                                                    <option value="member">Member</option>
                                                    <option value="admin">Admin</option>
                                                    <option value="measureby">Measurement By</option>
                                                    <option value="madeby">Made By</option>
                                                    <option value="dataentry">Data Entry Operator</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Password</label>
                                        <div class="col-md-4 inputGroupContainer">
                                            <div class="input-group">

                                                <input  name="member_password" id="memberpassword" placeholder="Member Password" class="form-control"  type="text">
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
                member_name: {
                    required:true
                },
                member_role: "required"
            },
            messages: {
                member_name: {
                    required:"Please enter camp name."
                },
                member_role: "Please enter start date."
            },
            submitHandler: function () {
                $('#form_sample_3').submit();
            }
        })
    });

    function changetextbox()
    {

        if (document.getElementById("member_role").value == 'measureby' ) {
            document.getElementById("memberpassword").disabled = true;

        }
        else{
            document.getElementById("memberpassword").disabled = false;
        }

    }
</script>