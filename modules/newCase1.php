<?php
require 'db-config.php';

$sql = "Select * from state where status = 1";
$result = $dbconnect->query($sql);
$stateArray = array();
while($row = $result->fetch_assoc()) 
{
array_push($stateArray, $row);
}


?>
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
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/css/bootstrapValidator.min.css"/>
    <script type="text/javascript" language="javascript" src="https://cdn.jsdelivr.net/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>

    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"></script>
        <script src="../assets/js/easyResponsiveTabs.js" type="text/javascript"></script>
		    <script type="text/javascript">

                function checkOption() {
                    if(document.getElementById("country").value != "India") {
                        document.getElementById("state").disable = 'true';
                        alert("Hello");
                    }
                }
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
                            <span>New Case Registration - Part 1</span>
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
							
								
								$campid = $_SESSION['camp_id']; 
								$campQuery = "Select campName from campdetails where camp_id = $campid";
								$campData = $dbconnect->query($campQuery);
								$campName = "Base Camp";
								while($row1 = $campData->fetch_assoc()) {
									$campName = $row1['campName'];
								}
								$_SESSION['camp_name'] = $campName;
								
							

                                ?>
								
							
									<div class="text-center control-label text-info">
                                        <h3>Your selected camp is <?php echo $campName;?> <h3>
										
                                    </div>							
                                <form action="newCase1_Submit.php" id="form_sample_3"
                                      method="post" class="form-horizontal" enctype="multipart/form-data">


							
                                    <!-- Text input-->

                                    <div class="form-group">
                                        <label class="col-md-4 control-label">First Name</label>
                                        <div class="col-md-4 inputGroupContainer">
                                            <div class="input-group">
                                                <input  name="first_name" placeholder="First Name" class="form-control"  type="text">
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
                                        <label class="col-md-4 control-label">Gender</label>
                                        <div class="col-md-4 selectContainer">
                                            <div class="input-group">
                                                <select name="gender" class="form-control selectpicker" >
                                                    <option>Gender</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                    <option value="Third">Third</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-md-4 control-label" >Date of Birth</label>
                                        <div class="col-md-4 inputGroupContainer">
                                            <div class="input-group">
                                                <input name="dob" placeholder="Date of Birth" class="form-control"  type="date">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Country</label>
                                        <div class="col-md-4 selectContainer">
                                            <div class="input-group">
                                                <select name="country"  id="country" onChange="changetextbox();" class="form-control selectpicker" >
                                                    <option>Country</option>
                                                    <option value="India">India</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>


                                    <!-- Text input-->

                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Address 1</label>
                                        <div class="col-md-4 inputGroupContainer">
                                            <div class="input-group">
                                                <input name="address1" id="address1" placeholder="Address1" class="form-control" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Address 2</label>
                                        <div class="col-md-4 inputGroupContainer">
                                            <div class="input-group">
                                                <input name="address2" placeholder="Address2" class="form-control" type="text">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Address 3</label>
                                        <div class="col-md-4 inputGroupContainer">
                                            <div class="input-group">
                                                <input name="address3" placeholder="Address3" class="form-control" type="text">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Taluka</label>
                                        <div class="col-md-4 inputGroupContainer">
                                            <div class="input-group">
                                                <input name="taluka" placeholder="Taluka" class="form-control" type="text">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Village</label>
                                        <div class="col-md-4 inputGroupContainer">
                                            <div class="input-group">
                                                <input name="village" placeholder="Village" class="form-control" type="text">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-md-4 control-label">City</label>
                                        <div class="col-md-4 inputGroupContainer">
                                            <div class="input-group">
                                                <input name="city" placeholder="city" class="form-control"  type="text">
                                            </div>
                                        </div>
                                    </div>
									
									<!-- Select Basic -->

                                    <div class="form-group">
                                        <label class="col-md-4 control-label">State</label>
                                        <div class="col-md-4 selectContainer">
                                            <div class="input-group">
                                     
                                                <select name="state" class="form-control selectpicker" onchange="getCity(this.value)">
                                                    <option value=" " >Please select your state</option>
                                                    <?php
													foreach($stateArray as $state){
													?>
													<option value=<?php echo $state['id']?>><?php echo $state['stateName']?></option>
                                                   <?php
													}
												   ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

									<div class="form-group">
                                        <label class="col-md-4 control-label">District</label>
                                        <div class="col-md-4 inputGroupContainer">
                                            <div class="input-group">
                                                <div id ="district">
												<select name="district" class="form-control selectpicker" onchange="getCity(this.value)">
                                                    <option value=" " >Please select your District</option>
                                                </select>
												</div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Text input-->

                                    
                                    <!-- Text input-->

                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Zip Code</label>
                                        <div class="col-md-4 inputGroupContainer">
                                            <div class="input-group">
                                                <input name="zip" placeholder="Zip Code" class="form-control"  type="text">
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


                                    <!-- Text input-->

                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Phone #2</label>
                                        <div class="col-md-4 inputGroupContainer">
                                            <div class="input-group">
                                                <input name="phone2" placeholder="1234567890" class="form-control" type="text">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Caste</label>
                                        <div class="col-md-4 selectContainer">
                                            <div class="input-group">
                                                <select name="caste" class="form-control selectpicker" >
                                                    <option>Caste</option>
                                                    <option>General</option>
                                                    <option>OBC</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- radio checks -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">GSI reference avaialble?</label>
                                        <div class="col-md-4">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="GSI" value="yes" onclick="document.getElementById('gsinum').removeAttribute('disabled');" /> Yes
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="GSI" value="no" onclick="document.getElementById('gsinum').setAttribute('disabled', true);"/> No
                                                </label>
                                            </div>
                                        </div>
                                    </div>
									<div class="form-group">
                                        <label class="col-md-4 control-label">GSI Card number</label>
                                        <div class="col-md-4 inputGroupContainer">
                                            <div class="input-group">
                                                <input  name="gsi_num" id="gsinum" class="form-control"  type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Text area -->
                                    <!-- radio checks -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">BPL card availble?</label>
                                        <div class="col-md-4">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="BPL" value="yes"onclick="document.getElementById('bplnum').removeAttribute('disabled');" /> Yes
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="BPL" value="no" onclick="document.getElementById('bplnum').setAttribute('disabled', true);"/> No
                                                </label>
                                            </div>
                                        </div>
                                    </div>
									<div class="form-group">
                                        <label class="col-md-4 control-label">BPL Card number</label>
                                        <div class="col-md-4 inputGroupContainer">
                                            <div class="input-group">
                                                <input  name="bplnum" id="bplnum" class="form-control"  type="text">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- radio checks -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Aid to be given today?</label>
                                        <div class="col-md-4">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="Aid" value="yes" /> Yes
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="Aid" value="no" /> No
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

<script type="text/javascript">
function getCity(id){
	$.ajax({
		url: "getCityAjax.php",
		method:"POST",
		data:{"id":id},
		success: function(result){
            $("#district").html(result);
        }});	
}
function changetextbox()
{
    if (document.getElementById("country").value === "Other") {
        document.getElementById("address1").setAttribute('disabled', true);
    } else {
        document.getElementById("address1").disable='false';
    }
}
</script>
<script>
    $(document).ready(function () {
        $('#form_sample_3').validate({
            errorClass: "text-danger",
            errorElement: "span",
            rules: {
                first_name: {
                    required:true
                },
                last_name: "required",
                gender: "required",
                dob: "required",
                country: "required",
                address1: "required",
                address2: "required",
                address3: "required",
                taluka: "required",
                village: "required",
                city: "required",
                state: "required",
                district: "required",
                zip: "required",
                phone1: "required",
                phone2: "required",
                caste: "required",
                GSI: "required",
                BPL: "required",
                Aid: "required"
            },
            messages: {
                first_name: {
                    required:"Please enter first name."
                },
                last_name: "Please enter last name.",
                gender: "Please enter gender.",
                dob: "Please enter date of birth.",
                country: "Please enter country.",
                address1: "Please enter address.",
                address2: "Please enter address.",
                address3: "Please enter address.",
                taluka: "Please enter taluka.",
                village: "Please enter village.",
                city: "Please enter city.",
                state: "Please enter state.",
                district: "Please enter district.",
                zip: "Please enter zip.",
                phone1: "Please enter phone.",
                phone2: "Please enter phone.",
                caste: "Please enter caste.",
                GSI: "Please enter GSI.",
                BPL: "Please enter BPL.",
                Aid: "Please enter Aid."
            },
            submitHandler: function () {
                $('#form_sample_3').submit();
            }
        })
    });
</script>