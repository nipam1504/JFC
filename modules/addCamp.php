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
                            <span>Add Camp</span>
                        </li>
                    </ul>
                <!-- END PAGE BREADCRUMBS -->
                <!-- BEGIN PAGE CONTENT INNER -->

                <div class="page-content-inner">
                    <div class="row">
                        <div class="portlet light">
                            <div class="portlet-body form">
                                <!-- BEGIN FORM-->
                                
                                <form action="addCamp_Submit.php" id="form_sample_3"
                                      method="post" class="form-horizontal" enctype="multipart/form-data">
									
									<?php
                                    include_once('SucFailMsg.php');
                                    ?>
                                    <!-- Text input-->

                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Camp Name</label>
                                        <div class="col-md-4 inputGroupContainer">
                                            <div class="input-group">
                                                <input  name="camp_name" placeholder="Camp Name" class="form-control"  type="text">
                                            </div>
                                        </div>
                                    </div>
 <!-- Text input-->
                                    <!-- Text input-->

                                    <div class="form-group">
                                        <label class="col-md-4 control-label" >Start Date</label>
                                        <div class="col-md-4 inputGroupContainer">
                                            <div class="input-group">
                                                <input name="startDate" placeholder="Date of Birth" class="form-control"  type="date">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-md-4 control-label" >End Date</label>
                                        <div class="col-md-4 inputGroupContainer">
                                            <div class="input-group">
                                                <input name="endDate" placeholder="Date of Birth" class="form-control"  type="date">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Sponsor Name</label>
                                        <div class="col-md-4 inputGroupContainer">
                                            <div class="input-group">
                                                <input  name="sponsors_name" placeholder="Sponsor Name" class="form-control"  type="text">
                                            </div>
                                        </div>
									
										<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Add New Sponsor</button>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Grant Type</label>
                                        <div class="col-md-4 selectContainer">
                                            <div class="input-group">
                                                <select name="grantType" class="form-control selectpicker" >
                                                    <option >NA</option>
                                                    <option value="India">ADIP Complete</option>
                                                    <option value="Other">ADIP Partial</option>
                                                    <option value="Other">CSR Complete</option>
                                                    <option value="Other">ADIP Partial</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Camp Type</label>
                                        <div class="col-md-4 selectContainer">
                                            <div class="input-group">
                                                <select name="campType" class="form-control selectpicker" >
                                                    <option>Assessment Camp</option>
                                                    <option value="India">Fitness Distribution Camp</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Camp Mode</label>
                                        <div class="col-md-4 selectContainer">
                                            <div class="input-group">
                                                <select name="campMode" class="form-control selectpicker" >
                                                    <option>Open Workshop</option>
                                                    <option value="India">Mobile Van</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- radio checks -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Camp Status</label>
                                        <div class="col-md-4">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="campStatus" value="yes" checked/> Open
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="campStatus" value="no" /> Close
                                                </label>
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
									<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Sponsor</h4>
      </div>
      <div class="modal-body">
          <input name="sponsor_name" id="sponsor_name" placeholder="Sponsor Name" class="form-control"  type="text">
<span id="sponser_name_error" class="text-danger"></span>
		  </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  <button type="button" class="btn btn-default" id='addSponser'>Submit</button>
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
                camp_name: {
                    required:true
                },
                startDate: "required",
                endDate: "required",
                sponsor_name: "required",
                grantType: "required",
                campType: "required",
                campMode: "required",
                campStatus: "required"
            },
            messages: {
                camp_name: {
                    required:"Please enter camp name."
                },
                startDate: "Please enter start date.",
                endDate: "Please enter end date.",
                sponsor_name: "Please enter sponsor name.",
                grantType: "Please enter grant type.",
                campType: "Please enter camp type.",
                campMode: "Please enter camp mode.",
                campStatus: "Please enter camp Status."
            },
            submitHandler: function () {
                $('#form_sample_3').submit();
            }
        })
    });
	
	$('#addSponser').click(()=>{
			let sponserName = $('#sponsor_name').val();
			if(sponserName == ''){
				$('#sponser_name_error').text("Please enter sponser name.");
			}
			else{
				$('#sponser_name_error').text("");
				$.ajax({
					url: "addSponser.php",
					type:"POST",
					data:{"sponser_name":sponserName},
					success: function(html){
					console.log(html)
					  }
					});
			}
	})
</script>