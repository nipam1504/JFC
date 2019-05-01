<?php
require 'db-config.php';

$sqlmeasureby = "SELECT `user_name` FROM `login_users`";
$resultm = $dbconnect->query($sqlmeasureby);
$measurebyArray = array();
while($row = $resultm->fetch_assoc())
{
    array_push($measurebyArray, $row);
}
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
                            <span>Repair Case</span>
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
                                ?>
                                <form action="repairCase_Submit.php" id="form_sample_3"
                                      method="post" class="form-horizontal" enctype="multipart/form-data">
                                    <!-- radio checks -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">BMVSS Case</label>
                                        <div class="col-md-4">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="hosting" value="yes" onChange="getTextBox(1)" /> Yes
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="hosting" value="no" onChange="getTextBox(0)" /> No
                                                </label>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group" id="casekey" style="display: none">
                                        <label class="col-md-4 control-label" >BMVSS Case Key</label>
                                        <div class="col-md-4 inputGroupContainer">
                                            <div class="input-group">
                                                <input name="case_key" placeholder="Case Key" id="case_key" class="form-control"  type="text">
                                            </div>
                                        </div>
										<div class="col-md-4 inputGroupContainer">
                                            <div class="input-group">
                                                <input name="search_case" value="Search Case" class="form-control"  type="Button" onClick="searchCase();">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group" id="casereason" style="display: none">
                                        <label class="col-md-4 control-label" >BMVSS Case Data</label>
                                        <div class="col-md-4 inputGroupContainer">
                                            <div class="input-group">
                                                <textarea name="case_data" placeholder="" id="case_data" class="form-control"  type="text" maxlength="100">
                                                </textarea>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label">First Name</label>
                                        <div class="col-md-4 inputGroupContainer">
                                            <input  name="first_name" id="first_name" placeholder="First Name" class="form-control" type="text" maxlength="20">
                                        </div>
                                    </div>

                                    <!-- Text input-->

                                    <div class="form-group">
                                        <label class="col-md-4 control-label" >Last Name</label>
                                        <div class="col-md-4 inputGroupContainer">

                                                <input name="last_name" id="last_name" placeholder="Last Name" class="form-control" type="text" maxlength="20">

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Gender</label>
                                        <div class="col-md-4 selectContainer">
                                            <div class="input-group">
                                                <select name="gender" id="gender" class="form-control selectpicker" >
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

                                                <input name="dob" id="dob" placeholder="Date of Birth" class="form-control"  type="date">

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Country</label>
                                        <div class="col-md-4 selectContainer">
                                            <div class="input-group">
                                                <select name="country"  id="country" onChange="changetextbox();" class="form-control selectpicker" >
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

                                                <input name="address1" id="address1" placeholder="Address1" class="form-control" type="text" maxlength="30">

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Address 2</label>
                                        <div class="col-md-4 inputGroupContainer">

                                                <input name="address2" id="address2" placeholder="Address2" class="form-control" type="text" maxlength="30">

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Address 3</label>
                                        <div class="col-md-4 inputGroupContainer">

                                                <input name="address3" id="address3" placeholder="Address3" class="form-control" type="text" maxlength="30">

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Taluka</label>
                                        <div class="col-md-4 inputGroupContainer">

                                                <input name="taluka" id="taluka" placeholder="Taluka" class="form-control" type="text" maxlength="20">

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Village</label>
                                        <div class="col-md-4 inputGroupContainer">

                                                <input name="village" id="village" placeholder="Village" class="form-control" type="text" maxlength="20">

                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-md-4 control-label">City</label>
                                        <div class="col-md-4 inputGroupContainer">

                                                <input name="city" id="city" placeholder="city" class="form-control"  type="text" maxlength="20">

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label">State</label>
                                        <div class="col-md-4 selectContainer">
                                            <div class="input-group">

                                                <select name="state" id="state" class="form-control selectpicker" onchange="getCity(this.value)">
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
                                                    <select name="district" id="distri" class="form-control selectpicker" onchange="getCity(this.value)">
                                                        <option value=" " >Please select your District</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Zip Code</label>
                                        <div class="col-md-4 inputGroupContainer">


                                                <input name="zip" id="zip" placeholder="Zip Code" class="form-control"  type="text" maxlength="6" pattern="[0-9]">

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Phone #1</label>
                                        <div class="col-md-4 inputGroupContainer">


                                                <input name="phone1" id="phone1" placeholder="1234567890" class="form-control" type="text" maxlength="10" pattern="[0-9]">

                                        </div>
                                    </div>


                                    <!-- Text input-->

                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Phone #2</label>
                                        <div class="col-md-4 inputGroupContainer">
                                                <input name="phone2" id="phone2" placeholder="1234567890" class="form-control" type="text" maxlength="10" pattern="[0-9]">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Caste</label>
                                        <div class="col-md-4 selectContainer">
                                            <div class="input-group">
                                                <select name="caste" id="caste" class="form-control selectpicker" >
                                                    <option>General</option>
                                                    <option>OBC</option>
                                                    <option>SC</option>
                                                    <option>ST</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- radio checks -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">GSI</label>

                                            <div class="col-md-4 inputGroupContainer">
                                                    <input name="GSI" id="GSI" class="form-control" type="text" maxlength="7"/>
                                        </div>
                                    </div>

                                    <!-- Text area -->
                                    <!-- radio checks -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">BPL Card</label>

                                            <div class="col-md-4 inputGroupContainer">
                                                    <input name="BPL" id="BPL" class="form-control" type="text" maxlength="10" pattern="[0-9]"/>
                                            </div>

                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Aid Recommended</label>
                                        <div class="col-md-4 selectContainer">
                                            <div class="input-group">
                                                <select name="aidRecommand" id="Aid"  class="form-control selectpicker">
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
                                        <label class="col-md-4 control-label">Side</label>
                                        <div class="col-md-4">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="side" id="side" value="left" /> Left
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="side" id="side" value="right" /> Right
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Cause of Disability</label>
                                        <div class="col-md-4 inputGroupContainer">
                                            <div class="input-group">
                                                <select name="cause" id="cause" class="form-control " >
                                                    <option>Amputation</option>
                                                    <option>Non-amputation</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Cause of Repair</label>
                                        <div class="col-md-4 inputGroupContainer">
                                            <div class="input-group">
                                                <select name="repairCause" id="repairCause" class="form-control " >
                                                    <option>Wear & tear from use</option>
                                                    <option>Screw / Rivet loose</option>
                                                    <option>AFO Button loose / broken</option>
                                                    <option>Stump shrinkage</option>
                                                    <option>Making defect</option>
                                                    <option>Other</option>

                                                </select>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Repair by</label>
                                        <div class="col-md-4 inputGroupContainer">
                                            <div class="input-group">
                                                <select name="repairBy" class="form-control " >
                                                    <?php
                                                    foreach($measurebyArray as $mba){
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
                                        <label class="col-md-4 control-label" >Repair date</label>
                                        <div class="col-md-4 inputGroupContainer">
                                            <div class="input-group">
                                                <input name="repairDate" value="<?php echo date('Y-m-d'); ?>" class="form-control"  type="date">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label" >Repair work done</label>
                                        <div class="col-md-4 inputGroupContainer">
                                            <div class="input-group">
                                                <textarea name="repairWorkInfo" placeholder=" " class="form-control">
                                                </textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Documents Given</label>
                                        <div class="col-md-4">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="proofyn" value="yes" onChange="getDocBox(1)" /> Yes
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="proofyn" value="no" onChange="getDocBox(0)" /> No
                                                </label>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group" id="doclist" style="display: none">
                                        <label class="col-md-4 control-label" >Documents</label>
                                        <div class="col-md-4 inputGroupContainer">
                                            <div class="checkbox">
                                                <label><input type="checkbox" value="">Identity Proof</label>
                                            </div>
                                            <div class="checkbox">
                                                <label><input type="checkbox" value="">Disability Certificate</label>
                                            </div>
                                            <div class="checkbox">
                                                <label><input type="checkbox" value="">Pre Photo</label>
                                            </div>
                                            <div class="checkbox">
                                                <label><input type="checkbox" value="">Post Photo</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" >Repair Master number</label>
                                        <div class="col-md-4 inputGroupContainer">
                                            <div class="input-group">
                                                <input name="repairMasterNumber" placeholder=" " class="form-control"  type="text" maxlength="20"/>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label" >Repair master date</label>
                                        <div class="col-md-4 inputGroupContainer">
                                            <div class="input-group">
                                                <input name="repairMasterDate" placeholder="Today's date" class="form-control"  type="date">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Text input-->
                                    <input type="hidden" name="case_num" id="case_num"/>
                                    <input type="hidden" name="userid" id="userid"/>
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
            document.getElementById("address2").setAttribute('disabled', true);
            document.getElementById("address3").setAttribute('disabled', true);
            document.getElementById("taluka").setAttribute('disabled', true);
            document.getElementById("village").setAttribute('disabled', true);
            document.getElementById("zipcode").setAttribute('disabled', true);
            document.getElementById("city").setAttribute('disabled', true);
            document.getElementById("state").disabled=true;
            document.getElementById("distri").disabled=true;
        } else {
            document.getElementById("address1").disable='false';
            document.getElementById("address2").disable='false';
            document.getElementById("address3").disable='false';
            document.getElementById("taluka").disable='false';
            document.getElementById("village").disable='false';
            document.getElementById("zipcode").disable='false';
            document.getElementById("city").disable='false';
            document.getElementById("state").disabled=false;
            document.getElementById("distri").disabled=false;
        }
    }

    $(document).ready(function () {
        $('#form_sample_3').validate({
            errorClass: "text-danger",
            errorElement: "span",
            rules: {
                first_name: {
                    required:true
                },
                last_name: "required",
                hosting: "required",
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
                Aid: "required",
                cause: "required",
                subCause: "required",
                repairCause: "required",
                repairBy: "required",
                repairDate: "required",
                repairDateDone: "required",
                repairMasterDate: "required",
                madeBy: "required",
                masterNumber: "required",
                repairMasterNumber: "required",
                masterDate: "required",
                prNumber: "required"
            },
            messages: {
                first_name: {
                    required:"Please enter first name."
                },
                last_name: "Please enter last name.",
                hosting: "Please enter hosting.",
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
                Aid: "Please enter Aid.",
                cause: "Please enter cause.",
                subCause: "Please enter sub cause.",
                repairCause: "Please enter measurement.",
                repairBy: "Please enter measurement.",
                repairDate: "Please enter repair date.",
                repairDateDone: "Please enter repair done date.",
                repairMasterDate: "Please enter repair master date.",
                madeBy: "Please enter made by.",
                masterNumber: "Please enter master number.",
                repairMasterNumber: "Please enter repair master number.",
                masterDate: "Please enter master date.",
                prNumber: "Please enter PR Number."
            },
            submitHandler: function () {
                $('#form_sample_3').submit();
            }
        })
    });
    function getTextBox(val) {

        if(val == 1){
            $('#casekey').show();
            $('#casereason').hide();
        }else{
            $('#casekey').hide();
            $('#casereason').show();
        }

    }
    function getDocBox(val) {

        if(val == 1){
            $('#doclist').show();
        }else{
            $('#doclist').hide();
        }

    }
	function searchCase(val) {
        document.getElementById("first_name").setAttribute('disabled', true);
        document.getElementById("last_name").setAttribute('disabled', true);
        document.getElementById("gender").setAttribute('disabled', true);
        document.getElementById("dob").setAttribute('disabled', true);
        document.getElementById("country").setAttribute('disabled', true);
        document.getElementById("address1").setAttribute('disabled', true);
        document.getElementById("address2").setAttribute('disabled', true);
        document.getElementById("address3").setAttribute('disabled', true);
        document.getElementById("taluka").setAttribute('disabled', true);
        document.getElementById("village").setAttribute('disabled', true);
        document.getElementById("city").setAttribute('disabled', true);
        document.getElementById("district").setAttribute('hidden', true);
        document.getElementById("state").setAttribute('disabled', true);
        document.getElementById("zip").setAttribute('disabled', true);
        document.getElementById("phone1").setAttribute('disabled', true);
        document.getElementById("phone2").setAttribute('disabled', true);
        document.getElementById("Aid").setAttribute('disabled', true);
        document.getElementById("cause").setAttribute('disabled', true);
        document.getElementById("side").setAttribute('disabled', true);
        document.getElementById("GSI").setAttribute('disabled', true);
        document.getElementById("BPL").setAttribute('disabled', true);
        document.getElementById("caste").setAttribute('disabled', true);
        let searchText = $('#case_key').val();
		$.ajax({
        url:"searchCaseAjax.php",
        type:"POST",
        data:{
          searchText: searchText,
        },
        success:function(response) {
            var obj = JSON.parse(response);
            console.log(obj);
         $('#Aid').val(obj.aidrecom);
         $('#cause').val(obj.usercod);
         $('#first_name').val(obj.firstname);
            $('#last_name').val(obj.lastname);
            $('#gender').val(obj.gender);
            $('#dob').val(obj.userdob);
            $('#country').val(obj.country);
            $('#address1').val(obj.address1);
            $('#address2').val(obj.address2);
            $('#address3').val(obj.address3);
            $('#taluka').val(obj.taluka);
            $('#village').val(obj.village);
            $('#city').val(obj.city);
            $('#district').val(obj.district);
            $('#state').val(obj.state);
            $('#zip').val(obj.zip);
            $('#phone1').val(obj.userphone1);
            $('#phone2').val(obj.userphone2);
            $('#GSI').val(obj.gsi);
            $('#caste').val(obj.caste);
            $('#BPL').val(obj.bpl);
            $('#userid').val(obj.userid);
            $('#case_num').val(obj.casekey);
       },
       error:function(){
        alert("error");
       }

    });

    }
</script>